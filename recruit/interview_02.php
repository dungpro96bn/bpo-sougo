<?php 
$title = "林泰之｜社員インタビュー｜";
$description = "綜合キャリアオプション社員インタビューの紹介です｜林泰之｜現場履行はもちろん、営業のような情報取集力・提案力で活躍しています。";
// $keywords = "";
$pagename = "interview";
require("./app/common.php");
require("./inc_templates/header.php");
?>
<MAIN>
<style>
.mvimg .box{
background:url(img/interview/2/pic_mv.jpg);
}
</style>
<SECTION class="mvimg" id="section-interview">
  <div class="wraper-box bot01">
  <div class="box"></div>
  </div>
<!--*-->
  <DIV class="flex-name">
        <div class="tit-m v-txt01">
        <h2><ruby>林<rt>ハヤシ</rt> <ruby>泰之<rt>ヤスユキ</rt></ruby>
        <i>Yasuyuki Hayashi</i>
        </h2>
        <p class="tit-s v-txt01">
          <strong class="v-o-up">PM</strong>
          現場履行はもちろん、<br>営業のような情報取集力・提案力<br>で活躍している。
        </p>
        <span class="txt-etc">入社歴3年 50代</span>
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
                <video controls playsinline webkit-playsinline poster="img/interview/2/interview00.jpg?<?= VER ?>" preload="metadata" alt="インタビュー動画" class="media-mov">
                  <source src="img/interview/2/interview00.mp4?<?= VER ?>" target="_blank">
                  </video>
              </div>
              </div>
            </DIV>
          </section>
        </div>

      <!--*-->
      <div class="order-md-1 box-text">
          <h2>諦めかけてたものを取り返せる</h2>
            <h3>現在の所属部署は？</h3>
            <p>綜合キャリアオプションの委託事業部に所属をしております。</p>
         
            <h3>仕事の内容は？</h3>
            <p>民間・公共系問わず
              要は業務の外出し、いわゆるアウトソーシング業務の手配であったり、
              業務の構築であったりということを主にやってます。</p>
          
              <h3>前職は？</h3>
            <p>同業種の他社で同じような自治体系のBPO案件の責任者。
              普通に区役所の現場に入ってました。</p>
       </div>

  </article>



  <article class="flx2-interview">
    <!--*-->
      <div class="order-2 box-text">
        <h2>熱い思いがある方はうちの会社は絶対合います</h2>
        
        <h3>この会社に入ったきっかけは？</h3>
          <p>面白そうな会社と思いました。堅苦しいの私苦手なんですよ。
            担当していただいた上司の、その当時今もいらっしゃる方なんですけど
            すごいフランクな感じで、初めてお会いした気がしなかったんですよ。
            仕事の話をするわけでもなく趣味の話をして面接が終わりうちの会社ってこういう社風なんですって。
            分け隔てなく、パーテーションもないしみたいなことをおっしゃっていただいて。
            まさにその通りだなと思ったので、正直言うとその方と一緒に仕事したいなと思ったのも一つのきっかけです。</p>
        
            <h3>動画を見ている人へ</h3>
          <p>私は中途採用で入社させてもらったのが3年半前になるのでもう当時40歳後半で、
            もう50歳が見えてくるっていう年でも採用していただいてもう一花って言うとちょっと語弊がありますけど
            諦めかけてたものをここでもしかしたら取り返せるかもしれないって僕は思うんですよね。
            もうなんか拗ねちゃって、もういいやみたいな。
            そんなもう新しいことやらずにチャレンジもしなく、
            なんか提案しても聞いてもらえないしもう年齢もいってるしっていう思いがある、
            でも熱い思いがある方はうちの会社は絶対合うと思います。</p>
     </div>
    <!--*-->
     <div class="order-1 box-media">

      <section class="wrap-gallery02">
        <DIV class="swiper swiper_body" id="box-gallery10">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/interview/2/pic_1.jpg?<?= VER ?>" alt="インタビュー写真1" /></div>
            <div class="swiper-slide"><img src="img/interview/2/pic_2.jpg?<?= VER ?>" alt="インタビュー写真2" /></div>
            <div class="swiper-slide"><img src="img/interview/2/pic_3.jpg?<?= VER ?>" alt="インタビュー写真3" /></div>
            <div class="swiper-slide"><img src="img/interview/2/pic_4.jpg?<?= VER ?>" alt="インタビュー写真4" /></div>
          </div>
        </DIV>
       
        <DIV class="swiper swiper_menu" id="box-gallery10_menu">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/interview/2/pic_1.jpg?<?= VER ?>" alt="インタビュー写真1" /></div>
            <div class="swiper-slide"><img src="img/interview/2/pic_2.jpg?<?= VER ?>" alt="インタビュー写真2" /></div>
            <div class="swiper-slide"><img src="img/interview/2/pic_3.jpg?<?= VER ?>" alt="インタビュー写真3" /></div>
            <div class="swiper-slide"><img src="img/interview/2/pic_4.jpg?<?= VER ?>" alt="インタビュー写真4" /></div>
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

