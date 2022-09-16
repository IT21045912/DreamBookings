<?php

//to store non repaeting data//
$host = "localhost";
$first_name = "root";
$password = "";
$db_name = "dreambooking";
if($connection = new mysqli($host,$first_name,$password,$db_name)){

}
else{
    echo'Error database conection';
    exit;
}
?>

