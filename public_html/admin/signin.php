
<!DOCTYPE html>
<html class="login-bg">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Varts后台管理</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- bootstrap -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet">

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="css/compiled/layout.css">
    <link rel="stylesheet" type="text/css" href="css/compiled/elements.css">
    <link rel="stylesheet" type="text/css" href="css/compiled/icons.css">

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.css">
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="css/compiled/signin.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
      <script src="js/html5.js"></script>
    <![endif]-->

    <style>
        .bg-switch { display: none; }
        .remember { display: none; }
        .no-account { display: none; }
    </style>

</head>
<body>


    <!-- background switcher -->
    <div class="bg-switch visible-desktop">
        <div class="bgs">
            <a href="#" data-img="landscape.jpg" class="bg active">
                <img src="img/bgs/landscape.jpg" />
            </a>
            <a href="#" data-img="blueish.jpg" class="bg">
                <img src="img/bgs/blueish.jpg" />
            </a>            
            <a href="#" data-img="7.jpg" class="bg">
                <img src="img/bgs/7.jpg" />
            </a>
            <a href="#" data-img="8.jpg" class="bg">
                <img src="img/bgs/8.jpg" />
            </a>
            <a href="#" data-img="9.jpg" class="bg">
                <img src="img/bgs/9.jpg" />
            </a>
            <a href="#" data-img="10.jpg" class="bg">
                <img src="img/bgs/10.jpg" />
            </a>
            <a href="#" data-img="11.jpg" class="bg">
                <img src="img/bgs/11.jpg" />
            </a>
        </div>
    </div>


    <div class="login-wrapper">
        <a href="index.html">
            <img class="logo" src="img/bg_logo_vane360_font.png">
        </a>

        <div class="box">
            <div class="content-wrap">
                <h6>登录</h6>
                <input class="form-control" type="text" placeholder="邮箱地址">
                <input class="form-control" type="password" placeholder="密码">
                <a href="#" class="forgot">忘记密码?</a>
                <div class="remember">
                    <input id="remember-me" type="checkbox">
                    <label for="remember-me">记住密码</label>
                </div>
                <a class="btn-glow primary login" href="index.html">登录</a>
            </div>
        </div>

        <div class="no-account">
            <p>还没账号?</p>
            <a href="signup.html">注册</a>
        </div>
    </div>

	<!-- scripts -->
    <script src="js/jquery-1.11.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/theme.js"></script>

    <!-- pre load bg imgs -->
    <script type="text/javascript">
        $(function () {
            // bg switcher
            var $btns = $(".bg-switch .bg");
            $btns.click(function (e) {
                e.preventDefault();
                $btns.removeClass("active");
                $(this).addClass("active");
                var bg = $(this).data("img");

                $("html").css("background-image", "url('img/bgs/" + bg + "')");
            });

        });
    </script>
</body>
</html>