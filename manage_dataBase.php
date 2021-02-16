<?php

class Data_Base
{
    private $hostname = "localhost";
    private $username = "root";
    private $password = " ";
    private $dbname = "db_lullaby"; 

    public function check_sql()
    {
        $mysqli = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
        if ($mysqli -> connect_errno) {
            echo ("Failed to connect to MySQL:" . $mysqli -> connect_error);
            exit();
          }
          
          // Perform a query, check for error
          if (!$mysqli -> query("INSERT INTO Persons (FirstName) VALUES ('Glenn')")) {
            echo("Error description: " . $mysqli -> error);
          }
          
          $mysqli -> close();
    }
}
