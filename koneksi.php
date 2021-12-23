<?php
    $host = "localhost";
    $dbUN = "id17333889_dbcit";
    $dbPW = "@isQ?G96Ce/f4bsj";
    $dbName = "dbcit";

    $conn = new mysqli($host, $dbUN, $dbPW, $dbName);

    if ($conn -> connect_error) {
        die("Database tidak terkoneksi".$conn -> connect_error);
    }
?>