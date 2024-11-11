<?php 
$title = "募集要項一覧｜募集職種｜";
$description = "綜合キャリアオプションの「AnewS」の中途採用募集要項です。理想のキャリアプランを実現したい方へ。多様なプロジェクトを通して、自分の強みを見つけ、スキルを磨き成長できます。";
// $keywords = "";
$pagename = "job";
$jobtype="5";
require("./app/common.php");
require("./inc_templates/header.php");
?>
<MAIN>
<SECTION class="mvimg mv-084" id="section-job-mv">
  <div class="wraper-box bot01">
  <div class="box"></div>
  </div>

<!--*-->
  <DIV class="container flex-col2">
  <div class="order-md-1">
    <div class="tit-m v-txt01">
    <h2 class="v-o-up">募集要項一覧<i>Project Manager</i></h2>
    <p class="tit-s v-txt01">
      理想のキャリアプランを実現したい方へ。<br>
      多様なプロジェクトを通して、<br>
      自分の強みを見つけ、スキルを磨き成長できます。
    </p>
    </div>
  </div>
  <div class="order-md-3">
    <figure><img src="img/pic/recruit_05.jpg?<?= VER ?>" alt="AnewS"></figure>
  </div>
  </DIV>
  <!--*-->
    <div class="box-btn">
    <a href="#section-jobdetail" class="btn-maru-big mx-4" data-js="add_hover"><span>NEXT</span></a>
    </div>
    <?php require("./inc_templates/inc_devimg.php");?>
  </SECTION>

    <SECTION id="section-jobdetail">
        <DIV class="container">
            <article class="jobinfo" style="padding-top: 80px">
                <?php require("./inc_templates/inc_menu_job.php"); ?>
            </article>
        </DIV>
        <?php require("./inc_templates/inc_devimg.php");?>
    </SECTION>

</MAIN>

<?php require("./inc_templates/footer.php"); ?>
