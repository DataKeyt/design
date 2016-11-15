<?php
/**
 * Created by PhpStorm.
 * User: DataKeyt
 * Date: 23.03.2016
 * Time: 9:34
 */
$db_server='localhost';
$db_database='retekeytuibo_praktikum';
$db_user='retekeytuibo';
$db_password='lie2eimu';
$connection= mysqli_connect('$db_server', '$db_duser', '$db_password', '$db_database');

if(!$connection) {
die ('Can not connect to database');
}

$paring = 'SELECT * FROM Synnid';
$valjund = mysqli_query($connection, $paring);