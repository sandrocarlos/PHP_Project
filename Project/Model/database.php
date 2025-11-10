<?php 
    function get_db_conn()
    {
        // Connection to Database
        $hostname = "localhost";
        $username = "alewil7218";
        $password = "my#P@zZw0rD";
        // $dbname = "product";
        $dbname = "window_shopping";

        return mysqli_connect($hostname, $username, $password, $dbname);
    }
?>