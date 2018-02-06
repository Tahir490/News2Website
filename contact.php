<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contact US</title>

    <link href="contact.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">

        /*Contact sectiom*/
        .content-header{
            font-family: 'Oleo Script', cursive;
            color:#fcc500;
            font-size: 45px;
        }

        .section-content{
            text-align: center;

        }
        #contact{

            font-family: 'Teko', sans-serif;
            padding-top: 60px;
            width: 100%;
            width: 100vw;
            height: 550px;
            background: #3a6186; /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color : #fff;
        }
        .contact-section{
            padding-top: 40px;
        }
        .contact-section .col-md-6{
            width: 50%;
        }

        .form-line{
            border-right: 1px solid #B29999;
        }

        .form-group{
            margin-top: 10px;
        }
        label{
            font-size: 1.3em;
            line-height: 1em;
            font-weight: normal;
        }
        .form-control{
            font-size: 1.3em;
            color: #080808;
        }
        textarea.form-control {
            height: 135px;
            /* margin-top: px;*/
        }

        .submit{
            font-size: 1.1em;
            float: right;
            width: 150px;
            background-color: transparent;
            color: #fff;

        }

    </style>

</head>
<body>


<section id="contact">
    <div class="section-content">
        <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>

    </div>
    <div class="contact-section">
        <div class="container">
            <form method="post" action="" id="form">
                <div class="col-md-6 form-line">
                    <div class="form-group">
                        <label for="exampleInputUsername">Your name*</label>
                        <input type="text" class="form-control" id="" name="name" placeholder=" Enter Name" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email Address*</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder=" Enter Email id" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Subject*</label>
                        <input type="text" class="form-control" name="subject" id="telephone" placeholder=" Enter Subject of Your Message" required>
                    </div>
                </div>
                <div class="col-md-6" style="margin-left: 585px;  margin-top: -223px;">
                    <div class="form-group">
                        <label for="telephone">What is 2+3+1? (Anti Spam)*</label>
                        <input type="tel" class="form-control" name="human" id="telephone" placeholder=" Prove You are not a Rebot" >
                    </div>
                    <div class="form-group">
                        <label for ="description"> Message*</label>
                        <textarea  class="form-control" name="message" id="message" placeholder="Enter Your Message" required></textarea>
                    </div>



                </div>
                <button type="submit" name="contact" id= "description" class="btn btn-info" style="float: right; margin-right: -10px; ">
                   Send Message</button>
            </form>
        </div>
</section>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>


</html>
<?php
include("includes/connect.php");
if(isset($_POST['contact'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subj = mysqli_real_escape_string($con,$_POST['subject']);
    $human = mysqli_real_escape_string($con,$_POST['human']);
    $msg = mysqli_real_escape_string($con,$_POST['message']);

    $from = "From: $name";
    $to = 'himalayapublishing@gmail.com';


    $body = "From: $name\n E-Mail: $email\n Message: $msg";


        if ($name != '' && $email != '' && $subj != '' && $human != '' && $msg != '') {
            if ($human == '6') {
                if (mail ($to, $subj, $body, $from)) {
                    $query = "INSERT INTO email (username,email,subject,human,message)
    values('$name', '$email', '$subj','$human', '$msg')";
                    if(mysqli_query($con, $query))
                    {
                        echo "<script>alert('Thank You $name, We will get back to you...')</script>";
                    }


                } else {
                    echo "<script>alert('Something went wrong, go back and try again!')</script>";
                }
            } else {
                echo "<script>alert('You answered the anti-spam question incorrectly!')</script>";
            }
        } else {
            echo "<script>alert('You need to fill all required fields!!')</script>";
        }

}
?>
