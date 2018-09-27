<?php
include "db.php";
$data=array();
$q=mysqli_query($con,"select healthdata.* from healthdata, names where healthdata.Service_Name = names.Service_Name; ");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
$fp = fopen('results1.json', 'w');
fwrite($fp, json_encode($data));
fclose($fp);
echo json_encode($data);
?>