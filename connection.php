<?php

$dbhost ="localhost";
$dbname ="login_sample_db";
$dbuser ="root";
$dbpassword ="";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
    die("failed to connect!");
}

