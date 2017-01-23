<?php

session_start();
if(!isset($_SESSION['logado'])){
    header('location:login.php');
}

//Checa se está logado, caso não esteja vai direcionar para login.php...
