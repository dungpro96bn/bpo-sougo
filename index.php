<?php 
// $title = "";
// $description = "";
// $keywords = "";
$pagename = "index";//ページ種別
require("./app/common.php");
require("./inc_templates/header.php");
?>
<section class="fitsnap mvimg mv-000 gsap-box-a" id="section-00" style="color:#FFF">
  <div class="box"></div>
    <article>
    <h2 class="tit-m js-split">コストを抑え<br>業務効率を最大化</h2>
    <strong class="tit-top js-split">
      ビジネスを綜合キャリアオプションのBPOで<br>次のステージへ
    </strong>
    </article>
    <div class="box-btn">
    <a href="#section-pr" class="btn-maru-big trigger-yes" data-js="add_hover" ><span>NEXT</span></a>
    </div>
    <?php require("./inc_templates/inc_devimg.php"); ?>
</section>
  <?php /*==========================
  5 SOLUTION
  ===============================  */ ?>
  <SECTION class="mvimg mv-079 " id="section-pr">
    <div class="box"></div>
    <article class="container">
    <h2 class="tit-m"><ruby>強み・特徴<rt>BPOのサービス</rt></ruby></h2>
    <p class="tit-s">
      綜合キャリアオプションのBPOソリューションは、<br>
      業界最大規模の拠点数と還元率業界No.1の人材吸引力によって、お客様の事業課題を解決します。
    </p>
    <div id="box-pr" class="mt-5">
      <div>
          <div class="tit">
          <figure class="mask mask_01" alt="人材"></figure>
          <h3>人材</h3>
          <small>Human Resource</small>
          </div>
          <p>  弊社グループ間にとどまらず、同業種他業種協力会社様との連携による豊富な人材を確実に確保。</p>
      </div>
      <div>
          <div class="tit">
          <figure class="mask mask_02"><img src="img/pr_2.svg" alt="場所"></figure>
          <h3>場所</h3>
          <small>Office & Location</small>
          </div>
          <p>
            自社BPOセンター・事業拠点と提携会社様とのスペースを活用し、全国どこでもセンターの立ち上げの実現。
          </p>
      </div>
      <div>
          <div class="tit">
          <figure class="mask mask_03"><img src="img/pr_3.svg" alt="システム"></figure>
          <h3>システム</h3>
          <small>IT System & Robot</small>
          </div>
          <p>
            アウトソーシング業務の運営に特化した自社開発ITシステム「BENSYS」。ITを活用したスマートな案件運用が可能。
          </p>
      </div>
  </div>
  </article>
  
  <div class="box-btn">
  <a href="#section-service" class="btn-maru-big mx-4 trigger-yes" data-js="add_hover"><span>NEXT</span></a>
  </div>
  <?php require("./inc_templates/inc_devimg.php"); ?>
  </SECTION>


  <?php /*==========================
  3 Service　☆
  ===============================*/ ?>
  <SECTION class="mvimg mv-001" id="section-service">
  <div class="box"></div>
  
  <article class="container">
    <h2 class="tit-m"><ruby>サービス<rt>Service</rt></ruby></h2>
    <?php require("./inc_templates/inc_list_service.php"); ?>
  </article>

  <div class="box-btn">
  <a href="#section-case" class="btn-maru-big mx-4 trigger-yes" data-js="add_hover"><span>NEXT</span></a>
  </div>
  <?php require("./inc_templates/inc_devimg.php"); ?>
  </SECTION>
  
  <?php /*==========================
 5実績
  ===============================*/ ?>
  <SECTION class="mvimg mv-002" id="section-case">
  <div class="box"></div>
  <article>
    <h2 class="tit-m"><ruby>実績<rt>Case Study</rt></ruby></h2>
    <?php /*
    <p class="tit-s">
    仕事や時間、人の労働環境、生産性ーが変わっていきます。<br>
    大企業、スタートアップ企業、行政機関、官公庁サービスの導入実績をご紹介。
    </p> */ ?>
    <?php require("./inc_templates/inc_case.php"); ?>
  </article>

  <div class="box-btn">
  <a href="#section-aboutus" class="btn-maru-big mx-4 trigger-yes" data-js="add_hover"><span>NEXT</span></a>
  </div>
  <?php require("./inc_templates/inc_devimg.php"); ?>
  </SECTION>

  <!-- *//////////////////////////////////
  // section-aboutus
  ////////////////////////////////////////-->
  <SECTION id="section-aboutus">

    <DIV class="container">
  <div class="box-cominfo">

    <div class="col-txt order-md-2">
      <div class="box">
        <h3 class="tit-m">BPS事業部<br><small style="font-size:1.2rem;">ビジネス・プロセス・ソリューション事業本部</small></h3>
          <p class="p-txt">
             大都市圏のクライアントを中心に業務効率改善・品質向上を実現するBPOサービスを提供しています。<br><br>
             外資系企業の日本展開時の営業人員支援、大規模コンタクトセンターにおけるデータ入力業務にRPAを導入、
             数百万人分の書類手続き業務を顔認証システムで簡易化など、
             企業経営を大きく前進させる領域に踏み込んだサービス提供を行なっています。
          </p>
     </div> 
    </div>

    <div class="col-img order-md-1">
      <Article class="wrap-gallery01" id="GSAP2">
      <DIV class="swiper swiper_body" id="box-gallery2">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="img/pic/pic_01.jpg?<?= VER ?>" alt="BPS事業部 写真1" /></div>
          <div class="swiper-slide"><img src="img/pic/pic_02.jpg?<?= VER ?>" alt="BPS事業部 写真2" /></div>
          <div class="swiper-slide"><img src="img/pic/pic_03.jpg?<?= VER ?>" alt="BPS事業部 写真3" /></div>
          <div class="swiper-slide"><img src="img/pic/pic_04.jpg?<?= VER ?>" alt="BPS事業部 写真4" /></div>
        </div>
      </DIV>
      <!--*-->
  
      <DIV class="swiper swiper_menu" id="box-gallery2_menu">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="img/pic/pic_01.jpg?<?= VER ?>" alt="BPS事業部 写真1" /></div>
          <div class="swiper-slide"><img src="img/pic/pic_02.jpg?<?= VER ?>" alt="BPS事業部 写真2" /></div>
          <div class="swiper-slide"><img src="img/pic/pic_03.jpg?<?= VER ?>" alt="BPS事業部 写真3" /></div>
          <div class="swiper-slide"><img src="img/pic/pic_04.jpg?<?= VER ?>" alt="BPS事業部 写真4" /></div>
        </div>
      </DIV>
      </Article>

      <script>
        $(function() {
         App.initializeSwiper("#box-gallery2", "#box-gallery2_menu");
       });
       </script>

    </div>
  </div>

<div id="section-contact-form">
  <h3 class="tit-m" ><ruby>お問い合わせ<rt>Contact</rt></ruby></h3>
      <p class="p-txt">
      サービス、ビジネスに関連するご質問やご相談について、下記のフォームより受け付けております。<br>
      お気軽にお問合せ下さい。
      </p>

    <FORM id="fm-contact">
    <?php require("./inc_templates/inc_contact-input.php");?>
    <div class="text-center">
      <button type="button" class="btn-contact submit-ajax mt-4 m-auto">
      <i class="fas fa-spinner fa-spin"></i><span>送信する</span>
      </button>
    </div>
    </FORM>
</div>

</DIV>
</SECTION>
<?php require("./inc_templates/footer.php"); ?>