<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>医生团队</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/doctor_team.css"> 
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

      <!-- 医者精诚 -->
      <div class="team_box shift_left">
        <div class="title">
          <h3><span>医者精诚</span>·践行良知</h3>
          <p>--荟萃口腔名医 树立行业典范--</p>
        </div>

        <div class="text_box ">
          <img src="./images/team/team_01_02.jpg" alt="优贝口腔 刘洋 牙齿正畸医师 儿童齿科专业医师">
          <div class="text">
            <h3><span>刘洋</span> 美学修复</h3>
            <p>优贝口腔正畸医师</p>
            <p>优贝儿童齿科专业医师</p>
            <ul class="text_img">
              <li>
                <img src="./images/team/team_text_01.jpg" alt="优贝口腔 刘洋 美学修复">
                <span>修复</span>
              </li>

              <li>
                <img src="./images/team/team_text_02.jpg" alt="优贝口腔  牙齿矫正">
                <span>矫正</span>
              </li>

              <li>
                <img src="./images/team/team_text_03.jpg" alt="优贝口腔  牙齿种植">
                <span>种植</span>
              </li>
            </ul>
          </div>

          <div class="team_but">
            <a href="#"><button class="btn-pill"><span>咨询医生</span></button></a>
            <a href="tel:400-1671818"><button class="btn-pill"><span>电话预约</span></button></a>
          </div>

        </div>

        <div class="text_box hide_text_box">
          <img src="./images/team/team_02_02.jpg" alt="优贝口腔 张鹏 牙齿种植医师 美容修复医师 全科医师">
          <div class="text">
            <h3><span>张鹏</span> 美学修复</h3>
            <p>优贝口腔种植医师</p>
            <p>优贝口腔美容修复医师</p>
            <p>优贝口腔全科医师</p>
            <ul class="text_img">
              <li>
                <img src="./images/team/team_text_01.jpg" alt="优贝口腔 张鹏 牙齿修复">
                <span>修复</span>
              </li>

              <li>
                <img src="./images/team/team_text_02.jpg" alt="优贝口腔  牙齿矫正">
                <span>矫正</span>
              </li>

              <li>
                <img src="./images/team/team_text_04.jpg" alt="优贝口腔  牙齿美容">
                <span>美容</span>
              </li>
            </ul>
          </div>
          <div class="team_but">
            <a href="#"><button class="btn-pill"><span>咨询医生</span></button></a>
            <a href="tel:400-1671818"><button class="btn-pill"><span>电话预约</span></button></a>
          </div>
        </div>

        <div class="text_box hide_text_box">
          <img src="./images/team/team_03_02.jpg" alt="优贝口腔 徐涛 牙齿种植医师 牙齿正畸学医师">
          <div class="text">
            <h3><span>徐涛</span> 种植医师</h3>
            <p>优贝口腔种植医师</p>
            <p>优贝口腔正畸学硕士</p>
            <p>中华口腔医学会会员</p>
            <ul class="text_img">
              <li>
                <img src="./images/team/team_text_01.jpg" alt="优贝口腔  牙齿修复">
                <span>修复</span>
              </li>

              <li>
                <img src="./images/team/team_text_02.jpg" alt="优贝口腔  牙齿矫正">
                <span>矫正</span>
              </li>
            </ul>
          </div>
          <div class="team_but">
            <a href="#"><button class="btn-pill"><span>咨询医生</span></button></a>
            <a href="tel:400-1671818"><button class="btn-pill"><span>电话预约</span></button></a>
          </div>
        </div>

        <div class="text_box hide_text_box">
          <img src="./images/team/team_04_02.png" alt="优贝口腔 陈桦 口腔种植医师 口腔美容医师">
          <div class="text">
            <h3><span>陈桦</span> 美学修复</h3>
            <p>优贝口腔种植医师</p>
            <p>优贝口腔美容医师</p>
            <p>优贝儿童齿科专业医师</p>
            <ul class="text_img">
              <li>
                <img src="./images/team/team_text_03.jpg" alt="优贝口腔 牙齿种植">
                <span>种植</span>
              </li>
              <li>
                <img src="./images/team/team_text_01.jpg" alt="优贝口腔 牙齿修复">
                <span>修复</span>
              </li>
            </ul>
          </div>
          <div class="team_but">
            <a href="#"><button class="btn-pill"><span>咨询医生</span></button></a>
            <a href="tel:400-1671818"><button class="btn-pill"><span>电话预约</span></button></a>
          </div>

        </div>

        <div class="text_box hide_text_box next">
          <img src="./images/team/team_05_02.png" alt="优贝口腔 王迪 口腔种植医师 口腔美容医师">
          <div class="text">
            <h3><span>王迪</span> 美容修复</h3>
            <p>优贝口腔种植医师</p>
            <p>优贝口腔美容医师</p>
            <ul class="text_img">
              <li>
                <img src="./images/team/team_text_03.jpg" alt="优贝口腔 牙齿种植">
                <span>种植</span>
              </li>
              <li>
                <img src="./images/team/team_text_01.jpg" alt="优贝口腔 牙齿修复">
                <span>修复</span>
              </li>

              <li>
                <img src="./images/team/team_text_02.jpg" alt="优贝口腔 牙齿修复">
                <span>矫正</span>
              </li>
            </ul>
          </div>

          <div class="team_but">
            <a href="#"><button class="btn-pill"><span>咨询医生</span></button></a>
            <a href="tel:400-1671818"><button class="btn-pill"><span>电话预约</span></button></a>
          </div>

        </div>

        <div class="text_box hide_text_box">
          <img src="./images/team/team_06_02.jpg" alt="优贝口腔 宋铁砾 口腔种植医师 牙齿美容医师">
          <div class="text">
            <h3><span>宋铁砾</span> 口腔种植</h3>
            <p>优贝口腔种植医师</p>
            <p>优贝口腔美容医师</p>
            <ul class="text_img">
              <li>
                <img src="./images/team/team_text_03.jpg" alt="优贝口腔 牙齿种植">
                <span>种植</span>
              </li>
              <li>
                <img src="./images/team/team_text_01.jpg" alt="优贝口腔 牙齿修复">
                <span>修复</span>
              </li>

              <li>
                <img src="./images/team/team_text_02.jpg" alt="优贝口腔 牙齿矫正">
                <span>矫正</span>
              </li>
            </ul>
          </div>

          <div class="team_but">
            <a href="#"><button class="btn-pill"><span>咨询医生</span></button></a>
            <a href="tel:400-1671818"><button class="btn-pill"><span>电话预约</span></button></a>
          </div>

        </div>

        <div class="text_box hide_text_box ">
          <img src="./images/team/team_07_01.png" alt="优贝口腔 郭宏伟 口腔种植医师 牙齿正畸医师">
          <div class="text">
            <h3><span>郭宏伟</span> 口腔种植</h3>
            <p>优贝口腔种植医师</p>
            <p>优贝口腔正畸医师</p>
            <ul class="text_img">
              <li>
                <img src="./images/team/team_text_03.jpg" alt="优贝口腔 牙齿种植">
                <span>种植</span>
              </li>

              <li>
                <img src="./images/team/team_text_02.jpg" alt="优贝口腔 牙齿正畸">
                <span>正畸</span>
              </li>
            </ul>
          </div>

          <div class="team_but">
            <a href="#"><button class="btn-pill"><span>咨询医生</span></button></a>
            <a href="tel:400-1671818"><button class="btn-pill"><span>电话预约</span></button></a>
          </div>


        </div>

        <div class="text_box hide_text_box next">
          <img src="./images/team/team_08_01.png" alt="优贝口腔 张洪波 口腔种植医师 牙齿正畸医师">
          <div class="text">
            <h3><span>张洪波</span> 正畸医师</h3>
            <p>优贝口腔种植医师</p>
            <p>优贝口腔正畸医师</p>
            <ul class="text_img">
              <li>
                <img src="./images/team/team_text_03.jpg" alt="优贝口腔 牙齿种植">
                <span>种植</span>
              </li>

              <li>
                <img src="./images/team/team_text_02.jpg" alt="优贝口腔 牙齿正畸">
                <span>正畸</span>
              </li>
            </ul>
          </div>

          <div class="team_but">
            <a href="#"><button class="btn-pill"><span>咨询医生</span></button></a>
            <a href="tel:400-1671818"><button class="btn-pill"><span>电话预约</span></button></a>
          </div>


        </div>

        <div class="team_list">
          <ul>
            <li>
                <img class="select" src="./images/team/team_01_01.png" alt="优贝口腔 刘洋">
                <h3>刘洋</h3>
            </li>

            <li>
                <img src="./images/team/team_02_01.png" alt="优贝口腔 张鹏">
                <h3>张鹏</h3>
            </li>

            <li>
                <img src="./images/team/team_03_01.png" alt="优贝口腔 徐涛">
                <h3>徐涛</h3>
            </li>

            <li>
                <img src="./images/team/team_04_01.png" alt="优贝口腔 陈桦">
                <h3>陈桦</h3>
            </li>

            <li>
                <img src="./images/team/team_05_01.png" alt="优贝口腔 王迪">
                <h3>王迪</h3>
            </li>

            <li>
                <img src="./images/team/team_06_01.png" alt="优贝口腔 宋铁砾">
                <h3>宋铁砾</h3>
            </li>

            <li>
                <img src="./images/team/team_07_01.png" alt="优贝口腔 郭宏伟">
                <h3>郭宏伟</h3>
            </li>

            <li>
                <img src="./images/team/team_08_01.png" alt="优贝口腔 张洪波">
                <h3>张洪波</h3>
            </li>

          </ul>
        </div>


      </div>

      <!-- 国际高端品质 -->
      <div class="quality">
        <div class="title">
          <h3><span>国际高端品质 </span>技术引领前沿</h3>
          <p>--优贝口腔北京昌平旗舰店--</p>
        </div>
        <div class="qua_box">
          <div class="qua_fl ">
            <img src="./images/con_team.jpg" alt="优贝口腔 医师团队">
            <p>
            优贝口腔拥有一支高学历、临床经验丰富、医术精湛的口腔医疗团队，能够针对患者的不同情况量身制定个性化诊疗方案，满足不同患者的需求。优贝口腔 全部医生均毕业于国内知名口腔医学院。
            </p>

          </div>

          <div class="qua_fl hide_text_box">
            <img src="./images/team/qua_02.jpg" alt="优贝口腔 先进设备">
            <p>
            优贝口腔拥有多种国际先进的设备，如VaTech牙科CT，奥地利WH种植机，法国DHT无痛麻醉仪、德国西诺德数字椅旁全瓷修复系统等。
            </p>

          </div>

          <div class="qua_fl hide_text_box">
            <img src="./images/team/qua_03.jpg" alt="优贝口腔 原装进口材料">
            <p>
              优贝口腔所有材料均为原装进口，通过正规渠道统一引进分配，安全、可靠、价格合理，绝无以次充好、小作坊生产贴包装等以假乱真现象，保障百姓权益。
            </p>
          </div>

          <div class="qua_fl hide_text_box">
            <img src="./images/team/qua_04.jpg" alt="优贝口腔 技术保障">
            <p>
              优贝口腔医师团含教授、博士、硕士等口腔专家，与美国宾夕法尼亚大学、华西口腔医院等国内外十余家机构合作，技术领先。
            </p>
          </div>

          <div class="qua_fl hide_text_box">
            <img src="./images/team/qua_05.jpg" alt="优贝口腔 无菌保障">
            <p>
            拥有国际五星标准层流净化手术系统，配置国内先进安全的局部麻醉系统。严格执行美国(FDI)标准的消毒隔离系统，一人一诊室，一医一助，一机一用。
            </p>
          </div>

          <div class="qua_fr">
            <ul>
              <li class="select">专家保障</li>
              <li>设备保障</li>
              <li>材料保障</li>
              <li>技术保障</li>
              <li>无菌保障</li>
            </ul>
          </div>
        </div>
      </div>

      <!-- 自助预约 -->
      <div class="register">
        <div class="title">
          <h3><span>自助预约</span>·预约挂号</h3>
          <p>--优贝口腔 预约通道--</p>
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
    <!-- 内容区域结束 -->


    <!-- 底部 footer -->
    <?php include './public/footer.php'; ?>

    <!-- 头部 导航按钮 旋转   /    显隐遮罩层  /  banner  swiper  -->
    <script src="./js/public.js"></script>

    <script>
    // 1、添加动画的元素    2、元素相对于顶部的距离
    getTop_fr('.quality', '.team_box') // 医生团队页__国际高端品质__右移入动画
    getTop_fl('.register', '.team_list') // 医生团队页__国际高端品质__右移入动画


    // 医者精诚 列表切换
    $('.team_list>ul>li').click(function(){
      $(this).find('img').addClass('select').parents('li').siblings('li').find('img').removeClass('select')
      var index = $(this).index()
      $('.text_box').eq(index).show().siblings('.text_box').hide()
    })

    // 国际高端品质 列表切换
    $('.qua_fr>ul>li').click(function(){
      $(this).addClass('select').siblings('li').removeClass('select')
      var index = $(this).index()
      $('.qua_fl').eq(index).show().siblings('.qua_fl').hide()
    })

    </script>

</body>

</html>