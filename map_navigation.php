<?php include("./config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>导航到店</title>

  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/swiper.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/base.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/public.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH ?>/map_navigation.css">
  <script src="./js/flexible.js"></script>
  <script src="./js/jquery-3.5.1.min.js"></script>
  <script src="./js/swiper.min.js"></script>
  <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.15&key=e6bd1d1580e1dbb6a33a1a51da4bbb99">
  </script> <!-- 高德地图api -->

</head>

<body>
    <!-- 头部 logo -->
    <?php include './public/header.php'; ?>

    <!-- 头部 swiper -->
    <?php include './public/header_swiper.php'; ?>

    <!-- 头部 导航栏 -->
    <?php include './public/nav.php'; ?>



    <!-- 来院路线模块开始 -->
    <div class="address_info shift_left">
      <div class="title">
        <h3>来院路线</h3>
        <p>Route to the hospital</p>
      </div>

      <div class="address_box">
        <ul>
          <li>
            <img class="select_add" src="./images/map/gj.png" alt="优贝口腔 公交路线">
            <h3 class="select_h3">公交</h3>
          </li>
          <li>
            <img src="./images/map/dt.png" alt="优贝口腔 地铁路线">
            <h3>地铁</h3>
          </li>
          <li>
            <img src="./images/map/qc.png" alt="优贝口腔 自驾路线">
            <h3>自驾</h3>
          </li>
        </ul>

        <div class="info_box">
          <div class="list">
            <div class="list_fr">
              <h3>南环中路(公交站)</h3>
              <p>345路 345路区间 357路 559路 885路 昌1路 昌2路 昌67路 昌68路</p>
            </div>
          </div>
        </div>


        <div class="info_box hide_info">
          <div class="list">
            <div class="list_fr">
              <h3>昌平(地铁站)</h3>
              <p>昌平线 开往高教园方向</p>
            </div>
          </div>
        </div>


        <div class="info_box hide_info">
          <div class="list">
            <div class="list_fr">
              <h3>门店地址：优贝口腔北京昌平旗舰店</h3>
              <h3>(自驾/出租车)</h3>
              <p>北京市昌平区南环中路24号</p>

              <div class="nav_but">
                <a href="https://uri.amap.com/marker?position=116.231524,40.212314&name=优贝口腔旗舰店">
                  <button class="btn-pill"><span><i></i>导航服务</span></button>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- 来院路线模块结束 -->


    <!-- 展示门店地图开始 -->
    <div class="map">
      <div id="container"></div>
    </div>
    <!-- 展示门店地图结束 -->



    <!-- 导航到店开始 -->
    <div class="nav_store">
      <div class="title">
        <h3>导航到店</h3>
        <p>Navigate to the store</p>
      </div>
      <ul>
        <li>
          <a href="https://uri.amap.com/marker?position=116.231524,40.212314&name=优贝口腔旗舰店">
            <img src="./images/store.jpg" alt="">
            <div class="nav_text">
              <h3>昌平旗舰店</h3>
              <p>地址：北京市昌平区南环中路24号</p>

              <div class="nav_but">
                <a href="https://uri.amap.com/marker?position=116.231524,40.212314&name=优贝口腔旗舰店">
                  <button class="btn-pill"><span><i></i>导航服务</span></button>
                </a>
              </div>
            </div>
          </a>
        </li>
      </ul>
    </div>
    <!-- 导航到店结束 -->


    <!-- 底部 footer -->
    <?php include './public/footer.php'; ?>



  <!-- 头部 导航按钮 旋转   /    显隐遮罩层  /  banner  swiper  -->
  <script src="./js/public.js"></script>

  <script>
    // 来院路线 点击切换显示内容
    $('.address_box>ul>li').click(function () {
     
      var index = $(this).index()
      $(this).find('img').addClass('select_add')
      $(this).find('h3').addClass('select_h3').parents('li').siblings('li').find('h3').removeClass('select_h3')
      $(this).siblings().find('img').removeClass('select_add')
      $('.info_box').eq(index).show().siblings('.info_box').hide()
    })

    // 1、添加动画的元素    2、元素相对于顶部的距离
     getTop_fr('.map', '.address_info') // map页__地图导航__右移移入动画
     getTop_fl('.nav_store', '.map') // map页__导航到店__左移入动画
  </script>

  <script type="text/javascript">
    //地图初始化时，在地图上添加一个marker标记,鼠标点击marker可弹出自定义的信息窗体
    var map = new AMap.Map("container", {
      resizeEnable: true, //是否监控地图容器尺寸变化
      zoom: 15, //初始化地图层级
      center: [116.231524, 40.212314] //初始化地图中心点
    });
    addMarker();

    //添加marker标记
    function addMarker() {
      map.clearMap();
      var marker = new AMap.Marker({
        map: map,
        center: [116.231524, 40.212314] //初始化地图中心点

      });



      //鼠标点击marker弹出自定义的信息窗体
      AMap.event.addListener(marker, 'click', function () {
        infoWindow.open(map, marker.getPosition());
      });
    }

    //实例化信息窗体
    var title = '优贝口腔北京昌平旗舰店',
      content = [];
    content.push(
      "<img src='https://store.is.autonavi.com/showpic/1b50bcfdb0a91ae883379418a8c8cc42'>地址：北京市昌平区南环中路24号");
    content.push("电话：400-1671818 ");
    var infoWindow = new AMap.InfoWindow({
      isCustom: true, //使用自定义窗体
      content: createInfoWindow(title, content.join("<br/>")),
      offset: new AMap.Pixel(16, -45)
    });

    infoWindow.open(map, [116.231524, 40.212314]);

    //构建自定义信息窗体
    function createInfoWindow(title, content) {
      var info = document.createElement("div");
      info.className = "custom-info input-card content-window-card";

      //可以通过下面的方式修改自定义窗体的宽高
      //info.style.width = "400px";
      // 定义顶部标题
      var top = document.createElement("div");
      var titleD = document.createElement("div");
      var closeX = document.createElement("img");
      top.className = "info-top";
      titleD.innerHTML = title;
      closeX.src = "https://webapi.amap.com/images/close2.gif";
      closeX.onclick = closeInfoWindow;

      top.appendChild(titleD);
      top.appendChild(closeX);
      info.appendChild(top);

      // 定义中部内容
      var middle = document.createElement("div");
      middle.className = "info-middle";
      middle.style.backgroundColor = 'white';
      middle.innerHTML = content;
      info.appendChild(middle);

      // 定义底部内容
      var bottom = document.createElement("div");
      bottom.className = "info-bottom";
      bottom.style.position = 'relative';
      bottom.style.top = '0px';
      bottom.style.margin = '0 auto';
      var sharp = document.createElement("img");
      sharp.src = "https://webapi.amap.com/images/sharp.png";
      bottom.appendChild(sharp);
      info.appendChild(bottom);
      return info;
    }

    //关闭信息窗体
    function closeInfoWindow() {
      map.clearInfoWindow();
    }
  </script>



</body>

</html>