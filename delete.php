
<?php
   include("includes/connect.php"); 

$del_pic = $_GET['delete'];
//$query="delete from pages where id='$del_pic'";
$rows = mysqli_query($con, "DELETE FROM pages WHERE id = '$del_pic'");
$count = mysqli_num_rows($rows);

if($count > 0){
	header('location:insert_post.php?delete=Data has been Deleted Successfully');
}

?>