<?php

if(isset($_POST["submit"]))
{
    //Recebe os dados
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    //Instanciar Classes **Atenção a ORDEM
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-controller.classes.php";

    $signup = new SignupController($uid, $pwd, $pwdRepeat, $email);

    //Verificando Erros e signup do usuario
    $signup->signupUser();

    //Retornando a pagina inicial
    header("location: ../index.php?error=none");

}