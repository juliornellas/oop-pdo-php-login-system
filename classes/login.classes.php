<?php

class Login extends Dbh{

    protected function getUser($uid, $pwd){
        $statement = $this->connectDb()->prepare('SELECT users_pwd FROM users WHERE users_id = ? OR users_email = ? ;');

        if(!$statement->execute(array($uid, $pwd))){
            $statement = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        if($statement->rowCount() == 0){
            $statement = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

        //Esse parametro (PDO::FETCH_ASSOC) poderia ser setado diretamente na conexão
        //Informando o modo como os dados serão retornados, no caso array associado
        $pwdHashed = $statement->fetchAll(PDO::FETCH_ASSOC); 

        //Por ser um Array precisa-se acessa-lo com [0], [1], etc
        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]); //metodo built-in. Retorna true or false

        if($checkPwd == false){

            $statement = null;
            header("location: ../index.php?error=wrongpassword");
            exit();

        }elseif($checkPwd == true){

            $statement = $this->connectDb()->prepare('SELECT * FROM users WHERE users_id = ? OR users_email = ? AND users_pwd = ? ;');
            if(!$statement->execute(array($uid, $uid, $pwd))){
                $statement = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }

            if($statement->rowCount() == 0){
                $statement = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $statement->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruid"] = $user[0]["users_uid"];

        }

        $statement = null;

    }
}