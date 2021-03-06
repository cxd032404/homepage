<?php
//获取网站tdk
require_once '../inc_config.php';
$api = $config['api'];

$web = 'jianbu';
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
              <li><a href="index.php">首页</a></li>
              <li><a href="#">企业产品</a>
                <div class="qiyenav">
                    <span><a href=<?php echo $config['wenti_domian'] ?>>文体之窗</a></span>
                    <span><a href=<?php echo $config['jianbu_domian'] ?>>健步走</a></span>
                </div>
              </li>
              <li class="active"><a href="service.php">线下服务</a></li>
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
<div class="nybanner container-fluid">
  <img src="images/nybanner.png" alt="">
</div>

<!-- 我们的服务 -->
<div class="oursers container-fluid">
  <div class="ors container">
       <div class="sertit wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
         <h1>我们的服务</h1>
       </div>
        <div class="youshiIMG wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
          <img src="images/65729.jpg" alt="">
        </div>
  </div>
</div>

<!-- 活动流程 -->
<div class="act_lcs container-fluid">
  <div class="sertit wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <h1>活动流程</h1>
    <p>专业的活动流程，优质的服务体验</p>
  </div>

  <div class="yures container">
    <ul>
      <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.5s">
        <div class="yurdiv">
          <img src="images/yur1.png" alt="">
        </div>
        <p>预热期</p>
      </li>
      <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
        <div class="yurdiv">
          <img src="images/yur2.png" alt="">
        </div>
        <p>报名期</p>
      </li>
      <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".9s">
        <div class="yurdiv">
          <img src="images/yur3.png" alt="">
        </div>
        <p>比赛期</p>
      </li>
      <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">
        <div class="yurdiv">
          <img src="images/yur4.png" alt="">
        </div>
        <p>颁奖期</p>
      </li>
      <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
        <div class="yurdiv">
          <img src="images/yur5.png" alt="">
        </div>
        <p>数据期</p>
      </li>
    </ul>
  </div>


  <div class="xiangq">
      <a href="#">详细活动流程 ></a>
  </div>
</div>
<!-- 行业优势 -->
<div class="hyyss container-fluid">
  <div class="sertit wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <h1>行业优势</h1>
    <p>海量活动资源，科学活动管理，让企业活动轻松无忧</p>
  </div>
  <div class="jiaofu container">
      <ul>
        <li  class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
          <div class="jfnr">
            <div class="jiaofu_a fl">
                <img src="images/jf1.png" alt="">
            </div>
            <div class="jiaofu_b fl">
                <h1>高质量交付</h1>
                <p>海量活动资源，科学活动管理，让企业活动轻松无忧</p>
            </div>
          </div>
        </li>
        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
          <div class="jfnr">
            <div class="jiaofu_a fl">
                <img src="images/jf2.png" alt="">
            </div>
            <div class="jiaofu_b fl">
                <h1>一站式活动生命周期服务</h1>
                <p>活动调研，策划、活动落地、执行，收尾，颁奖等</p>
            </div>
          </div>
        </li>
        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
         <div class="jfnr">
          <div class="jiaofu_a fl">
              <img src="images/jf3.png" alt="">
          </div>
          <div class="jiaofu_b fl">
              <h1>50000家企业的选择</h1>
              <p>服务企业超50000家，服务质量得信赖</p>
          </div>
        </div>
        </li>
        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
         <div class="jfnr">
          <div class="jiaofu_a fl">
              <img src="images/jf4.png" alt="">
          </div>
          <div class="jiaofu_b fl">
              <h1>数据全透明活动管理</h1>
              <p>在线管理平台，实时监控活动数据</p>
          </div>
        </div>
        </li>
      </ul>
  </div>
</div>

<!-- 用户群体 -->
<div class="yhquns container-fluid">
  <div class="sertit wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
    <h1>用户群体</h1>
  </div>
  <div class="yhqlist container">
      <ul>
        <li>
          <div class="tans">
            <div class="ovh">
              <img src="images/tiny_team.png" alt="">
            </div>
            <div class="tuan_s">
                <h1>团体</h1>
                <p></p>
            </div>
          </div>
        </li>
        <li>
          <div class="tans">
          <div class="ovh">
            <img src="images/middle_team.png" alt="">
          </div>
          <div class="tuan_s">
              <h1>中小企业</h1>
              <p></p>
          </div>
        </div>
        </li>
        <li>
          <div class="tans">
            <div class="ovh">
              <img src="images/big_team.png" alt="">
            </div>
            <div class="tuan_s">
                <h1>大型企业</h1>
                <p></p>
            </div>
          </div>
        </li>
      </ul>
  </div>
</div>
<!-- footer -->
<div class="footers container-fluid">
  <div class="foot container">
      <div class="foot_a fl">
          <img src="images/logo.png" alt="">
          <p><a href="http://www.staffhome.cn">www.staffhome.cn</a></p>
      </div>
      <div class="foot_b fl">
          <p>快接入口</p>
          <ul>
            <li><a href="#">首页</a></li>
            <li><a href="#">企业产品</a></li>
            <li><a href="#">线下服务</a></li>
            <li><a href="#">关于我们</a></li>
          </ul>
      </div>
      <div class="foot_c fr">
          <h3>广州文野文化有限公司</h3>
          <p>为中小企业提供平台化、信息化、互联网化的整体解决方案，真正做到让企业更高效便捷地管理员工文体活动！</p>
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
