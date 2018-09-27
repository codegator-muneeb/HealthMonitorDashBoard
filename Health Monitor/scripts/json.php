<?php
include "db.php";
$data=array();
$name = array();$q=mysqli_query($con,"select * from healthdata");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
 $name[] = $row->Service_Name;
}
$fp = fopen('names.json', 'w');
fwrite($fp, json_encode($name));
fclose($fp);
echo json_encode($data);
?>