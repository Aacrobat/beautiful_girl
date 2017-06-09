<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>用户管理</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <style type="text/css">
<!--
.style1 {font-weight: bold}
-->
    </style>




  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Visual Admin</h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
          <div class="profile-photo-overlay"></div>
        </div>
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">
          <ul>
            <li><a href="index.html"><i class="fa fa-home fa-fw"></i>回到主页</a></li>

            <li><a href="markman.php" class="active"><i class="fa fa-database fa-fw"></i>留言管理</a></li>
            <li><a href="userman.php"><i class="fa fa-map-marker fa-fw"></i>用户管理</a></li>

            <li><a href="out.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>
        </nav>
      </div>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
              </ul>
            </nav>
          </div>
        </div>
        <!--数据库调用-->
                      <?php
$link=sqls();
error_reporting(E_ALL || ~E_NOTICE);

//先看使用者是否登录是否有权限留言
session_start(); //开始记录
//empty($_SESSION['username'])
if (empty($_SESSION['username'])) {
  # code...
    //echo "对不起，您无权使用 请先登录";
    echo "<script>alert('对不起，您无权使用 请先登录')</script>";
    echo "<meta http-equiv=refresh content='0; url=index.html'>";
    exit();
}
function sqls(){
$link = mysql_connect('localhost', 'root', '123')
or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('user') or die('er'.mysql_error());
mysql_query("set names 'utf8'",$link);
return $link;
}
$sql="select * from userinfo";
//查询出所有文章的留言
$str=mysql_query($sql);
if($str && mysql_num_rows($str)){
  while($row= mysql_fetch_assoc($str)){
      $data[]=$row;
  }
}

?>
<!--数据调用-->
<?php
  if(empty($data)){
      echo "当前没有用户";
  }
  else{
  foreach($data as $value) {
  ?>

        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">留言管理</h2>

            <div class="panel panel-default no-border">
              <div class="panel-heading border-radius-10">
                <h2>用户:<?php echo $value['name']; ?></h2>
              </div>
            </div>

            <div class="panel panel-default no-border">
              <div class="panel-heading border-radius-10">
                <h2>密码:<?php echo $value['password']; ?></h2>
              </div>
            </div>



			<div align="right">
    <form action ="#" method="post" name="submit">
        <input type="hidden" name="del" value="<?php echo $value['name']; ?>"/>
			  <button class="style1"  type = "submit" name = "submit" >del</button>
    </form>
			</div>
        </div>
      </div>



        <?php if (!empty($_POST['del'])) {

          $message = $_POST['del'];

          mysql_query("DELETE FROM `userinfo` WHERE name='$message'");?>
            <meta http-equiv="refresh"  />
            <?php
          //需要页面自动刷新一次
        } ?>





        <?php
     }
    }
    ?>
          </div>
        </div>
      </div>
  </div>

  </body>
</html>
