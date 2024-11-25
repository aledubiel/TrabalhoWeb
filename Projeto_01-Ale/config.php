<?php
    session_start();
    define('INCLUDE_PATH', 'http://localhost/Projeto_01-Ale/');
    define('INCLUDE_PATH_PAINEL', INCLUDE_PATH.'painel/');

    $autoload = function($class){
        include('assets/classes/'.$class.'.php');
    };

    spl_autoload_register($autoload)
?>

