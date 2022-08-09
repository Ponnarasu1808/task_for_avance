<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Admin Login</title>  
</head>  
<style> 
body {
  background-image: url('p.jpg');
  background-repeat: no-repeat;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  
  margin-right: 20px;
  background-color: #f1f1f1;
  color: black;
  margin: 0;
  position: absolute;
  top: 60%;
  left: 40%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.next {
  
  margin: 0;
  position: absolute;
  top: 60%;
  left: 60%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  margin-right: 20px;
  background-color: #04AA6D;
  color: white;
} 
.login-panel {  
        margin-top: 150px; } 
  
</style>  
  
<body>  
  
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Admin Sign In</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="admin_login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">  
                            </div>  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
<a href="http://localhost/ponnarasu/task/useroradmin.html#" class="previous">&laquo; Previous</a>
<a href="#" class="next">Next &raquo;</a>
</body>  
  
</html>  
  
<?php  
include("db_conection.php");  
  
if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.  
{  
    $admin_name=$_POST['admin_name'];  
    $admin_pass=$_POST['admin_pass'];  
  
    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        echo "<script>window.open('view_users.php','_self')</script>";  
    }  
    else {echo"<script>alert('Admin Details are incorrect..!')</script>";}  
  
}  
  
?>  