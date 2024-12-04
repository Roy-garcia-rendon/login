<?php
if(!empty($_POST["login"])){/* si los campos se encuentran vacios*/
    if(empty($_POST["ususario"]) and empty($_POST["password"])){
        echo '<div class="alert alert-danger">los campos estan vacios</div>';
    } else {
        $usuario=$_POST["usuario"];
        $password=$_POST["password"]; /* se consulta en la base de datos si usuarios y clave coinsiden y se encuantran en la base de datos*/
        $sql=$conexion->$query("SELECT * from usuarios where usuarios='$usuarioa' and password='$password' ");/* remplasar por tus registros de base de datos*/
        /* si los datos eccisten se realiza la siguinte accion*/
        if($datos=$sql->fetch_object()){
            /* se redirecciona al archivo deseado */
            header("location:menu.html"); /* remplasar por tu archivo*/
       /* sino*/
        } else{/* se denega la accion si estos no se encuantran dados de alta en la base de datos */
        echo '<div class="alert alert-danger">acceso denegado</div>';
    }
}
}

/* tener en tu index el siguiente codigo 
include("conexion.php");
include("login.php");*/
