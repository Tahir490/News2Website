
<?php
   include("includes/connect.php"); 

$del_pic = $_GET['delete'];
//$query="delete from pages where id='$del_pic'";
$query =  "DELETE FROM pages WHERE id = '$del_pic'";
if(mysqli_query($con, $query)){
	header('location:insert_post.php?delete=Data has been Deleted Successfully!!!');
}
?>