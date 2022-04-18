<?php
header("Content-type:text/html;charset=utf-8");
$link=mysqli_connect("localhost","root","","groupin"); 
if (!$link)
{
    die("Connection failed" . mysqli_connect_error());
}
$name=($_POST['inputUsername']);
$password=($_POST['inputPassword']);
$sql1="select * from user where username='$name'";
$result=mysqli_query($link,$sql1);
$row=mysqli_fetch_assoc($result);
if($row!=null){
	echo 'Username already existed';
header("Refresh:2;url=register_page.html");}
				
	else{
	$sql2="insert into user(username,userpassword) values('$name','$password')";
	$result2=mysqli_query($link,$sql2);
	echo "Regestration successfully, please login";
	header("Refresh:2;url=login_page.html");
}

?>
