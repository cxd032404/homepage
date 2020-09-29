<?php
//获取网站tdk
require_once '../inc_config.php';
$api = $config['api'];

$web = 'wenti';
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
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/media.css" />
</head>
<body>
<div class="myhead container-fluid">
  <div class="head container">
        <div class="logo fl">
            <a href="index.php"><img src="images/logo.png"></a>
        </div>
        <div class="nav fr">
            <ul>
              <li><a href="index.php">首页</a></li>
              <li class="active"><a href="proservice.php">产品服务</a></li>
              <li><a href="#">健步走</a></li>
              <li><a href="#">俱乐部</a></li>
              <li><a href="pinpai.php">品牌介绍</a></li>
<!--              <li><a href="new.php">新闻动态</a></li>-->
              <li><a href="concat.php">联系我们</a></li>
            </ul>
        </div>
        <div class="menu fr">
            <span></span>
            <span></span>
            <span></span>
        </div>
  </div>
</div>
<div class="nybanner container-fluid">
  <img  class="wow"  src="images/product_banner.jpg">
  <div class="nynav container">
        <div class="swiper-container">
           <div class="swiper-wrapper">
             <div class="swiper-slide"><a href="#">全部</a></div>
            <div class="swiper-slide "><a href="proservice.php">文体汇</a></div>
            <div class="swiper-slide"><a href="#">健步走</a></div>
            <div class="swiper-slide"><a href="#">俱乐部</a></div>
            <div class="swiper-slide "><a href="Class.php">精品课</a></div>
            <div class="swiper-slide "><a href="rongyu.php">荣誉堂</a></div>
            <div class="swiper-slide active"><a href="tuangou.php">惠团购</a></div>
           </div>
       </div>
  </div>
</div>
<!-- 企业能做什么 -->
<div class="whoido container wow">
  <div class="wido_a">
      <p>惠团购</p>
  </div>
  <div class="wido_nr">
      <div class="wido_p    wow fadeInUp">
        <p>一个奖励对于一个人的意义来讲，远远超乎它物质的作用，更是一种精神的诉求，价值的认可。 </p>
        <p> 一个奖励同样是一个人全力以赴之后的顺其自然。</p>
      </div>
  </div>
</div>
<!-- class -->
<div class="htg container">
  <img src="images/jingcai.png">
</div>
<!-- footer -->
<div class="ixfoot container-fluid">
    <div class="ix_foot container">
      <div class="ix_ft_lt fl">
         <div class="foot_a">
            <h3>广州文野文化有限公司</h3>
            <p>地址：广州市天河区大灵山路18号7栋507室</p>
            <p>电话：400-000-000</p>
            <p>邮箱：kf@staffhome.cn</p>
         </div>
         <div class="foot_b">
           <ul>
             <li><img src="images/duanxin.png"></li>
              <li><img src="images/wx.png"></li>
               <li><img src="images/tel.png"></li>
           </ul>
         </div>
      </div>
      <div class="ix_ft_rt fr">
        <ul>
          <li><p>产品</p></li>
          <li><a href="#">产品介绍</a></li>
<!--          <li><a href="#">新闻动态</a></li>-->
          <li><a href="#">服务品牌</a></li>
        </ul>
          <ul>
            <li><p>企业介绍</p></li>
            <li><a href="#">品牌介绍</a></li>
            <li><a href="#">活动案例</a></li>
            <li><a href="#">关于我们</a></li>
          </ul>

      </div>
    </div>
    <!-- 介绍 -->
    <div class="ix_youqing container">
      <ul>
        <li><span>友情链接：</span></li>
          <li><a href=<?php echo $config['jianbu_domian'] ?>>健步走</a></li>
          <li><a href=<?php echo $config['club_domian'] ?>>俱乐部</a></li>
      </ul>
    </div>
</div>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/swiper.min.js"></script>
<!-- 奔跑吧ruaning -->
<script type="text/javascript" src="js/jquery.running.min.js"></script>
<!-- andyjs -->
<script type="text/javascript" src="js/andy.js"></script>
</body>
</html>
