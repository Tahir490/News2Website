<?php
session_start();
if(!$_SESSION['name']){
    header('location:login.php?error=You are not an administrator!!');
}
?>

<?php
include("includes/connect.php");
  $edit_pic = @$_GET['update'];
    $que  = "SELECT * FROM pages where id ='$edit_pic'";
  $run = mysqli_query($con, $que);
 $f_result = mysqli_num_rows($run);
  if ($f_result > 0)
      {
          while($row = mysqli_fetch_array($run))
      {
          $id = $row['id'];

           $date_of = $row['date_to'];

            $save = "uploads/thumbs"."/".$row['save_name'];

            $filename = $row['file_name'];
  
    }
  }

?>

</!DOCTYPE html>
<html>
<head>
  <title></title>

   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">


</head>
<body>


<form method="post" action="update_img.php?update=<?php echo $id; ?>" enctype="multipart/form-data">
<table align="center" border="10" width="600">
 <tr>
  <td align="center" colspan="5" class="bg-danger"><h1>Update Your Record</h1></td>
 </tr>
 <tr>
   <td align="center">Old Image:</td>
<td >
  <center>
    <a href="<?php echo $save;?>">
    <img src="<?php echo $save; ?>" width="100" height="100" ></a>
  </center>
    </td>
 </tr>


 <tr>
   <td align="center">New Image: </td>
   <td><input type="file" name="file"></td>
 </tr>
 <tr>
   <td align="center">Select Date: </td>
   <td><input type="date" name="date" style="height: 40px; width: 40%"></td>
 </tr>
  <tr>
   <td align="center">Select Date: </td>
   <td><select class="form-control" name="name" style="height: 40px; width: 40%">
    <option>Front</option>
    <option>News</option>
    <option>National</option>
    <option>Editorial</option>
     <option>Classified</option>
    <option>Sports</option>
    <option>Baqia</option>
    <option>Back Page</option>
  </select></td>
 </tr>
 <tr>
   <td align="center" colspan="5"><button type="submit" name="update" class="btn btn-success">Update</button></td>
 </tr>
</table>

</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</body>
</html>

<?php
include("includes/connect.php");
if(isset($_POST['update'])){
  $name=mysqli_real_escape_string($con, $_POST['name']);
    $date=mysqli_real_escape_string($con,$_POST['date']);   
      $edit_id = $_GET['update'];
      
      //$date = date("y.m.d");

         if(isset($_FILES['file'])){
      $errors= array();
       function GetImageExtension($imgtype)
 {
  if(empty($imgtype)) return false;
  switch($imgtype)
  { 
  case 'image/bmp': return '.bmp';
  case 'image/gif': return '.gif';
  case 'image/jpeg': return '.jpg';
  case 'image/png': return '.png';
  default: return false;
    }
  } 
  if (!empty($_FILES["file"]["name"])) {
    $file_name=$_FILES["file"]["name"];
    $temp_name=$_FILES["file"]["tmp_name"];
    $imgtype=$_FILES["file"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=date("d-m-Y")."-".time().$ext;
    $target_path = "uploads/thumbs/".$imagename;
    $img_ext= pathinfo($file_name, PATHINFO_FILENAME);
    
   }
   }
    
      if(move_uploaded_file($temp_name, $target_path)) {
    
      
    $que = "UPDATE pages set date_to = '$date', save_name = '".$imagename."' , file_name='".$name."' WHERE id='$edit_id'";
      if(mysqli_query($con, $que)){
        header('location:insert_post.php?update=Data has been Updated Successfully!!!');
      }
  }
}

?>