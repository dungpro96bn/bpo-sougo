<?php 
$title = "企業文化｜";
$description = "綜合キャリアオプションの企業文化の紹介です。ビジネスマンとして人に選ばれる周囲への配慮、顧客の問題解決にもつながる小さな「気づき」を大切にしています。";
// $keywords = "";
$pagename = "about_culture";
require("./app/common.php");
require("./inc_templates/header.php");
?>
<MAIN>

<SECTION class="mvimg mv-026 mv-second" id="section-mv-culture">
  <div class="wraper-box bot01"><div class="box"></div></div>
<!--*-->
<div class="tit-m v-txt01">
  <h2>企業文化<i>Culture</i></h2>
  <p class="tit-s v-txt01">
  ビジネスマンとして人に<br>選ばれる周囲への配慮、<br>
  顧客の問題解決にもつながるその<br>小さな「気づき」を大切にしています。
  </p>
</div>

<?php require("./inc_templates/inc_devimg.php");?>
</SECTION>

<SECTION id="section-culture">
<DIV class="container">
<!-- *1 -->
<article class="flex-col2 box-culture" id="culture-1">
  <div class="order-md-2">
    <div class="tit-m v-txt01">
    <h2>企業の理念</h2>
    <p class="v-txt01">
      「働くを通じて、人と社会を豊かにする」
      その意味は一人ひとりが結社員として会社発展を通じ、自己の人生と社会へ豊かさを生み出すことです。
      社員自身がやりがいを持ち、主体的に働くロールモデルになることを大切にしています。
    </p>
    </div>
  </div>
  <div class="order-md-1">
    <figure class="img-maru img-s"><img src="img/pic/culture_07.jpg?<?= VER ?>" alt="企業文化写真1"></figure>
    <figure class="img-maru img-m"><img src="img/pic/culture_12.jpg?<?= VER ?>" alt="企業文化写真2"></figure>
    <figure class="img-maru"><img src="img/pic/culture_02.jpg?<?= VER ?>" alt="企業文化写真3"></figure>
  </div>
</article>

<!-- *2 -->
<article class="flex-col2 box-culture" id="culture-2">
  <div class="order-md-1">
    <div class="tit-m v-txt01">
    <h2>挨拶を<br>大切にする</h2>
    <p class="v-txt01">
      人に対してのおもてなし精神を大切にする社風です。服装や髪型・身だしなみは当然のこと、
      ビジネスの基本として明るく丁寧な挨拶を社内でも心掛け、周囲への配慮を大切にしています。
      ビジネスマンとしての小さな「気づき」を養うことで、顧客との信頼関係構築の礎としています。
    </p>
    </div>
  </div>
  <div class="order-md-2">
    <figure class="img-maru img-s"><img src="img/pic/culture_10.jpg?<?= VER ?>" alt="企業文化写真4"></figure>
    <figure class="img-maru img-m"><img src="img/pic/culture_09.jpg?<?= VER ?>" alt="企業文化写真5"></figure>
    <figure class="img-maru"><img src="img/pic/culture_04.jpg?<?= VER ?>" alt="企業文化写真6"></figure>
  </div>
</article>

<!-- *3 -->
<article class="flex-col2 box-culture" id="culture-3">
  <div class="order-md-2">
    <div class="tit-m v-txt01">
    <h2>感謝の心を<br>常にもつ</h2>
    <p class="v-txt01">
      「この人と働きたい」を大切にする会社です。チームで達成した成果はメンバー全員で共有し、
      共に喜びを分かち合います。 感謝の気持ちを持つことで、モチベーションを高め、
      さらなる成長を目指していきます。
      「いつもありがとう」そんな言葉をお客様からかけていただいた方に、ぜひ仲間になっていただきたいです。
    </p>
    </div>
  </div>
  <div class="order-md-1">
    <figure class="img-maru img-s"><img src="img/pic/culture_14.jpg?<?= VER ?>" alt="企業文化写真7"></figure>
    <figure class="img-maru img-m"><img src="img/pic/culture_06.jpg?<?= VER ?>" alt="企業文化写真8"></figure>
    <figure class="img-maru"><img src="img/pic/culture_03.jpg?<?= VER ?>" alt="企業文化写真9"></figure>
  </div>
</article>


<article class="box-culture-mov">
<div class="tit02"><h2>朝のルーティーン</h2></div>
<div class="box-media">
  <section class="wrap-gallery02">
      <DIV class="swiper swiper_body">
        <div class="swiper-slide media-mov">
          <video controls playsinline webkit-playsinline poster="img/oneday/day_01.jpg?<?= VER ?>" preload="metadata" alt="朝のルーティーン" >
          <source src="img/oneday/day_mov01.mp4?<?= VER ?>" target="_blank">
          </video>
        </div>
      </DIV>
    </section>
  </div>
</article>



<img src="img/acc/acc_05.svg?<?= VER ?>" class="img-hr1">

<?php require("./inc_templates/inc_menu_company.php"); ?>
<br>
<br>
<?php require("./inc_templates/inc_menu_job.php"); ?>

</DIV>
<?php require("./inc_templates/inc_devimg.php");?>
</SECTION>
</MAIN>
<?php require("./inc_templates/footer.php"); ?>