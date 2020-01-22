<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
* Date: 2020-01-22
* Time: 10:33
*/

$host = 'localhost';
$db = 'moviedb';
$username = "root";
$password = "";

$options = [
    PDO::ATTR_ERRMODE               =>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    =>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES      =>false
];

$dsn = "mysql:host=$host;dbname=$db";
$conn = new PDO($dsn, $username, $password, $options);