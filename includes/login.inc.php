<?php

if(isset($_POST["submit"]))
{
    //Recebe os dados
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    //Instanciar Classes **Atenção a ORDEM
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-controller.classes.php";

    $login = new LoginController($uid, $pwd);

    //Verificando Erros e login do usuario
    $login->loginUser();

    //Retornando a pagina inicial
    header("location: ../index.php?error=none");

}