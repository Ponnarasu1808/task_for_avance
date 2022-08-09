<?php  
session_start();//session starts here  
  
?>  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Login</title>  
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
  top: 70%;
  left: 40%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.next {
  
  margin: 0;
  position: absolute;
  top: 70%;
  left: 60%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  margin-right: 20px;
  background-color: #04AA6D;
  color: white;
} 
    .login-panel {  
        margin-top: 150px;} 
  
</style>  
  
<body>   
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Sign In</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
  
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
<a href="registration.php" class="previous">&laquo; Previous</a>
  <a href="#" class="next">Next &raquo;</a>
</body>  
  
</html>  
  
<?php  
  
include("db_conection.php");  
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['email']=$user_email; 
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  