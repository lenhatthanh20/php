<?php
/**
 * Created by PhpStorm.
 * User: NhatThanh
 * Date: 11/06/2018
 * Time: 7:28 PM
 */
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'phpdatabase';
$port = '3306';

$connect = mysqli_connect($host, $user, $password, $database, $port);

var_dump($connect);

$sql = "SELECT * FROM `hocsinh` WHERE true";

$ketqua = mysqli_query($connect, $sql);
print "<br>";
print "<br>";
var_dump($ketqua);

$arrayketequa = mysqli_fetch_assoc($ketqua);
print "<br>";
print "<br>";
print "<br>";
var_dump($arrayketequa);

