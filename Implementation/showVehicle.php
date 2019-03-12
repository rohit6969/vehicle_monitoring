<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
include 'connection.php';
showVehicle();
}
function showVehicle()
{
global $connect;
$query="SELECT * FROM vehicles";
$result=mysqli_query($connect,$query);
$count_row=mysqli_num_rows($result);
$t_array=array();
if ($count_row >0)
{
while ($row=mysqli_fetch_assoc($result)){
$t_array[]=$row;

}

}
header('Content-Type:application/json');
echo json_encode(array("vehicles"=>$t_array));
mysqli_close($connect);
}
?>






?>
