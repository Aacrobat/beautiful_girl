<?php
//先看使用者是否登录是否有权限留言
session_start(); //开始记录
//empty($_SESSION['username'])
echo $_SESSION['username'];
if (empty($_SESSION['username'])) {
  # code...
    //echo "对不起，您无权使用 请先登录";
    echo "<script>alert('对不起，您无权使用 请先登录')</script>";
    echo "<meta http-equiv=refresh content='0; url=index.html'>";
    exit();
}
if (empty($_POST["message"])) {
  # code...
    //echo "对不起，您无权使用 请先登录";
    echo "<script>alert('请输入留言内容')</script>";

    exit();
}

/*header("CONTENT-TYPE:text/html;charset=UTF-8");
define("HOST","127.0.0.1");
define("USERNAME","root");
define("PASSWORD","");
if($con=new mysqli(HOST,USERNAME,PASSWORD,"mark")){
    echo $con->error;
}
if($con->select_db("messageboard")){
    echo $con->error;
}
if($con->query("SET NAMES utf8")){
    echo $con->error;
}
*/
$link=sqls();
function sqls(){
$link = mysql_connect('localhost', 'root', '123')
or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('user') or die('er'.mysql_error());
mysql_query("set names 'utf8'",$link);
return $link;
}

$title=$_POST["title"];
$author=$_POST["author"];
$message=$_POST["message"];
//$time=date('y-m-d h:m:s');

$sql="insert into marktable(title,author,message) values('$title','$author','$message')";

if(mysql_query($sql)){
    echo "<script>alert('留言成功')</script>";
}
else {
    echo "<script>alert('留言失败')</script>";
}
//echo "<meta http-equiv=refresh content='0; url=index.html'>";
exit();
?>
