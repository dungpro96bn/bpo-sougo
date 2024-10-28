<?php 
$title = "廣田尚紀｜社員インタビュー｜";
$description = "綜合キャリアオプション社員インタビューの紹介です｜廣田尚紀｜物流業の経験を活かし業界系BPO営業で活躍しています。";
// $keywords = "";
$pagename = "interview";
require("./app/common.php");
require("./inc_templates/header.php");
?>
<MAIN>

<style>
.mvimg .box{
background:url(img/interview/9/pic_mv.jpg);
background-position:right 30% top !important;
}
</style>

<SECTION class="mvimg" id="section-interview">
  <div class="wraper-box bot01">
  <div class="box"></div>
  </div>
<!--*-->
  <DIV class="flex-name position-l">
    <div class="tit-m v-txt01">
    <h2><ruby>廣田<rt>ヒロタ</rt> <ruby>尚紀<rt>ナオキ</rt></ruby>
    <i>Naoki Hirota</i>
    </h2>
    <p class="tit-s v-txt01">
      <strong>営業</strong>
      前職（物流業）の経験を活かし<br>業界系BPO営業で活躍している。
    </p>
    <span class="txt-etc">入社歴2年 30代</span>
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
  <article class="flx2-interview">
      <!--*-->
      <div class="order-md-2 box-media">
        <section class="wrap-gallery02">
            <DIV class="swiper swiper_body">
              <div class="swiper-wrapper">
              <div class="swiper-slide media-mov">
                <video controls playsinline webkit-playsinline poster="img/interview/9/interview00.jpg?<?= VER ?>" preload="metadata" alt="インタビュー動画" class="media-mov">
                  <source src="img/interview/9/interview00.mp4?<?= VER ?>" target="_blank">
                  </video>
              </div>
              </div>
            </DIV>
          </section>
        </div>

      <!--*-->
        <div class="order-md-1 box-text">
          <h2>やってみようかなと思い切って踏み出してきました。</h2>
          <h3>現在の所属部署は？</h3>
          <p>ビジネスプロセスソリューション事業本部というところに所属しております。主に業務委託や請負の業務をメインにやっております。</p>
          
          <h3>前職は？</h3>
          <p>以前はトラックドライバーや物流倉庫の中で管理したりと、ブルーカラー系の業界に属しておりました</p>
          
          <h3>なぜ転職を決意しましたか？</h3>
          <p>前職で営業職であったり管理職への打診はあったのですが、やらずに後悔したことがありました。
            人生で移動できるタイミングが来たのでやってみようかなと思い切って踏み出してきました。</p>
          
          <h3>綜合キャリアオプションを知ったキッカケ</h3>
          <p>広告媒体で一番上にあったからです。</p>
       </div>
  </article>


  <article class="flx2-interview">
    <!--*-->
      <div class="order-2 box-text">
        <h2>何かやりたいことがあれば、やってみようというチャレンジ精神。</h2>
        <h3>別業界からの転職で何か障壁はありましたか？</h3>
        <p>採用の中で日本語が喋れるかというご質問と元気よくできるかという質問があったのでどちらも大丈夫でした。</p>
        
        <h3>学歴は必要ですか？</h3>
        <p>新卒採用と中途採用では異なる部分で、新卒採用では見るべき基準かと思いますが、
          中途採用の場合は、以前にどんなことをして、どんなものを作れるか、どれくらいの規模を動かせるか。そういったところを見られていたんだと思います。</p>
        
        <h3>この動画を見ている方へ</h3>
        <p>何かやりたいことがあれば、やってみようというチャレンジ精神で来ていただくのがいいと思います。
          あとはこれを絶対に成し遂げるという確固たる強い意思のある方は残っていくと思いますのでそういう方にはすごく向いてる環境だと思います。</p>
        
     </div>
    <!--*-->
     <div class="order-1 box-media">
      <section class="wrap-gallery02">
        <DIV class="swiper swiper_body" id="box-gallery10">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/interview/9/pic_1.jpg?<?= VER ?>" alt="インタビュー写真1" /></div>
            <div class="swiper-slide"><img src="img/interview/9/pic_2.jpg?<?= VER ?>" alt="インタビュー写真2" /></div>
            <div class="swiper-slide"><img src="img/interview/9/pic_3.jpg?<?= VER ?>" alt="インタビュー写真3" /></div>
            <div class="swiper-slide"><img src="img/interview/9/pic_4.jpg?<?= VER ?>" alt="インタビュー写真4" /></div>
          </div>
        </DIV>
        <DIV class="swiper swiper_menu" id="box-gallery10_menu">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/interview/9/pic_1.jpg?<?= VER ?>" alt="インタビュー写真1" /></div>
            <div class="swiper-slide"><img src="img/interview/9/pic_2.jpg?<?= VER ?>" alt="インタビュー写真2" /></div>
            <div class="swiper-slide"><img src="img/interview/9/pic_3.jpg?<?= VER ?>" alt="インタビュー写真3" /></div>
            <div class="swiper-slide"><img src="img/interview/9/pic_4.jpg?<?= VER ?>" alt="インタビュー写真4" /></div>
          </div>
        </DIV>
      </section>
      </div>
</article>


<img src="img/acc/acc_05.svg?<?= VER ?>" class="img-hr1" alt="border">


<DIV id="section-top-interview">
  <?php require("./inc_templates/inc_menu_interview.php");?>
</DIV>

<script>
  $(function() {
    function initializeSwiper(containerId, menuId) {
      var menuSwiper = new Swiper(menuId, {
        spaceBetween: 5,
        slidesPerView: 4,
        freeMode: true,
        loop: true,
      });
      var mainSwiper = new Swiper(containerId, {
        loop: true,
        spaceBetween: 0,
        clickable: true,
        speed: 300,
        thumbs: {
          swiper: menuSwiper,
        },
      });
    }
    initializeSwiper("#box-gallery10", "#box-gallery10_menu");
  });
</script>

<?php /* require("./inc_templates/inc_menu_worker.php"); */?>

<?php require("./inc_templates/inc_menu_company.php"); ?>
<br><br>
<?php require("./inc_templates/inc_menu_job.php"); ?>
</DIV>

</SECTION>
</MAIN>
<?php require("./inc_templates/footer.php"); ?>