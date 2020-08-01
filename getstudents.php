
<?php
    header("Content-Type:text/xml;");
    $arr=array();
    $arr[0]=array("name"=>"张三"，"age"=>"20"，"sex"=>"男");
    $arr[1]=array("name"=>"李四"，"age"=>"18"，"sex"=>"男");
    $arr[2]=array("name"=>"王五"，"age"=>"17"，"sex"=>"男");


?>
<?xml version="1.0" encoding="utf-8" ?>
<studentlist>
    <student>
        <name>张三</name>
        <age>20</age>
        <sex>男</sex>
    </student>

    <student>
         <name>李四</name>
         <age>18</age>
         <sex>男</sex>
    </student>

    <student>
         <name>王五</name>
         <age>17</age>
         <sex>男</sex>
    </student>


</studentlist>