<!DOCTYPE html>
<html> 

<title>Daily Sada-e-Himalaya</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style1.css"/>
<link rel="stylesheet" type="text/css" href="css/chromestyle.css" />
<script type="text/javascript" src="js/chrome.js"></script>
<script type="text/javascript" src="js/jsq.js"></script> 
</head>
<body>
<div id="head">
<img src="images1/logo1.jpg" alt="Logo area" style="width:980px;height:180px">
</div>
<div id="header">
 <div id="ads">
  <table align="center">
    <tr>
	   <td>
	     <a href="" target="_blank"><img src="images1/ads1.png" alt="image" width="317" height="90"  border="0"  /></a>
	   </td>
	   <td>
	     <a href="" target="_blank"><img src="images1/tggb.jpg" alt="image" width="317" height="90"  border="0" /></a>
	   </td>
	   <td>
	      <a href="https://www.facebook.com/TGGBPK/" target="_blank"><img src="images1/ttgb2.jpg" alt="image" width="317" height="90" border="0" /></a>
	   </td>
	</tr>
  </table>
 </div>
</div>
<div id="breakingnews">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="91%" valign="middle">
	<div align="right">
      <marquee truespeed="truespeed" direction="right" scrolldelay="200" >
 <a href="javascript: void(0)" 
   onclick="" class="style1"><strong></strong></a>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style2">|</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       </marquee>
    </div>
	</td>
    <td width="9%"><div class="news"></div></td>
  </tr>
</table>
</div>
<div id="menubar">
   <div class="chromestyle" id="chromemenu">
    <table width="96%" border="0" align="right" cellpadding="2" cellspacing="2">
	  <tr>
	    <td>
		  <!-- <form name="form" id="form"> -->
		   <div align="left">
		    
              
			  <form action="" method="get">
              <span> Date:</span>
                  <input type="date" name="search"/>
                  <button type="submit" name="btn" >Search</button>
              </form>
		   </div>
		 <!-- </form> -->
		</td>
		<td width="7%"><img src="images1/daly.jpg" /></td>
        <td width="11%">
		  <a href="#"><img src="images1/vedio.jpg" width="56" height="25" border="0" /></a>
		</td>
        <td width="11%">
		  <a href="#" rel="dropmenu3"><img src="images1/page.jpg" border=0/></a>
		</td>
        <td width="10%">
		  <a href="#" rel="dropmenu2"><img src="images1/adision.jpg" border=0/></a>
		</td>
		<!--
        <td width="9%">
		<a href="#" rel="dropmenu1"><img src="images1/NEWS.jpg" border=0/></a>
		</td>
		-->
	    <td width="11%">
		<a href="index.php"><img src="images1/firstpage.jpg" width="60" height="25" border="0" /></a>
		</td>
	  </tr>
	</table>
   </div>
   <!-- pages -->
<div id="dropmenu3" class="dropmenudiv"  style="text-align:left;">
      <a href="#" ><strong>1-Front</strong></a>
      <a href="#" ><strong>2-News</strong></a>
      <a href="#" ><strong>3-News</strong></a>
      <a href="#" ><strong>4-Editorial</strong></a>
      <a href="#" ><strong>5-Sports</strong></a>
      <a href="#" ><strong>6-Classified</strong></a>
      <a href="#" ><strong>7- Baqia</strong></a>
      <a href="#" ><strong>8-Back Page</strong></a>
      <a href="#" ><strong>Sup1</strong></a>
      <a href="#" ><strong>Sup2</strong></a>
      <a href="#" ><strong>Sup3</strong></a>
      <a href="#" ><strong>Sup4</strong></a>
  </div>
  <!-- editions -->
<div id="dropmenu2" class="dropmenudiv" style="text-align:left;">
    <a  href="index.php?eid=1&nid=1"   >Gilgit</a>
        <a  href="#"   >Place Name</a>
        <a  href="#"   >Place Name</a>
    </div>
	<!-- newspapers                                                   
<div id="dropmenu1" class="dropmenudiv" >
      <a href="index.php?nid=1"><img src="" border="0" /></a>
        <a href="#"><img src="" border="0" /></a>
        <a href="#"><img src="" border="0" /></a>
    </div>
	--> 
	   <script type="text/javascript">
      cssdropdown.startchrome("chromemenu")
      </script>

</div>
</div>

 <?php
 date_default_timezone_set("Asia/Karachi");
  include("includes/connect.php");
 
$pid = @$_GET['pid'];
    $que  = "SELECT * FROM pages where id ='$pid'";
  $run = mysqli_query($con, $que);
 $f_result = mysqli_num_rows($run);
  if ($f_result > 0)
      {
          while($row = mysqli_fetch_array($run))
      {
          $id = $row['id'];

           $date_of = $row['date_to'];
  
           $img = "uploads/thumbs"."/".$row['file_name'];
  
    }
  }

?>

 <div id="maincontent">
 
  
  <img id="mainImage" src="<?php echo $img; ?>" width="980" name="gallerya"/>

</div>

 <div id="header">
<div id="ads">
<table align="center">
<tr>
<td>
<a href="#" target="_blank"><img src="images1/ads1.png" width="317" height="60" border="0"/></a></td>
<td>
<a href="#" target="_blank"><img src="images1/ads.jpg" width="317" height="60" border="0"/></a></td>
<td>
<a href="#" target="_blank"><img src="images1/ttgb1.jpg" width="317" height="60" border="0" /></a></td>
</tr>
</table>
</div>
</div>
<div id="thumbs">
<table width="100%">
<tr>

  
<td width="5%" valign="top">
<a href="/index.php?pageNum_thumbs=0&totalRows_thumbs=8">
<img src="images1/left.jpg" border="0" title="prev" /></a>
</td>



<?php
date_default_timezone_set("Asia/Karachi");
    include("includes/connect.php");
if(!isset($_GET['btn'])) {
    $date = date("y.m.d");
    $result = "select * from pages WHERE date_to = '$date'";
    $run = mysqli_query($con, $result);
    $f_result = mysqli_num_rows($run);
    if ($f_result > 0) {
        $count = 0;
        while ($row = mysqli_fetch_array($run)) {

            $id = $row['id'];
            $date_of = $row["date_to"];
            $img = "uploads/thumbs" . "/" . $row["file_name"];
            ?>
            <td width="91%" valign="middle">
                <a href='index.php?pid=<?php echo $id; ?>'><img id="imageIcon<?php echo $count; ?>"
                                                                src="<?php echo $img; ?>" alt="Page # 1" width="82"
                                                                height="82" border="2"
                                                                style="border-color: #0099CC"/></a>
                &nbsp;&nbsp;
            </td>
            <?php
            $count++;
        }
    }
    elseif($f_result == 0) {
        $result = "SELECT * FROM pages WHERE date_to BETWEEN DATE_ADD(CURDATE(), INTERVAL -2 day) AND CURDATE()";
        $run = mysqli_query($con, $result);

       if (mysqli_num_rows($run) > 0){
           $count = 0;
           while ($row = mysqli_fetch_array($run)) {
               $id = $row['id'];
               $date_of = $row["date_to"];
               $img = "uploads/thumbs" . "/" . $row["file_name"];
               ?>
               <td width="91%" valign="middle">
                   <a href='index.php?pid=<?php echo $id; ?>'><img id="imageIcon<?php echo $count; ?>"
                                                                   src="<?php echo $img; ?>" alt="Page # 1" width="82"
                                                                   height="82" border="2"
                                                                   style="border-color: #0099CC"/></a>
                   &nbsp;&nbsp;
               </td>
               <?php
               $count++;
           }
       }
    }
 }
?>
    <?php
    date_default_timezone_set("Asia/Karachi");
    include("includes/connect.php");
if(isset($_GET['btn'])) {

          $search = $_GET['search'];
          $que = "SELECT * FROM pages WHERE date_to = '$search'";
          $run1 = mysqli_query($con, $que);
          $f_result1 = mysqli_num_rows($run1);
          if ($f_result1 > 0) {
              $count = 0;
              while ($row = mysqli_fetch_array($run1)) {
                  $id = $row['id'];
                  $date_of = $row['date_to'];
                  $img = "uploads/thumbs" . "/" . $row['file_name'];


                  ?>
                  <td width="91%" valign="middle">


                      <a href='index.php?pid=<?php echo $id; ?>'><img id="imageIcon<?php echo $count; ?>"
                                                                      src="<?php echo $img; ?>" alt="Page # 1"
                                                                      width="82" height="82" border="2"
                                                                      style="border-color: #0099CC"/></a>
                      &nbsp;&nbsp;

                  </td>
                  <?php
                  $count++;
              }
          }

      }

    ?>



   



<td width="4%" align="right" valign="top">
<a href=""><img src="images1/right.jpg" border="0" title="next" /></a>
</td>
</tr>
</table>
</div>
<div id="footer">
<div class="copyrights">
  <div align="center"><span class="style31">Daily Sada-e-Himalaya</span></div>
</div>
<div id="footernav">
  
  <div align="center">
    <table width="100%" height="51" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33">
            <div align="right">
			    <a href="index.php"><strong>Home</strong></a>  
                <a href="#"><strong>About Us</strong></a>
                <a href="#"><strong>Contact Us</strong></a>				
                <a href="https://www.facebook.com/najuo.f?ref=bookmarks"><strong>Developer</strong></a>  
			 </div>
		 </td>
        </tr>
        <tr>
             <td valign="bottom">
			   <div align="left" class="style5">
                 <div align="right">
			       Copyrights &copy;2018 www.Dailysadaehimalya.com, All rights reserved. 
			     </div>
              </div>
		    </td>
        </tr>
      </table>
      <br />
  </div>
</div>  
<div class="icons">
<!--<a href="#"><img src="images1/icon1.jpg" border="0" class="iconimage" title="share"/></a> -->
<a href="#"><img src="images1/twt.jpg" border="0" class="iconimage"  title="twitter"/></a> 
<a href="#"><img src="images1/fb.jpg" border="0" class="iconimage"  title="facebook"/> </a>
<a href="#"><img src="images1/utb.jpg" border="0" class="iconimage"   title="youtube"/></a></div>
</div>
<script>
    $(document).ready(function(){

        var tech = getUrlParameter('pid');
        if(!tech) {
            $("#mainImage").attr('src', $("#imageIcon0").attr('src'));
        }
    });

    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };
</script>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</html>