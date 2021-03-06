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
              <li class="active"><a href="case.php">服务案例</a></li>
                <li><a href=<?php echo $config['wenti_domian'].'/concat.php' ?>>关于我们</a></li>
              <li><a href="#">资讯</a></li>
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
  <img src="images/Rectangle.png">
  <div class="container ny_bar">
      <h1  class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">我们还可以为<dbo>您提供更多服务</dbo></h1>
      <p  class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".8s">监测统计员工每日步数 <br>设置周/月/季度任务目标 挑战成功发放奖励</p>
      <img  src="images/xjant.png" alt="">
  </div>


</div>

<div class="fldh container-fluid">
  <!-- 标题部分 -->
  <div class="biao container">
    <!-- Swiper -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide active">
            <a href="">赛事执行</a>
          </div>
          <div class="swiper-slide">
            <a href="">方案策划</a>
          </div>
          <div class="swiper-slide">
            <a href="">场馆预定</a>
          </div>
          <div class="swiper-slide">
            <a href="">课程定制</a>
          </div>
          <div class="swiper-slide">
            <a href="">名师培训</a>
          </div>
          <div class="swiper-slide">
            <a href="">资源整合</a>
          </div>
        </div>
        <!-- Add Pagination -->
      </div>
  </div>
</div>
<!-- 马拉松 -->
<div class="mlas container mlas_a">
    <h2>马拉松</h2>
    <div class="mla_tog">
       <span class="next"> <img src="images/ggrrglls.png" alt=""></span>
       <span class="prev"> <img src="images/ggrrs.png" alt=""> </span>
    </div>
    <div class="swiper-container">
       <div class="swiper-wrapper">
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/ml1.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/ml2.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/ml3.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/ml1.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/ml2.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/ml3.png" alt="">
           </div>
         </div>
       </div>
       <!-- Add Pagination -->
       <div class="swiper-pagination"></div>
     </div>
</div>


<!-- 马拉松 -->
<div class="mlas container mlas_b">
    <h2>彩跑</h2>
    <div class="mla_tog">
       <span class="next"> <img src="images/ggrrglls.png" alt=""></span>
       <span class="prev"> <img src="images/ggrrs.png" alt=""> </span>
    </div>
    <div class="swiper-container">
       <div class="swiper-wrapper">
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/cp1.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/cp2.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/cp3.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/cp2.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/cp1.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/cp3.png" alt="">
           </div>
         </div>
       </div>
       <!-- Add Pagination -->
       <div class="swiper-pagination"></div>
     </div>
</div>

<!-- 马拉松 -->
<div class="mlas container mlas_c">
    <h2>骑行</h2>
    <div class="mla_tog">
       <span class="next"> <img src="images/ggrrglls.png" alt=""></span>
       <span class="prev"> <img src="images/ggrrs.png" alt=""> </span>
    </div>
    <div class="swiper-container">
       <div class="swiper-wrapper">
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/qx1.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/qx2.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/qx3.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/qx1.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/qx2.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/qx3.png" alt="">
           </div>
         </div>
       </div>
       <!-- Add Pagination -->
       <div class="swiper-pagination"></div>
     </div>
</div>

<!-- 马拉松 -->
<div class="mlas container mlas_d">
    <h2>兵乓球</h2>
    <div class="mla_tog">
       <span class="next"> <img src="images/ggrrglls.png" alt=""></span>
       <span class="prev"> <img src="images/ggrrs.png" alt=""> </span>
    </div>
    <div class="swiper-container">
       <div class="swiper-wrapper">
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/pp1.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/pp2.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/pp3.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/pp1.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/pp2.png" alt="">
           </div>
         </div>
         <div class="swiper-slide">
           <div class="malanr">
             <img src="images/pp3.png" alt="">
           </div>
         </div>
       </div>
       <!-- Add Pagination -->
       <div class="swiper-pagination"></div>
     </div>
</div>

<!-- ing去 -->
<div class="funs container-fluid">
    <div class="fun container">
       <p  class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">是否对我们的产品感兴趣了呢 ？</p>
       <h1  class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".6s">如果您对我们的健步走感兴趣</h1>
       <a  class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".9s" href="">联系我们</a>
    </div>
</div>
<!-- about -->
<div class="footers container-fluid">
    <div class="foot_a container">
        <div class="foot_a_lt fl">
            <ul>
              <li>产品</li>
              <li><a href="">产品介绍</a></li>
              <li><a href="">服务案例</a></li>
            </ul>
            <ul>
              <li>企业介绍</li>
              <li><a href="">关于我们</a></li>
              <li><a href="">公司资讯</a></li>
            </ul>
        </div>

        <div class="foot_a_rt fr">
            <h3>广州文野文化有限公司</h3>
            <p>地址：广州市天河区大灵山路18号7栋507室 </p>
            <p>电话：400-000-000 </p>
            <p>邮箱：wentizc@163.com</p>
            <div class="share_ico">
              <span><img src="images/022.png"></span>
              <span><img src="images/80033.png"></span>
              <span><img src="images/0042.png"></span>
            </div>
        </div>
    </div>
    <div class="foot_b container">
      <p>© 2020 - 2030 优企健步走. 版权所有</p>
    </div>
</div>


<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/andy.js"></script>
</body>
</html>
