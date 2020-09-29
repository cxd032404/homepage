<?php
//获取网站tdk
require_once '../inc_config.php';
$api = $config['api'];

$web = 'club';
$tdk_url = $api."config/getTdk?web=$web";
$tdk_info = file_get_contents($tdk_url);
$tdk_info = json_decode($tdk_info, true);
if (!$tdk_info['success']) {
    echo '数据有误';
    die();
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link href="/favicon.ico" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $tdk_info['data']['title'] ?></title>
    <meta name="keywords" content=<?php echo $tdk_info['data']['keywords']?>>
    <meta name="description" content=<?php echo $tdk_info['data']['description']?>>
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/media.css" />
</head>
<body>

<div class="head container-fluid">
    <div class="headtop container">
        <div class="logo fl">
          <a href="index.php"><img src="images/logo.png" alt=""></a>
        </div>
        <div class="freeico fr">
          <img src="images/80102.png" alt="">
        </div>
        <div class="headnav fr">
            <ul>
              <li class="active"><a href="index.php">首页</a></li>
              <li><a href="#">企业产品</a>
                <div class="qiyenav">
                  <span><a href=<?php echo $config['wenti_domian'] ?>>文体之窗</a></span>
                  <span><a href=<?php echo $config['jianbu_domian'] ?>>健步走</a></span>
                </div>
              </li>
              <li><a href="service.php">线下服务</a></li>
                <li><a href=<?php echo $config['wenti_domian'].'/concat.php' ?>>关于我们</a></li>
            </ul>
        </div>

        <div class="menu fr">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>
</div>
<!-- banner -->
<div class="container-fluid banner">
  <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">  <img src="images/banner.png"></div>
            <div class="swiper-slide">  <img src="images/banner.png"></div>
            <div class="swiper-slide">  <img src="images/banner.png"></div>
            <div class="swiper-slide">  <img src="images/banner.png"></div>
            <div class="swiper-slide">  <img src="images/banner.png"></div>
        </div>
  </div>
</div>
<!-- 俱乐部功能介绍 -->
<div class="ama">
  <h1>俱乐部功能介绍</h1>
</div>
<div class="container am">

    <div class="amlist">
        <ul>
          <li class="am_pb am_1 wow">
              <img src="images/A1.png" alt="">
              <h3>活动发布</h3>
              <p>告别人工传递，延误时间浪费人力消耗资源</p>
          </li>
          <li class="am_pb am_2 wow">
              <img src="images/A2.png" alt="">
              <h3>活动管理</h3>
              <p>告别人工管理活动，人工修改，人工取消，延误比赛进度</p>
          </li>
          <li class="am_pb am_3 wow">
              <img src="images/A3.png" alt="">
              <h3>活动报名</h3>
              <p>告别人工线下报名，人工记录， 延误比赛时间</p>
          </li>
          <li class="am_pb am_4 wow">
              <img src="images/A4.png" alt="">
              <h3>手机签到</h3>
              <p>告别人工录入签到信息，人工审核， 延误比赛进度</p>
          </li>
          <li class="am_pb am_5 wow" >
              <img src="images/A5.png" alt="">
              <h3>精彩回顾</h3>
              <p>告别照片墙宣传，线下打印照片， 不易保存</p>
          </li>
          <li class="bm_pb  bm_1 wow"> <img src="images/B1.png" alt=""> </li>
          <li class="bm_pb  bm_2 wow"> <img src="images/B2.png" alt=""> </li>
          <li class="bm_pb  bm_3 wow"> <img src="images/B3.png" alt=""> </li>
          <li class="bm_pb  bm_4 wow"> <img src="images/B4.png" alt=""> </li>
        </ul>
    </div>
</div>

<!-- 正文部分 -->
<div class="container-fluid nrcont">
   <div class="nrcont_bg">
      <img src="images/ctbg1.png" alt="">
      <img src="images/ctbg2.png" alt="">
      <img src="images/ctbg3.png" alt="">
      <img src="images/ctbg4.png" alt="">
      <img src="images/ctbg5.png" alt="">
   </div>
    <div class="container  nr_cont_nr">
      <div class="nrcont_a">
        <div class="container  act_s">
            <div class="act_s_a fr  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
              <img src="images/rs.png">
            </div>
            <div class="act_s_b fr">
                <h1 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">发布活动<img src="images/sansan.png"></h1>
                <p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">活动微信端管理发布 第一时间活动信息输出 设置活动场地</p>
            </div>
        </div>

        <div class="container  act_s">
            <div class="act_s_a fr  wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
              <img src="images/0022.png">
            </div>
            <div class="act_s_b fr">
                <h1 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">活动管理<img src="images/sansan.png"></h1>
                <p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">实时查看发布的活动灵活调整活动时间，确保活动在可控范围内完成</p>
            </div>
        </div>

        <div class="container  act_s">
            <div class="act_s_a fr  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
              <img src="images/bm.png">
            </div>
            <div class="act_s_b fr">
                <h1 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">活动报名<img src="images/sansan.png"></h1>
                <p  class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">第一时间报名活动实时查看活动进程已报名人员查看</p>
            </div>
        </div>


        <div class="container  act_s">
            <div class="act_s_a fr wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
              <img src="images/qd.png">
            </div>
            <div class="act_s_b fr">
                <h1 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">手机签到<img src="images/sansan.png"></h1>
                <p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">第一时间消息推送签到提醒实时查看当前位置活动信息查看</p>
            </div>
        </div>


        <div class="container  act_s">
            <div class="act_s_a fr  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
              <img src="images/hg.png">
            </div>
            <div class="act_s_b fr">
                <h1 class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">精彩回顾<img src="images/sansan.png"></h1>
                <p class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">随时随地上传照片视频查看员工分享内容企业间点赞互动</p>
            </div>
        </div>

      </div>
    </div>
</div>

<!-- 新闻动态 -->
<!--<div class="newdt container-fluid">-->
<!--   <div class="newdt_tit  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">-->
<!--       <h1>新闻动态</h1>-->
<!--       <p>NEWS</p>-->
<!--   </div>-->
<!--   <div class="newdt_ct container">-->
<!--       <ul>-->
<!--         <li>-->
<!--           <div class="newnr">-->
<!--               <div class="ovh">-->
<!--                 <img src="images/sfe.png" alt="">-->
<!--               </div>-->
<!--               <p>CEO2020年年度目标的发言年度目标的发言</p>-->
<!--           </div>-->
<!--         </li>-->
<!--         <li>-->
<!--           <div class="newnr">-->
<!--               <div class="ovh">-->
<!--                 <img src="images/sfe.png" alt="">-->
<!--               </div>-->
<!--               <p>CEO2020年年度目标的发言年度目标的发言</p>-->
<!--           </div>-->
<!--         </li>-->
<!--         <li>-->
<!--           <div class="newnr">-->
<!--               <div class="ovh">-->
<!--                 <img src="images/sfe.png" alt="">-->
<!--               </div>-->
<!--               <p>CEO2020年年度目标的发言年度目标的发言</p>-->
<!--           </div>-->
<!--         </li>-->
<!---->
<!--       </ul>-->
<!--   </div>-->
<!--</div>-->

<div class="weyy container-fluid">
    <div class="weyy_nr container">
          <h1 class="  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">我们拥有</h1>
          <ul>
            <li>
              <div class="ovh">
                <h2>100<small>+</small></h2>
                <p>客户信赖之选</p>
              </div>
            </li>
            <li>
              <div class="ovh">
              <h2>26<small>个</small></h2>
              <p>全国城市覆盖</p>
              </div>
            </li>
            <li>
              <div class="ovh">
              <h2>800万<small>+</small></h2>
              <p>总用户数</p>
              </div>
            </li>
            <li>
              <div class="ovh">
              <h2>10个<small>+</small></h2>
              <p>行业荣誉证书</p>
              </div>
            </li>
            <li>
              <div class="ovh">
              <h2>80人<small>+</small></h2>
              <p>技术团</p>
              </div>
            </li>
          </ul>
    </div>
</div>
<div class="rangn container-fluid">
    <h2 class="  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">让您高效便捷管理企业俱乐部</h2>
    <a href="#">免费使用</a>
</div>
<!-- footer -->
<div class="footers container-fluid">
  <div class="foot container">
      <div class="foot_a fl">
          <img style='width:150px;height: auto;' src="images/logo.png" alt="">
          <p><a href="http://www.staffhome.cn">www.staffhome.cn</a></p>
      </div>
      <div class="foot_b fl">
          <p>快接入口</p>
          <ul>
            <li><a href="index.php">首页</a></li>
            <li><a href="#">企业产品</a></li>
            <li><a href="#">线下服务</a></li>
            <li><a href="#">关于我们</a></li>
          </ul>
      </div>
      <div class="foot_c fr">
          <h3>广州文野文化有限公司</h3>
          <p>为中小企业提供平台化、信息化、互联网化的整体解决方案，真正做到让让企业更高效便捷地管理员工文体活动！</p>
          <div class="erwm">
            <ul>
              <li>
                <img src="images/ewm1.png" alt="">
                <p>扫码使用</p>
              </li>
              <li>
                <img src="images/ewm2.png" alt="">
                <p>扫码使用</p>
              </li>
            </ul>
          </div>
      </div>
  </div>
</div>
<div class="ftcopy container-fluid">
    <div class="copy container">
        <p><a style="color: black;" href="http://www.beian.gov.cn/" target="_blank">备案号：粤ICP备2020096223号</a> </p>
    </div>
</div>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/andy.js"></script>
</body>
</html>
