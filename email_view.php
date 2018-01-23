<?php
session_start();
if(!$_SESSION['aname']){
    header('location:admin.php?error=Sorry, You are not Authorize to do this Job!!');
}
?>
<?php
include("includes/connect.php");
$id	=	@$_GET['view'];
$que	=	"select * from email where id='$id'";
$run = mysqli_query($con, $que);
while($row=mysqli_fetch_array($run)){

    $id = $row['id'];
    $name = $row['username'];
    $email = $row['email'];
    $subj = $row['subject'];
    $spam = $row['human'];
    $msg = $row['message'];

}

?>
<!DOCTYPE html>
<head>
    <title>Education System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" name="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jui/css/jquery-ui-1.10.4.custom.css" type="text/css">
    <script type="text/javascript" src="jui/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="jui/js/jquery-ui-1.10.4.custom.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript"src="admin.js" ></script>
    <link href="admin.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="container">
    <form method="post" action="email_view.php?view=<?php echo $id; ?>" >
        <center>
            <div><h2 >Viewing Email from <?php echo $name; ?></h2></div>
        </center><br />

        <div class="form-group">
            <label for="name3">Name:</label>

            <input class="form-control"  type="text"  value="<?php echo @$name; ?>" disabled>
        </div>

        <div class="form-group">
            <label for="name3">Email:</label>
            <input class="form-control"  type="text"  value="<?php echo @$email; ?>" disabled>
        </div>

        <div class="form-group">
            <label for="name3">Subject:</label>
            <input class="form-control"  type="text"  value="<?php echo @$subj; ?>" disabled>
        </div>

        <div class="form-group">
            <label for="name3">Message:</label>

            <input class="form-control"  type="text"   value="<?php echo @$msg; ?>" disabled>
        </div>
    </form>
</div>
</div>
</div>
</div>
<div class="container">
    <div class="dropdown">
        <button class="btn btn-primary btn-lg  dropdown-toggle" type="button" data-toggle="dropdown">
            Go to <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">

            <li><a href="admin.php">Admin Panel</a></li>
            <li><a href="index.php">Home Page</a></li>


        </ul>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
