<?php 
$title = "松宮貴明｜社員インタビュー｜";
$description = "綜合キャリアオプション社員インタビューの紹介です｜松宮貴明｜不動産営業の経験を活かし新規企画・開拓を行っています。";
// $keywords = "";
$pagename = "interview";
require("./app/common.php");
require("./inc_templates/header.php");
?>
<MAIN>
<style>
.mvimg .box{
background:url(img/interview/10/pic_mv.jpg);
}
</style>

<SECTION class="mvimg" id="section-interview">
  <div class="wraper-box bot01">
  <div class="box"></div>
  </div>
<!--*-->
<DIV class="flex-name">
      <div class="tit-m v-txt01">
      <h2><ruby>松宮<rt>マツミヤ</rt> <ruby>貴明<rt>タカアキ</rt></ruby>
      <i>Takaaki Matsumiya</i>
      </h2>
      <p class="tit-s v-txt01">
        <strong>営業（営業企画）</strong>
        前職（不動産営業）の経験を活かし<br>新規企画・開拓を行っている。
      </p>
      <span class="txt-etc">入社歴1年 30代</span>
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
                <video controls playsinline webkit-playsinline poster="img/interview/10/interview00.jpg?<?= VER ?>" preload="metadata" alt="インタビュー動画" class="media-mov">
                  <source src="img/interview/10/interview00.mp4?<?= VER ?>" target="_blank">
                  </video>
              </div>
              </div>
            </DIV>
          </section>
        </div>

      <!--*-->
        <div class="order-md-1 box-text">
          <h2>手を上げた人間にはなんでもやらせるよっていう社風。</h2>
          <h3>現在の所属部署は？</h3>
          <p>私は委託事業部という所で、前職不動産関連をやっていたので、不動産企業をメインとして担当させていただいております。</p>
        
          <h3>前職から転職してきっかけ</h3>
          <p>不動産は売るものが決まっているので、そういった面で枠にとらわれないサービスを仕事としてやってみたいと思っていたので、
            その中で当社のBPOといわれるいわゆる無形商材に興味を持って入社しました。</p>
        
          <h3>どんな人と働きたいですか？</h3>
          <p>手を上げた人間にはなんでもやらせるよっていう社風があるので、やる気に満ち溢れた方であれば。私自身未経験で入ったところもあり、
            経験値とか関係なく色々仕事をやってみたいという方であればぜひ一緒に働きたいです。</p>
       </div>
  </article>


  <article class="flx2-interview">
    <!--*-->
      <div class="order-2 box-text">
        <h2>自分が持っていない知識が入ってくるので面白いなと思います。</h2>
        <h3>学歴は必要ですか？</h3>
        <p>正直わからないです。僕は理工学部出身で、BPOとの関連は全くないので、そういった意味では関係ないのかなと思います。</p>
      
        <h3>前職に比べて給与や働き方は変わりましたか？</h3>
        <p>給与は正直転職したては下がりました。ただ休日が多いのと、残業であったり有給の面であったり、そこは割と自分たちで決めやすいので、
          そこは前職との違いかなと思いますね。私は入社して1年ぐらいですが、受託した案件以外での休日出勤はしたことがないので、休日は本当に休めるかなと思います。</p>
      
        <h3>この動画を見ている方へ</h3>
        <p>事業部内に営業が100人以上いるんですが、半分以上が未経験、他業種から来ている人間なので、
          そういった環境で仕事ができるのは自分が持っていない知識が入ってくるので面白いなと思います。
          BPOを経験していない人たちにもぜひ来ていただいて、一緒に働きたいなと思います。</p>
     </div>



    <!--*-->
     <div class="order-1 box-media">

      <section class="wrap-gallery02">
        <DIV class="swiper swiper_body" id="box-gallery10">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/interview/10/pic_1.jpg?<?= VER ?>" alt="インタビュー写真1" /></div>
            <div class="swiper-slide"><img src="img/interview/10/pic_2.jpg?<?= VER ?>" alt="インタビュー写真2" /></div>
            <div class="swiper-slide"><img src="img/interview/10/pic_3.jpg?<?= VER ?>" alt="インタビュー写真3" /></div>
            <div class="swiper-slide"><img src="img/interview/10/pic_4.jpg?<?= VER ?>" alt="インタビュー写真4" /></div>
          </div>
        </DIV>
       
        <DIV class="swiper swiper_menu" id="box-gallery10_menu">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/interview/10/pic_1.jpg?<?= VER ?>" alt="インタビュー写真1" /></div>
            <div class="swiper-slide"><img src="img/interview/10/pic_2.jpg?<?= VER ?>" alt="インタビュー写真2" /></div>
            <div class="swiper-slide"><img src="img/interview/10/pic_3.jpg?<?= VER ?>" alt="インタビュー写真3" /></div>
            <div class="swiper-slide"><img src="img/interview/10/pic_4.jpg?<?= VER ?>" alt="インタビュー写真4" /></div>
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