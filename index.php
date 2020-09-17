<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>首页</title>
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/index.css">
  <script src="./js/flexible.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="./js/swiper.min.js"></script>
</head>

<body>
  <!-- 头部 logo -->
  <?php include './public/header.php';?>

  <!-- 头部 swiper -->
  <?php include './public/header_swiper.php'; ?>

  <!-- 头部 导航栏 -->
  <?php include './public/nav.php'; ?>




  <!-- 主体内容开始 -->
  <div class="con">

    <!-- 菜单列表 -->
    <ul class="con_menu_list">
      <li>
        <a href="./plant.php">
        <div class="menu_img"><img src="./images/index/menu-01.png" alt=""></div>
          <h3>牙齿种植</h3>
        </a>
      </li>

      <li>
        <a href="./orthodontics.php">
        <div class="menu_img"><img src="./images/index/menu-02.png" alt=""></div>
          <h3>牙齿矫正</h3>
        </a>
      </li>
      <li>
        <a href="./repair.php">
        <div class="menu_img"><img src="./images/index/menu-03.png" alt=""></div>
          <h3>牙齿修复</h3>
        </a>
      </li>
      <li>
        <a href="./teeth_whitening.php">
        <div class="menu_img"><img src="./images/index/menu-04.png" alt=""></div>
          <h3>牙齿美白</h3>
        </a>
      </li>
      <li>
        <a href="./periodontal_restoration.php">
        <div class="menu_img"><img src="./images/index/menu-05.png" alt=""></div>
          <h3>牙周问题</h3>
        </a>
      </li>

      <li>
        <a href="./root_canal.php">
        <div class="menu_img"><img src="./images/index/menu-06.png" alt=""></div>
          <h3>根管治疗</h3>
        </a>
      </li>

      <li>
        <a href="./gen_pra.php">
        <div class="menu_img"><img src="./images/index/menu-07.png" alt=""></div>
          <h3>全科治疗</h3>
        </a>
      </li>
      <li>
        <a href="./children.php">
          <div class="menu_img"><img src="./images/index/menu-08.png" alt=""></div>
          <h3>儿童齿科</h3>
        </a>
      </li>


    </ul>

    <!-- 关于我们 -->
    <div class="con_about shift_left">
      <div class="title">
        <img src="./images/index/con_title.png" alt="">
        <h3>关于我们</h3><span>About us</span>
      </div>
      <div class="int_box">
        <div class="img">
          <div class="swiper-container about_img">
            <div class="swiper-wrapper">
                <!-- ?php echo $banner[1] ?> -->
              <div class="swiper-slide"><img src="./images/index/int_01.jpg" alt="优贝口腔 昌平牙科诊所"></div>
              <div class="swiper-slide"><img src="./images/index/int_04.jpg" alt="优贝口腔 昌平牙科诊所"></div>
              <div class="swiper-slide"><img src="./images/index/int_05.jpg" alt="优贝口腔 昌平牙科诊所"></div>
              <div class="swiper-slide"><img src="./images/index/int_06.png" alt="优贝口腔 昌平牙科诊所"></div>
              <div class="swiper-slide"><img src="./images/index/int_02.jpg" alt="优贝口腔 昌平牙科诊所"></div>
              <div class="swiper-slide"><img src="./images/index/int_03.jpg" alt="优贝口腔 昌平牙科诊所"></div>
            </div>
          </div>

        </div>


        <div class="text">
          <h3>- 优贝口腔</h3>
          <p>由☐腔医学界医生、教授、海归学者、国际ICOIX协会会员、资深行业综合管理医生等精英人才，组成了强大的医生团队...</p>
          <a href="#"><span> + 详情 + </span></a>
        </div>


      </div>

    </div>

    <!-- 医生团队 -->
    <div class="con_team">
      <div class="title">
        <img src="./images/index/con_title.png" alt="">
        <h3>医生团队</h3><span>Doctor team</span>
      </div>
      <div class="team_box">
        <img src="./images/con_team.jpg" alt="优贝口腔 昌平旗舰店医生团队">
      </div>
      <div class="team_but">
        <a href="#"><button class="btn-pill"><span>咨询医生</span></button></a>
        <a href="#"><button class="btn-pill"><span>电话预约</span></button></a>
      </div>
    </div>

    <!-- 案例中心 -->
    <div class="con_Case">
      <div class="title">
        <img src="./images/index/con_title.png" alt="优贝口腔 牙齿矫正">
        <h3>案例中心</h3><span>Case center</span>
      </div>

      <div class="case_box">
        <!-- Swiper -->
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
                <img src="./images/index/case_list_02.jpg" alt="">
                <div class="case_but">
                  <a href="#"><span><img src="./images/details.png" alt="优贝口腔 牙齿矫正"></span>咨询医生</a>
                  <a href="#"><span><img src="./images/consulting_service.png" alt="优贝口腔 牙齿矫正"></span>了解详情</a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="case_list">
                <img src="./images/index/case_list_02.png" alt="优贝口腔 牙齿贴瓷面">
                <div class="fr">
                  <h3>何小姐</h3>
                  <p><strong>牙齿问题</strong>:牙齿黑黄，不敢笑，工作没有自信</p>
                  <p><strong>治疗方案</strong>:瓷贴面</p>
                </div>
                <img src="./images/index/case_list_04.jpg" alt="优贝口腔 牙齿贴瓷面">
                <div class="case_but">
                  <a href="#"><span><img src="./images/details.png" alt=""></span>咨询医生</a>
                  <a href="#"><span><img src="./images/consulting_service.png" alt=""></span>了解详情</a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="case_list">
                <img src="./images/index//case_list_03.png" alt="优贝口腔 牙齿矫正">
                <div class="fr">
                  <h3>杨小姐</h3>
                  <p><strong>牙齿问题</strong>:牙列开颌 咬合不正</p>
                  <p><strong>治疗方案</strong>:MRC肌功能矫正。</p>
                </div>
                <img src="./images/index/case_list_06.png" alt="优贝口腔 牙齿矫正">
                <div class="case_but">
                  <a href="#"><span><img src="./images/details.png" alt=""></span>咨询医生</a>
                  <a href="#"><span><img src="./images/consulting_service.png" alt=""></span>了解详情</a>
                </div>
              </div>
            </div>


            <div class="swiper-slide">
              <div class="case_list">
                <img src="./images/index/case_list_04.png" alt="优贝口腔 树脂补牙">
                <div class="fr">
                  <h3>王先生</h3>
                  <p><strong>牙齿问题</strong>:牙齿有洞，咀嚼能力衰减，长期导致牙齿松动。</p>
                  <p><strong>治疗方案</strong>:3M纳米树脂补牙</p>
                </div>
                <img src="./images/index/case_list_04_01.png" alt="优贝口腔 树脂补牙">
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

    <!-- 医生课堂 -->
    <div class="con_class">
      <div class="title">
        <img src="./images/index/con_title.png" alt="">
        <h3>医生课堂</h3><span>Doctor class</span>
      </div>

      <div class="class_box">
        <ul>
          <li>
            <img src="./images/index/class_list.png" alt="">
            <a href="#">成年人牙列不齐怎么办？</a>
            <span>></span>
          </li>

          <li>
            <img src="./images/index/class_list.png" alt="">
            <a href="#">牙齿美白的方法都有哪些？</a>
            <span>></span>
          </li>

          <li>
            <img src="./images/index/class_list.png" alt="">
            <a href="#">牙齿断了修复要多少钱</a>
            <span>></span>
          </li>

          <li>
            <img src="./images/index/class_list.png" alt="">
            <a href="#">隐形矫正牙齿有什么优势？</a>
            <span>></span>
          </li>



          <li>
            <img src="./images/index/class_list.png" alt="">
            <a href="#">全☐种植牙的费用？</a>
            <span>></span>
          </li>

          <li>
            <img src="./images/index/class_list.png" alt="">
            <a href="#">种牙和镶牙哪个好？</a>
            <span>></span>
          </li>
        </ul>

      </div>

      <div class="class_but">
        <a class="green button">咨询医生</a>
        <a href="./forum.php" class="orangellow button">查看更多 >></a>
      </div>
    </div>

    <!-- 在线预约 -->
    <div class="con_Online">

      <div class="title">
        <img src="./images/index/con_title.png" alt="">
        <h3>在线预约</h3><span>(24小时在线 极速回复)</span>
      </div>
      <div class="Online_box">
        <div class="Online_text">
          <div class="Online_fl">
            <span><i>*</i> 姓名</span>
            <input type="text" name="user_name" verification='no'  id="user_name"  placeholder="请填写您的姓名">
          </div>
          <div class="Online_fr">
            <span><i>*</i> 电话</span>
            <input type="text" name="User_telephone" verification='no' id="User_telephone" placeholder="请填写您的电话">
          </div>

          <div class="Online_fl">
            <span>您的性别</span>
            <input type="text" name="gender" id="gender" placeholder="请填写您的您的性别">
          </div>

          <div class="Online_fr">
            <span>预约项目</span>
            <select id="project" value="选择就诊项目">
              <option value="选择就诊项目">请选择就诊项目</option>
              <option value="种植牙">种植牙</option>
              <option value="牙齿矫正">牙齿矫正</option>
              <option value="牙齿不齐">牙齿不齐</option>
              <option value="烤齿牙">烤齿牙</option>
              <option value="牙齿缺失">牙齿缺失</option>
              <option value="牙痛">牙痛</option>
              <option value="补牙">补牙</option>
              <option value="拔牙">拔牙</option>
              <option value="治疗">治疗</option>
              <option value="洗牙">洗牙</option>
              <option value="智齿">智齿</option>
              <option value="复诊">复诊</option>
            </select>
            <!-- <input type="text" name="username" placeholder="请填写预约项目"> -->
          </div>

          <div class="Online_but">
            <span>症状描述</span>
            <textarea name="content" id="describe"  placeholder="请把问题留给我们，我们会提供让您满意的答案！"></textarea>
          </div>

          <span>
          *填写信息已加密，保证您的隐私安全，我们会尽快与您取得联系，谢谢您的信任。*
          </span>


          <div class="index-form-btn">
            <input class="sub" type="submit" id="submit" value="提交">
            <input class="reset" type="reset" id="reset" value="重置">
          </div>
        </div>


      </div>

    </div>
  </div>
  <!-- 主体内容结束 -->




  <!-- 底部 footer -->
  <?php include './public/footer.php'; ?>



  <!-- 头部 导航按钮 旋转   /    显隐遮罩层  /  banner  swiper  -->
  <script src="./js/public.js"></script>


  <script>
    // 关于我们
    var swiper = new Swiper('.about_img', {
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
    });

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

    // 1、添加动画的元素    2、元素相对于顶部的距离
    getTop_fr('.team_box', '.nav_box') // home页__医生团队img__右移入动画
    getTop_fr('.class_box', '.team_but') // home页__医生课堂__右移移入动画
    
    getTop_fl('.team_but', '.nav_box') // home页__医生团队按钮__左移入动画
    getTop_fl('.Online_box', '.team_but') // home页__在线预约__左移入动画



  </script>

</body>

</html>