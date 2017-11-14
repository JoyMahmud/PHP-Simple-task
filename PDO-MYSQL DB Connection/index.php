<?php

// PDO
$pdo = new PDO("mysql:host=localhost;dbname=database", 'username', 'password');

// mysqli, procedural way
$mysqli = mysqli_connect('localhost','username','password','database');

// mysqli, object oriented way
$mysqli = new mysqli('localhost','username','password','database');