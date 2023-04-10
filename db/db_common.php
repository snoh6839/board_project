<?php
function db_conn( &$param_conn )
{
    $host = "localhost";
    $user = "root";
    $pass = "root506";
    $charset = "utf8mb4";
    $db_name = "board_project";
    $dns = "myqul:host". $host.";dbname=". $db_name.";charset=".$charset;
    $pdo_option =
        array(
            PDO::ATTR_EMULATE_PREPARES => false
            ,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
    
    try {
        $param_conn = new PDO ($dns, $user, $pass, $pdo_option);
        return true;
    } catch (EXCEPTION $e) {
        $param_conn = null;
        throw new Exception($e->getMessage());
        
    }

}


?>