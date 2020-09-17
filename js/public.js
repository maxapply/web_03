  // 点击头部导航列表 添加类名 实现旋转动画
  $('.header_fl_list').click(function () {

    $(this).removeClass("click_before").addClass("click_after");
    // 左侧菜单导航栏 显示
    $('.fl_nav').addClass('nav_fl')
    // 遮罩层 显示
    $('.backdrop').show()

  })


  // 点击遮罩层
  $('.backdrop').click(function (e) {

    // 头部导航列表 旋转
    $('.header_fl_list').removeClass('click_after')


    // 阻止默认行为
    e.preventDefault()
    // 左侧导航栏 隐藏
    $('.fl_nav').removeClass('nav_fl')

    // 关闭遮罩层
    $(this).hide()
  })


  // banner swiper
  var swiper = new Swiper('.top_swiper', {
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



  // 移入动画
  // 右移动
  function getTop_fr(x, y) {
    document.addEventListener('touchmove', function (e) {

      if (e.touches[0].pageY >= $(y).offset().top) {
        // console.log($(y)[0])
        $(x).addClass('shift_right')
      }
    })
  }




  // 左移动
  function getTop_fl(x, y) {
    document.addEventListener('touchmove', function (e) {

      if (e.touches[0].pageY >= $(y).offset().top) {
        $(x).addClass('shift_left')
      }
    })
  }



  // 点击弹出框关闭按钮
  $('.close').click(function () {
    $('.Popup').fadeOut(1500)
  })


  // 滚动大于200 制顶小火箭显示
  $(function () {
    function showBox() {
      $(document).scrollTop() >= 200 ?
        $(".scroll_top").fadeIn() :
        $(".scroll_top").fadeOut()
    }
    // dom渲染完成后判断滚动条卷起距离大于200 ？显示 ：隐藏
    showBox()
    // 滚动的时候显示小火箭
    $(window).scroll(function () {
      showBox()
    })
  })
  // 点击小火箭， 卷起距离为0
  $(".scroll_top").click(function () {
    $("body,html").animate({
      scrollTop: 0,
    })
  })

  // 错误提示信息
  $(".error_btn").click(function () {
    $('.error_message').hide()
  })


  // 用户名验证
  $("#user_name").blur(function () {
    if (/^([\u4e00-\u9fa5]){2,5}$/.test(this.value)) {
      console.log('用户名输入正确');
      // 修改标签属性
      $(this).attr('verification', 'yes')
    } else {
      // 设置弹出信息框错误提示的文字
      $('.error_message').find('h3>span').html('姓名')
      // 显示弹出框
      $('.error_message').show()
      // 修改标签属性
      $(this).attr('verification', 'no')
    }
  });


  // 手机号验证
  $("#User_telephone").blur(function () {
    if (!(/^1[3456789]\d{9}$/.test(this.value))) {
      // 设置弹出信息框错误提示的文字
      $('.error_message').find('h3>span').html('手机号')
      // 显示弹出框
      $('.error_message').show()
      // 修改标签属性
      $(this).attr('verification', 'no')
    } else {
      console.log('手机号输入正确');
      // 修改标签属性
      $(this).attr('verification', 'yes')
    }
  });

  // 点击提交按钮
  $('#submit').click(function () {
    var name = $("#user_name").attr('verification')
    var telephone = $("#User_telephone").attr('verification')

    if (name == 'yes' && telephone == 'yes') {

      console.log('信息全部填写正确，提交信息');
    } else {

      // 判断信息填写是否有误
      if (name == 'no') {
        // 设置弹出信息框错误提示的文字
        $('.error_message').find('h3>span').html('姓名')
        // 显示弹出框
        $('.error_message').show()
      } else if (telephone == 'no') {
        // 设置弹出信息框错误提示的文字
        $('.error_message').find('h3>span').html('手机号')
        // 显示弹出框
        $('.error_message').show()
      }
    }
  })

  // 点击重置按钮
  $('#reset').click(function () {
    $('#user_name').val('')
    $('#User_telephone').val('')
    $('#gender').val('')
    $('#project').val('选择就诊项目')
    $('#describe').val('')
  })