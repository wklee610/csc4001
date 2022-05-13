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

    <table class="table table-hover">
        <caption>Groupin List</caption>

        <div class="col-md-5 col-md-offset-7 " id="search">
            <div class="input-group">
                <input type="text" class="form-control" onkeydown="onKeyDown(event)"/>
                <span class="input-group-addon"><a href="#"><i class="glyphicon glyphicon-search"> <span > Search   </span></i></a></span>
            </div>
        </div> 
        </span></i></a></span>
            </div>
        </div>

      </table>
    





    
</body>
</html>
