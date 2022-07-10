
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
  <!-- <link rel="icon" type="image/png" href="//mangatoon.mobi/images/icon-128.png" /> -->
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
  <meta name="apple-touch-fullscreen" content="yes"/>
  <meta name="format-detection" content="telephone=no, email=no"/>
  <meta name="google-signin-client_id" content="1053859989808-61np00jsikcv4ejn1hut2d8jf5vplk3m.apps.googleusercontent.com"/>
      <title>NOLONE</title>
  <link href="//at.alicdn.com/t/font_659557_66mgqazctwj6ecdi.css" rel="stylesheet"/>
    <link href="/bootstrap-4.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/h5.css?1577327938" rel="stylesheet"/><script src='/js/jquery-1.11.1.min.js' type='text/javascript'></script>
</head>
<body>
 <!-- <?php 
// session_start();
// include '../Konfig/koneksi.php';

// $username = $_POST['username'];
// $password = md5($_POST['password']);

// $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");

   // $data = mysqli_fetch_assoc($result);
   // $_SESSION['username'] = $username;
   // $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
   // $_SESSION['status'] = "sudah_login";
   // $_SESSION['jns_kel'] = $data['jns_kel'];
   // $_SESSION['email'] = $data['email'];
   // $_SESSION['tgl_lahir'] = $data['tgl_lahir'];
   // $_SESSION['id'] = $data['id'];
   // header("location:../admin/dashboard.php");

?>-->

  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId: 209524349830497,
        autoLogAppEvents: true,
        xfbml: true,
        version: 'v3.0'
      });
    };
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if(d.getElementById(id)) {
        return;
      }
      js = d.createElement(s);
      js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

<div id="page-content"> 
<img id="bg-top" src="https://cn.e.pic.mangatoon.mobi/for-clients/login_bg_top3.jpg"/> 
 <img id="bg-bottom" src="https://cn.e.pic.mangatoon.mobi/for-clients/login_bg_bottom.jpg"/> 

<!-- <div id="login-buttons"> -->
      <!-- <div class="login-button login-button-google">Log in with Google</div> -->
    <!-- <div class="login-button login-button-facebook">Log in with Facebook</div> -->
    <!-- <div class="login-button login-button-line">Log in with Line</div> -->
  <!-- <div class="login-button login-button-twitter">Log in with Twitter</div> -->
  <!-- <div class="login-button login-button-apple">Log in with Apple</div> -->
  <!-- <div class="login-button login-button-zalo">Log in with Zalo</div> -->
  <!-- <div class="login-button login-button-email">Log in with Email</div> -->
<!-- </div> -->

<div class="div-login">
  <div class="div-email-login">
    <form method="POST" action="proses_login.php" class="needs-validation" novalidate="">
    <div class="shadow">
      <input type="text" id="txt-email" placeholder="E-mail Address"></input>
      <input type="password" id="txt-pwd" placeholder="Password"></input>
    </div>

    <a href="../admin/dashboard.php" id="btn-email-login">Log in</a>
  </div>
  <div class="div-other-login">
    <div class="other-login-txt">OR log in with</div>
    <div class="other-login-buttons">
            <div class="login-button login-button-google"></div>
            <div class="login-button login-button-facebook"></div>
            <div class="login-button login-button-line"></div>
      <div class="login-button login-button-twitter"></div>
    </div>
  </div>
</div>

<a id="privacy" href="https://h5.mangatoon.mobi/privacy/id">Privacy agreement</a>
<a id="nav-back" class="iconfont" href="javascript:history.back()">&#xe604;</a>


<style>
  html{background:#f4f4f4;display:flex;flex-direction:column;justify-content:center;}
  body{width:375px;background:white;height:100%;flex:1;display:flex;}
  #page-content{overflow:hidden}
  a#privacy{width:100%;color:#818181;font-size:12px;position:absolute;bottom:20px;text-align:center;}
  .login-button-facebook-test{width:100%;position:absolute;bottom:0;}
  .test1{color:#818181;font-size:12px;float:left;}
  .test2{color:#818181;font-size:12px;margin-left:30px;float:left;}
  #bg-top{width:375px;position:absolute;}
  #bg-bottom{width:256px;height:98px;position:absolute;bottom:0;left:60px;}
  #login-buttons{height:370px;position:absolute;bottom:60px;width:100%;}
  #login-buttons .login-button{width:155px;height:48px;line-height:48px;color:white;padding-left:45px;font-size:12px;
    -webkit-background-size:199px 48px;background-size:199px 48px;margin:0 auto 5px;}
  #login-buttons .login-button-google{background-image:url(https://cn.e.pic.mangatoon.mobi/for-clients/google_login.png);color:#313131;}
  #login-buttons .login-button-facebook{background-image:url(https://cn.e.pic.mangatoon.mobi/for-clients/facebook_login.png);}
  #login-buttons .login-button-line{background-image:url(https://cn.e.pic.mangatoon.mobi/for-clients/line_login.png);}
  #login-buttons .login-button-twitter{background-image:url(https://cn.e.pic.mangatoon.mobi/for-clients/twitter_login.png);}
  #login-buttons .login-button-apple{background-image:url(https://cn.e.pic.mangatoon.mobi/for-clients/apple_login.png);}
  #login-buttons .login-button-zalo{background-image:url(https://cn.e.pic.mangatoon.mobi/for-clients/zalo_login.png);}
  #login-buttons .login-button-email{background-image:url(https://cn.e.pic.mangatoon.mobi/for-clients/mail_login.png);color:#333333}
  .div-login{position:absolute;width:100%;bottom:0px;right:-375px;}
  .div-email-login{width:305px;height:190px;margin:0 auto;}
  .div-email-login .shadow{width:305px;height:120px;background:rgba(255, 255, 255, 1);box-shadow:0px 5px 12px 0px rgba(51, 51, 51, 0.18), 0px 2px 4px 0px rgba(51, 51, 51, 0.1);border-radius:5px;}
  .div-email-login input{height:20px;width:275px;line-height:20px;border:0;outline:medium;padding:20px 15px;font-size:18px;color:#666}
  .div-email-login input::-webkit-input-placeholder{color:#999;-webkit-transition:color .5s;}
  .div-email-login input:focus::-webkit-input-placeholder, input:hover::-webkit-input-placeholder{color:#c2c2c2;-webkit-transition:color .5s;}
  .div-email-login #txt-email{border-radius:5px 5px 0 0;}
  .div-email-login #txt-pwd{border-radius:0 0 5px 5px;border-top:solid 1px #E4E4E4;}
  #btn-email-login{width:305px;height:50px;background:#F5574B;border-radius:5px;display:block;line-height:50px;text-align:center;font-size:18px;font-weight:bold;color:#fff;text-decoration:none;margin-top:20px;}
  .div-other-login{width:305px;height:85px;border-top:solid 1px #ccc;margin:0 auto;margin-top:74px;margin-bottom:40px;}
  .other-login-txt{width:128px;color:#999999;font-size:14px;font-weight:bold;margin:0 auto;position:relative;top:-9px;background-color:#fff;text-align:center;}
  .other-login-buttons{width:280px;margin:0 auto;}
  .other-login-buttons .login-button{width:55px;height:55px;background-size:55px;float:left;margin-left:20px;}
  .other-login-buttons .login-button-google{background-image:url(https://cn.e.pic.mangatoon.mobi/for-clients/web_login_google.png);margin-left:0;}
  .other-login-buttons .login-button-facebook{background-image:url(https://cn.e.pic.mangatoon.mobi/for-clients/web_login_fb.png);}
  .other-login-buttons .login-button-line{background-image:url(https://cn.e.pic.mangatoon.mobi/for-clients/web_login_line.png);}
  .other-login-buttons .login-button-twitter{background-image:url(https://cn.e.pic.mangatoon.mobi/for-clients/web_login_twitter.png);}
  #nav-back{font-size:26px;color:white;padding:5px 20px 5px 10px;position:absolute;top:0;left:0;text-decoration:none;}
</style>

<script>
  $(function() {
    var y = document.body.clientHeight - 472 - 150;
    if(y < 0) $('#bg-top').css('top', y + 'px');
  });

  function googleLoginInit() {
    gapi.load('auth2', function() {
      gapi.auth2.init().then(function(googleAuth) {
      })
    });
  }

  function loginSuccess(accessToken) {
    var url = 'http://mangatoon.mobi/passport/login';
    if(url.indexOf('?') === -1) url = url + '?';
    url += '&_token=' + accessToken;
    window.location.href = url;
  }

  $('.login-button-google').click(function() {
    gapi.auth2.getAuthInstance().signIn({scope: 'profile email'}).then(function(googleUser) {
      var response = googleUser.getAuthResponse();
      var url = '//sg.mangatoon.mobi/api/users/loginGoogle?sign=072bccb15005ebafa3f04dbf21f28fe6';
      $.post(url, {access_token: response.access_token, expires_in: response.expires_in}, function(result) {
        loginSuccess(result.access_token);
      });
    })
  });

  $('.login-button-facebook').click(function() {
    FB.login(function(response) {
      if(response && response.status === 'connected') {
        var access_token = response.authResponse.accessToken;
        var expire_at = new Date().getTime() / 1000 + response.authResponse.expiresIn;
        var url = '//sg.mangatoon.mobi/api/users/loginFacebook?sign=1d778df43655712b705634c765911000';
        $.post(url, {access_token: access_token, expire_at: expire_at}, function(result) {
          if(result && result.access_token) {
            loginSuccess(result.access_token);
          }
        });
      } else {
        console.log(response)
      }
    }, {scope: 'public_profile,email'});
  });

  $('.test1').click(function() {
    FB.login(function(response) {
      console.log(1);
      console.log(response);
      if(response && response.status === 'connected') {
        var access_token = response.authResponse.accessToken;
        console.log(access_token);
      }
    }, {scope: 'public_profile, email'});
  });

  $('.test2').click(function() {
    FB.login(function(response) {
      console.log(2);
      console.log(response);
      if(response && response.status === 'connected') {
        var access_token = response.authResponse.accessToken;
        console.log(access_token);
      }
    });
  });

  window.fbAsyncInit = function() {
    FB.init({appId: '209524349830497', cookie: true, xfbml: true, version: 'v3.1'});
    FB.AppEvents.logPageView()
  };
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if(d.getElementById(id)) {
      return
    }
    js = d.createElement(s);
    js.id = id
    js.src = 'https://connect.facebook.net/en_US/sdk.js';
    fjs.parentNode.insertBefore(js, fjs)
  }(document, 'script', 'facebook-jssdk'));

  $('.login-button-line').click(function() {
    window.location.href = 'https://h5.mangatoon.mobi/users/lineOAuthInit';
  })

  $('.login-button-apple').click(function() {
    window.location.href = 'https://h5.mangatoon.mobi/users/appleOAuthInit';
  });

  $('.login-button-zalo').click(function() {
    window.location.href = 'https://h5.mangatoon.mobi/users/zaloOAuthInit';
  });

  $('.login-button-twitter').click(function() {
    window.location.href = 'https://h5.mangatoon.mobi/users/twitterOAuthInit';
  });

  $('#btn-email-login').click(function() {
    var url = 'https://h5.mangatoon.mobi/users/emailLogin'
    $.post(url, {email: $('#txt-email').val(), pwd: $('#txt-pwd').val()}, function(result) {
      if(result.status == 'success') {
        loginSuccess(result.access_token);
      } else {
        alert('email address or password is incorrect');
      }
    });
  })

  $('.login-button-email').click(function() {
    $('#login-buttons').animate({"right": 375}, 500);
    $('.div-login').animate({"right": 0}, 500);
  })
</script></div>
<script>var base_uri = '';</script>
<script src="/js/h5.js?1592059874"></script></body><script src="https://apis.google.com/js/platform.js?onload=googleLoginInit" async defer></script>
</html>