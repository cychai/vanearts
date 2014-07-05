<?php 
    include '../inc/config/config.php';
    $title = '关于我们';
    $page = 'about';
?>
<!-- header（Start） -->
<?php include ROOT . 'include/header.php'; ?>
<!-- header（End） -->

<div class="vane360-wrap gywm-wrap">
    <div class="bg-line" style="margin:25px auto 20px"></div>
    <article class="clearfix"> 
        <!-- sideNav -->
        <aside class="sideNav">
            <div class="sideNav-in">
                <h2><span>关于我们</span> <span class="span-decorate"></span><i class="m-icon m-icon-shadow-titleRL"></i></h2>
                <ul>
                    <li><a href="#"><i class="m-icon m-icon-person"></i><span>风标教育</span></a></li>
                    <li><a href="#"><i class="m-icon m-icon-person"></i><span>风标留学</span></a></li>
                    <li><a href="#"><i class="m-icon m-icon-person"></i><span>我们的故事</span></a></li>
                </ul>
            </div>
        </aside>
        
        <!-- main-cont -->
        <div class="main-cont">
            <div class="m-title clearfix">
                <h2><i class="m-block-green"></i><span>风标教育</span></h2>
            </div>
            <section class="about-us" id="scroll-wrap">
            	<div class="cont" id="scroll">
                	<p><img src="images/temp/pic_754x350_01.jpg" alt=""></p>
                </div>
            </section>
        </div>
    </article>
    
    <!-- main-cont -->
    <section class="tool-bar">
        <ul>
            <li><a href="#"><i class="m-icon m-icon-zxbm"></i><span>在线报名</span></a></li>
            <li><a href="#"><i class="m-icon m-icon-zxzx"></i><span>在线咨询</span></a></li>
            <li><a href="#"><img src="images/bg_QRcode.png" alt=""></a></li>
        </ul>
    </section>
</div>

<!-- footer（Start） -->
<?php include ROOT . 'include/footer.php'; ?>
<!-- footer（End） -->
</body>
</html>