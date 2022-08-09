<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Registration</title>  
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
  top: 80%;
  left: 40%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.next {
  
  margin: 0;
  position: absolute;
  top: 80%;
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
  
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Registration</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="registration.php">  
                        <fieldset>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus>  
                            </div>  
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="mobile" name="mobile" type="number" autofocus>  
                            </div> 
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
<a href="http://localhost/task/useroradmin.html#" class="previous">&laquo; Previous</a>
<a href="#" class="next">Next &raquo;</a>
  
</body>  
  
</html>  
  
<?php  
  
include("db_conection.php");//make connection here  
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['pass'];//same  
    $user_email=$_POST['email'];//same  
    $user_mobile=$_POST['mobile'];//same  
  
    if($user_name=='')  
    {  
        //javascript use for input checking  
        echo"<script>alert('Please enter the name')</script>";  
exit();//this use if first is not work then other will not show  
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    } 
    if($user_mobile=='')  
    {  
        echo"<script>alert('Please enter the mobile')</script>";  
    exit();  
    }  
//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into users (user_name,user_pass,user_email,user_mobile) VALUE ('$user_name','$user_pass','$user_email','$user_mobile')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
} 
?>  
