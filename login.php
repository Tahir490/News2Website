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
	$row = mysqli_num_rows($result);
	
    if($row==1)

    {
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
</head>
<body>

<h2 align="center">Login</h2>

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

</body>
</html>
