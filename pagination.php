<?php  
 //pagination.php  
 include("includes/connect.php");
  date_default_timezone_set("Asia/Karachi");
 $record_per_page = 8;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM pages ORDER BY id DESC LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($con, $query);  
 $output .= "  
      <table class='table table-bordered'>  
           <tr class='bg-warning'> 
                <td align='center'>#</td> 
                <td align='center'>Date</td>  
                <td align='center'>File Name</td>  
                <td align='center'>Image</td>  
                <td align='center'>Delete</td>
                <td align='center'>Update</td>    
           </tr>  
 ";  
 while($row = mysqli_fetch_array($result))  
 {   

           $id = $row['id'];

           $date_of = $row['date_to'];

            $save = "uploads/thumbs"."/".$row['save_name'];

            $filename = $row['file_name'];
          
      $output .= '  
           <tr>  
                <td align="center" style="padding-top: 1cm;">'.$row["id"].'</td>
                <td align="center" style="padding-top: 1cm;">'.$row["date_to"].'</td>
                <td align="center" style="padding-top: 1cm;">'.$row["file_name"].'</td> 
                <td align="center" style="padding-top: 1cm;"><a href='.$save.'><img src='.$save.' width="100" height="100" border="0"></a></td>
                
                <td align="center" style="padding-top: 1cm;"><a href="delete.php?delete='.$id.'" class="btn btn-danger">Delete</a>
       
      </td>
       <td align="center" style="padding-top: 1cm;">
        <a href="update_img.php?update='.$id.'" class="btn btn-primary">Update Image</a>
        <a href="update_name.php?update='.$id.'" class="btn btn-info">Update Name</a>

      </td>    
           </tr>  
      ';  
 }  
 $output .= '</table><br /><div align="center">';  
 $page_query = "SELECT * FROM pages ORDER BY id DESC";  
 $page_result = mysqli_query($con, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?>  