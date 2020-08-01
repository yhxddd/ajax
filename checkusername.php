<?php
    header('Access-Control-Allow-Origin: *');
    $username=$_GET['username'];
    if($username == 'kk'){
        echo "error";
    }else{
        echo "ok";
    }

?>