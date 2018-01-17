<?php
session_start();
if(!$_SESSION['name']){
    header('location:login.php?error=You are not an administrator!!');
}
?>
<?php
include("includes/connect.php");
if(isset($_POST['admin']))
{
    $admin_name=$_POST['name'];
    $admin_pass=$_POST['password'];
    $query=mysqli_query($con, "INSERT INTO login(name, password) VALUES('$admin_name,'$admin_pass')");

   $row = mysqli_num_rows($query);
   if ($row==1)

    {
        echo "<script>alert('New Admin Added')</script>";
    }

    else{
        echo"<script>alert('There is an error')</script>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
<div class="container">
    <div class="dropdown">
        <button class="btn btn-success btn-lg  dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 5px;">
            ADMIN PANEL
            <span class="caret" style="margin-right: 100px;"></span>
        </button>
        <ul class="dropdown-menu" >
            <li ><a href="index.php"  style="color: #000000; margin-left: 2px;">Main Page</a></li>
            <li><a href="#add_admin" data-toggle="modal" style="color: #000000; margin-left: 2px;">Add New Admin</a></li>
            <li><a href="logout.php" style="color: #000000; margin-left: 2px;">Logout</a></li>
        </ul>
    </div>


</div>

  </br></br>

<div class="modal fade" id="add_admin" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <form method="post" action="" >
                    <center>
                        <div><h2 class="heading">Adding New Admin</h2></div>
                    </center>

                    <div class="form-group">
                        <label for="cnic">Name:</label>
                        <input type="text" name="name" class="form-control"  placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="add">Password:</label>
                        <input type="password" name="password" class="form-control"  placeholder="Enter Password">
                    </div>


                    <button type="submit" name="admin" class="btn btn-success">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <div class="container">
      
      <form method="post" action="" enctype="multipart/form-data">
        <center>
            <div><h2 class="heading">Post New News</h2></div>
        </center>
  <div class="form-group">
    <label for="img"><b>Select maxmimum 8 files here:</b></label>
    <input type="file" name="files[]" class="form-control" id="img"  multiple>
    
  </div>
 
  
  <button type="submit" name="btn" class="btn btn-success">Upload</button>
</form>
  	</div>

 <center><font color="#A81008" size="8px"><?php echo @$_GET['delete']; ?></font></center>
     <center><font color="#0851EE" size="8px"><?php echo @$_GET['update']; ?></font></center>

  </br>
  <div style="margin-left: 910px; margin-bottom: 10px;">
  <form  action="insert_post.php" method="get">

      <input type="date" name="search" />

  <button type="submit" name="btn" class="btn btn-danger" style="margin-left: 10px;">Search Here</button>
</form>
</div>



   <?php
  include("includes/connect.php");
    if(isset($_GET['btn'])){

       $search = $_GET['search'];

       $que = "SELECT * FROM pages WHERE date_to = '$search'";
       $run = mysqli_query($con, $que);
       while($row=mysqli_fetch_array($run)){
      $id = $row['id'];
      $date_of = $row['date_to'];
      $img = "uploads"."/".$row['file_name'];

    ?>
  <div class="container">
      <div class="well">
          <div class="responsive-table">
              <table class="table table-bordered">


  <tr >
      <td><?php echo @$id; ?></td>
      <td><?php echo @$date_of; ?></td>
      <td><a href="<?php echo $img;?>">
    <img src="<?php echo @$img; ?>" width="100" height="100" border="0"></a>
  </td>
     
   
      
    </tr>
      <?php } ?>
    <tr>
      <td align="center" colspan="12"><a href="insert_post.php"class="btn btn-danger">OK</a></td>
    </tr>
  </table><br><br>
    <?php } ?>

   <p><br/></p>
    <div class="container">
      

    

      <table class="table" border="3">
 
    <tr class="bg-warning">

      
      <th align="center" style="text-align:center">#</th>
      <th align="center" style="text-align:center">Date</th>
      <th align="center" style="text-align:center">Image</th>
      <th align="center" style="text-align:center">Delete</th>
      <th align="center" style="text-align:center">Update</th>
    </tr>
  
  <tbody>
                
    <tr> 

      <?php
    include("includes/connect.php"); 

$date = date("y.m.d");
$result ="SELECT * FROM pages order by id desc";
$run = mysqli_query($con, $result);
$f_result = mysqli_num_rows($run);
if ($f_result > 0)
      {
          while($row = mysqli_fetch_array($run))
      {

            $id = $row['id'];

           $date_of = $row['date_to'];
  
           $img = "uploads"."/".$row['file_name'];
  

?>

     <td align="center" style="padding-top: 1cm;"><?php echo $id; ?></td>
      <td align="center" style="padding-top: 1cm;"><?php echo $date_of; ?></td>
      <td width="90" rowspan="" >
        <center>
    <a href="<?php echo $img;?>">
    <img src="<?php echo $img; ?>" width="100" height="100" border="0"></a>
  </center>
    </td>
      <td align="center" style="padding-top: 1cm;"><a href='delete.php?delete=<?php echo $id; ?>' class="btn btn-danger">Delete</a></td>
       <td align="center" style="padding-top: 1cm;"><a href='update.php?update=<?php echo $id; ?>' class="btn btn-primary">Update</a></td>
	


        </tr>
 <?php
}
   }
      else
          {
  ?>
            <p>There are no images uploaded to display.</p>
                    <?php
                        }
              ?>          
   
    
     
  

  </tbody>
</table>
    </div>  

   



  
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


  </body>
</html>



<?php
  
  include("includes/connect.php");
  date_default_timezone_set("Asia/Karachi");
if(isset($_POST["btn"])){     
        $errors = array();
         
        $extension = array("jpeg","jpg","png","gif");
         
        $bytes = 1024;
        $allowedKB = 1000;
        $totalBytes = $allowedKB * $bytes;
         
        if(isset($_FILES["files"])==false)
        {
            echo "<b>Please, Select the files to upload!!!</b>";
            return;
        }
         
       
         
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
        {
            $uploadThisFile = true;
             
            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
             
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
 
            if(!in_array(strtolower($ext),$extension))
            {
                array_push($errors, "File type is invalid. Name:- ".$file_name);
                $uploadThisFile = false;
            }               
             
            if($_FILES["files"]["size"][$key] > $totalBytes){
                array_push($errors, "File size must be less than 100KB. Name:- ".$file_name);
                $uploadThisFile = false;
            }
             
            if($uploadThisFile){
                $filename=basename($file_name,$ext);
                $newFileName=$filename.$ext;                
                move_uploaded_file($_FILES["files"]["tmp_name"][$key],"uploads/".$newFileName);
                 
                $query = "INSERT INTO pages(date_to, file_name) VALUES('".date("Y-m-d")."','".$newFileName."')";

                mysqli_query($con, $query); 

                echo "<script>alert('Pictures has been uploaded...')</script>"; 
                 
                           
            }
        }
         
        mysqli_close($con);
         
        $count = count($errors);
         
        if($count != 0){
            foreach($errors as $error){
                echo $error."<br/>";
            }
        }       
    }

  ?>  
