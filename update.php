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
  
           $img = "uploads"."/".$row['file_name'];
  
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


<form method="post" action="edit_mcs_morn.php?edit_mcs_morn=<?php echo $id; ?>" enctype="multipart/form-data">
<table align="center" border="10" width="600">
 <tr>
  <td align="center" colspan="5" class="bg-danger"><h1>Update Your Record</h1></td>
 </tr>
 <tr>
   <td align="center">Old Picture:</td>
<td >
  <center>
    <a href="<?php echo $img;?>">
    <img src="<?php echo $img; ?>" width="100" height="100" ></a>
  </center>
    </td>
 </tr>

 <tr>
   <td align="center">New Picture: </td>
   <td><input type="file" name="page8"></td>
 </tr>
 <tr>
   <td align="center" colspan="5"><input type="submit" name="Update" value="Publish Now" class="btn btn-success"></td>
 </tr>
</table>

</form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</body>
</html>