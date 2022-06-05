<?php

$mysqli = new mysqli('localhost','root','','Medicare');

if($mysqli->conect_error){
    die('Cannot connect with database');
} 

// echo 'Database connected';
?>