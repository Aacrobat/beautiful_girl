<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->
<title>疯魔</title>

<!--==========Dependency============-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.css">
<link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">
<link rel="stylesheet" href="vendors/flexslider/flexslider.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:500">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:600,700italic">
<link href='https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700italic,700,900,900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>

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
session_start();
error_reporting(E_ALL || ~E_NOTICE);
$link=sqls();
function sqls(){
$link = mysql_connect('localhost', 'root', '123')
or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('user') or die('er'.mysql_error());
mysql_query("set names 'utf8'",$link);
return $link;
}
$str = mysql_query("select * from marktable where title='4' ");
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
                            <a href="#" class="date">APR 02, 2017</a>
                            <span class="post-author"><i>by</i><a href="#">Hongjin Zhu</a></span>
                        </h5>
                        <h2 class="post-title">不疯魔 不成活</h2>
                        <div class="row">
                            <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>
                            <div class="response-count pull-right"><img src="images/comment-icon-gray.png" alt="">5</div>
                        </div>
                    </header>
                    <div class="featured-content row m0">
                        <a href="#"><img src="images/posts/6.jpg" alt=""></a>
                    </div>
                    <div class="post-content row">
                        <h4 style="font-style:oblique;font-size:18px" >  又是一篇处女座文哈，不过文章主题有两个，其一 疯魔的追求 盛世美颜 一颦一笑倾国倾城 ，其二 同性的爱情 爱是一个灵魂对另一个灵魂的。</h4>
                        <br>

                        <blockquote class="has-sign row m0">
                            <div>
                                <p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  发现我有一个特点，如果写日记随笔这些东西，哪怕是吵架，总是爱前铺后叙一大堆，然后重点可能就中心几句话，还晦涩难懂。所以我来继续说一些铺叙吧。
</p>
                             <br>
							 <p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  疯魔，说到这个，我确实觉得我晚上的时候灵感多一些，更能进入一种状态，尤其是自己把自己搞到一个悲伤欲绝，神志恍惚的时候，仿佛那时才能理解一些更深刻真挚的感情。是那样对身体很不好，整个人都处于一种颤栗的状态。估计心跳那时候也是一百多下吧。
</p>
                            <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  /*也是有趣了，我是日常兴奋过度么，日常心跳快，真实返老还童啊，初中标准的72/min 现在都要跳的飞出去了*/</p>
							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 刚刚又看了一遍我曾经写的月亮与六便士的读后感，确实我现在到不了那个状态。但是好久没有写些读后感了，说实话也没好好读过几本书，网络小说除外，可能也就读了读《精灵宝钻》我很怀念痴迷其中的高二高三的我。可是五军之战已经完结，我，是不是该走出来呢？我现在当然还希望世界是一个等级，物种，血脉，家族稳定的社会，安逸祥和，但又有神力的限制，信仰，不过在大学这个环境下，我越来越希望自己是有权有钱的人了，有了这些掌管控制凡人的东西我才可以更超脱。有些愿望还是难以描述，我多么渴望去寻找，去尝试。什么时候我才会有勇气呢？十年之后？
</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   入戏太深，这戏，不仅仅是京剧，不仅仅是歌坛影坛，人生如戏。只不过没有彩排而已。对那种极致，完美追求的太多，得到，便会有更高的追求。真正追求极致的人是没有绝对完美的。我已经忘记那句描写李叔同的话了，大概就是烟花，惊艳的美过后便是寂静漆黑的长夜，虞姬总有一死，死忘，才是最后的美。循入空门，我不知道（原谅我现在的状态真的什么都想不到）他们进入佛门追求的是来世，还是今生的超脱。愚蠢的我现在以为他们更多是对现世的超脱。空，净。我就是我，颜色不一样的烟火。哎这句话还真的是有点非主流味道哈。但是我还是觉得把重点放在烟火，而不是颜色不一样更有感觉。</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  说到这，想到今天是 自闭症日 我预言，未来发展起来的行业应该是 家政 心理医生 还有那些，不可描述的给人们提供不被认可的需求的产业。怎么看我心心念念的虚拟现实呢？它只是一门技术吧，做大，才能让这个世界处于一个癫狂的舞台。
</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  不疯魔，不成话。这篇随笔的主题其实是《霸王别姬》观后感。</p>

							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">--最初我一直以为这是什么历史剧一直不想看哈哈。</p>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 这部作品想表现的东西好多。避重就轻：时代的变迁，精神的摧残，精神的洗脑（说实话也不能怪小四，他是那个年代千千万万之一），真挚的兄弟情，“我本是男儿郎，又不是女娇娥”“从一而终”的感情，和醉生梦死对完美的追求。男儿郎，为什么我们的社会还不包容同性恋，是因为：“我们的社会为什么不接受同性恋者？因为我们的文化里，把生育当目的，把无知当纯洁，把愚昧当德行，把偏见当原则。爱情，应是一个灵魂对另一个灵魂的态度，而不是一个器官对另一个器官的反应 。”  --柴静  把无知当纯洁，把愚昧当德行，把偏见当原则。是的 有的异性恋者想想同性恋也许就会恶心，但是也有的同性恋者想想异性也会恶心啊。社会为什么不多一些理解包容。同性恋不是古代宫廷一君主三千妃子的淫乱，也不是乱伦，人兽那种放纵欲望的堕落。它就是一种很真挚的感情。还有那难以开口的抑制不住的痛。同性恋是少数，那么他们的面对的困难也更多，但现实不仅仅是少数的问题，更多的是歧视，无知不再无罪了。你们的无知害死了多少人你们还算清白么。我希望社会多一些理解，我希望更多人敢于表现真实的自我。话锋一转。人们不都在钱于权下低头么，我们应该更多的去努力，我梦到过那种境界，不再care世俗。不care警察。但是内心还是有道德准则信仰的生活。多么欢快</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 这部戏确实没有这些日子追的耽美甜文爽，菊仙也是处处唉。但如果她真的是炮灰了可能这部电影就不那么真实了。这部电影最爱蝶衣，但是袁世卿也是我很喜欢的角色，演的真的也好棒。懂蝶衣的心声。那种对世人与对艺人的态度对比，也是一个对美有追求的人。蝶衣有没有对他动心？从一而终？</p>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> /* 单曲循环了那么多歌，我还是最喜欢《清明上河图》，我能听到那年冬天元旦晚会，那年夏天篝火晚会的声音。还有那江南的味道，清明上河图，我真的体会到了文化的味道，可能是第一次体会到文化情怀吧，色香味俱全的回忆*/</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 我会疯魔么？</p>

							</div>
                        </blockquote>

                        <br>

                        <br>
                        <?php
                         $stri = mysql_query("select * from liketable where title='4' ");
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
                                                      mysql_query("UPDATE `liketable` SET `likenumber`=`likenumber`+1 WHERE TITLE=4");
                                                     //有个问题 就是能不能让刷新时浏览器不重复记忆上次表单的提交啊
                                                     ?>
                                                      <meta http-equiv="refresh"  />
                                                    <?php

                                                    } ?>

                        <br>
                        <br>
                    </div>
                    <div class="row m0 tags">
                        <a href="#" class="tag">处女座</a>
                        <a href="#" class="tag">爱情</a>
                        <a href="#" class="tag">社会</a>
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

                            <input type='hidden' name='title' value='4'>
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
                        <p>越来越抓不住的背影 迁就不了倒退的风景</p>
						<p>但人总要学会放弃 暧昧的痕迹 </p>
						<p>越来越关不住的秘密 成全不了卑微的梦境</p>
						<p>背对背离去 最后只剩可惜</p>
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
                            <p>如果你喜欢 你可以去看看霸王别姬 断背山 月光男孩  </p>
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
