<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('DB', 'math');

try {
    $DBconnect = mysqli_connect(HOST, USER, PASS, DB);
} catch (Exception $e) {
    echo $e->getMessage();
    exit();
}