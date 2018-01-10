<html>
<head>
 <title>Insert News</title>
</head>
<body>
<form method="post" action="insert_post.php" enctype="multipart/form-data">
<table align="center" border="10" width="600">
 <tr>
  <td align="center" colspan="5" bgcolor="yellow"><h1>Insert New Post Here</h1></td>
 </tr>
 <tr>
   <td align="right">Post Title</td>
   <td ><input type="text" name="title" size="50"></td>
 </tr>
 <tr>
   <td align="right">Post Page1</td>
   <td><input type="file" name="img2"></td>
 </tr>
 <tr>
   <td align="right">Post Page2</td>
   <td><input type="file" name="img2"></td>
 </tr>
 <tr>
   <td align="right">Post Page3</td>
   <td><input type="file" name="img3"></td>
 </tr>
 <tr>
   <td align="right">Post Page4</td>
   <td><input type="file" name="img4"></td>
 </tr>
 <tr>
   <td align="right">Post Page5</td>
   <td><input type="file" name="img5"></td>
 </tr>
 <tr>
   <td align="right">Post Page6</td>
   <td><input type="file" name="img6"></td>
 </tr>
 <tr>
   <td align="right">Post Page7</td>
   <td><input type="file" name="img7"></td>
 </tr>
 <tr>
   <td align="right">Post Page8</td>
   <td><input type="file" name="img8"></td>
 </tr>
 <tr>
   <td align="center" colspan="5"><input type="submit" name="submit" value="Publish Now"></td>
 </tr>
</table>

</form>
</body>
</html>
<?php
  include("includes/connect.php");
   if(isset($_POST['submit'])){
	  
	  $title=$_POST['title'];
	  $date=date('m-d-y');
	  $page1_name=$_FILES['page1']['name'];
	        $page1_type=$_FILES['page1']['type'];
			$page1_size=$_FILES['page1']['size'];
			$page1_tmp=$_FILES['page1']['tmp_name'];
	  $page2_name=$_FILES['page2']['name'];
	        $page2_type=$_FILES['page2']['type'];
			$page2_size=$_FILES['page2']['size'];
			$page2_tmp=$_FILES['page2']['tmp_name'];
	  $page3_name=$_FILES['page3']['name'];
	        $page3_type=$_FILES['page3']['type'];
			$page3_size=$_FILES['page3']['size'];
			$page3_tmp=$_FILES['page3']['tmp_name'];
	  $page4_name=$_FILES['page4']['name'];
	        $page4_type=$_FILES['page4']['type'];
			$page4_size=$_FILES['page4']['size'];
			$page4_tmp=$_FILES['page4']['tmp_name'];
	  $page5_name=$_FILES['page5']['name'];
	        $page5_type=$_FILES['page5']['type'];
			$page5_size=$_FILES['page5']['size'];
			$page5_tmp=$_FILES['page5']['tmp_name'];
	  $page6_name=$_FILES['page6']['name'];
	        $page6_type=$_FILES['page6']['type'];
			$page6_size=$_FILES['page6']['size'];
			$page6_tmp=$_FILES['page6']['tmp_name'];
	  $page7_name=$_FILES['page7']['name'];
	        $page7_type=$_FILES['page7']['type'];
			$page7_size=$_FILES['page7']['size'];
			$page7_tmp=$_FILES['page7']['tmp_name'];
	  $page8_name=$_FILES['page8']['name'];
	        $page8_type=$_FILES['page8']['type'];
			$page8_size=$_FILES['page8']['size'];
			$page8_tmp=$_FILES['page8']['tmp_name'];
			
	if($title=='' or $page1=='' or $page2=='' or $page3=='' or $page4=='' or $page5=='' or $page6 =='' or $page7=='' or $page8=='')
	{
		echo "<script>alert('Any field is empty')</script>";
		exit();
	}
	  if($page1_type== "page1/jpeg" or $page1_type=="page1/png" or $page1_type=="page1/gif"){
		  if($page1_size<=50000){
			  move_uploaded_file($page1_tmp,"images/$page1_name");
		  }
		  else{
			  echo "<script>alert('Image is large, only 50kb size is allowed')</script>";
		  }
		  //else{
			  //echo "<script>alert('Image type is invalid')</script>";
	  //}
	  $query="insert into news(news_title,news_date,page1,page2,page3,page4,page5,page6,page7,page8)
	  values('$title','$date','$page1','$page2','$page3','$page4','$page5','$page6',$page7','$page8')";
	  if(mysql_query($query)){
		  echo "<center><h1>News has been Published</h1></center>";
	  }
  }
   }
?>