<?php
session_start();
if(!$_SESSION['aname']){
    header('location:admin.php?error=Sorry, You are not Authorize to do this Job!!');
}

?>
<?php
include("includes/connect.php");
if(isset($_POST['admin']))
{
    $admin_name=mysqli_real_escape_string($con, $_POST['name']);
    $admin_pass=mysqli_real_escape_string($con,$_POST['password']);
    $hash = password_hash( $admin_pass, PASSWORD_DEFAULT);
    $query="INSERT INTO login (name, password) VALUES('$admin_name','$hash')";

  if(mysqli_query($con, $query)){

     echo "<script>alert('New admin added')</script>";  
   }

   else{

        echo "<script>alert('There is an error')</script>";


   }
 
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="insert_post.css" />
   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />    
         
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
            <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" /> 
    <title>Administrator</title>
    <style type="text/css">
      .navbar-right li a{
        color: #000000;
        margin-top: 10px;
         background-color: #ffffff;


      }
      


    </style>

  </head>
  <body>
  <nav class="navbar fixed-top navbar-dark bg-success">
<div class="container">
    <div class="dropdown">
        <button class="btn btn-info btn-md  dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top: 5px;">
            Administrator<i class="fa fa-user-circle-o " style="font-size:35px;color:black"></i>
        </button>
        <ul class="dropdown-menu" >


            <li class="fa fa-home" style="font-size:20px"><a href="index.php"  style="color: #000000; margin-left: 2px;">Main Page</a></li>
			<li  class="fa fa-group" style="font-size:20px"><a href="insert_post.php"  style="color: #000000; margin-left: 2px;">Admin Panel</a></li>
            <li class="fa fa-unlock" style="font-size:20px"><a href="admin.php" style="color: #000000; margin-left: 2px;">Logout</a></li>

        </ul>



    </div>
 <h2 class="text-white"> Admin Panel of Daily Sada-e-Himalaya Gilgit-Baltistan </h2>


      

</div>


  
</nav>
  </br></br></br></br></br>


   <div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <!-- Nav tabs -->
      <div class="card">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#admins" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-user"></i>  <span>Admins</span></a></li>
          <li role="presentation"><a href="#add" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user-plus"></i>  <span>Add New Admins</span></a></li>
        
          
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane" id="add">
            
            
                <form method="post" action="" >
                    <center>
                        <div><h2 class="heading bg-secondary text-white">Add New Admin</h2></div>
                    </center>

                    <div class="form-group">
                        <label for="cnic">Name:</label>
                        <input type="text" name="name" class="form-control"  placeholder="Enter Name" style="height: 40px; width: 40%" >
                    </div>

                    <div class="form-group">
                        <label for="add">Password:</label>
                        <input type="password" name="password" class="form-control"  placeholder="Enter Password" style="height: 40px; width: 40%" >
                    </div>


                    <button type="submit" name="admin" class="btn btn-success">Add</button>


                </form>


          </div>
          <div role="tabpanel" class="tab-pane active" id="admins"> 
            
               
               <table class="table table-bordered">

                 <tr class="bg-danger">

      
      <th align="center" style="text-align:center">#</th>
      <th align="center" style="text-align:center">Name</th>
      <th align="center" style="text-align:center">Password</th>
      <th align="center" style="text-align:center">Delete</th>
     
    </tr>

    <tr> 

      <?php
    include("includes/connect.php"); 


$result ="SELECT * FROM login";
$run = mysqli_query($con, $result);
$f_result = mysqli_num_rows($run);
if ($f_result > 0)
      {
          while($row = mysqli_fetch_array($run))
      {

            $id = $row['id'];

           $name = $row['name'];
  
           $pass = $row['password'];
  

?>

     <td align="center" style="padding-top: 1cm;"><?php echo $id; ?></td>
      <td align="center" style="padding-top: 1cm;"><?php echo $name; ?></td>
      <td align="center" style="padding-top: 1cm;"><?php echo $pass; ?></td>
      <td align="center" style="padding-top: 1cm;"><a href='del_admin.php?delete=<?php echo $id; ?>' class="btn btn-danger">Delete</a></td>

         </tr>
 <?php
}
   }
      else
          {
  ?>
            <p>There is no data to display.</p>
                    <?php
                        }
              ?>   

              </table>
            
</div>
         
         
        </div>
      </div>
    </div>
  </div>
</div>


 
          </br>

          

  <center><font color="#A81008" size="8px"><?php echo @$_GET['delete']; ?></font></center>

              <div class="container">
      <div class="well">
          <div class="responsive-table">
             



        </div>
    </div>
</div>
      
      
    </div>  

  </br>

   



  
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

<footer class="bg-success text-white">
 <h2 class="text-center"> Admin Panel of Daily Himalaya Gilgit-Baltistan </h2>
</footer>
  </body>
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#message').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"contact.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>

</html>

