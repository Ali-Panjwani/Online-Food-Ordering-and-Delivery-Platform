<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "db_sda");

        $ddid = 1;
        $ddq = 2;
        $sqlls = 'Select CheckDStock(1,2) from dish';
        $result = mysqli_query($connect, $sqlls);
        $row = $result->fetch_assoc();
        echo $row;
            

?>