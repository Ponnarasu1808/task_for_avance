<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>View Users</title>  
</head>  
<style>  
body{
    background-color: #a6a6a6;
}
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
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
  background-color: #04AA6D;
  color: black;
  margin: 0;
  position: absolute;
  top: 100%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

</style>  
  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">All the Users</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>User Id</th>  
            <th>User Name</th>  
            <th>User pass</th>  
            <th>User number</th> 
            <th>User Email</th> 
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
        <?php  
        include("db_conection.php");  
        $view_users_query="select * from users";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $user_id=$row[0];  
            $user_name=$row[1];  
            $user_email=$row[2];  
            $user_pass=$row[3]; 
            $user_mobile=$row[4]; 
  
        ?>  
  
        <tr>  
            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_email;  ?></td>  
            <td><?php echo $user_pass;  ?></td> 
            <td><?php echo $user_mobile;  ?></td> 
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td>  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div> 
<a href="admin_login.php" class="previous">&laquo; Previous</a>
</body>  
  
</html>