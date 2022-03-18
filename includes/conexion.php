<?php
$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$basededatos = 'blog';
$db= mysqli_connect($servidor, $usuario, $contraseña, $basededatos);

mysqli_query($db, "SET NAMES 'utf-8");

// INICIAR SESION
session_start();