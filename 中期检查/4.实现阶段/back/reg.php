<?php
session_start();
error_reporting(E_ALL || ~E_NOTICE);

/*if(!isset($_POST['submit'])){
    exit('非法访问!');
}*/
$username = $_POST['username'];
$password = $_POST['password'];
//echo $username;
//echo "string";
//$email = $_POST['email'];
//注册信息判断
/*if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $username)){
    exit('错误：用户名不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
if(strlen($password) < 6){
    exit('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}*/
//if(!preg_match('/^w+([-+.]w+)*@w+([-.]w+)*.w+([-.]w+)*$/', $email)){
//    exit('错误：电子邮箱格式错误。<a href="javascript:history.back(-1);">返回</a>');
//}
//包含数据库连接文件
function sqls(){
$link = mysql_connect('bdm288172329.my3w.com', 'bdm288172329', 'zhj88280')
or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('bdm288172329_db') or die('er'.mysql_error());
mysql_query("set names 'utf8'",$link);
return $link;
}
$link=sqls();
//检测用户名是否已经存在
$check_query = mysql_query("select * from userinfo where name='$username' limit 1");
$ressult = mysql_fetch_array($check_query);
echo $ressult[name];
if($ressult[name]){
  echo "<script>alert('注册失败 请换个名称再次尝试')</script>";
  echo "<meta http-equiv=refresh content='0; url=regin.html'>";
  exit();
}
//写入数据
//exit();
//$password = MD5($password);
//$regdate = time();
$sql = "INSERT INTO userinfo(name,password)VALUES('$username','$password')";
if(mysql_query($sql,$link)){
  echo "<script>alert('$username ，$password 注册成功 ')</script>";
  echo "<meta http-equiv=refresh content='0; url=login.html'>";
} else {
    echo '抱歉！添加数据失败：',mysql_error(),'<br />';
    echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>
