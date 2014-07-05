<?php 
    include '../inc/config/config.php';
    $title = '首页';
    $page = 'index';
?>
<!-- header（Start） -->
<?php include ROOT . 'include/header.php'; ?>
<!-- header（End） -->

<div class="vane360-wrap index-wrap">
    <div class="bg-line" style="margin:25px auto 10px"></div>
    <!-- m-slide -->
    <article class="m-slide m-slide-main">
        <section class="m-slide-cont">
            <ul>
                <li> <a class="m-slide-cont-fullPic" href="#"><img src="images/temp/pic_960x360_01.jpg" alt="pic_980x400_01"></a> </li>
                <li> <a class="m-slide-cont-fullPic" href="#"><img src="images/temp/pic_960x360_00.jpg" alt="pic_980x400_02"></a> </li>
            </ul>
        </section>
        <div class="m-slide-btns"><a class="m-sbtn-prev" href="#"></a><a class="m-sbtn-next" href="#"></a></div>
        <div class="m-slide-pages">
            <p class="txC">
            </p>
        </div>
    </article>
    <div class="bg-line" style="margin:20px auto 20px"></div>
    
    <!-- Cooperation -->
    <section class="cooperation">
        <table  summary="">
            <tbody>
                <tr>
                    <th width="80">合作单位:
                        </td>
                    <td width="160"><a href="#"><img src="images/temp/pic_logo_durham.jpg" alt=""></a></td>
                    <td width="200"><a href="#"><img src="images/temp/pic_logo_galsgow.jpg" alt=""></a></td>
                    <td width="155"><a href="#"><img src="images/temp/pic_logo_sheffield.jpg" alt=""></a></td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
    </section>
</div>

<!-- footer（Start） -->
<?php include ROOT . 'include/footer.php'; ?>
<!-- footer（End） -->
</body>
</html>