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
              <li><a href="new.php">新闻动态</a></li>
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

<!-- 企业能做什么 -->
<!-- <div class="whoido container wow">
  <div class="wido_a">
      <p>天籁之音</p>
  </div>
  <div class="wido_nr">
      <div class="wido_p">
        <p>文体汇是为企业提供丰富的线上活动，集线上竞赛/教学/分享/互动为一体，全方位融入员工健康生活，为企业员工提供一个展示自我风采的舞台。 </p>
        <p>让企业以更少的资源调动更多的员工参与文体活动，进一步帮助企业精准掌控员工活动，总结活动成效，管理员工健康大数据。</p>
      </div>
  </div>
</div> -->

<!-- 活动流程示意图 -->
<div class="activity_case container ">
    <div class="huodtit">
        活动流程示例
    </div>
    <div class="yure">
        <div class="yure_lt fl wow fadeInLeft">
              <div class="yure_cont">
                  <h1>预热期</h1>
                  <ul>
                    <li>
                      <h3>活动图文推送造势</h3>
                      <p>制作精美活动海报与宣传软文，通过平台向员工推送造势</p>
                    </li>
                    <li>
                      <h3>系列教学视频课程</h3>
                      <p>邀请专业名师拍摄系列教学视频课程，于平台线上免费播放</p>
                    </li>
                    <li>
                      <h3>专业老师在线指导</h3>
                      <p>邀请专业老师定时在线直播，对员工进行答疑指导报名期 平台活动报名系统</p>
                    </li>
                  </ul>
              </div>
        </div>
        <div class="yure_rt fr  wow fadeInRight">
          <img src="images/imasge.png">
        </div>
    </div>
    <div class="yure">
        <div class="yure_lt fl  wow fadeInLeft">
              <div class="yure_cont">
                  <h1>报名期</h1>
                  <ul>
                    <li>
                      <h3>平台活动报名系统</h3>
                      <p>通过活动专区报名入口自主填写个人资料并报名比赛</p>
                    </li>
                    <li>
                      <h3>员工上传比赛视频</h3>
                      <p>员工将个人参赛视频上传至活动专区</p>
                    </li>
                    <li>
                      <h3>视频审核系统</h3>
                      <p>对员工上传的视频进行格式及内容审核，审核通过的视频进入内赛</p>
                    </li>
                  </ul>
              </div>
        </div>
        <div class="yure_rt fr  wow fadeInRight">
          <img src="images/imasge.png">
        </div>
    </div>
    <div class="yure">
        <div class="yure_lt fl  wow fadeInLeft">
              <div class="yure_cont">
                  <h1>比赛期</h1>
                  <ul>
                    <li>
                      <h3>平台大众投票系统</h3>
                      <p>员工通过平台投票系统每日可对参赛作品进行投票</p>
                    </li>
                    <li>
                      <h3>员工投票积分</h3>
                      <p>按得票数排定名次，排名X系数，获得投票积分</p>
                    </li>
                    <li>
                      <h3>专家评审团积分</h3>
                      <p>邀请专家组对作品打分并排定名次，排名X0.9系数，获得专家评分，两项分数相加获得最终积分</p>
                    </li>
                  </ul>
              </div>
        </div>
        <div class="yure_rt fr   wow fadeInRight">
          <img src="images/imasge.png">
        </div>
    </div>
    <div class="yure">
        <div class="yure_lt fl  wow fadeInLeft">
              <div class="yure_cont">
                  <h1>颁奖期</h1>
                  <ul>
                    <li>
                      <h3>平台赛事统计系统</h3>
                      <p>对成绩进行审核并排定最终名次</p>
                    </li>
                    <li>
                      <h3>优胜员工颁奖</h3>
                      <p>对活动优胜员工进行公示并奖励</p>
                    </li>
                    <li>
                      <h3>活动花絮集锦</h3>
                      <p>精选活动精彩影像进行剪辑制作，上传活动专区留存美好记忆</p>
                    </li>
                  </ul>
              </div>
        </div>
        <div class="yure_rt fr   wow fadeInRight">
          <img src="images/imasge.png">
        </div>
    </div>
    <div class="yure">
        <div class="yure_lt fl wow fadeInLeft">
              <div class="yure_cont">
                  <h1>数据期</h1>
                  <ul>
                    <li>
                      <h3>活动图文推送造势</h3>
                      <p>制作精美活动海报与宣传软文，通过平台向员工推送造势</p>
                    </li>
                    <li>
                      <h3>活动图文推送造势</h3>
                      <p>制作精美活动海报与宣传软文，通过平台向员工推送造势</p>
                    </li>
                    <li>
                      <h3>活动图文推送造势</h3>
                      <p>制作精美活动海报与宣传软文，通过平台向员工推送造势</p>
                    </li>
                  </ul>
              </div>
        </div>
        <div class="yure_rt fr   wow fadeInRight">
          <img src="images/imasge.png">
        </div>
    </div>
</div>
<!-- rugu -->
<div class="concatus container-fluid">
  <h3>马拉松/划船/亲子/游泳/骑行/瑜珈……</h3>
  <h1>如果对我们的活动感兴趣</h1>
  <a href="">联系我们</a>
  <p>400-000-000</p>
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
