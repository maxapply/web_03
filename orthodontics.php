<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>专题 > 美学正畸_优贝口腔</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/orthodontics.css">
  <script src="./js/flexible.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="./js/swiper.min.js"></script>


</head>

<body>
    <!-- 头部 logo -->
    <?php include './public/header.php'; ?>

    <!-- banner 部分 -->
    <div class="banner">
      <img src="./images/orthodontics/banner_01.jpg" alt="">
    </div>

    <!-- 头部 导航栏 -->
    <?php include './public/nav.php'; ?>

    <!-- 内容区域开始 -->
    <div class="con">
      <!-- 了解牙齿矫正模块 -->
      <div class="crt shift_left">
        <div class="title_nav">
          <h4>了解牙齿矫正</h4>
        </div>
        <ul class="crt_ul">
          <li>
            <img src="./images/orthodontics/crt_01.jpg" alt="">
            <div class="crt_text">
              <h3>虎牙是矫正好还是拔除好</h3>
              <p>虽然生活中很多人都说“虎牙很可爱”，但是有一些人的口腔虎牙却被挤出正常牙齿位置，看来非常的难看，且还... <a href="#">[ 详情 ]</a></p>
            </div>
          </li>

          <li class="crt_li">
            <img src="./images/orthodontics/crt_01.jpg" alt="">
            <div class="crt_text">
              <h3>牙齿矫正术一般要多少钱</h3>
              <p> 牙齿矫正术一般要多少钱呢?如果你也想要做牙齿矫正术，是不是更加关心其费用要钱，不妨现在跟小编我一起来... <a href="#">[ 详情 ]</a></p>
            </div>
          </li>

          <li>
            <img src="./images/orthodontics/crt_03.jpg" alt="">
            <div class="crt_text">
              <h3>儿童矫正牙齿需要多少钱</h3>
              <p>现在的儿童其口腔健康是非常令人担忧的，特别是对于牙齿的健康，很多患者的因此会出现各种各样的异常，而要... <a href="#">[ 详情 ]</a></p>
            </div>
          </li>
        </ul>
      </div>

      <!-- 你是哪种情况模块 -->
      <div class="situation">
        <div div class="title_nav">
          <h4>你是哪种情况?</h4>
        </div>
        <ul class="sit_list">
          <li>
            <a href="#">
              <img src="./images/orthodontics/sit_01.jpg" alt="">
              <h3>单颗牙缺失</h3>
            </a>
          </li>

          <li>
            <a href="#">
              <img src="./images/orthodontics/sit_02.jpg" alt="">
              <h3>多颗牙缺失</h3>
            </a>
          </li>

          <li>
            <a href="#">
              <img src="./images/orthodontics/sit_03.jpg" alt="">
              <h3>前牙缺失</h3>
            </a>
          </li>

          <li>
            <a href="#">
              <img src="./images/orthodontics/sit_04.jpg" alt="">
              <h3>后牙缺失</h3>
            </a>
          </li>

          <li>
            <a href="#">
              <img src="./images/orthodontics/sit_05.jpg" alt="">
              <h3>半口牙缺失</h3>
            </a>
          </li>

          <li>
            <a href="#">
              <img src="./images/orthodontics/sit_06.jpg" alt="">
              <h3>全口牙缺失</h3>
            </a>
          </li>
        </ul>
        <div class="sit_btn">
          <a href="#">更多适应症  在线咨询</a>
        </div>
      </div>

      <!-- 医生团队模块 -->
      <div class="team">
        <div class="title_nav">
          <h4>医生团队</h4>
        </div>
        <!-- Swiper -->
        <div class="swiper-container .team_swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="team_box">
                <div class="introduce">
                  <h3>刘洋</h3>
                  <p>优贝口腔正畸医师</p>
                  <p>优贝儿童齿科专业医师</p>
                  <p><span>擅长:</span>修复 、 矫正 、种植</p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_01_01.png" alt="">
                </div>
              </div>

            </div>

            <div class="swiper-slide">
              <div class="team_box">
                <div class="introduce">
                  <h3>张鹏</h3>
                  <p>优贝口腔种植医师</p>
                  <p>优贝口腔美容修复医师</p>
                  <p>优贝口腔全科医师</p>
                  <p><span>擅长:</span>修复 、 矫正 、美容</p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_02_01.png" alt="">
                </div>
              </div>

            </div>

            <div class="swiper-slide">
              <div class="team_box">
                <div class="introduce">
                  <h3>徐涛</h3>
                  <p>优贝口腔种植医师</p>
                  <p>优贝口腔正畸学硕士</p>
                  <p>中华口腔医学会会员</p>
                  <p><span>擅长:</span>修复 、 矫正 </p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_03_01.png" alt="">
                </div>
              </div>

            </div>


            <div class="swiper-slide">
              <div class="team_box">
                <div class="introduce">
                  <h3>陈桦</h3>
                  <p>优贝口腔种植医师</p>
                  <p>优贝口腔美容医师</p>
                  <p><span>擅长:</span>修复 、种植</p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_04_01.png" alt="">
                </div>
              </div>

            </div>

            <div class="swiper-slide">
              <div class="team_box">
                <div class="introduce">
                  <h3>王迪</h3>
                  <p>优贝口腔种植医师</p>
                  <p>优贝口腔美容医师</p>
                  <p><span>擅长:</span>修复 、 矫正 、种植</p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_05_01.png" alt="">
                </div>
              </div>

            </div>

            <div class="swiper-slide">
              <div class="team_box">
                <div class="introduce">
                  <h3>宋铁砾</h3>
                  <p>优贝口腔种植医师</p>
                  <p>优贝口腔美容医师</p>
                  <p><span>擅长:</span>修复 、 矫正 、种植</p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_06_01.png" alt="">
                </div>
              </div>

            </div>

            <div class="swiper-slide">
              <div class="team_box">
                <div class="introduce">
                  <h3>郭宏伟</h3>
                  <p>优贝口腔种植医师</p>
                  <p>优贝口腔美容医师</p>
                  <p><span>擅长:</span>种植 、正畸</p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_07_01.png" alt="">
                </div>
              </div>

            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <!-- 联系按钮 -->
        <div class="contact_btn">

          <div class="button_iconed_smooth">
            <a href="#">
              <i><span><img src="./images/orthodontics/doctor.png" alt=""></span></i>
              <span>咨询医生</span>
            </a>
          </div>

          <div class="button_iconed_smooth">
            <a href="tel:400-1671818">
              <i><span><img src="./images/orthodontics/btn_tel.png" alt=""></span></i>
              <span>联系我们</span>
            </a>
          </div>

        </div>
      </div>

      <!-- 热门关注模块 -->
      <div class="hot">
        <div class="title_nav">
          <h4>热门关注</h4>
        </div>
        <ul>
          <li><a href="#">儿童牙齿畸形不齐几岁才能矫正合?</a></li>
          <li><a href="#">洗牙一般多少钱一次?</a></li>
          <li><a href="#">早期治疗牙周炎的好处?</a></li>
          <li><a href="#">患上牙龈出血怎么治疗好得快?</a></li>
          <li><a href="#">什么医院做无痛种植牙好?</a></li>
          <li><a href="#">牙龈出血的治疗费用是多少?</a></li>
          <li><a href="#">成人矫正牙齿要注意什么?</a></li>
          <li><a href="#">儿童牙齿矫正价格是多少?</a></li>
        </ul>
      </div>
    </div>
    <!-- 内容区域结束 -->

    <!-- 底部 footer -->
    <?php include './public/footer.php'; ?>

    <!-- 头部 导航按钮 旋转   /    显隐遮罩层  /  banner  swiper  -->
    <script src="./js/public.js"></script>

    <script>
    // 1、添加动画的元素    2、元素相对于顶部的距离
    getTop_fr('.situation', '.crt_ul') // 你是哪种情况模块__右移入动画
    getTop_fl('.team', '.crt_li') // 医生团队__右移入动画
    getTop_fr('.hot', '.situation') // 热门关注模块__右移入动画

    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    </script>

</body>

</html>