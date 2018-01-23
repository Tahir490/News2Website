<?php
session_start();
if(!$_SESSION['aname']){
    header('location:admin.php?error=Sorry, You are not Authorize to do this Job!!');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Emails</title>


</head>
<body>
</br></br>

<div class="container">
    <h2>Emails</h2>
    <div class="well">
        <div class="responsive-table">
            <table class="table table-bordered">

                <tr class="bg-success">


                    <th align="center" style="text-align:center">#</th>
                    <th align="center" style="text-align:center">Name</th>
                    <th align="center" style="text-align:center">Email</th>
                    <th align="center" style="text-align:center">Subject</th>
                    <th align="center" style="text-align:center">Message</th>
                    <th align="center" style="text-align:center">view</th>

                </tr>

                <tr>

                    <?php
                    include("includes/connect.php");


                    $result ="SELECT * FROM email";
                    $run = mysqli_query($con, $result);
                    $f_result = mysqli_num_rows($run);
                    if ($f_result > 0)
                    {
                    while($row = mysqli_fetch_array($run))
                    {

                    $id = $row['id'];

                    $name = $row['username'];

                    $email = $row['email'];

                    $subj = $row['subject'];

                    $msg = $row['message'];


                    ?>

                    <td align="center" style="padding-top: 1cm;"><?php echo $id; ?></td>
                    <td align="center" style="padding-top: 1cm;"><?php echo $name; ?></td>
                    <td align="center" style="padding-top: 1cm;"><?php echo $email; ?></td>
                    <td align="center" style="padding-top: 1cm;"><?php echo $subj; ?></td>
                    <td align="center" style="padding-top: 1cm;"><?php echo $msg; ?></td>
                    <td align="center" style="padding-top: 1cm;"><a href="email_view.php?view=<?php echo $id; ?>"  class="btn btn-danger">View</a></td>

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
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>