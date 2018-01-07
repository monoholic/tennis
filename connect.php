<?php
    $host = 'tennisline.cafe24.com';
    $user = 'tennisline';
    $pw = 'Gogossing52';
    $dbName = 'tennisline';
    $mysqli = new mysqli($host, $user, $pw, $dbName);
 
    if($mysqli){
        echo "MySQL 접속 성공";
    }else{
        echo "MySQL 접속 실패";
    }
?>