<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>医生讲堂</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/forum.css">
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
      <!-- 医生讲堂 -->
      <div class="class_room">
        <div class="title">
          <h3>医生讲堂</h3>
          <p>Doctor's lecture hall</p>
        </div>
        <ul class="class_room_list">
          <li>
            <a href="./article.php">
              <div class="class_room_img">
                <img src="./images/forum/class_room_01.png" alt="">
              </div>
              <div class="class_room_text">
                <h3>牙疼怎么办？优贝口腔</h3>
                <p>牙痛了这么办？你敢让它拖下去吗？牙痛很多时候不仅仅是牙齿表面疼痛，而是...</p>
              </div>
            </a>
          </li>

          <li>
            <a href="#">
              <div class="class_room_img">
                <img src="./images/forum/class_room_02.png" alt="">
              </div>
              <div class="class_room_text">
                <h3>昌平优贝口腔”家庭口腔守护计</h3>
                <p>践行十九大精神，减轻病人的就医压力，为响应市民需求，惠及更多牙患朋友...</p>
              </div>
            </a>
          </li>

          <li>
            <a href="#">
              <div class="class_room_img">
                <img src="./images/forum/class_room_03.png" alt="">
              </div>
              <div class="class_room_text">
                <h3>昌平种植牙-单颗种植牙</h3>
                <p>单齿种植体可用于缺少一颗或多颗牙齿的人。种植体通过外科手术放置在牙医在...</p>
              </div>
            </a>
          </li>

          <li>
            <a href="#">
              <div class="class_room_img">
                <img src="./images/forum/class_room_04.png" alt="">
              </div>
              <div class="class_room_text">
                <h3>长智齿了怎么办_昌平拔智齿</h3>
                <p>如果你长出了智齿，你可能需要在你的一生中的某个时刻拔除智齿。 对于拔牙...</p>
              </div>
            </a>
          </li>

          <li>
            <a href="#">
              <div class="class_room_img">
                <img src="./images/forum/class_room_05.png" alt="">
              </div>
              <div class="class_room_text">
                <h3>最常见的牙齿问题_昌平牙科门诊</h3>
                <p>牙齿问题从来不容忽视，但好消息是，大多数问题都可以轻易预防。每天刷牙两...</p>
              </div>
            </a>
          </li>



        </ul>
        <!-- 分页 -->
        <div class="page">
          <ul class="pages">
            <li class="first"><a href="#" ><<</a></li>
            <li class="sou active"><a href="#">首</a></li>
            <li class="active"><a href="#" >1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li class="mo"><a href="#">末</a></li>
            <li class="last"><a href="#">>></a></li>
          </ul>
        </div>
      </div>


      <!-- 案例中心 -->
      <div class="case">
        <div class="title">
          <h3>案例中心</h3>
          <p>Case center</p>
        </div>

        <div class="case_box">
          <div class="swiper-container case_swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="case_list">
                  <img src="./images/index/case_list_01.png" alt="优贝口腔 牙齿矫正">
                  <div class="fr">
                    <h3>顾女士</h3>
                    <p><strong>牙齿问题</strong>:牙齿不齐，要求矫正</p>
                    <p><strong>治疗方案</strong>:陶瓷托槽矫正</p>
                  </div>
                  <img src="./images/index/case_list_02.jpg" alt="优贝口腔 牙齿矫正">
                  <div class="case_but">
                    <a href="#"><span><img src="./images/details.png" alt=""></span>咨询医生</a>
                    <a href="#"><span><img src="./images/consulting_service.png" alt=""></span>了解详情</a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="case_list">
                  <img src="./images/index/case_list_02.png" alt="优贝口腔 瓷贴面">
                  <div class="fr">
                    <h3>何小姐</h3>
                    <p><strong>牙齿问题</strong>:牙齿黑黄，不敢笑，工作没有自信</p>
                    <p><strong>治疗方案</strong>:瓷贴面</p>
                  </div>
                  <img src="./images/index/case_list_04.jpg" alt="优贝口腔 瓷贴面">
                  <div class="case_but">
                    <a href="#"><span><img src="./images/details.png" alt=""></span>咨询医生</a>
                    <a href="#"><span><img src="./images/consulting_service.png" alt=""></span>了解详情</a>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="case_list">
                  <img src="./images/index//case_list_03.png" alt="优贝口腔 矫正">
                  <div class="fr">
                    <h3>杨小姐</h3>
                    <p><strong>牙齿问题</strong>:牙列开颌 咬合不正</p>
                    <p><strong>治疗方案</strong>:MRC肌功能矫正。</p>
                  </div>
                  <img src="./images/index/case_list_06.png" alt="优贝口腔 矫正">
                  <div class="case_but">
                    <a href="#"><span><img src="./images/details.png" alt=""></span>咨询医生</a>
                    <a href="#"><span><img src="./images/consulting_service.png" alt=""></span>了解详情</a>
                  </div>
                </div>
              </div>


              <div class="swiper-slide">
                <div class="case_list">
                  <img src="./images/index/case_list_04.png" alt="优贝口腔 补牙">
                  <div class="fr">
                    <h3>王先生</h3>
                    <p><strong>牙齿问题</strong>:牙齿有洞，咀嚼能力衰减，长期导致牙齿松动。</p>
                    <p><strong>治疗方案</strong>:3M纳米树脂补牙</p>
                  </div>
                  <img src="./images/index/case_list_04_01.png" alt="优贝口腔 补牙">
                  <div class="case_but">
                    <a href="#"><span><img src="./images/details.png" alt=""></span>咨询医生</a>
                    <a href="#"><span><img src="./images/consulting_service.png" alt=""></span>了解详情</a>
                  </div>
                </div>
              </div>


              <div class="swiper-slide">
                <div class="case_list">
                  <img src="./images/index/case_list_05.png" alt="优贝口腔 隐形正畸">
                  <div class="fr">
                    <h3>李小姐</h3>
                    <p><strong>牙齿问题</strong>:门牙过长，失去职场信心和晋升机会。</p>
                    <p><strong>治疗方案</strong>:时代天使隐形正畸</p>
                  </div>
                  <img src="./images/index/case_list_05_01.png" alt="优贝口腔 隐形正畸">
                  <div class="case_but">
                    <a href="#"><span><img src="./images/details.png" alt=""></span>咨询医生</a>
                    <a href="#"><span><img src="./images/consulting_service.png" alt=""></span>了解详情</a>
                  </div>
                </div>
              </div>


              <div class="swiper-slide">
                <div class="case_list">
                  <img src="./images/index/case_list_07.png" alt="优贝口腔 牙齿美白">
                  <div class="fr">
                    <h3>张女士</h3>
                    <p><strong>牙齿问题</strong>:口腔异味、滋生细菌</p>
                    <p><strong>治疗方案</strong>:彩光美白</p>
                  </div>
                  <img src="./images/index/case_list_07_01.png" alt="优贝口腔 牙齿美白">
                  <div class="case_but">
                    <a href="#"><span><img src="./images/details.png" alt=""></span>咨询医生</a>
                    <a href="#"><span><img src="./images/consulting_service.png" alt=""></span>了解详情</a>
                  </div>
                </div>
              </div>







            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>



      <!-- 医生团队 -->
      <div class="doctor_team">
        <div class="title">
          <h3>优贝医生团队</h3>
          <p>Doctor team</p>
        </div>

        <!-- Swiper -->
        <div class="swiper-container" id="team_swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="team_box">
                <div class="introduce">
                  <h3>刘洋</h3>
                  <p>优贝口腔正畸医师</p>
                  <p>优贝儿童齿科专业医师</p>
                  <p><span>擅长: </span>修复 、 矫正 、种植</p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_01_01.png" alt="优贝口腔_牙齿修复_牙齿矫正_牙齿种植_刘洋">
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
                  <p><span>擅长: </span>修复 、 矫正 、美容</p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_02_01.png" alt="优贝口腔_牙齿修复_牙齿矫正_牙齿美容_张鹏">
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
                  <p><span>擅长: </span>修复 、 矫正 </p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_03_01.png" alt="优贝口腔_牙齿修复_牙齿矫正_徐涛">
                </div>
              </div>

            </div>


            <div class="swiper-slide">
              <div class="team_box">
                <div class="introduce">
                  <h3>陈桦</h3>
                  <p>优贝口腔种植医师</p>
                  <p>优贝口腔美容医师</p>
                  <p><span>擅长: </span>修复 、种植</p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_04_01.png" alt="优贝口腔_牙齿修复_牙齿种植_陈桦">
                </div>
              </div>

            </div>

            <div class="swiper-slide">
              <div class="team_box">
                <div class="introduce">
                  <h3>王迪</h3>
                  <p>优贝口腔种植医师</p>
                  <p>优贝口腔美容医师</p>
                  <p><span>擅长: </span>修复 、 矫正 、种植</p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_05_01.png" alt="优贝口腔_牙齿修复_牙齿矫正_牙齿种植_王迪">
                </div>
              </div>

            </div>

            <div class="swiper-slide">
              <div class="team_box">
                <div class="introduce">
                  <h3>宋铁砾</h3>
                  <p>优贝口腔种植医师</p>
                  <p>优贝口腔美容医师</p>
                  <p><span>擅长: </span>修复 、 矫正 、种植</p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_06_01.png" alt="优贝口腔_牙齿修复_牙齿矫正_牙齿种植_宋铁砾">
                </div>
              </div>

            </div>

            <div class="swiper-slide">
              <div class="team_box">
                <div class="introduce">
                  <h3>郭宏伟</h3>
                  <p>优贝口腔种植医师</p>
                  <p>优贝口腔美容医师</p>
                  <p><span>擅长: </span>种植 、正畸</p>
                </div>
                <div class="team_img">
                  <img src="./images/team/team_07_01.png" alt="优贝口腔_牙齿修复_牙齿正畸_郭宏伟">
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
              <i><span><img src="./images/orthodontics/doctor.png" alt="优贝口腔_咨询医生"></span></i>
              <span>咨询医生</span>
            </a>
          </div>

          <div class="button_iconed_smooth">
            <a href="tel:400-1671818">
              <i><span><img src="./images/orthodontics/btn_tel.png" alt="优贝口腔_联系我们"></span></i>
              <span>联系我们</span>
            </a>
          </div>

        </div>




      </div>

      <!-- 热门问题 -->
      <div class="hot_issues">
        <div class="title">
          <h3>热门问题</h3>
          <p>Hot issues</p>
        </div>

        <div class="relevant_list">
          <ul>
            <li><a href="#">种植牙年龄限制</a></li>
            <li><a href="#">前牙种植牙难度大不大</a></li> 
            <li><a href="#">门牙缺失了怎么办</a></li>
            <li><a href="#">种植牙植骨成功率高吗</a></li>    
            <li><a href="#">全口种植牙多少钱</a></li>
            <li><a href="#">种植牙以后注意事项</a></li>
            <li><a href="#">种植牙疼不疼</a></li>
            <li><a href="#">种植牙价格因素和那些因素有关</a></li>
          </ul>
        </div>


      </div>


    </div>
    <!-- 内容区域结束 -->


    <!-- 底部 footer -->
    <?php include './public/footer.php'; ?>

    <!-- 头部 导航按钮 旋转   /    显隐遮罩层  /  banner  swiper  -->
    <script src="./js/public.js"></script>

    <script>
      // // 1、添加动画的元素    2、元素相对于顶部的距离
      // getTop_fr('.quality', '.team_box') // 医生团队页__国际高端品质__右移入动画
      // getTop_fl('.register', '.team_list') // 医生团队页__国际高端品质__右移入动画

      // 点击页数
      $('.pages>li').click(function(){
        var index = $(this).index() 
        if(index==0||index==10){
          return
        }
        $(this).addClass('active').siblings().removeClass('active')
        if(index==2) {$('.pages>li').eq(1).addClass('active')}
        if(index==8) {
          $('.pages>li').eq(9).addClass('active')
        }
      })

      // 点击前一页
      $('.first').click(function(){
        var index =  $('.active').index()
        if(index==1)return
        $('.pages>li').eq(index-1).addClass('active').siblings().removeClass('active')
      })

      // 点击后一页
      $('.last').click(function(){
        var index =  $('.active').index()
        if(index==8){
          return
        }
        $('.pages>li').eq(index+1).addClass('active').siblings().removeClass('active')
        if(index==1){
          $('.pages>li').eq(3).addClass('active').siblings().removeClass('active')
        }
    

      })

      //点击首页
      $('.sou').click(function(){
        $('.pages>li').eq(2).addClass('active')
      })

      // 点击末页
      $('.mo').click(function(){
        $('.pages>li').eq(8).addClass('active')
      })





      // 医生讲堂 点击切换
      $('.lists').click(function(){
        var index = $(this).index()
        // 点击分类  为 分页传入点击的 下标
        as_click(index)

        $(this).addClass('select').siblings('.lists').removeClass('select')
        $('.list').eq(index).show().siblings('.list').hide()
      })

      // 点击前一页
      $('.first').click(function(){
        var index =  $('.active').index()
        if(index==1)return
        $('.pages>li').eq(index-1).addClass('active').siblings().removeClass('active')
      })

      // 点击后一页
      $('.last').click(function(){
        var index =  $('.active').index()
        if(index==6||index==7){
          return
        }
        $('.pages>li').eq(index+1).addClass('active').siblings().removeClass('active')
        if(index==1){
          $('.pages>li').eq(3).addClass('active').siblings().removeClass('active')
        }

      })

      //点击首页
      $('.sou').click(function(){
        $('.pages>li').eq(2).addClass('active')
      })

      // 点击末页
      $('.mo').click(function(){
        $('.pages>li').eq(6).addClass('active')
      })



      // 案例中心
      var swiper = new Swiper('.case_swiper', {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
        }
      });


    // 医生团队
    var swiper = new Swiper('#team_swiper', {
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
        nextEl: '#team_swiper .swiper-button-next',
        prevEl: '#team_swiper .swiper-button-prev',
      },
    });

    </script>

</body>

</html>