<?php
$server ="localhost";
$username ="root"; //root = server user name, 
$password ="";
$database ="healthsync";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("Error".mysqli_connect_error());
}
?>