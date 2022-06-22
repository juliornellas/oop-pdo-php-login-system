<?php
//Database handler
class Dbh {

    protected function connectDb(){
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('msqli:host=localhost:3308;dbname=ooplogin', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            echo "<pre>";
            var_dump($e);
            echo "</pre>";
            print "Error!: ".$e->getMessage()."<br />";
            die();
        }

        // Create connection
        // define('DB_HOST', 'localhost:3308');
        // define('DB_USER', 'root');
        // define('DB_PASS', '');
        // define('DB_NAME', 'ooplogin');
        // $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        // if ($conn->connect_error) {
        //     die('Connection failed: ' . $conn->connect_error);
        // }
        // return $conn;
    }

}