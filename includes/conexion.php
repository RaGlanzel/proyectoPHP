<?php

$server = 'localhost:3316';
$username = 'root';
$password = '';
$database = 'blog_master';
$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf-8'");

//INICIAR LA SESION
session_start();