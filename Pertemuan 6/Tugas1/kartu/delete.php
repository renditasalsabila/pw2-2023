<?php
require_once '../dbkoneksi.php';
$_iddel = $_GET['iddel'];

$dbh->query("DELETE FROM kartu WHERE id=$_iddel");


// redirect page
header('location:list.php');
