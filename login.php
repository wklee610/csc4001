<?php
session_start();
if (isset ( $_SESSION ["visitcode"] )){
//having such session means the user is already logged in on this computer
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
if($result==false){//no user with matched username and password
    echo "Login failed";
}else{
    $row=mysqli_fetch_array($result);
    if($row!=null){
        $_SESSION["username"]=$name;
	    $_SESSION["visitcode"]=$row["userID"];//session of this logged in user starts, session name is username, session visitcode is user ID
        echo $name;
        echo " Login successfully";
        header("Refresh:2;url=personal_center_page.html");//redirecting to the personal center
    }else{
        echo "Login failed";
        header("Refresh:2;url=login_page.html");
    }
}

}


?>
