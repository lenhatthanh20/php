<?php
/**
 * Created by PhpStorm.
 * User: bihvt
 * Date: 11/06/2018
 * Time: 7:54 CH
 */

include "ketnoidatabase.php";

var_dump($connect);

$ten="aa";
$tuoi="34";
$gioitinh="bd";
$sothich="aaa";


$insert = "INSERT INTO `hocsinh`(`ten`, `tuoi`, `gioitinh`, `sothich`)";
$insert .= "VALUES ('" . $ten."', '" . $tuoi ."', '" . $gioitinh."', '" . $sothich."')";
var_dump($insert);

$insertketqua= mysqli_query($connect, $insert);
var_dump($insertketqua);


