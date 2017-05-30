<?php
/*****************************
*数据库连接
*****************************/
$link=sqls();
    

function sqls(){
$link = mysql_connect('localhost', 'root', '123')
or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('user') or die('er'.mysql_error());
mysql_query("set names 'utf8'",$link);
return $link;
}

function sqlc($link){
    mysql_close($link);
}
?>
