<?php
session_start();
require_once 'configDB.php';

if(isset($_SESSION['nomeUsuario'])){
    echo "usuário logado!";
}else{

    header("location: index.php");
}