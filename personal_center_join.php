<?php

session_start();
if (isset ( $_SESSION ["visitcode"] )){

$link=mysqli_connect("localhost","root","","groupin"); 
if (!$link)
{
    die("Connection failed" . mysqli_connect_error());
}


$groupid=($_POST['inputGroupid']);
$sql2="select * from `group` where groupID='$groupid'";
$result2=mysqli_query($link,$sql2);
$row2=mysqli_fetch_assoc($result2);
$uid=$_SESSION["visitcode"];
$br="<br/>";
$space=' ';

if($row2==null){
    echo 'No group';
    header("Refresh:2;url=personal_center_page.html");
}else{
    $addsql="insert into `tojoin`(groupID,userID) values ('$groupid','$uid')";
    $result3=mysqli_query($link,$addsql);
    echo 'Successfully joined.';

    $sql4="select * from `tojoin` where groupID='$groupid'";//search joining info in the db where other users also join this group
    $result4=mysqli_query($link,$sql4);

    while($row=mysqli_fetch_array($result4)){//print info of users inside this group
        $uid2=$row["userID"];
        $sql5="select * from user where userID='$uid2'";
        $result5=mysqli_query($link,$sql5);
        while($row5=mysqli_fetch_array($result5)){
            echo $br;
            echo $row5["username"];
            echo $space;
            echo $row5["phone_num"];
            echo $space;
            echo $row5["school_email"];
            echo $space;
            echo $row5["second_email"];
            echo $br;
        }
    }
}

}else{
    echo "Please login first";
    header("Refresh:2;url=login_page.html");
}

?>
