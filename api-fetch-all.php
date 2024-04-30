<?php
header('Content-type: application/json');

include "config.php";


$sql = "select *from student";
$result = mysqli_query($con,$sql) or die("Query failed");

if(mysqli_num_rows($result) > 0){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);

}else{
    echo json_encode(array('message' => 'no record found','status'=> false));
}



?>
