<?php
session_start();
header("Content-type:text/html;charset=utf-8");
if (isset ( $_SESSION ["visitcode"] )){

$link=mysqli_connect("localhost","root","","groupin"); 
if (!$link)
{
    die("Connection failed" . mysqli_connect_error());
}

$groupname=($_POST['inputGroupName']);
$classID=($_POST['inputClassID']);
$groupdescription=($_POST['inputGroupDescription']);
$reservedquota=($_POST['inputReservedQuota']);

$leaderID=$_SESSION ["visitcode"];

$ID=mt_rand(1,99999999999);
while(TRUE){
	$IDsql="select * from `group` where groupID='$ID'";
	$IDresult=mysqli_query($link,$IDsql);
	$IDrow=mysqli_fetch_assoc($IDresult);
	if($IDrow!=null){
		$ID=mt_rand(1,99999999999);
	}else{
		break;
	}
}
	
$sql2="insert into `group`(groupID,groupname,classID,leaderID,reserved_quota,groupdescription)
 values($ID,'$groupname','$classID','$leaderID','$reservedquota','$groupdescription')";
$sql3="insert into `tojoin`(groupID, userID) values('$ID','$leaderID')";
$result2=mysqli_multi_query($link,$sql2);
$result3=mysqli_query($link,$sql3);
echo "Group made successfully";
header("Refresh:2;url=personal_center_page.html");


}else{

echo "Please login first";
header("Refresh:2;url=login_page.html");

}



?>