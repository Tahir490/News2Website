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


<form method="post" action="update_name.php?update=<?php echo $id; ?>" enctype="multipart/form-data">
<table align="center" border="10" width="600">
 <tr>
  <td align="center" colspan="5" class="bg-danger"><h1>Update Your Record</h1></td>
 </tr>


 <tr>
   <td align="center">Image Name: </td>
   <td><input class="form-control"  type="text"  value="<?php echo @$filename; ?>" name="imgname"></td>
 </tr>

 <tr>
   <td align="center">Select New Name: </td>
   <td><select class="form-control" name="name" style="height: 40px; width: 40%">
    <option>Front</option>
    <option>News</option>
    <option>National</option>
     <option>Columns</option>
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
     
      $edit_id = $_GET['update'];
      $name=$_POST['name']; 
    
      
    $que = "UPDATE pages set file_name = '".$name."' where id='$edit_id'";
      if(mysqli_query($con, $que)){
        header('location:insert_post.php?update=Data has been Updated Successfully!!!');
      
  }
}

?>