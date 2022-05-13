<?php
session_start();
if (isset ( $_SESSION ["visitcode"] )){

    echo "Already login, redirecting to personal center...";
    header("Refresh:2;url=personal_center.php");

}else{

$link=mysqli_connect("localhost","root","","groupin"); 
if (!$link)
{
    die("Connection failed" . mysqli_connect_error());
}

$name=($_POST['username']);
$password=($_POST['userpassword']);

$sql="select * from user where username='$name'&&userpassword='$password' ";
$result=mysqli_query($link,$sql);
if($result==false){
    echo "Login failed";
}else{
    $row=mysqli_fetch_array($result);
    if($row!=null){
        $_SESSION["username"]=$name;
	    $_SESSION["visitcode"]=$row["userID"];
        echo $name;
        echo " Login successfully";
        header("Refresh:2;url=personal_center_page.html");
    }else{
        echo "Login failed";
        header("Refresh:2;url=login_page.html");
    }
}

}


?>