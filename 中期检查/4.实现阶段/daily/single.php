<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->
<title>凡人</title>

<!--==========Dependency============-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.css">
<link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">
<link rel="stylesheet" href="vendors/flexslider/flexslider.css">



<!--==========Theme Styles==========-->
<link href="css/style.css" rel="stylesheet">
<link href="css/theme/green.css" rel="stylesheet">

<!--========== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ==========-->
<!--========== WARNING: Respond.js doesn't work if you view the page via file:// ==========-->
<!--==========[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
<![endif]==========-->
</head>
<body class="home">
  <!--数据库调用-->
  <?php
error_reporting(E_ALL || ~E_NOTICE);
$link=sqls();
function sqls(){
$link = mysql_connect('bdm288172329.my3w.com', 'bdm288172329', 'zhj88280')
or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('bdm288172329_db') or die('er'.mysql_error());
mysql_query("set names 'utf8'",$link);
return $link;
}
$str = mysql_query("select * from marktable where title='1' ");
//$ress=mysql_fetch_array($hret);
$myauthor = $_SESSION['username'];
if($str && mysql_num_rows($str)){
while($row= mysql_fetch_assoc($str)){
$data[]=$row;
}
}

?>

<header class="row transparent white" data-spy="affix" data-offset-top="300" id="header">
    <div class="container">
        <div class="row top-header">

            <div class="col-sm-4 logo-col text-center" style="width:100%">
                <a href="index.html" align="center"><img src="images/LOGO.png" alt=""></a>
            </div>

        </div>
    </div>
    <div class="row menu-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 menu-col">
                    <div class="row">
                        <ul class="nav column-menu white-bg">
                            <li class="active dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Home Option 1</a></li>
                                    <li><a href="index2.html">Home Option 2</a></li>
                                    <li><a href="index3.html">Home Option 3</a></li>
                                    <li><a href="index4.html">Home Option 4</a></li>
                                    <li><a href="index5.html">Home Option 5</a></li>
                                    <li><a href="index6.html">Home Option 6</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="single.html">Blog Single 1</a></li>
                            <li><a href="single2.html">Blog Single 2</a></li>
                        </ul>
                        <ul class="nav column-menu white-bg">
                            <li><a href="single3.html">Blog Single 3</a></li>

                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 subscribe-col">
                    <h5 class="widget-title">subscribe to our newsletter.</h5>
                    <form action="#" method="post" class="form-inline subscribe-form">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm"><span>send</span></button>
                    </form>
                    <ul class="nav social-nav white">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="row content-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8 single-post-contents">
                <article class="single-post-content row m0 post">
                    <header class="row">
                        <h5 class="post-meta">
                            <a href="#" class="date">MAR 26, 2014</a>
                            <span class="post-author"><i>by</i><a href="#">Hongjin Zhu</a></span>
                        </h5>
                        <h2 class="post-title">怎食人间烟火</h2>
                        <div class="row">
                            <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>

                        </div>
                    </header>
                    <div class="featured-content row m0">
                        <a href="#"><img src="images/posts/6.jpg" alt=""></a>
                    </div>
                    <div class="post-content row">
                        <h4 style="font-style:oblique;font-size:18px" >  这是我高二的一篇日志 内容无法当作随笔便记录在了网络 是在高一最张狂的时候接触到了尼采前期的哲学 我是太阳的思想深入我心 逍遥游的背诵也是一个奇怪的过程 我是处女座 生活上我没有洁癖 但思想有</h4>
                        <br>

                        <blockquote class="has-sign row m0">
                            <div>
                                <p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   总感觉世界上有太多需要注意的了，当生命离开的时候，我们会意识到珍惜每一个爱的人。当生命无辜被杀害时，我们会意识到善良与宽恕。当背叛来到的时候，我们会后悔没有更多一点真心，当情人离开的时候，我们会后悔没有多一点用心。当失败擦着成功的肩向我们走来时，我们会后悔没有再努力一点点，当欢笑与汗水把我们遗忘时，我们又会后悔没有多一点生活。当活在幻想中，我会担心现实太冷太硬。而在现实中呆久了，我惧怕一点点丧失我的魔法。</p>
                             <br>
							 <p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  总是在纠结着，总是有太多没有注意到的地方 ，发誓要变得善良，只是应为敬畏自然。可是善良不能解决一切，站在再高的角度看世界我还是会被困在几个人，几个环境中。或是涵养还不够，对那些相比与爱与生命微小很多的事还是那么斤斤计较，在心中过意不去。甚至在不知不觉中会因为琐事而影响或伤害爱与生命。</p>
                            <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   如果说生命不能承受的是它的轻，那么僧人会怎样理解他心中的空呢？如果生命为了贴近大地而承受着种种负担，那么爱与善会不会在世间被污浊，我会不会迷失神赋予的一切 彻彻底底混在人群之中。</p>
							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  该醒醒了，你的生活就是和每一个同学愉快相处，成绩是你留下来的唯一理由，去尊敬你的亲人，去尽可能多陪陪他们，每天规范一点留一个好的形象。</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   不，你还是在梦中吧，那里你可以和他们吵架，那里你的魔法来源于你的血统与爱，那里善恶爱憎分明，那里你是世界的创作者，你的思想你的观察筑起了整个宇宙。</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  那就睡吧，在这一生的梦境中时时刻刻保持清醒，骨子里你是神，只是困于人形和种种不得意。不要在意这些，记住你不属于这个世界，这个世界只不过投影了你一部分感情与精神而已。
</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   你就要这样逃避你的一生么，自欺欺人的否定努力与失败，琐事才是生活的元素。与其一生那么清高不如放荡去流浪。
 如果说人一生早已设定只需要我们把握方向去遵循会不会太消极，如果说事在人为你会相信？冥冥之中一定有一种魔力，他不会屈服于任何人，不信他的注定只是凡人，信他可是你还是掌控不了他。那最终该怎么解决呢。</p>
							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 算了，要不然现实点吧，忙碌会麻醉一切。</p>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  可是怎食人间烟火！ </p>
							</div>
                        </blockquote>

                        <br>

                          <br>
<?php
 $stri = mysql_query("select * from liketable where title='1' ");
$dataliker =mysql_fetch_array($stri);
//print_r($dataliker['title']);

//print_r(mysql_fetch_array($stri));
//$datalikeq =$dataliker['likenumber'];
 ?>
                          <form action ="single.php" method="post" id="iii" >
                          <img style="position:absolute; left:660px" id= "likebo" width = "30" height = "30" src="images/like.png" ></img>
                          <input type="hidden" name="artical" value="1"/>
                          <p style="position:absolute; left:620px; font-size:30px; line-height: 110%"><?php echo $dataliker['likenumber'] ?></p>


                              <br>
                              <br>

                              <div class="col-sm-12">
                                  <button style="position:absolute; left:550px" type="submit" class="btn-primary"><span>赞一下</span></button>
                              </div>
                            </form>

                            <?php if (!empty($_POST['artical'])) {
                              mysql_query("UPDATE `liketable` SET `likenumber`=`likenumber`+1 WHERE TITLE=1");
                             //有个问题 就是能不能让刷新时浏览器不重复记忆上次表单的提交啊
                             ?>

                            <?php

                            } ?>


<br>
<br>
                    </div>
                    <div class="row m0 tags">
                        <a href="#" class="tag">冥想</a>
                        <a href="#" class="tag">处女座</a>
                        <a href="#" class="tag">孤独</a>
                    </div>



                    <div class="row m0 comments">

                        <!--Comments-->

                        <!--显示评论-->

  <!--数据调用-->
<?php
    if(empty($data)){
        echo "当前没有留言";
    }
    else{
    foreach($data as $value) {
    ?>

                        <div class="media comment">

                            <div class="media-body">
                                <h4>用户：<?php echo $value['author']; ?></h4>

                                <p>留言：<?php echo $value['message']; ?></p>
                            </div>
                        </div>
                        <?php
       }
      }
      ?>

                      <!--留言评论-->
                        <!--需要添加一个留言写入数据库的php文件数据库写入格式为：文章 作者 内容-->
                    <form action="addmark.php" method="post" class="comment-form row" id="comment-form">
                        <h5 class="form-title">留个言呗</h5>

                        <div class="form-group col-sm-12">
                            <label for="message">message</label>
                            <textarea name="message" id="message" class="form-control" placeholder="Write message here"></textarea>
                            <input type='hidden' name='author' value=<?php echo $myauthor ?>>

                            <input type='hidden' name='title' value='1'>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn-primary"><span>发布</span></button>

                        </div>
                    </form>
                </article>
            </div>
            <div class="col-md-4 sidebar">
                <!--Author Widget-->
                <aside class="row m0 widget-author widget">
                    <div class="widget-author-inner row">
                        <div class="author-avatar row"><a href="#"><img src="images/authort.png" alt="" class="img-circle"></a></div>
                        <a href="#"><h2 class="author-name">Hongjin Zhu</h2></a>
                        <h5 class="author-title">Acrobat</h5>
                        <p>每个人的内心都会有一个世界 她与世隔绝 专心构建</p>
						<p>这个世界太美 晶莹剔透 </p>
						<p>可是这个世界太脆弱了 任何扰动都会带来一场大灾难</p>
						<p>她应该住在哪里？</p>
                        <a href="#" class="know-more">know more</a>
                    </div>
                    <ul class="nav social-nav">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </aside>
                <!--Twitter Widget-->
                <aside class="row m0 widget widget-twitter">
                    <div class="widget-twitter-inner">
                        <h5 class="widget-meta"><i class="fa fa-twitter"></i>书目推荐 <a/>@acrobat </h5>
                        <div class="row tweet-texts">
                            <p>如果你喜欢 你可以去看看尼采哲学 意识流的作品也蛮不错 </p>
                        </div>
                        <div class="row timepast">1 day ago</div>
                    </div>
                </aside>
                <!--Instagram Widget-->
                <aside class="row m0 widget widget-instagram">
                    <div class="widget-instagram-inner">
                        <h5 class="widget-meta"><i class="fa fa-twitter"></i>我的世界 </h5>

                            <p>如果你喜欢 你可以去看看尼采哲学 意识流的作品也蛮不错 </p>

                        <div id="instafeed"></div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<!--Footer-->
<footer class="row" id="footer">
    <div class="container">
        <div class="row top-footer">
            <div class="widget col-sm-3 widget-about" style="width:100%">
                <div class="row m0" align="center"><a href="index.html"><img src="images/LOGO.png" alt=""></a></div>
				<br>
				<br>
				<p align="center">我的世界很欢迎你的光临 告诉我你的故事吧</p>
				<br>
				<h5 class="widget-title" align="center" >我的邮箱是1091819660@qq.com</h5>
				<br>
				<h5 class="copyright" align="center">Copyright &copy; 2017.Hongjin Zhu All rights reserved.</h5>
            </div>

        </div>

    </div>
</footer>

<!--========== jQuery (necessary for Bootstrap's JavaScript plugins) ==========-->

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/instafeed/instafeed.min.js"></script>
<script src="vendors/imagesLoaded/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<script src="vendors/flexslider/jquery.flexslider-min.js"></script>
<script src="js/theme.js"></script>
</body>
</html>
