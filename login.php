<?php
session_start();
?>
<?php
include("includes/connect.php");
if(isset($_POST['login']))
{
    $admin_name=$_SESSION['name']=$_POST['name'];
    $admin_pass=$_POST['password'];
    $query="SELECT * FROM login WHERE name='$admin_name' AND password='$admin_pass'";
	$result = mysqli_query($con, $query);
 if (mysqli_num_rows($result) > 0){

        header('Location: insert_post.php');

    }
    else{
        echo"<script>alert('User name or Password is incorrect')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            margin-left: 600px;
            width: 10%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 10%;

        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin</title>
</head>
<body>
<nav class="navbar fixed-top navbar-dark bg-info">
<div class="container">
 
 <h2 class="text-white" > Admin Panel of Daily Sada-e-Himalaya Gilgit-Baltistan </h2>
</div>
  
</nav>
  </br></br></br></br></br>
<body>

<h2 align="center">Admin Login</h2>

<form action="" method="post">
    <div class="imgcontainer">
        <img src="images1/login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="name" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" name="login">Login</button>


    </div>


</form>
<footer class="bg-info text-white">
 <h4 class="text-center"> Copyright Daily Sada-e-Himalaya </h4>
</footer>
</body>
</html>
