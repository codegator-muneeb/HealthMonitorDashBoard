<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select * from healthdata where Status = 'Stopped' ");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
$fp = fopen('results2.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);
echo json_encode($data);
?>