<?php
//configDb.php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sistemadelogin";


$conecta = new mysqli($dbhost, dbuser, $dbpass, $dbname);
if($conecta->conect_error){
    die("Não foi possível conectar ao banco de dados" . $connect_error);
}else{
    echo "<h1>Conectou no BD manoooo!</h1>";
}