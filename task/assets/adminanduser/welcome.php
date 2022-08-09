<?php  
session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>  
        Registration  
    </title>  
    <style>
body{
    background-image: url('p.jpg');
}
    </style>
</head>  
  
<body>
    <br>  
<h1>Welcome : YOU HAVE SUCCESSFULLY LOGGED IN  </h1><br>  
<?php  
echo $_SESSION['email'];
?>  
<br>
<h1><a href="logout.php">Logout here</a> </h1>  
</body>  
  
</html>  