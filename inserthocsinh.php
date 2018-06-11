<?php
/**
 * Created by PhpStorm.
 * User: NhatThanh
 * Date: 11/06/2018
 * Time: 7:54 PM
 */

include "connectdatabase.php";

//var_dump($connect);

$ten=$_POST["ten"];
$tuoi=$_POST["tuoi"];
$gioitinh=$_POST["gioitinh"];
$sothich=$_POST["sothich"];

$insert = "INSERT INTO `hocsinh`(`ten`, `tuoi`, `gioitinh`, `sothich`)";
$insert .= "VALUES ('$ten','$tuoi','$gioitinh','$sothich')";

$insertketqua = mysqli_query($connect, $insert);
var_dump($insertketqua);