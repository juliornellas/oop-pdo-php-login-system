<?php
//Database handler
class Dbh {

    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "ooplogin";

    protected function connectDb(){
        try {
            $dsn = 'mysql:host=' . $this->host . ':3308;dbname=' . $this->dbName; // Data Source Name
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
            print "Error!: ".$e->getMessage()."<br />";
            die();
        }
    }

}