<?php
//获取网站tdk
    require_once '../inc_config.php';
    $api = $config['api'];

    //获取图片列表
    $params = [
        'product_service_pic'
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
    //获取网站tdk
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
                <li><a href=<?php echo $config['jianbu_domian'] ?>>健步走</a></li>
                <li><a href=<?php echo $config['club_domian'] ?>>俱乐部</a></li>
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
  <img class="wow" src="images/product_banner.jpg">
  <div class="nynav container">
        <div class="swiper-container">
           <div class="swiper-wrapper">
               <div class="swiper-slide"><a href="#">全部</a></div>
              <div class="swiper-slide active"><a href="proservice.php">文体汇</a></div>
              <div class="swiper-slide"><a href=<?php echo $config['jianbu_domian'] ?>>健步走</a></div>
              <div class="swiper-slide"><a href=<?php echo $config['club'] ?>>俱乐部</a></div>
              <div class="swiper-slide"><a href="Class.php">精品课</a></div>
              <div class="swiper-slide"><a href="rongyu.php">荣誉堂</a></div>
              <div class="swiper-slide"><a href="tuangou.php">惠团购</a></div>
           </div>
           <!-- Add Arrows -->
           <div class="swiper-button-next"><img src="images/8219.png"></div>
           <div class="swiper-button-prev"><img src="images/829.png"></div>
       </div>
  </div>
</div>
<!-- 企业能做什么 -->
<div class="whoido container wow">
  <div class="wido_a">
      <p>文体汇能为<br>企业做什么</p>
      <a href="#">内容详情  ></a>
  </div>
  <div class="wido_nr">
      <div class="wido_p      wow fadeInUp">
        <p>通过多方位的线上线下竞赛、分享、互动，为员工提供一个展示自我风采的舞台。企业可通过“文体汇”发布赛事活动，供员工选择性参与。</p>
        <p>“文体汇”为企业提供一站式活动管理系统，帮助企业详细记录活动数据、优化活动效果、总结活动成效。</p>
      </div>
  </div>
</div>

<!-- 产品介绍 -->
<div class="pro_js container">
    <div class="tit">
      <h1>产品介绍</h1>
      <p>PRODUCTS</p>
    </div>
    <div class="pro_cont">
        <ul>
            <?php foreach ($config_data['product_service_pic'] as $pic_info) { ?>
          <li>
            <div class="chanplist">
              <div class="ovh">
                <img src=<?php echo $pic_info->img_url ?> alt="">
              </div>
              <div class="pro_sta">
                  <h1><?php echo $pic_info->title ?></h1>
                  <p><?php echo $pic_info->text ?></p>
                  <a href="tianlai.php">点此链接详情 ></a>
              </div>
            </div>
          </li>
            <?php } ?>
        </ul>
    </div>
</div>
<!-- 我们正在做 -->
<div class="wedo container-fluid">
  <div class="thisdo container">
      <div class="thistoggle">
        <div class="thisdo_a">
          <img src="images/do.png" alt="">
          <h1>我们正在做些什么</h1>
        </div>
        <!-- 左右箭头 -->
        <div class="this_jt">
            <span class="jt_prev"><img src="images/li.png"></span>
            <span class="jt_next"><img src="images/ri.png"></span>
        </div>
      </div>
      <div class="thisdo_b">
        <div class="swiper-container">
           <div class="swiper-wrapper">

               <div class="swiper-slide">
                 <div class="tslist">
                    <img src="images/dz.png">
                    <h3>定制活动</h3>
                    <p>企业可从活动库选择活动， 也可定制活动</p>
                 </div>
               </div>
               <div class="swiper-slide">
                 <div class="tslist">
                    <img src="images/cg.png">
                    <h3>方案策划</h3>
                    <p>为企业提供专业的活动策划方案， 帮助企业提升员工凝聚力</p>
                 </div>
               </div>
               <div class="swiper-slide">
                 <div class="tslist">
                    <img src="images/zx.png">
                    <h3>场馆预定</h3>
                    <p>为企业提供体育赛事运动场地、 游泳健身场馆、教室等场地</p>
                 </div>
               </div>
               <div class="swiper-slide">
                 <div class="tslist">
                    <img src="images/sc.png">
                    <h3>活动执行</h3>
                    <p>为企业提供组织活动，营销及宣传，现场监管</p>
                 </div>
               </div>
               <div class="swiper-slide">
                 <div class="tslist">
                    <img src="images/zgff.png">
                    <h3>名师培训</h3>
                    <p>邀请业内知名专家为员工培训，给与指导答疑</p>
                 </div>
               </div>

           </div>
       </div>
      </div>
  </div>

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
