<?php

    //在php中，获取一个链接中的数据
    //设置编码
    header("Content-Type:text/plain;charset=utf-8");
    $phoneNumber=$_GET['mobile'];
    //使用curl进行网络数据访问
    $ch=curl_init();
    //网络访问的url
    $url="http://apicloud.mob.com/appstore/lucky/mobile/query?key=216e7200443bb8&mobile=".phoneNumber;
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    //执行http请求
    curl_setopt($ch,CURLOPT_URL,$url);
    //得到数据
    $res=curl_exec($ch);
    echo $res;

?>