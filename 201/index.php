<?php
//获取网站tdk
    require_once '../inc_config.php';
    $api = $config['api'];

    $params = [
        'customer'
    ];

    $params = json_encode($params);

    $api = $config['api'];

    $url = $api."config/getConfig?params=$params";
    $data = file_get_contents($url);
    $data = json_decode($data, true);
    if (!$data['success']) {
        echo "数据有误";
        die();
    }
    $config_data = $data['data'];

    foreach ($config_data as $key => $value) {
        $config_data[$key] = json_decode($value);
    }

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
              <li class="active"><a href="index.php">首页</a></li>
              <li><a href="case.php">服务案例</a></li>
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
<div class="container-fluid banner">
  <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">  <img src="images/banners.png"></div>
            <div class="swiper-slide">  <img src="images/banners.png"></div>
            <div class="swiper-slide">  <img src="images/banners.png"></div>
            <div class="swiper-slide">  <img src="images/banners.png"></div>
            <div class="swiper-slide">  <img src="images/banners.png"></div>
        </div>
  </div>
</div>

<!-- 产品介绍 -->
<div class="container-fluid jingzhun">
  <div class="tit  wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
      <h2>精准、稳定、安全、便捷</h2>
      <p>Accurate, stable, safe and convenient</p>
  </div>

  <div class="container jzcont">
     <ul>
       <li>
         <div class="jznr">
           <div class="jz_a"><img src="images/a1.png"></div>
           <div class="js_b">
             <h1>精准采集</h1>
             <p>通过多源的数据采集，收集到尽可能多的数据维度，保证数据的质量，得到高质量的数据结果.</p>
           </div>
           <div class="js_c">
               <a href="#">
                 <img src="images/arrow-right.png">
               </a>
           </div>
         </div>
       </li>
       <li>
         <div class="jznr">
           <div class="jz_a"><img src="images/a2.png"></div>
           <div class="js_b">
             <h1>步数排行</h1>
             <p>提供员工今日步数排行，最近30天总步数排行和当月步数排行。</p>
           </div>
           <div class="js_c">
               <a href="#">
                 <img src="images/arrow-right.png">
               </a>
           </div>
         </div>
       </li>
       <li>
         <div class="jznr">
           <div class="jz_a"><img src="images/a3.png"></div>
           <div class="js_b">
             <h1>设定目标</h1>
             <p>设定企业员工目标步数，可设定不同目标步数。</p>
           </div>
           <div class="js_c">
               <a href="#">
                 <img src="images/arrow-right.png">
               </a>
           </div>
         </div>
       </li>
       <li>
         <div class="jznr">
           <div class="jz_a"><img src="images/a4.png"></div>
           <div class="js_b">
             <h1>积分累计</h1>
             <p>制定积分累计规则，获取积分，奖励积分，发放奖品。</p>
           </div>
           <div class="js_c">
               <a href="#">
                 <img src="images/arrow-right.png">
               </a>
           </div>
         </div>
       </li>
       <li>
         <div class="jznr">
           <div class="jz_a"><img src="images/a5.png"></div>
           <div class="js_b">
             <h1>达成率统计</h1>
             <p>根据步数完成率计算公式，给出部门步数达成率，清晰查看各部门完成率。</p>
           </div>
           <div class="js_c">
               <a href="#">
                 <img src="images/arrow-right.png">
               </a>
           </div>
         </div>
       </li>
       <li>
         <div class="jznr">
           <div class="jz_a"><img src="images/a6.png"></div>
           <div class="js_b">
             <h1>数据导出</h1>
             <p>支持大量数据导出，便于数据对比与储存。</p>
           </div>
           <div class="js_c">
               <a href="#">
                 <img src="images/arrow-right.png">
               </a>
           </div>

         </div>
       </li>
     </ul>
  </div>

</div>

<!-- 值得一试的产品 -->
<div class="container-fluid pros">
  <div class="pros_nr container">
      <div class="pros_nr_lt fl">
          <div class="pro_tit  wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
              <h1>值得一试的企业产品</h1>
              <p>监测统计员工每日步数 设置周/月/季度任务目标 挑战成功发放奖励</p>
          </div>
          <div class="pro_licon">
              <ul>
                <li class=" wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".5s"><img src="images/b1.png"></li>
                <li class=" wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".8s"><img src="images/b2.png"></li>
                <li class=" wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s"><img src="images/b3.png"></li>
              </ul>
          </div>
      </div>

      <div class="pros_nr_rt fr">
        <div class="yuan_a"></div>
        <div class="yuan_b"></div>
        <div class="yuan_imgb   wow fadeInRight"  data-wow-duration="1s" data-wow-delay=".5s">
            <img src="images/m2.png" alt="">
        </div>
        <div class="yuan_imga   wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
            <img src="images/m1.png" alt="">
        </div>

      </div>
  </div>
</div>
<!-- 充满期待的产品 -->
<div class="container-fluid qidai">
    <div class="gaox container">
       <div class="gaox_lt fl">
          <div class="qda_a">
              <img src="images/var.png">
          </div>
          <div class="gax_cont">
              <ul>
                <li class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
                  <div class="gax_mz">
                    <img src="images/c1.png">
                    <h2>高效</h2>
                    <p></p>
                  </div>
                </li>
                <li class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
                  <div class="gax_mz">
                    <img src="images/c2.png">
                    <h2>智能</h2>
                    <p></p>
                  </div>
                </li>
                <li class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
                  <div class="gax_mz">
                    <img src="images/c3.png">
                    <h2>稳定</h2>
                    <p>></p>
                  </div>
                </li>
                <li class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
                  <div class="gax_mz">
                    <img src="images/c4.png">
                    <h2>精确</h2>
                    <p></p>
                  </div>
                </li>
              </ul>
          </div>

       </div>
       <div class="gaox_rt fr">
         <div class="pro_tit   wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
             <h1>充满期待的 企业产品</h1>
             <p>通过为企业员工实现步数记录、排名展示、目标完成率等功能，帮助企业掌握员工每日健康数据。</p>
         </div>
       </div>
        <div class="yuan_c">
        </div>
    </div>
</div>

<!-- 期待您成为我们下一个热忱服务的客户 -->
<div class="fuwus container-fluid">
    <div class="fwtit   wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
        <h1>期待您成为下一个我们热忱服务的客户</h1>
        <p>监测统计员工每日步数 <br> 设置周/月/季度任务目标 挑战成功发放奖励</p>
    </div>

    <div class="fuwu_count container">
          <ul>
            <li class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
              <div class="zhenx">
                <div class="coun_a">
                  28<small>+</small>
                </div>
                <p>线上企业用户</p>
              </div>
            </li>
            <li class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".8s">
                <div class="zhenx">
              <div class="coun_a">
                21<small>+</small>
              </div>
              <p>线下企业用户</p>
              </div>
            </li>
            <li class=" wow fadeInUp"  data-wow-duration="1s" data-wow-delay="1.1s">
                <div class="zhenx">
              <div class="coun_a">
               18<small>+</small>
              </div>
              <p>定制企业用户</p>
              </div>
            </li>
          </ul>
    </div>


    <div class="lxwmbtn">
        <a href=<?php echo $config['wenti_domian'].'/concat.php' ?>>联系我们</a>
    </div>

    <!-- //logo -->

    <div class="loglist container">
      <div class="swiper-container">
          <div class="swiper-wrapper">
              <?php foreach ($config_data['customer'] as $pic_info) { ?>
            <div class="swiper-slide">
              <img src=<?php echo $pic_info->img_url ?> alt="">
            </div>
              <?php } ?>

          </div>
      </div>

      <!-- 左右切换 -->
      <div class="zytog">
          <span class="zprev"><img src="images/rgsa.png"></span>
          <span class="znext"><img src="images/rga.png"></span>
      </div>

    </div>
</div>

<!-- 、、、new -->
<!--<div class="newss container-fluid">-->
<!--  <div class="new_tit">-->
<!--    <h2>新闻资讯</h2>-->
<!--  </div>-->
<!--  <div class="ixnwlist container">-->
<!--      <ul>-->
<!--        <li class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".6s">-->
<!--          <a href="">-->
<!--            <div class="ovh">-->
<!--              <img src="images/imagffe.png" alt="">-->
<!--            </div>-->
<!--            <h2>-->
<!--              CEO2020年年度目标的发言年度目标的发言-->
<!--            </h2>-->
<!--            <p>2020 - 07 - 27</p>-->
<!--          </a>-->
<!--        </li>-->
<!--        <li  class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".6s">-->
<!--          <a href="">-->
<!--            <div class="ovh">-->
<!--              <img src="images/imagffe.png" alt="">-->
<!--            </div>-->
<!--            <h2>-->
<!--              CEO2020年年度目标的发言年度目标的发言-->
<!--            </h2>-->
<!--            <p>2020 - 07 - 27</p>-->
<!--          </a>-->
<!--        </li>-->
<!--        <li   class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".6s">-->
<!--          <a href="">-->
<!--            <div class="ovh">-->
<!--              <img src="images/imagffe.png" alt="">-->
<!--            </div>-->
<!--            <h2>-->
<!--              CEO2020年年度目标的发言年度目标的发言-->
<!--            </h2>-->
<!--            <p>2020 - 07 - 27</p>-->
<!--          </a>-->
<!--        </li>-->
<!--      </ul>-->
<!--  </div>-->
<!--</div>-->

<!-- youyu -->
<div class="youyus container-fluid">
    <div class="yycont container">
          <h3   class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">你还在犹豫什么？</h3>
          <h1  class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay="1s">企业健步走免费工具</h1>
          <div  class="wow fadeInUp"  data-wow-duration="1s" data-wow-delay="1.5s">
            <img src="/images/ewm1.png">
            <p>微信扫码,免费使用</p>
          </div>
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
