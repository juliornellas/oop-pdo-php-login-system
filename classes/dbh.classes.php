<?php
//Database handler
class Dbh {

    protected function connectDb(){
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('msqli:host=localhost;port=3308;dbname=ooplogin', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
            print "Error!: ".$e->getMessage()."<br />";
            die();
        }
    }

}