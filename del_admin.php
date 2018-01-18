<?php
session_start();
if(!$_SESSION['name']){
    header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("includes/connect.php");

$del = $_GET['delete'];
//$query="delete from pages where id='$del_pic'";
$query =  "DELETE FROM login WHERE id = '$del'";
if(mysqli_query($con, $query)){
    header('location:insert_post.php?delete=Data has been Deleted Successfully!!!');
}
?>