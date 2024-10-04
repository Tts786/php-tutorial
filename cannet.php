<?php
$conn= new mysqli("localhost","root","","crud");


if($conn){
echo "DB Connected Successfully";
}else{
echo "DB Connection Failed";
}
?>