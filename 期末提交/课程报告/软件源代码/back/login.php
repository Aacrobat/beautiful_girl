<?php
session_start();
//error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL || ~E_NOTICE);

//注销登录
if($_GET['actionn'] == "logout"){
    unset($_SESSION['password']);
    unset($_SESSION['username']);
    echo '注销登录成功！点击此处 <a href="login.html">登录</a>';
    exit;
}

//登录
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
//$username = htmlspecialchars($_POST['username']);
//$password = MD5($_POST['password']);
$username =$_POST['username'];
$password =$_POST['password'];
//包含数据库连接文件
//include('conn.php');
//检测用户名及密码是否正确
$link=sqls();
$ret = mysql_query("select * from userinfo where name='$username' and password='$password'");
$hret = mysql_query("select * from hostinfo where name='$username' and password='$password'");
$ress=mysql_fetch_array($hret);
$ures=mysql_fetch_array($ret);
echo  $ress[name];
if($ress[name]){
    //登录成功
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['pass'] = 'ok';
    //echo $username,' 欢迎你！进入 <a href="my.php">用户中心</a><br />';
    //echo '点击此处 <a href="login.php?action=logout">注销</a> 登录！<br />';
     //mysql_query("UPDATE `hostinfo` SET `lastintime`= time() WHERE name='$username'");
     $timelast=time();
     echo date('Y-m-d H:i:s',$timelast);
     $stringtime = date('Y-m-d H:i:s',$timelast);
     mysql_query("UPDATE `hostinfo` SET `lastintime`= $stringtime WHERE name='$username'");
    echo "<meta  url=userman.php>";
    echo "<script>alert(' $username 管理员登录成功 欢迎你进入')</script>";
      echo "<meta http-equiv=refresh content='0; url=userman.php'>";

} else if($ures[name]){
  echo "<meta http-equiv=refresh content='0; url=/daily/index.html'>";

  echo "<script>alert(' $username 登录成功 欢迎你进入')</script>";
  $_SESSION['username'] = $username;

}
  else{
  //  exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
  echo "<script>alert('登录失败 请再次尝试')</script>";
  echo "<meta http-equiv=refresh content=0; url=login.html >";
}

function sqls(){
$link = mysql_connect('localhost', 'root', '123')
or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('user') or die('er'.mysql_error());
mysql_query("set names 'utf8'",$link);
return $link;
}

?>
