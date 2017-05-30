<?php
//header("Content-type:text/html;charset=utf-8");
$link=sqls();
    $sql = "select count(*) from userinfo";
	$ret = mysql_query($sql, $link);
	//var_dump($row);
	echo "$ret";
/*	if ($ret === false) {
		die("er".mysql_error());
	} else {
		while ($row = mysql_fetch_assoc($ret)) {
			var_dump($row);
  }
}*/
	sqlc($link);
// $con= new mysqli('localhost','root','123','user');
// $arr = ['1','1'];
// var_dump($arr);
// if(mysqli_connect_errno())
// {
//     echo mysqli_connect_error();
// }
// $sql = "select * from 'userinfo'";
// $rst = $con->query($sql);
// var_dump($rst);

// if($con)
// {
// 	echo 'success1';}
// else{
// 		echo 'fail';}
		//$name=$_POST['username'];
		//echo "$name";

// $su=mysqli_select_db('user',$con);
// if($su){
// 	echo "su";
// }else{
// 	echo "fail";
// }
//mysql_query("set character set 'gbk'");
//写库
//mysql_query("set names 'gbk'");
		// $check_query = mysql_query("select * from 'userinfo'");
		// echo $check_query ;
		//echo'hi';
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
