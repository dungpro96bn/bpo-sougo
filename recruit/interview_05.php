<?php 
$title = "千葉景子｜社員インタビュー｜";
$description = "綜合キャリアオプション社員インタビューの紹介です｜千葉景子｜元ウェディングプランナー。他業界からの転職して活躍しています。";
// $keywords = "";
$pagename = "interview";
require("./app/common.php");
require("./inc_templates/header.php");
?>
<MAIN>

<style>
.mvimg .box{
background:url(img/interview/5/pic_mv.jpg);
background-position:right 40% top !important;
}
</style>

<SECTION class="mvimg" id="section-interview">
  <div class="wraper-box bot01">
  <div class="box"></div>
  </div>
<!--*-->
<DIV class="flex-name position-l">
      <div class="tit-m v-txt01">
      <h2><ruby>千葉<rt>チバ</rt> <ruby>景子<rt>ケイコ</rt></ruby>
      <i>Keiko Chiba</i>
      </h2>
      <p class="tit-s v-txt01">
        <strong>営業</strong>
        元ウェディングプランナー。<br>他業界からの転職<br>をされて活躍している。
      </p>
      <span class="txt-etc">入社歴6年 40代</span>
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
                <video controls playsinline webkit-playsinline poster="img/interview/5/interview00.jpg?<?= VER ?>" preload="metadata" alt="インタビュー動画" class="media-mov">
                  <source src="img/interview/5/interview00.mp4?<?= VER ?>" target="_blank">
                  </video>
              </div>
              </div>
            </DIV>
          </section>
        </div>

      <!--*-->
        <div class="order-md-1 box-text">
          <h2>企業様のお悩み部分をアウトソーシングという形で解決</h2>
          
          <h3>現在の所属部署は？</h3>
          <p>ビジネスプロセスソリューション事業本部の中のコンサルティング事業部です。</p>
          
          <h3>仕事内容</h3>
          <p>具体的には企業様のお悩み部分をアウトソーシングという形で解決させていただいたりとか、弊社は派遣事業をやっている企業になりますので、
          お客様のご要望とする派遣スタッフを派遣提供させていただいたりというところも我々の部署の方で行っています。</p>

          <h3>前職は？</h3>
          <p>元々ウェディングプランナーを8年ぐらいやらせていただいて、
          その後、ウェディングコンシェルジュとして全国にある結婚式場を紹介するお仕事を6年ぐらいやってたんですけど、ちょっと視点を変えてみたいなと思い入社しました。</p>
       </div>
  </article>

  <article class="flx2-interview">
    <!--*-->
      <div class="order-2 box-text">
        <h2>自己成長したい方には非常におすすめ</h2>
        
        <h3>綜合キャリアオプションを選んだ理由</h3>
        <p>エージェントさんに何社か紹介いただく中で、会社に訪問した際、唯一ここの社員さんだけが元気な声で挨拶をしてくださったところが気に入ったところと、
        面接をしてくれた方がすごくここの会社の魅力を伝えてくれたからです。</p>
        
        <h3>この動画を見ている人へ</h3>
        <p>おそらく何かしらをきっかけに転職というところを考えて何か自分の中で成長したいって意欲があって転職活動されていると思うのですけど、
        弊社は、基本的にはこれしかできないっていうことはなくてこういうことがやってみたいですって風に発信さえしてしまえば、
        なんでもやらせてくれる企業ではあるので、自己成長したい方には非常におすすめな会社だと思います。ぜひ来ていただきたいと思います。</p>
     </div>
    <!--*-->
     <div class="order-1 box-media">

      <section class="wrap-gallery02">
        <DIV class="swiper swiper_body" id="box-gallery10">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/interview/5/pic_1.jpg?<?= VER ?>" alt="インタビュー写真1" /></div>
            <div class="swiper-slide"><img src="img/interview/5/pic_2.jpg?<?= VER ?>" alt="インタビュー写真2" /></div>
            <div class="swiper-slide"><img src="img/interview/5/pic_3.jpg?<?= VER ?>" alt="インタビュー写真3" /></div>
            <div class="swiper-slide"><img src="img/interview/5/pic_4.jpg?<?= VER ?>" alt="インタビュー写真4" /></div>
          </div>
        </DIV>
       
        <DIV class="swiper swiper_menu" id="box-gallery10_menu">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/interview/5/pic_1.jpg?<?= VER ?>" alt="インタビュー写真1" /></div>
            <div class="swiper-slide"><img src="img/interview/5/pic_2.jpg?<?= VER ?>" alt="インタビュー写真2" /></div>
            <div class="swiper-slide"><img src="img/interview/5/pic_3.jpg?<?= VER ?>" alt="インタビュー写真3" /></div>
            <div class="swiper-slide"><img src="img/interview/5/pic_4.jpg?<?= VER ?>" alt="インタビュー写真4" /></div>
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

