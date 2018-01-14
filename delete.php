
<?php
   include("includes/connect.php"); 

$del_pic = $_GET['del'];
//$query="delete from pages where id='$del_pic'";
$rows = mysqli_query($con, "delete from pages WHERE id = '$del_pic'");
$count = mysqli_num_rows($rows);

if($count > 0){
	header('location:insert_post.php?del=Data has been Deleted Successfully');
}

?>