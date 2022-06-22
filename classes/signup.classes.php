<?php

class Signup extends Dbh{

    protected function setUser($uid, $pwd, $email){
        $statement = $this->connectDb()->prepare('INSERT INTO users (users_id, users_pwd, users_email) VALUES (?,?,?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$statement->execute(array($uid, $hashedPwd, $email))){
            //
        }
        $statement = null;

    }

    //Verifica se o usuário existe
    protected function checkUser($uid, $email){
        //As (?) serão substituidas pelas variaveis no método EXECUTE()
        //Desse modo evitamos possibilidade do SQL Injection
        $statement = $this->connectDb()->prepare('SELECT users_id FROM users WHERE users_uid = ? OR users_email = ?;');
        
        //Como é mais de 1 variavel, precisa ser um array.
        //Retorna TRUE or FALSE
        //Verificamos se não aconteceu a consulta
        if(!$statement->execute(array($uid, $email))){
            //Uma vez que nao ocorra a consulta. Encerrar o statement
            $statement = null;
            //Direciona
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck = null;
        //rowCount retorna qtd de registros/linhas de uma consulta. No caso deve ser ao menos 1
        if($statement->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }

        return $resultCheck;
    }

}