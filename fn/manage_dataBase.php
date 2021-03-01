<?php

class Data_Base
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "db_lullaby";

    public function check_sql()
    {
        $mysqli = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        if ($mysqli) {
            echo ('<script>console.log("connect to MySQL 👍");</script>');
        }

        //error
        if (!$mysqli) {
            echo ('<script>console.log("Failed to connect to MySQL 😡");</script>');
        }

        mysqli_close($mysqli);
    }
}
