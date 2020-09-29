<?php
//获取网站tdk
require_once '../inc_config.php';
$api = $config['api'];
//获取图片列表
$params = [
    'honour'
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
            <div class="swiper-slide active"><a href="rongyu.php">荣誉堂</a></div>
            <div class="swiper-slide"><a href="tuangou.php">惠团购</a></div>
           </div>
       </div>
  </div>
</div>
<!-- 企业能做什么 -->
<div class="whoido container wow">
  <div class="wido_a">
      <p>荣誉堂是什么</p>
  </div>
  <div class="wido_nr">
      <div class="wido_p    wow fadeInUp">
        <p>为企业提供表彰先进个人和集体的途径，展示企业对员工个人能力发展的重视。有利于持续营造崇尚先进、创先争优的良好企业氛围，发挥表彰的积极作用，同时对内外展示企业精神面貌，塑造良好的企业文化，进一步激发员工的工作积极性和促进员工文体多面发展。 </p>
      </div>
  </div>
</div>
<!-- class -->
<div class="qiye_info container-fluid">
    <!-- <img src="images/imaddge.png"> -->
    <div class="rongy_smal container">
        <span></span>荣誉
    </div>
    <div class="rongyu_a container toyr_mb">
        <div class="rongyu_a_lt fl wow fadeInLeft">
          <img src=<?php echo $config_data['honour'][0]->img_url ?>>
        </div>
        <div class="rongyu_a_rt roy_pb wow fadeInRight">
            <h1>企业资讯</h1>
            <p>企业新闻宣传平台，便于企业及时展示及传播企业动态、产品资讯、新闻事件等信息</p>
        </div>
    </div>

    <div class="rongyu_b container toyr_mb">
        <div class="rongyu_b_lt fr  wow fadeInRight">
          <img src=<?php echo $config_data['honour'][1]->img_url ?>>
        </div>
        <div class="rongyu_b_rt roy_pb  wow fadeInLeft">
            <h1>企业公告</h1>
            <p>企业对社会及外界公布企业重要事项及重要决定的途径</p>
        </div>
    </div>

    <div class="rongyu_a container toyr_mb  teshu_san">
        <div class="rongyu_a_lt fl  wow fadeInLeft">
          <img src=<?php echo $config_data['honour'][2]->img_url ?>>
        </div>
        <div class="rongyu_a_rt roy_pb  wow fadeInRight">
            <h1>优秀员工表彰</h1>
            <p>对于企业优秀员工及团队的突出表现进行公开表彰，有利于营造创先争优的企业氛围</p>
        </div>
    </div>

    <div class="rongyu_b container toyr_mb">
        <div class="rongyu_b_lt fr  wow fadeInRight">
          <img src=<?php echo $config_data['honour'][3]->img_url ?>>
        </div>
        <div class="rongyu_b_rt roy_pb  wow fadeInLeft">
            <h1>文体标兵事迹</h1>
            <p>对在文化体育活动中做出优秀表现的员工及团队事迹进行展示，体现企业对员工个人能力发展的重视，鼓励员工全面发展。</p>
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
