<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'mysite');
    
    $mysqli = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysqli->connect_errno) exit('Ошибка соединения с БД');
    $mysqli->set_charset('utf8');
    
    $result_set = $mysqli->query('SELECT * FROM `secret_users`');
    $table = [];
    while (($row = $result_set->fetch_assoc()) != false) {
        $table[] = $row;
    }
    print_r($table);
    
    $mysqli->close();
?>

