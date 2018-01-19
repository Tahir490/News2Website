<?php
include("includes/connect.php");

$que = "SELECT * FROM pages ORDER BY id DESC LIMIT 1";
$run1 = mysqli_query($con, $que);
$f_result1 = mysqli_num_rows($run1);
if ($f_result1 > 0) {
    $count = 0;
    while ($row = mysqli_fetch_array($run1)) {
        $id = $row['id'];
        $date_of = $row['date_to'];
        $img = "uploads" . "/" . $row['file_name'];
        echo $id;
        echo $date_of;
        echo $img;
    }
}

?>
