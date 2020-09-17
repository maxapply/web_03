<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>院内介绍</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/about_us.css"> 
  <script src="./js/flexible.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="./js/swiper.min.js"></script>


</head>

<body>
    <!-- 头部 logo -->
    <?php include './public/header.php'; ?>

    <!-- 头部 swiper -->
    <?php include './public/header_swiper.php'; ?>

    <!-- 头部 导航栏 -->
    <?php include './public/nav.php'; ?>

    <!-- 内容区域开始 -->
    <div class="con">
        <!-- 关于我们 -->
        <div class="about_us shift_left">

          <div class="about_text">

          <div class="about_title">
            <h3>关于我们</h3>
            <h3>ABOUT US</h3>
          </div>

            <p>我院走品牌发展路线，实行全国连锁，广泛开展口腔种植、口腔正畸、美容修复、牙齿美白、综合治疗、儿童牙科、保健护理各项口腔健康服务，拥有德国卡瓦KaVo技术体系、德国ICX种植系统等先进技术，引进德国设备、设施，致力于让人人享有口腔健康服务。</p>
          </div>
        </div>

        <!-- 医生团队 -->
        <div class="team">
          <div class="team_text">
            <span></span>
            <h3>专业团队，经验丰富</h3>
            <div class="team_img">
              <img src="./images/con_team.jpg" alt="优贝口腔 医生团队">
            </div>
            <p>
            优贝口腔拥有一支高学历、临床经验丰富、医术精湛的口腔医疗团队,满足不同患者的需求。
            </p>
          </div>




        </div>

        <!-- 先进设备 -->
        <div class="equipment">
          <div class="equ_text">
            <span></span>
            <h3>引进诊疗设备</h3>
            <div class="equ_img">
              <img src="./images/equ.jpg" alt="优贝口腔 先进设备">
            </div>
            <p>
            优贝口腔引进业界数字化设备，不仅为客户提供高品质服务，亦为医生的诊疗提供科学、快捷、有效的依据，使得种牙过程由原来的手工操作转化为自动化处理，变得相当精准快捷。
            </p>
          </div>
        </div>

        <!-- 我们的优势  -->
        <div class="advantage">
          <h3>我们的优势</h3>
          <p>Our strengths</p>
          <ul>
            <li><h5>专注于口腔健康的医师团队</h5></li>
            <li><h5>告别传统种植模式</h5></li>
            <li><h5>公开透明化收费</h5></li>
            <li><h5>与国内外种植体厂家合作</h5></li>
          </ul>
        </div>

        <!-- 合作伙伴  -->
        <div class="cooperative">
          <h3>合作伙伴</h3>
          <p>cooperative partner</p>
          <ul>
            <li><img src="./images/about/cooperative_01.jpg" alt="优贝口腔 合作伙伴"></li>
            <li><img src="./images/about/cooperative_02.jpg" alt="优贝口腔 合作伙伴"></li>
            <li><img src="./images/about/cooperative_03.jpg" alt="优贝口腔 合作伙伴"></li>
            <li><img src="./images/about/cooperative_04.jpg" alt="优贝口腔 合作伙伴"></li>
            <li><img src="./images/about/cooperative_05.jpg" alt="优贝口腔 合作伙伴"></li>
            <li><img src="./images/about/cooperative_06.jpg" alt="优贝口腔 合作伙伴"></li>
            <li><img src="./images/about/cooperative_07.jpg" alt="优贝口腔 合作伙伴"></li>
            <li><img src="./images/about/cooperative_08.jpg" alt="优贝口腔 合作伙伴"></li>
            <li><img src="./images/about/cooperative_09.jpg" alt="优贝口腔 合作伙伴"></li>
            <li><img src="./images/about/cooperative_10.jpg" alt="优贝口腔 合作伙伴"></li>
            <li><img src="./images/about/cooperative_11.jpg" alt="优贝口腔 合作伙伴"></li>
            <li><img src="./images/about/cooperative_12.jpg" alt="优贝口腔 合作伙伴"></li>

          </ul>
        </div>

    </div>

    <!-- 底部 footer -->
    <?php include './public/footer.php'; ?>

    <!-- 头部 导航按钮 旋转   /    显隐遮罩层  /  banner  swiper  -->
    <script src="./js/public.js"></script>

    <script>
    // 1、添加动画的元素    2、元素相对于顶部的距离
    getTop_fr('.equipment', '.team') // 院内介绍页__先进设备__右移移入动画
    getTop_fr('.cooperative', '.advantage') // 院内介绍页__合作伙伴__右移移入动画

    // 1、添加动画的元素    2、元素相对于顶部的距离
    getTop_fl('.team', '.nav') // 院内介绍页__医生团队__左移入动画
    getTop_fl('.advantage', '.equipment') // 院内介绍页__我们的优势__左移入动画
    
    </script>

</body>

</html>