<?php
session_start();
//var_dump($_POST);

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";

//echo $sql;

$bd = new SQLite3('login.db');
$bdresult = $bd->query($sql);
$usuario_encontrado = $bdresult->fetchArray();
if($usuario_encontrado){
    $_SESSION['nombre_completo'] = $usuario_encontrado['nombre_completo'];
    echo $_SESSION['nombre_completo'];
    header('Location: portada.php');
}else{
    echo "Usuario o contraseña incorrecta";
}
