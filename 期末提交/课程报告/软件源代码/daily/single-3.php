<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->
<title>追求</title>

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
  $str = mysql_query("select * from marktable where title='3' ");
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
                            <a href="#" class="date">JAN 20, 2016</a>
                            <span class="post-author"><i>by</i><a href="#">Hongjin Zhu</a></span>
                        </h5>
                        <h2 class="post-title">读《月亮与六便士》</h2>
                        <div class="row">
                            <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>
                            <div class="response-count pull-right"><img src="images/comment-icon-gray.png" alt="">5</div>
                        </div>
                    </header>
                    <div class="featured-content row m0">
                        <a href="#"><img src="images/posts/6.jpg" alt=""></a>
                    </div>
                    <div class="post-content row">
                        <h4 style="font-style:oblique;font-size:18px" >  一直在安逸与刺激的生活中纠结，这篇文章正是一个烦躁的夜晚写下的。现在，我还是不知道自己应该选择什么。但是我在安逸的环境下尽可能的努力。在狂躁的夜晚，我能感受到毁灭者心中的信仰。那是一种不妥协的态度，一种救赎的心理，只不过是一种自身心理压力最小的实现方式。也就是说，构建者比毁灭者更伟大，但他们内心都有救赎的思想。</h4>
                        <br>

                        <blockquote class="has-sign row m0">
                            <div>
                                <p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   想想高中那些读过不留记录的好书就心疼，于是 月亮与六便士</p>
                             <br>
							 <p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   制造神话是人类的天性。对那些出类拔萃的人物，如果他们生活有什么令人感到诧异或者迷惑不解的事情，人们就会如饥似渴的罩住不放，编造出种种神话，而且深信不疑，几乎狂热。这可以说是浪漫主义对平凡暗淡的生活的一种抗议。</p>
                            <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   这一定是世间无数对夫妻的故事。这种生活模式给人以安详亲切之感。它使人想到一条平静的小河，蜿蜒流过绿茸茸的牧场，与郁郁的树荫交相掩映，直到最后泄入烟波浩渺的大海。但是大海却总是那么平静，总是沉默无言，声色不动，你会突然感到一种莫名的不安。我觉得大多数人这样度过一生好像欠缺一点什么。我承认这种生活的社会价值，我也看到了它的井然有序的幸福，但是我的血液里却有一种强烈的愿望，渴望一种更狂妄不羁的旅途。这种安宁的快乐好像有一种叫我恐惧不安的东西。我的内心渴望一种更加1惊险的生活。只要在我生活中可能有变迁  变迁和无法遇见的刺激，我是准备踏上怪石嶙峋的山崖，奔赴暗礁满布的海滩的。</p>
							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  我告诉你我必须花画画，我由不了我自己一个人要是跌进水里，他游的好不好都无关紧要，反正他得挣扎的出去，不然就是淹死。</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   /*
这段同上一段都是在高中一本作文素材书上看到的嗯 不评价这种书了 也真的很怀念那段晚上背素材一遍就记住的日子 有时候觉得这比做那些根本做不完的理综有趣多了，大概是从文字中看到感情了吧  现在也挺后悔没有好好的，不随性的 认真学学理综。也晚了，可能就像导员今天对我说的那样 不管怎样 你要学会 哪怕叫投机取巧 ，去适应。现在想起高三好像哭，那些在无聊中陪你的人最后才是你爱的人，每次想到这里都为自己现在的生活捏一把汗。大概这一年还不能到完美但是计划已定。 好那我说这段文字，追求自由是好的，但是没有一点社会属性的烙印我们总会做出一些别人承受不了的事，于是我们就要被定义为危险的 是 不负责 但社会属性又会磨灭一些 刺激的 内心的渴望。我一直不知道怎么解释似锦前程 与 柔情往事 的时间可不可以重叠 反正薛定谔就是那样 : ，）。
*/</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   有人说灾难不幸可以使人高贵，这句话并不对，叫人做出高尚行动的有时候反而是幸福得意。。表示赞同。
</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  美是一种美妙 奇异的东西，艺术家只有通过灵魂的痛苦折磨才能从宇宙的混沌中塑造出来。再没被创造出以后，它也不是为了叫每个人都能认出来的。要想认识它一个人必须重复艺术家经历过的一番冒险。他唱给你的是一个美的旋律，要是想在自己心里重复听一遍就必须有知识，有敏锐的感觉和想象力。</p>
							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 他身上散发这一种原始性；希腊人曾用半人半兽的形象，像生着马尾的森林之神啊，长着羊角，羊腿的农牧神啊，来表现大自然的这种神秘力量。</p>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   /*  其实我也喜欢这种方式表现力量，大概是因为受希腊 哦不 北欧神话的影响吧  野性带着神秘的力量 但必然也带着不文明不能适应的 东西 所以你会像戴维琼斯那样爱上海之女神么？  */</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 与其做一个追求野性力量的殉葬者 还不如做毁灭者</p>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  现实一点有什么不好 在 孤独的追求那种 自由的力量 然后受伤后去社会中寻求安慰然后再一脚踢开 说自己不食人间烟火。这不是神  这不是  愚蠢的 永远到达不了的肮脏的人 是这样一种信念要去毁灭 去拯救 </p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 我们每一个人在世界上都是孤独的，每一个人都被囚禁在一座铁塔里，只能靠一些符号同别人传达自己的思想而这些符号并没有共同的价值，因此他们的意义是模糊的。</p>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   读到后面就不想摘抄了 什么感觉呢 比刚刚平静一点吧  啊 幸好高三没有手贱读原著哈，不然现在一定是川大都考不上的样子。我觉得是每个时代缺少属于那个时代的英雄但是我们不能因为那个时代的英雄而否认更永恒的东西  或许还是爱  哎 哎 哎 管他呢。和爱塔的生活看起来也不错 想到了那个什么许愿瓶贱卖的那个故事描绘了小岛了  有趣 最后从查理斯太太那里我还看到了时间的针脚 的 女主角的感觉 哈 有趣 不过挺不想回想的 读的我现在都真的想吐  突然又有点回到那个乞力马扎罗的雪 那篇文章我和贾老师谈论的问题  如果他不能承担自己的 已经造的孽 他还能不能算是英雄  最起码从李叔同的例子看出来还算英雄哈  就是这么现实卑鄙的男人。最起码我是不能忍受的 嗯 就是这样 简短的结尾。毁灭 不妥协。</p>
							</div>
                        </blockquote>

                        <br>

                        <br>



                        <?php
                         $stri = mysql_query("select * from liketable where title='3' ");
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
                                                      mysql_query("UPDATE `liketable` SET `likenumber`=`likenumber`+1 WHERE TITLE=3");
                                                     //有个问题 就是能不能让刷新时浏览器不重复记忆上次表单的提交啊
                                                     ?>
                                                      <meta http-equiv="refresh"  />
                                                    <?php

                                                    } ?>
                                                    <br>
                                                    <br>
                    </div>
                    <div class="row m0 tags">
                        <a href="#" class="tag">毁灭者</a>
                        <a href="#" class="tag">追求</a>
                        <a href="#" class="tag">责任</a>
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

                            <input type='hidden' name='title' value='3'>
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
                        <h5 class="widget-meta"><i class="fa fa-twitter"></i>随意写写 <a/>@acrobat </h5>
                        <div class="row tweet-texts">
                            <p>人总是会在一些时候想着改变 如果你觉得时机成熟 那试一试有何不可 不过 记得你的亲人 </p>
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
