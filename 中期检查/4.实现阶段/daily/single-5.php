<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->
<title>罪与罚                                                                         </title>

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
$str = mysql_query("select * from marktable where title='5' ");
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
                            <span class="post-author"><i>by</i><a href="#">Kaili Yang</a></span>
                        </h5>
                        <h2 class="post-title">罪与罚</h2>
                        <div class="row">
                            <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>
                            <div class="response-count pull-right"><img src="images/comment-icon-gray.png" alt="">5</div>
                        </div>
                    </header>
                    <div class="featured-content row m0">
                        <a href="#"><img src="images/posts/6.jpg" alt=""></a>
                    </div>
                    <div class="post-content row">
                        <h4 style="font-style:oblique;font-size:18px" >  这是高中同学写的一篇文章，她推荐后我也看了日剧。前期真的很压抑。高良小哥哥确实很帅 可他一直驼背一直驼背低头，看的我都难受也是辛苦演员了。中后期也还是压抑，没有反抗的解脱反而是更深的痛苦。然后妥协。我有时候在想，也许世界属于强者，那种像汉尼拔那样笑着吃人的天才才能愤世嫉俗反抗社会。</h4>
                        <br>

                        <blockquote class="has-sign row m0">
                            <div>
                                <p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 小说没看下去，为了高良小哥哥的颜看了日剧。 </p>
                             <br>
							 <p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 我还能说什么，他长得真是太好看了，演这种神经病的角色也特别的……！！！爱他！从白夜行就开始爱他了！ </p>
                            <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 白夜行的最后一幕，他从楼顶上和警官很遥远地隔空对望，然后眯起眼睛笑了，他笑得非常纯真，就好像一个孩子，那么多痛苦都没有在他身上发生。
然后他掉下高楼，死去了。
 </p>
							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">对，孩子这个关键词。在罪与罚里我也感觉，他是这个的核心，但是这让我感觉有点失望，不过换回来一想，我觉得最后的结局的意图真的是光明吗？也未必呢。</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   弥勒的生活一直生活在姐姐和母亲以爱和牺牲为名的绑架中，这个童年设定也让我觉得很抑郁，因为最后他才发现，他反抗的只是自己的母亲，就像台词里说的那样。
【一直以来，我明明最想杀掉的人就是你，可是为什么我现在却跪在你的膝边哭泣呢】
</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  看到这里我真的感觉恶心了，他所有的对生活、对力量、对善恶和世界上既有观念的反抗，到这里全部被所谓的【对爱的渴望】淹没了。这个时候，就在一刹那，他好像一个不成熟的孩子，所有的反抗，哪怕到了杀人，也只不过是对于父母忽视的哭闹，目的只是为了获得母亲的爱。他一方面厌弃着这荆棘一样伤人的爱，一方面又沉迷于此不能自拔。这种恋母情结（是由父亲的缺失和不负责任导致的吗？我不知道），实际上也是他对于姐姐的态度的诠释了。</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  这样一看，真的十分恶心了。他最后和解了，和这个世界和解，和他想要杀死却杀不死的母亲和解，一边逃避着责任一边承认着自己不成熟的小孩的身份——那么，你有什么获得救赎的权利呢？你从来没有自由过，你压根反抗不了这一切，因为这好像你的根源，你由这颗种子萌发出来，你生来就活该受它的束缚，所有的反抗都是徒劳。</p>

							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">来吧，再回到这片原初的孕育了爱的海洋，你根本抗拒不了对母亲的渴望，你的人生压根没受过自己的掌控，你从来、没有一分一秒，是自由的。</p>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 甚至对于女朋友英知香的选择也证明了这一点，她根本不懂他（虽然后来证明是懂的，因为他本来就没有特殊，就是一个不成熟的哭泣的婴儿），他想要的就是向母亲的告解和发泄，然后让他体验的爱和被关注的所谓的斥责和最后的哭泣和安慰。</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 为什么人一定需要这种东西，就好像从骨髓里吸了毒那样渴望，为什么人总是这么软弱呢？</p>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 在前几集没有出现如此明显的恋母情结的条件下，我还在思考另外一个问题。关于弥勒的小说里明显提出了强者和弱者的观念，结合他自己就很有趣了。他觉得自己是被选中的人，他不想成为弱者，所以他做了自己认为被选中的强者该做的事情，杀掉了马场光和里沙，可是这什么都证明不了，因为他是如此的害怕，软弱，根本不是强者行使力量的状态。他又做了什么呢？采取了不光明的手段，为了自己所谓的强者的尊严，杀掉了同为弱者的里沙，因为她把两个人视作共犯，但是弥勒认为，这是自己一个人的计划。</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 这又算什么呢，不觉得可笑吗，你用伤害另一个弱者的方式，来证明自己的强大？这确实更加无可置疑地绝望地显示出了你的软弱！你永远不可能让这种软弱的自己、只是讨要着母亲乳头的自己变成真正的强者。</p>

  <p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 你的所有东西早就注定了。你只是一个哭泣的婴儿。
</p>
  <p style="color:#000000;font-family: Times, TimesNR, Georgia,
serif;font-size:20px"> 本剧唯一让我觉得体现出反抗的地方只有最后他控制住了自己，没有杀掉前辈大叔的那一段。或者说，这不是反抗，反抗是成熟者的游戏，而只有控制自己的怒火才是迈向成熟的第一步。但是如果全片的意图真的是所谓的劝人向善，像最后一集检察官说的那样，我也是很失望了。我只看得到绝望。
人被困在自己恋母情结、渴望爱的囚笼里，这软弱而又绝望。
</p>
<p style="color:#000000;font-family: Times, TimesNR, Georgia,
serif;font-size:20px"> 所有反抗的人最后都是同一个结局，所谓的和解，或者说，招安。</p>
<p style="color:#000000;font-family: Times, TimesNR, Georgia,
serif;font-size:20px"> 最后很可笑了。我觉得一个人一旦犯了罪，那么就既不可能摆脱绝望，也不可能获得救赎。所谓的悔过，都是软弱的愚蠢的企图逃避责任的方法。犯了罪的人，没有资格去悔过，也没有资格去改过自新，因为这一切除了让他自己的内心好受，谋取别人的同情以外，对被伤害了的那些人，没有丝毫的用处 。与其这样，还不如做好了觉悟，像那位前辈那样，做个随时准备去死的人，满怀喜悦的领受自己应付的代价，随时准备着被别人收割，结束生命。</p>
<p style="color:#000000;font-family: Times, TimesNR, Georgia,
serif;font-size:20px"> 不过有个地方倒是说得很好，他的犯罪绝不合理，没人有资格去审判和裁决别人的生命。</p>
<p style="color:#000000;font-family: Times, TimesNR, Georgia,
serif;font-size:20px"> 人永远不可能有自由，人永远不可能有希望，人永远也不可能获得救赎。
不如说，这个世界上，自由、希望、救赎这种东西本来就是编出来的。唯一真实的东西就是以牙还牙，以眼还眼，因果报应，施于彼身者还施吾身。
</p>
<p style="color:#000000;font-family: Times, TimesNR, Georgia,
serif;font-size:20px"> 你从来都不是选中的那一个，没人会被选中，全人类都被抛弃。
因为你是这样地软弱而又自恋呀。好好看着吧，身处的这个地狱。
</p>
<p style="color:#000000;font-family: Times, TimesNR, Georgia,
serif;font-size:20px"> 以及我算是懂了，真正的反抗只有自杀。</p>

							</div>
                        </blockquote>

                        <br>

                        <br>
                        <?php
                         $stri = mysql_query("select * from liketable where title='5' ");
                        $dataliker =mysql_fetch_array($stri);
                        //print_r($dataliker['title']);

                        //print_r(mysql_fetch_array($stri));
                        //$datalikeq =$dataliker['likenumber'];
                         ?>
                                                  <form action ="single-5.php" method="post" id="iii" >
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
                                                      mysql_query("UPDATE `liketable` SET `likenumber`=`likenumber`+1 WHERE TITLE=5");
                                                     //有个问题 就是能不能让刷新时浏览器不重复记忆上次表单的提交啊
                                                     ?>
                                                      <meta http-equiv="refresh"  />
                                                    <?php

                                                    } ?>

                        <br>
                        <br>
                    </div>
                    <div class="row m0 tags">
                        <a href="#" class="tag">自尊</a>
                        <a href="#" class="tag">反抗</a>
                        <a href="#" class="tag">妥协</a>
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

                            <input type='hidden' name='title' value='5'>
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
                        <p>地狱才是乐园</p>
						<p>你的爱对他是一种负担 </p>
						<p>他觉得这是一种惩罚</p>

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
                            <p>如果你喜欢 你可以去看看白夜行 汉尼拔 自杀空间  </p>
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
