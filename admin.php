<?php
session_start();
?>
<?php
include("includes/connect.php");
if(isset($_POST['login']))
{
    $admin_name=$_SESSION['aname']=$_POST['aname'];
    $admin_pass=$_POST['apassword'];
    $query="SELECT * FROM  admin_author WHERE a_name='$admin_name' AND a_password='$admin_pass'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0){



        header('Location: addAdmin.php');

    }
    else{
        echo"<script>alert('Sorry, You are not Authorize to do this Job')</script>";
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
            width: 20%;
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
    <title>Administrator</title>
</head>
<body>
<nav class="navbar fixed-top navbar-dark bg-warning">
<div class="container">
 
 <h2 class="text-white"> Administrator  Panel of Daily Sada-e-Himalaya Gilgit-Baltistan </h2>
</div>


  
</nav>
  </br></br></br></br></br>

<h2 align="center">Administrator</h2>

<form action="" method="post">
    <div class="imgcontainer">
        <img src="images1/login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="aname" >

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="apassword" >

        <button type="submit" name="login">Login</button>
        <button type="submit" name="forget">Forget Password</button>


    </div>


</form>
<footer class="bg-warning text-white">
 <h4 class="text-center"> Copyright Daily Sada-e-Himalaya </h4>
</footer>
</body>
</html>

<?php
include("includes/connect.php");
if(isset($_POST['forget'])) {

$result = "SELECT * FROM admin_author";
$run = mysqli_query($con, $result);
$f_result = mysqli_num_rows($run);
if ($f_result > 0) {
while ($row = mysqli_fetch_array($run)) {

$id = $row['id'];

$name = $row['a_name'];

$pass = $row['a_password'];

$to = "himalayapublishing@gmail.com";
$subject = "Password Recovery";

$message = " This is an email to exclusively tell you about your Admin Panel's Password. It is strcitly advise not to disclose this password to anyone.\n
username: $name\n Password : $pass ";

$headers = "From : info@sadaehimalaya.com";
if(mail($to, $subject, $message, $headers)){
echo "<script>alert('Your Password has been sent to your Email ID')</script>";

}else{
echo "<script>alert('Failed to Recover your password, try again')</script>";

}


}
}
}
?>
