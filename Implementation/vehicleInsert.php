<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
require 'connection.php';
createStudent(); 
}
function createStudent()
global $connect;
$vehicle=$_POST["vehiclename"];
$date=$_POST["renewdate"];
$fuel=$_POST["fuel"];
$query="INSERT INTO vehicles(vehiclename,renewdate,fuel)
 values('$vehicle','$date','$fuel')";
mysqli_query($connect,$query) or die(mysqli_error($connect));
mysqli_close($connect);
?>
