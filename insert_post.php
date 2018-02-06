<?php
session_start();
if(!$_SESSION['name']){
    header('location:login.php?error=Sorry, You are not Authorize to do this Job!!');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="insert_post.css" />
   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />    
         
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
            <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" /> 
             
    <title>Admin</title>
  </head>
  <body>
  <nav class="navbar fixed-top navbar-dark bg-success">
<div class="container">
    <div class="dropdown">
        <button class="btn btn-info btn-md  dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 5px;">
            ADMIN 
            <i class="fa fa-user-circle-o " style="font-size:35px;color:black"></i>
        </button>
        <ul class="dropdown-menu" >


            <li class="fa fa-home" style="font-size:20px"><a href="index.php"  style="color: #000000; margin-left: 2px;">Main Page</a></li>

            <li class="fa fa-unlock" style="font-size:20px"><a href="logout.php" style="color: #000000; margin-left: 2px;">Logout</a></li>

        </ul>
    </div>

 <h2 class="text-white"> Admin Panel of Daily Sada-e-Himalaya Gilgit-Baltistan </h2>
</div>
  
</nav>
  </br></br>
<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <!-- Nav tabs -->
      <div class="card">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#insert" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-database"></i>  <span>Insert Pages</span></a></li>
          <li role="presentation"><a href="#pages" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-file"></i>  <span>Pages</span></a></li>
          <li role="presentation"><a href="#search" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-search"></i>  <span>Search</span></a></li>
          
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="insert">
            
            <form method="post" action="" enctype="multipart/form-data">
        <center>
            <div><h2 class="heading bg-secondary text-white">Post New News</h2></div>
        </center>
  <div class="form-group">
    <label for="img"><b>Select maxmimum 8 files here:</b></label>
    <input type="file" name="files[]" class="form-control" id="img" style="height: 40px; width: 40%" >
    
  </div>

  <div class="form-group">
    <label for="img"><b>Select Date here:</b></label>
    <input type="date" name="date" class="form-control" style="height: 40px; width: 40%" >
    
  </div>

  <div class="form-group">
  <label for="sel1">Select Name here:</label>
  <select class="form-control" name="name" style="height: 40px; width: 40%">
    <option>Front</option>
    <option>News</option>
    <option>National</option>
    <option>Columns</option>
    <option>Editorial</option>
     <option>Classified</option>
    <option>Sports</option>
    <option>Baqia</option>
    <option>Back Page</option>
  </select>
</div>
 
  
  <button type="submit" name="btn" class="btn btn-success">Upload</button>
</form>
<center><font color="#A81008" size="8px"><?php echo @$_GET['delete']; ?></font></center>
     <center><font color="#0851EE" size="8px"><?php echo @$_GET['update']; ?></font></center>

          </div>
          <div role="tabpanel" class="tab-pane" id="pages"> 
            
               
                <div class="table-responsive" id="pagination_data">  
                </div>  
           
            
</div>
          <div role="tabpanel" class="tab-pane" id="search">
            
             <div>
  <form  action="insert_post.php" method="get">

      <input type="date" name="search" />

  <button type="submit" name="btn" class="btn btn-danger" style="margin-left: 10px;">Search Here</button>
</form>
</div>
<br>
 <table class="table table-bordered">

            <tr class='bg-primary'> 
                <td align='center'>#</td> 
                <td align='center'>Date</td>  
                <td align='center'>File Name</td>  
                <td align='center'>Image</td>  
                <td align='center'>Delete</td>
                <td align='center'>Update</td>    
           </tr> 

  <?php
  include("includes/connect.php");
    if(isset($_GET['btn'])){

       $search = $_GET['search'];

       $que = "SELECT * FROM pages WHERE date_to = '$search'";
       $run = mysqli_query($con, $que);
       while($row=mysqli_fetch_array($run)){

            $id = $row['id'];

           $date_of = $row['date_to'];

            $save = "uploads/thumbs"."/".$row['save_name'];

            $filename = $row['file_name'];

    ?>
 
     
   
                  


  <tr >
       <td align="center" style="padding-top: 1cm;"><?php echo @$id; ?></td>
       <td align="center" style="padding-top: 1cm;"><?php echo @$date_of; ?></td>
       <td align="center" style="padding-top: 1cm;"><?php echo @$filename; ?></td>
      <td align="center" style="padding-top: 1cm;"><a href="<?php echo $save;?>">
    <img src="<?php echo @$save; ?>" width="100" height="100" border="0"></a>
  </td>
  <td align="center" style="padding-top: 1cm;"><a href='delete.php?delete=<?php echo $id;?>' class="btn btn-danger">Delete</a>
       
      </td>
       <td align="center" style="padding-top: 1cm;">
        <a href='update_img.php?update=<?php echo $id;?>' class="btn btn-primary">Update Image</a>
        <a href='update_name.php?update=<?php echo $id;?>' class="btn btn-info">Update Name</a>

      </td> 



    </tr>
      <?php } ?>
    <tr>
      <td align="center" colspan="12"><a href="insert_post.php"class="btn btn-danger">OK</a></td>
    </tr>
  </table><br><br>
    <?php } ?>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</div>

    


    

 

  </br>
 





 

 

   



  
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<footer class="bg-success text-white">
 <h2 class="text-center"> Admin Panel of Daily Himalaya Gilgit-Baltistan </h2>
</footer>
  </body>
</html>
 <script>  
 $(document).ready(function(){  
      load_data();  
      function load_data(page)  
      {  
           $.ajax({  
                url:"pagination.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data){  
                     $('#pagination_data').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 });  
 </script>  


<?php
  
  include("includes/connect.php");
  date_default_timezone_set("Asia/Karachi");
if(isset($_POST["btn"])){  
   
        $name=mysqli_real_escape_string($con, $_POST['name']);
    $date=mysqli_real_escape_string($con,$_POST['date']);   
        $errors = array();
         
        $extension = array("jpeg","jpg","png","gif");
         
        $bytes = 1024;
        $allowedKB = 6000;
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
             $imgtype=$_FILES["files"]["type"][$key];
            
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
 
            if(!in_array(strtolower($ext),$extension))
            {
                array_push($errors, "File type is invalid. Name:- ".$file_name);
                $uploadThisFile = false;
            }               
             
            if($_FILES["files"]["size"][$key] > $totalBytes){
                array_push($errors, "File size must be less than 6MB. Name:- ".$file_name);
                $uploadThisFile = false;
            }
             
            if($uploadThisFile){
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
             $ext= GetImageExtension($imgtype);
            $imagename=date("d-m-Y")."-".date("h-i-sa").$ext;
                move_uploaded_file($_FILES["files"]["tmp_name"][$key],"uploads/thumbs/".$imagename);
                 
                $query = "INSERT INTO pages(date_to, save_name, file_name ) VALUES('$date', '".$imagename."', '$name')";

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
