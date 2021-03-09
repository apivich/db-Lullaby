<?php

class Data_Base
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "db_lullaby";

    private function check_sql()
    {
        $mysqli = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if ($mysqli->connect_errno) {
            echo 'Failed to connect to MySQL:' . $mysqli->connect_error;
            exit();

        } else {
            return $mysqli;
        }
    }
    public function field_count() //ยัง
    {
        $mysqli = $this->check_sql();
        $mysqli->query("SELECT * FORM $this->dbname");
        echo $mysqli->affected_rows;
    }
}
