<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'ifsp';
$port = 3307;

$con = mysqli_connect($hostname,$username,$password,$database,$port);

if (mysqli_connect_error())
{
    printf("Erro conexãp: %s, mysqli_connect_error()");
    exit();
}
?>