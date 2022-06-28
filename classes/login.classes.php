<?php

class Login extends Dbh{

    protected function getUser($uid, $pwd){
        $statement = $this->connectDb()->prepare('SELECT users_pwd FROM users WHERE users_id = ? OR users_email = ? ;');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$statement->execute(array($uid, $hashedPwd))){
            $statement = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        $statement = null;

    }
}