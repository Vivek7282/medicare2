<?php

$mysqli = new mysqli('localhost','root','','Dean_Acadmics');

if($mysqli->conect_error){
    die('Cannot connect with database');
} 

  //echo 'Database connected';
?>