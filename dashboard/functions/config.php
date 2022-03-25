<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'hotel');

    function connectDb($params=[])
    {
        if(sizeof($params)==0) 
        {
            $params['DB_HOST']=DB_HOST;
            $params['DB_USER']=DB_USER;
            $params['DB_PASSWORD']=DB_PASSWORD;
            $params['DB_NAME']=DB_NAME;
        }
        return mysqli_connect($params['DB_HOST'], $params['DB_USER'], $params['DB_PASSWORD'], $params['DB_NAME']);
    }
?>