<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groupin</title>
    <link href="bootstrap/css/bootstrap.min.css" rel= "stylesheet" type="text/css"> 
    <script src="jquery/jquery-3.6.0.min.js" type = "text/javascript" charset="utf-8"></script>
    <script src ="bootstrap/js/bootstrap.min.js" type = "text/javascript" charset="utf-8"></script>
 
</head>
<body class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Groupin</a>
          
            </div>

            <button type="button" class="btn btn-link col-md-10 col-md-push-4  navbar-btn" data-target="#user_page" onclick="window.open ('///UserCenter///.html')">
                User Center
            </button>
        
            <button type="button" class="btn btn-link col-md-push-3 navbar-btn" data-target="#login_page" onclick="window.open ('login_page.html')">
                Homepage
            </button>

        </div>
          
    </nav>

    <form action = "personal_center_join.php" class = "form-horizontal" role="form" method="post">

    <div class="form-group">
        <label for="inputgid" class="col-md-3 control-label">Group ID</label>
        <div class="col-md-9">
        <input type="gid" class="form-control" name="inputGroupid" placeholder="Input the group ID you want to join">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-6 col-md-5">
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> Join group</button>
        </div>
    </div>

    <table class="table table-hover">
        <caption>Groupin List</caption>

      </table>
    
<?php
session_start();
if (isset ( $_SESSION ["visitcode"] )){

$link=mysqli_connect("localhost","root","","groupin"); 
if (!$link)
{
    die("Connection failed" . mysqli_connect_error());
}

$br="<br/>";
$space='  ';
$keywords=($_POST['inputKeyword']);

$gidh="GroupID=";

$sql="select * from `group` where groupname like '%$keywords%' || groupdescription like '%$keywords%'";
$result=mysqli_query($link,$sql);


if($result==false){
    echo "Search error";
}else{
    while($row=mysqli_fetch_array($result)){

        $gid=$row["groupID"];
        echo $gidh;
        echo $gid;
        echo $space;
		echo $row["groupname"];
        echo $space;
		echo $row["classID"];
        echo $space;
        echo $row["reserved_quota"];
        echo $space;
		echo $row["groupdescription"];
        echo $br;
    }
}



}else{

echo "Please login first";
header("Refresh:2;url=login_page.html");

}

?>

<button type="button" class="btn btn-link col-md-offset-9 navbar-btn" data-target="#personal_center_page" onclick="window.open ('personal_center_page.html')">
            Personal Center
        </button>

</body>
</html>