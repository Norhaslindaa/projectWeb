<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'car';
$conn = new mysqli($server, $username, $password, $dbname);

session_start();