//首页banner
var swiper = new Swiper('.banner .swiper-container', {
     pagination: '.banner .swiper-pagination',
     nextButton: '.banner .swiper-button-next',
     prevButton: '.banner .swiper-button-prev',
     slidesPerView: 1,
     speed:700,
     paginationClickable: true,
     loop: true
 });
 // 案例toggle
 var swiper = new Swiper('.ix_case .swiper-container', {
       nextButton: '.ix_case .anli_tog_next',
       prevButton: '.ix_case .anli_tog_prev',
       speed:700,
       spaceBetween: 30
   });
  //奔跑吧
  $(function(){
	 $('body').running();
  })

//nynav
var swiper = new Swiper('.nynav .swiper-container', {
      slidesPerView: 'auto',
      nextButton: '.nynav .swiper-button-next',
      prevButton: '.nynav .swiper-button-prev',
      paginationClickable: true,
      spaceBetween: 0
  });

//我们正在做什么
var swiper = new Swiper('.thisdo_b .swiper-container', {
      slidesPerView: 'auto',
      paginationClickable: true,
      nextButton: ' .jt_next',
      prevButton: ' .jt_prev',
       speed:700,
      spaceBetween: 20
  });

//wow
var wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 0,
    mobile: true,
    live: true
});
wow.init();

///
$(".menu").click(function(){
  $(".nav").slideToggle(500);
});

//返回顶部
$(".returntop").click(function(){
		$("body,html").animate({scrollTop:"0"},500);
	});
//
// 点击提交电话
$(".wx_tel_img").hover(function(){
  $(".message_kf").stop(true, false).fadeIn(500)
});
$(".gb_cha").click(function(){
  $(".message_kf").fadeOut(500)
});
$(".wx_hover").hover(function(){
  $(".message_kf").fadeOut(500)
});

//页面加载时，生成随机验证码
  window.onload=function(){
   createCode(4);
  }
  //生成验证码的方法
  function createCode(length) {
      var code = "";
      var codeLength = parseInt(length); //验证码的长度
      var checkCode = document.getElementById("checkCode");
      ////所有候选组成验证码的字符，当然也可以用中文的
      var codeChars = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
      'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
      'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
      //循环组成验证码的字符串
      for (var i = 0; i < codeLength; i++)
      {
          //获取随机验证码下标
          var charNum = Math.floor(Math.random() * 62);
          //组合成指定字符验证码
          code += codeChars[charNum];
      }
      if (checkCode)
      {
          //为验证码区域添加样式名
          checkCode.className = "code";
          //将生成验证码赋值到显示区
          checkCode.innerHTML = code;
      }
  }
//验证手机号码是否正常
function checkPhone(){
    var phone = document.getElementById('mobile').value;
    if(!(/^1(3|4|5|6|7|8|9)\d{9}$/.test(phone))){
        alert("手机号码有误，请重填");
        return false;
    }
    else {
      validateCode();
    }
}

  //检查验证码是否正确
  function validateCode()
  {
      //获取显示区生成的验证码
      var checkCode = document.getElementById("checkCode").innerHTML;
      //获取输入的验证码
      var inputCode = document.getElementById("inputCode").value;
      //console.log(checkCode);
      //console.log(inputCode);
      if (inputCode.length <= 0)
      {
          alert("请输入验证码！");
      }
      else if (inputCode.toUpperCase() != checkCode.toUpperCase())
      {
          alert("验证码输入有误！");
          createCode(4);
      }
      else
      {
          // alert("验证码正确！");
          $.ajax({
          //几个参数需要注意一下
              type: "POST",//方法类型
              dataType: "json",//预期服务器返回的数据类型
              url: "https://api.staffhome.cn/user/websiteMobileSave" ,//url
              data:{mobile:document.getElementById("mobile").value},
              success: function (result) {
                  console.log(result);//打印服务端返回的数据(调试用)
                  if (result.code == 200) {
                      alert("电话提交成功,我们会尽快与您联系");
                  }else if(result.code == 201) {
                      alert("频次过高稍后再试");
                  }
              },
              error : function() {
                  alert("电话提交失败,请刷新页面重新提交！");
              }
          });

      }
  }

//点击切换验证码
$("#checkCode").click(function(){
		createCode(4);
	});

//常见提交
function login() {
  checkPhone();
  // createCode(4);
  // console.log(document.getElementById("mobile").value);

 }
