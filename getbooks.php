<?php
    header("Content-Type:text/xml;");
    $arr=array();
    $arr[0]=array("name"=>"三国演义"，"author"=>"罗贯中"，"desc"=>"一个杀伐纷争的年代");
    $arr[1]=array("name"=>"水浒传"，"author"=>"施耐庵"，"desc"=>"108条好汉的故事");
    $arr[2]=array("name"=>"西游记"，"author"=>"吴承恩"，"desc"=>"佛教与道教斗争");
    $arr[3]=array("name"=>"红楼梦"，"author"=>"曹雪芹"，"desc"=>"一个封建王朝的缩影");

?>
<?xml version="1.0" encoding="utf-8" ?>
<booklist>
    <book>
        <name>三国演义</name>
        <author>罗贯中</author>
        <desc>一个杀伐纷争的年代</desc>
    </book>

    <book>
        <name>水浒传</name>
        <author>施耐庵</author>
        <desc>108条好汉的故事</desc>
    </book>

    <book>
        <name>西游记</name>
        <author>吴承恩</author>
        <desc>佛教与道教斗争</desc>
    </book>

    <book>
        <name>红楼梦</name>
        <author>曹雪芹</author>
        <desc>一个封建王朝的缩影</desc>
    </book>
</booklist>
