<?php
header("Content-type:text/html;charset=utf-8");
$link=mysqli_connect("localhost","root","","groupin"); 
if (!$link)
{
    die("Connection failed" . mysqli_connect_error());
}

$name=($_POST['inputUsername']);
$password=($_POST['inputPassword']);
$schoolEmail=($_POST['inputSchoolEmail']);
$wechatNumber=($_POST['inputWechatNumber']);
$phoneNumber=($_POST['inputPhoneNumber']);
$otherEmail=($_POST['inputOtherEmail']);

$sql1="select * from user where username='$name'";
$result=mysqli_query($link,$sql1);
$row=mysqli_fetch_assoc($result);
if($row!=null){
	echo 'Username already existed';//search username, return error if username is already existed
header("Refresh:2;url=register_page.html");}
				
	else{
	$ID=mt_rand(1,999999999);//randomly assigned user ID
	while(TRUE){
		$IDsql="select * from user where userID='$ID'";
		$IDresult=mysqli_query($link,$IDsql);
		$IDrow=mysqli_fetch_assoc($IDresult);
		if($IDrow!=null){
			$ID=mt_rand(1,999999999);
		}else{
			break;
		}
	}
	//add new user info into the db
	$sql2="insert into user(userID,username,userpassword,wechat_num,phone_num,school_email,second_email) values($ID,'$name','$password','$wechatNumber','$phoneNumber','$schoolEmail','$otherEmail')";
	$result2=mysqli_query($link,$sql2);
	echo "Regestration successfully, please login";
	header("Refresh:2;url=login_page.html");
}

?>
