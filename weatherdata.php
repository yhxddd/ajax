<?php
    $cbName=$_GET['callback'];
    $city=$_GET['city'];
    if($city=="beijing"){
        echo $cbName."('北京天气晴')";//这里输出得必须是JS语句
    }else{
        echo $cbName."('没有查询到天气信息')";
    }
?>