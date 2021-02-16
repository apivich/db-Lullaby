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
            // echo ("Failed to connect to MySQL:" . $mysqli -> connect_error);
            echo ('<script>consol.log("Failed to connect to MySQL");</script>');
            exit();
          }
          
          // Perform a query, check for error
          if (!$mysqli) {
            echo("Error description: ");
            echo ('<script>consol.log("t");</script>');
          }
          
          $mysqli -> close();
    }
}
