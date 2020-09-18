<?php
require_once '../inc_config.php';
$params = [
    'wenti_index_piclist',
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
                <li class="active"><a href="index.php">首页</a></li>
                <li><a href="proservice.html">产品服务</a></li>
                <li><a href="#">健步走</a></li>
                <li><a href="#">俱乐部</a></li>
                <li><a href="pinpai.html">品牌介绍</a></li>
                <li><a href="new.html">新闻动态</a></li>
                <li><a href="concat.html">联系我们</a></li>
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
          <div class="swiper-slide"><img src="images/bannera.png"></div>
          <div class="swiper-slide"><img src="images/bannerb.png"></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"><img src="images/8219.png"></div>
      <div class="swiper-button-prev"><img src="images/829.png"></div>
  </div>
</div>
<!-- productIndertion -->
<div class="ixproduct container">
    <div class="tit">
        <h1>产品介绍</h1>
        <p>PRODUCTS</p>
    </div>
    <div class="ix_pro_ct">
        <ul>
            <?php foreach ($config_data['wenti_index_piclist'] as $pic_info){?>
          <li  class="wow fadeInUp">
            <div class="ixpro_a">
                <div class="ixprohref">
                    <a href="#"><img src="images/rtjt.png"></a>
                    <div class="clear"></div>
                </div>
                <div class="ixpro_des">
                    <h1><?php echo $pic_info->title ?></h1>
                    <p><?php echo $pic_info->text?></p>
                </div>
                <div class="ixpro_img">
                    <img src=<?php echo $pic_info->img_url?> >
                </div>
            </div>
          </li>
            <?php } ?>
        </ul>
    </div>
</div>
<!-- 品牌介绍 -->
<div class="ixpinpai container-fluid">
    <div class="ixpai container">
      <div class="ixpai_lt fl wow fadeInLeft">
          <div class="tit">
            <h1>品牌介绍</h1>
            <p>BRAND</p>
          </div>
          <div class="pp_cont">
              <p>文体之窗致力于为企业提供丰富的线上生活，打造新型企业员工综合服务平台。集线上竞赛/教学/分享/互动为一体，全方位融入员工健康生活，为企业员工提供一个展示自我风采的舞台。</p>
                <p>文体之窗凭借多年为大型企业进行员工活动服务的经验，为企业量身打造一站式活动管理系统，打破传统活动的时空局限，打通线上线下场景。让企业以更少的资源调动更多的员工参与文体活动，进一步帮助企业精准掌控员工活动，总结活动成效，管理员工健康大数据。</p>
          </div>
      </div>
      <div class="ixpai_rt fr wow fadeInRight">
          <img src="images/2853.png">
      </div>
    </div>
</div>
<!-- 数字滚动 -->
<div class="ixcount container-fluid">
  <div class="container">
    <ul>
      <li>
        <div class="ixyear animateNum" data-animatetarget="2019">
          2019<small>年</small>
        </div>
        <p>公司创立于2019年</p>
      </li>
      <li>
        <div class="ixyear animateNum"  data-animatetarget="200">
          200<small>万</small>
        </div>
        <p>已累计用户超过200万人</p>
      </li>
      <li>
        <div class="ixyear animateNum"  data-animatetarget="300">
          300<small>家</small>
        </div>
        <p>服务企业超300家</p>
      </li>
      <li>
        <div class="ixyear" >
          28<small>个</small>
        </div>
        <p>业务覆盖全国28个城市</p>
      </li>
    </ul>
  </div>
</div>
<!-- 新闻动态 -->
<div class="ixnew container-fluid">
    <div class="ixnew_nr container">
      <div class="tit">
        <h1>新闻动态</h1>
        <p>NEWS</p>
      </div>

      <div class="new_cont">
          <div class="new_lt fl">
            <a href="#">
              <div class="ovh">
                <img src="images/104414.png">
              </div>
              <div class="imp_new">
                <h1>CEO就新版本发布发表重要讲话</h1>
                <div class="imp_area">
                    <div class="imp_area_lt fl">
                      <h2>2020</h2>
                      <p>07-25</p>
                    </div>
                    <div class="imp_area_rt fl">
                      <p>这是一段新闻介绍新闻介绍新闻介绍这是一段新闻介绍新闻介绍新闻介绍这是一段新闻介绍新闻介绍</p>
                    </div>
                </div>
              </div>
            </a>
          </div>
          <div class="new_rt fr">
              <ul>
                <li>
                  <a href="#">
                    <div class="nwrt_a fl">
                       <h2>2020</h2>
                       <p>06-25</p>
                    </div>
                    <div class="nwrt_b fl">
                        <h2>CEO就新版本发布发表重要讲话</h2>
                        <p>这是一段新闻介绍新闻介绍新闻介绍这是一段…</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="nwrt_a fl">
                       <h2>2020</h2>
                       <p>06-25</p>
                    </div>
                    <div class="nwrt_b fl">
                        <h2>CEO就新版本发布发表重要讲话</h2>
                        <p>这是一段新闻介绍新闻介绍新闻介绍这是一段…</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="nwrt_a fl">
                       <h2>2020</h2>
                       <p>06-25</p>
                    </div>
                    <div class="nwrt_b fl">
                        <h2>CEO就新版本发布发表重要讲话</h2>
                        <p>这是一段新闻介绍新闻介绍新闻介绍这是一段…</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="nwrt_a fl">
                       <h2>2020</h2>
                       <p>06-25</p>
                    </div>
                    <div class="nwrt_b fl">
                        <h2>CEO就新版本发布发表重要讲话</h2>
                        <p>这是一段新闻介绍新闻介绍新闻介绍这是一段…</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="nwrt_a fl">
                       <h2>2020</h2>
                       <p>06-25</p>
                    </div>
                    <div class="nwrt_b fl">
                        <h2>CEO就新版本发布发表重要讲话</h2>
                        <p>这是一段新闻介绍新闻介绍新闻介绍这是一段…</p>
                    </div>
                  </a>
                </li>
              </ul>
          </div>
      </div>
    </div>
</div>
<!-- 活动案例 -->
<div class="ixcase container-fluid">
    <div class="ix_case container">
      <div class="tit">
        <h1>活动案例</h1>
        <p>CASE</p>
      </div>

      <div class="swiper-container anli">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="case_cont">
                <div class="ix_case_lt fl wow fadeInDown">
                    <p>这是一段新闻介绍新闻介绍新闻介绍1，这是一段新闻介绍新闻介绍新闻介绍，这是一段新闻介绍新闻介绍新闻介绍，这是一段新闻介绍新闻介绍新闻介绍，这是一段新闻介绍新闻介绍新闻介绍</p>
                    <p>这是一段新闻介绍新闻介绍新闻介绍，这是一段新闻介绍新闻介绍新闻介绍，这是一段新闻介绍新闻介绍新闻介绍</p>
                </div>
                <div class="ix_case_rt fr wow fadeInUp">
                    <img src="images/2259.png">
                </div>
              </div>
            </div>

        </div>
        <!-- Add Arrows -->
        <div class="anli_tog">
          <div class="anli_tog_prev"><img src="images/829.png"></div>
          <div class="anli_tog_next"><img src="images/4732.png"></div>
        </div>
    </div>



    </div>
</div>
<!-- 服务客户 -->
<div class="ixservice container-fluid">
    <div class="ix_service container">
      <div class="tit  wow fadeInUp">
        <h1>服务客户</h1>
        <p>CUSTOMER</p>
      </div>
      <div class="ix_service_cont">
          <ul>
              <?php  foreach ($config_data['customer'] as $pic_info) { ?>
            <li><a href="#"><img src=<?php echo $pic_info->img_url ?>></a></li>
              <?php } ?>
          </ul>
      </div>
    </div>
</div>
<!-- 扫码关注 -->
<div class="ixewm container-fluid">
    <div class="ix_ewm">
        <ul>
          <li>
            <img src="images/728.png">
            <p>扫码关注公众号</p>
          </li>
          <li>
            <img src="images/729.jpg" style="width: 194px;height: 196px;">
            <p>扫码立即使用</p>
          </li>
        </ul>
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
          <li><a href="#">新闻动态</a></li>
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
        <li><a href="#">优企健步走</a></li>
        <li><a href="#">优企俱乐部</a></li>
      </ul>
    </div>
</div>

<!-- 右侧信息 -->
<div class="kefu">
    <ul>
      <li class="wx_tel">
        <!-- //关闭按钮 -->
        <div class="img_a wx_tel_img"><img src="images/tela.png"></div>
        <div class="message_kf">
          <div class="gb_cha">
            <img src="images/cs.png">
          </div>
          <form id="form1"  onsubmit="return false" action="##" method="post">
            <h2>输入您的电话，我们即刻给您回电</h2>
            <div class="msg_bd">
              <div class="msg_lt fl">
                  <label><input  name="tel"   size="11"  id="mobile"  type="text" placeholder="请输入您的电话"  onkeyup="value=value.replace(/[^\d]/g,'')"
	                maxlength=11></label>
                  <label><input  id="inputCode"  type="text" placeholder="请输入验证码"> <span id="checkCode"></span></label>
              </div>
              <div class="msg_rt fl">
                <input onclick="login()" type="submit" value="接通客服">
              </div>
            </div>
          </form>
            <div class="clear"></div>
              <p>您也可直接拨打24小时电话：4008-030-567或线上咨询</p>
        </div>
      </li>
      <li class="wx_hover">
        <div class="img_a"><img src="images/wxa.png"></div>
        <div class="weixin_icon">
          <img src="images/728.png">
        </div>
      </li>
      <li>
        <div class="img_a"><img src="images/qqa.png"></div>
      </li>
      <li>
        <div class="img_a returntop"><img src="images/topa.png"></div>
      </li>
    </ul>
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
