<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->
<title>美少年</title>

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
//session_start();
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
$str = mysql_query("select * from marktable where title='2' ");
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
                            <a href="#" class="date">DEC 17, 2015</a>
                            <span class="post-author"><i>by</i><a href="#">Hongjin Zhu</a></span>
                        </h5>
                        <h2 class="post-title">读过《道林格雷的画像》</h2>
                        <div class="row">
                            <h5 class="taxonomy pull-left"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>

                        </div>
                    </header>
                    <div class="featured-content row m0">
                        <a href="#"><img src="images/posts/6.jpg" alt=""></a>
                    </div>
                    <div class="post-content row">
                        <h4 style="font-style:oblique;font-size:18px" >  美少男 清俊的脸庞 纤细的手指 一切美词都难以描述我对他的爱 无法抗拒的爱 对他的追求可以让很多人放弃一切 甚至生命 盛世美颜 祸国殃民 死在吸血鬼口下的公主一定无悔 魔鬼啊 给我一位美少男 我原意交换一切</h4>
                        <br>

                        <blockquote class="has-sign row m0">
                            <div>
                                <p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  好久没有写读后感了，感觉上了大学就没有怎么读书。大学其实相比起高中要累的多，甚至学习压力也要大很多更可怕的是你放弃学习的机会也会比高中多很多。大学没有我想要的精神，而是一个高级技工学校，可以看不起什么职业技术学校，但是逃脱不了的技工档次无时无刻不被别人鄙视着。谁让你高中不按部就班认真学习呢？想太多又有什么用呢？愚人的嘲讽却如警钟，在荒唐的现实中实现的荒唐。好像有点跑题了，嗯主要是在这样的环境下内心真的好压抑，不知道会不会堕落。我想改变这样的，生活，如同困在玻璃杯里的苍蝇，渴望也是徒劳。为何不去打破杯子，你会飞的啊，你不会摔倒啊。我要当一名艺术家，艺术是一切的根源。数学哲学神学玄学不都是艺术的表现么 >不说那么高层次，最起码数学是，而数学已经高于我们的生活了。黑客与画家代码打不出的世界需要艺术</p>
                             <br>
							 <p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  就是这样疯狂的追求，追求那不切实际的爱情，追求那高于一切的艺术(还有做C的作业无聊到吐然而debug不出数组越界)的状态下，重温高中一直没有好好完整读完的书。内心的痴狂与毁灭与恐惧与好吧用复杂来说。其实我是知道结果和过程，但是在看到道林的美时还是那样的被打动【1】。美貌，高于天赋的存在不需要验证。读到这里还真有点想早早睡觉按时吃饭锻炼洗脸让自己漂漂亮亮的。再往后读就是有点像读到自己的，当时还没有不好的预感甚至还是错误的追求的感觉。【2】那种不负责而凭借天赋享乐的，极度愉悦的感觉真的很有诱惑，甚至你还可以说自己的美就是艺术，把自己作为最高尚的存在。就是这样了，比喝醉还要疯狂的爱上了道林后。在惊恐不安中预感到美到至极的堕落（天那这算不算悲剧了，把最美的东西毁灭给人看？）【3】于是气氛变了，最初他的美貌足以欺骗人让人觉得他是世间的法则（在读他和西比尔的那段时，我一直在怀疑是她的错，当你认真爱一个人时你就输了，最美好的爱是哎美，与艺术的存在而不是人本身。永远不要把内心交给别人。）当然越往后读就越能感受到善恶对比。美貌下的腐朽，已经超过了对极端，新型享乐主义的追求【4】就是一本正经的走火入魔，现实的荒唐。最后节奏很快，读书时再也没心欣赏静谧的风景了，一步步走向深渊【5】最后，精彩的毁灭【6】</p>
                            <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  他毁灭后，感觉内心也经历了一次新生与毁灭。那种对自己传奇般的生活的疯狂追求好像不再那么强烈，那种对娱乐至死的追求甚至瞬间产生罪恶感（其实我好久好久没有体会过什么事罪恶感了）早上没去上课，居然也会有罪恶感，大概写完这些开始写作业，一切恢复正常，在正常的基础上再去追求高尚的艺术。不要再根基处就腐烂。</p>
							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  最后，特别感谢凯莉推荐这本书给我，还有菜园同学那句话。（不贴出来了哈）。</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   下面是每种感情对应的比较精彩的几段摘抄。分享记录。</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  --------------------------------------------------------------------------------------
</p>
  <br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   【1】大凡相貌和才智出众的，都会在劫难逃，古往今来，这种劫数一直尾随着帝王们蹒跚的步履。我们和自己的同胞，还是没有什么区别好。丑陋和愚笨的人占尽了世间的便宜，可以随意而坐，张大嘴看戏。他们虽不知胜利为何物，却至少可免尝失败的滋味。他们像我们所有的人应该生活的那样生活着，无忧无虑，随遇而安，没有纷扰。他们既不把毁灭带给别人，也不必遭受他人所加予的毁灭。</p>
							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   【2】婚姻的一大魅力，在于瞒骗成了夫妻生活的绝对必须。我从来不知道妻子在哪儿，她也根本不知道我在干什么。两人碰在一起的时候--我们偶尔也碰头，一起在外面吃饭，或者上公爵那儿去--都以最严肃的表情向对方编造最荒唐的故事。我的妻子精于此道，说真的，比我高明得多。她从来不搞错日子，而我却常常出错。不过她发现了也并不吵闹。有时我倒希望她吵，可她把我取笑了一番也就算了。"
 </p>
							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">   【也是对艺术的追求吧】每一幅用感情画出来的画像，画的都是艺术家而不是模特儿。模特儿不过是偶然介入的，是一种诱因。画家在彩色画布上所揭示的不是模特儿，而是画家本人。我不愿拿这画去展出，是因为它暴露了我自己心灵的秘密。"</p>
							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  【1】他的人格向我启迪了一种全新的艺术形式，一种崭新的艺术风格。我观察事物不同了，思考事物也不同了。现在我能用以前难以觉察的方式来重塑生活。'在思想的白昼里梦寻着形式'--这句话是谁说的?我忘了，但道林·格雷对于我恰恰就是如此。只要这少年一出现--尽管他已经过了二十岁，但在我看来还是个少年--只要他一出现--啊!我不知道你能不能明白内中的一切含义。不知不觉中他为我勾画出了一个学派的线条，这个学派满含浪漫主义的激情，希腊精神的完美，灵魂和肉体的和谐--那多么重要!我们在发疯的时候把两者截然分开了，发明了一个庸俗的现实主义，一个空洞的理想。 </p>
							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">  【2】忠贞不贰的人只知道爱的小零小碎，而见异思迁者才懂得爱的大悲大痛。 </p>
							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 【1】他确实长得漂亮无比，红红的、曲线柔和的嘴唇，直率的蓝眼睛，鬈曲的金发。他脸上的某种表情让人立刻就会信赖他。年轻人的一切坦率和纯正都写在那里。你感到，他不受世俗的玷污。</p>
  							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 【2】因为去影响一个人就是把自己的灵魂给了他。他便不会按天性去思考，或者按天性燃起自己的激情。他的美德不真实。他的罪过，要是有的话，也是借来的。他成了别人的音乐的回声，成了这么个演员，扮演着剧本中没有为他而写的角色。生活的目的在于自我发展。充分实现自己的天性--是我们每个人来到世间的目的。如今，人们倒怕起自己来了，忘记了他们的最高职责，也就是对自己应负的责任。当然，他们很慈悲，让饿肚子的吃饱，让要饭的有衣穿。但他们自己的灵魂却在挨饿，赤裸裸一无遮拦。我们的民族失去了勇气，也许从来就并未真有过勇气。害怕社会是道德的基础，害怕上帝是宗教的秘密，就是这两者支配着我们。但是--"</p>
  							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 【2】"多悲哀呀!"道连·格雷轻声说，仍然目不转睛地盯着自己的画像。"多悲哀呀!我会老起来，变得既讨厌又可怕。而这幅画却会永远年轻，绝不会比六月这个特别日子的模样更老......要是反过来就好了。要是永远年轻的是我，而变老的是画该多好!为了这个目、的--为了这个目的--我什么都愿给!是的，我愿献出世上的一切!我愿拿我的灵魂去交换!"</p>
  							<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 【1】这就是道连·格雷双亲的故事。讲述得十分粗略，却因为暗示着一段离奇而近乎现代的罗曼史，深深打动了他。一个漂亮的女人，为了疯狂的恋情而不顾一切。几周如痴如狂的甜蜜日子，被一桩奸诈丑恶的罪行所打断。挨过几个月无言的痛苦之后，一个婴儿在阵痛中出世了。死亡夺走了母亲，把孤苦伶仃的男孩留给了专横冷酷的老人。是啊，这是一个有趣的背景，烘托出了那男孩，使他更为完美。每一件赏心悦目的东西背后，总有一段悲哀的隐情。连最不起眼的小花要开放，世界也得经历阵痛。</p>
  	<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">【2】"因为她们那么多情善感。""可是我喜欢多情善感的人。""干脆就别结婚，道连。男人结婚是因为疲惫，女人结婚是因为好奇，结果双方都大失所望。"  </p>
  	<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 【3】　"我想我不可能结婚，哈利。我爱得太深了。这是你的一个警句，我正把它付诸实践，就像干你说过的每一件事那样。"</p>
  	<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 【3】凶相!难道他很凶残?这是那位姑娘的过错，不是他的错。他梦想她成为一个伟大的艺术家，把自己的爱献给了她，因为他认为她伟大。后来她让他失望，她浅薄而不足取。但是他想到她躺在自己的脚边，像小孩子似地哭泣的时候，心里便涌起了无限悔恨之情。他记得自己看着她时是多么无情。为什么他成了那个样子?</p>
  							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 【4】生活的手中始终掌握着罂粟花。当然，有时事情也很难忘却。曾经有一度，我整个季节只戴紫罗兰，以艺术的形式悼念一段不肯逝去的罗曼史。然而它最后终于消逝了。我忘了是什么使它烟消云散的。我想是她提出要为我而牺牲整个世界的那会儿。那往往是一个可怕的时刻，让人充满了对永恒的恐惧。是呀--你会相信吗?--一个星期之前，在汉普夏夫人那儿，我发觉自己就坐在提到的那个女人旁边。她执意要重温旧事，翻出陈年老账，并搜索未来。我已经把罗曼史埋葬在长春花花里。而她又将它拖了出来，说是我毁了她的生活。我得声明，晚宴上她吃得很多，所以我不必为她担。可是她那么不得体!往事的魅力在于其已成往事。而女人们从不知道什么时候帷幕已经降落，往往还想要第六幕。戏剧的矛盾已经全部解决，她们却要求继续演下去。要是随了女人们的心，一切喜剧都会出现悲剧性结尾，一切悲剧都会以闹剧的形式告终，虽有几分吸引力，却虚假做作，毫无艺术性可言。</p>
  	<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">【4】他越来越迷恋于自己英俊的容貌，越来越对自己灵魂的腐败感兴趣。他会细致地，有时是带着恶狠狠的愉悦，来观察讨厌的线条镌刻在起了皱纹的额头上，或是悄悄地爬上很有肉感的嘴巴。有时会觉得纳闷，在罪孽的迹象和衰老的迹象之间，究竟哪一个更可怕呢。他会把自己白皙的手放在画像粗糙发胖的手上，嘲笑那变形的躯体和衰朽的四肢。 </p>
  							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 【4】一种新享乐主义将会出现，以重新创造生活，把生活从严酷而不合时宜的清教徒主义中解救出来。在我们这个时代，清教徒主义正不可思议地复活着。当然，这种享乐主义也求助于理智，但并不接受任何含有牺牲情感体验的理论或体系。事实上其目的在于使生活本身就成为体验，而不是体验的结果，且不管这种结果是苦还是甜。禁欲主义使感觉麻木，庸俗的挥霍放荡使感觉迟钝，新享乐主义与它们无关。不过，它教人珍惜生命的瞬间，因为生命本身就是转瞬即逝的。</p>
  	<br>
							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">【4】不少人有时候天没亮就醒来，多半是在那些我们倾心于死的无梦之夜，或是经历了恐惧和奇奇怪怪的欢乐的夜晚之后，那时闪过我们脑际的是比现实更可怕的幻象，它具有一切怪诞事物所隐藏的活力，这种幻象赋予哥特式艺术以持久的生命力。人们可以想见，哥特式艺术特别属于头脑患有幻想症的艺术家。 </p>
  							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 【4】路似乎没有尽头。街道像是一只爬动的蜘蛛编织的黑色蛛网。那种单调令人难以忍受。雾越来越浓，他有些害了。</p>
  	<br>
	  							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">【4】他把自己出卖给了魔鬼，换来了一张漂亮的面孑乙。打我碰见他到现在，已经快十八年了。从那时到今天，他没有什么变化，尽管我变了很多 </p>
  	<br>
	  							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px"> 【4】"这个民族在发展。"
 　　"更吸引我的是腐朽。"
 　　"那么艺术呢?"她问。"是一种疾病。"
 　　"爱情呢?"
 　　"是一种幻想。""宗教呢?"
 　　"是信仰的时髦替代物。"</p>
  	<br>
	  							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">【5】他轻手轻脚地进了房间，像往常一样锁了门，拉开盖在画像上的紫色罩布。只听见他嘴里迸发出一声痛苦和愤怒的叫喊。他并没有看到什么变化，只不过眼睛里多了狡猾的神色，嘴角的曲线添了虚伪的皱纹。画像依然令人厌恶，也许比以前更可恶了。落在手上的猩红的露水，愈加鲜艳，更像才溅上的血。于是他发抖了。难道他只不过是受虚荣心的驱使，才做了这一件好事?或者像亨利勋爵嘲笑他时所暗示的那样，是出于寻找新刺激的愿望?或者是激情满怀地要扮演某一个角色，于是便像有时出现的情形一样，干出了超越自身品格的好事来?要不，也许这一切原因都有?此外，为什么红色的污点比原来要大了呢?那血渍像一种可怕的疾病蔓延到了起皱的手指上。血仿佛已经滴下来，因为画像的脚上也有了，甚至连没有拿过刀的手上也沾上了血。去自首?难道这意味着他该去自首?交代自己的罪行，然后被处死?他哈哈大笑。他觉得这念头很可怕。更何况他就是自首了，谁又会相信呢?被杀的人已经无迹可寻，凡属他的东西都已毁掉，他还亲手烧掉了藏在楼梯下的物品。人家只会说他疯了"要是他一口咬定的话，还会把他关起来......可是，忏悔自己的罪过，当众蒙受耻辱，公开赎罪，都是他的责任。上帝召唤人向人世和上天供认自己的罪孽。要是不忏悔，他的罪孽是怎么也洗不清的。他的罪孽?他耸了耸肩。巴兹尔·霍尔华德之死，他并不十分在意。他所叨念的是赫蒂·默顿。因为他所照的那面灵魂的镜子是不公正的。难道照出来的只是虚荣?好奇?虚伪?难道他的弃恶从善的行为没有别的动机了?还有更多的东西，至少他自己是这样想的。可是又有谁能分得清呢?......不，没有别的动机了。出于虚荣他放过了赫蒂；因为虚伪他戴上了善良的假面；由于好奇他尝试着克己。现在他全明白了。 </p>
  	<br>
	  							<p style="color:#000000;font-family: Times, TimesNR, Georgia,
  serif;font-size:20px">【6】他朝四周望了望，看到了刺杀过巴兹尔·霍尔华德的那把刀。他把它清洗过多次，刀上已不见血渍。这把刀明闪闪，亮晃晃，曾被用来灭掉画家，所以也要灭掉画家的作品以及它的一切内涵。它要灭掉往事，往事一旦消失，他也就自由了。它要灭掉令人担惊受怕的灵魂生活，没有画像的可怕警示，他也就可以安心了。他拿起刀来，朝画像刺去。 </p>
  	<br>

							</div>
                        </blockquote>

                        <br>

                        <br>

                        <?php
                         $stri = mysql_query("select * from liketable where title='2' ");
                        $dataliker =mysql_fetch_array($stri);
                        //print_r($dataliker['title']);

                        //print_r(mysql_fetch_array($stri));
                        //$datalikeq =$dataliker['likenumber'];
                         ?>
                         <form action ="single-2.php" method="post" id="iii" >
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
                             mysql_query("UPDATE `liketable` SET `likenumber`=`likenumber`+1 WHERE TITLE=2");
                            //有个问题 就是能不能让刷新时浏览器不重复记忆上次表单的提交啊
                            ?>
                             <meta http-equiv="refresh"  />
                           <?php

                           } ?>

                         <br>
                         <br>



                    </div>
                    <div class="row m0 tags">
                        <a href="#" class="tag">美少男</a>
                        <a href="#" class="tag">与魔鬼的交易</a>
                        <a href="#" class="tag">爱恋</a>
                    </div>


                    <div class="row m0 comments">

                        <!--Comments-->

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

                                    <input type='hidden' name='title' value='2'>
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
                            <p>如果你喜欢 进入耽美的世界 上瘾 势不可当 等等 还有鬼刀  </p>
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
