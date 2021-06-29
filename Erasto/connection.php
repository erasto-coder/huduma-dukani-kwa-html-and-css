<?php 
$first = $_GET["firstname"];
$babu = $_GET["surname"];
$jinsi = $_GET["gender"];
$umri = $_GET["age"];
$siku = $_GET["dob"];




$connect=mysqli_connect("localhost","root","","erasto");

$sql="insert into user values ('$first','$babu','$jinsi','$umri','$siku')";

$query=mysqli_query($connect,$sql);

if($query){
    echo "you have been succefully registered";
}
else{
    echo "connection error";
}


?>