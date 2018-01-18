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
    $query="INSERT INTO login (name, password) VALUES('$admin_name','$admin_pass')";

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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
  <nav class="navbar fixed-top navbar-dark bg-success">
<div class="container">
    

 <h2 class="text-white"> Admin Panel of Daily Sada-e-Himalaya Gilgit-Baltistan </h2>
</div>
  
</nav>
  </br></br></br></br></br>


    <div class="container">


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
					<a href="insert_post.php"<button  name="admin" class="btn btn-success">Back to Admin Panel</button></a>
                </form>
            </div>
          </br>

              <div class="container">
      <div class="well">
          <div class="responsive-table">
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

$date = date("y.m.d");
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
      <td align="center" style="padding-top: 1cm;"><a href='delete.php?delete=<?php echo $id; ?>' class="btn btn-danger">Delete</a></td>

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

              </table>



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
</html>



