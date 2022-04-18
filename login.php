<?php

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
    $row=mysqli_fetch_assoc($result);
    if($row!=null){
        echo $name;
        echo " Login successfully";
    }else{
        echo "Login failed";
        header("Refresh:2;url=login_page.html");
    }
}

?>