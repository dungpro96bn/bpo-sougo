<?php
$title = "あなたの経験が輝くステージがここに | ";
$description = "綜合キャリアオプションにはあなたの培ってきた経験とスキルを活かし、多様なプロジェクトに挑戦できるステージがあります。";
// $keywords = "";
$pagename = "index";
require("./app/common.php");
require("./inc_templates/header.php");
?>
<MAIN>
    <DIV id="sw">
        <div class="swiper-wrapper" style="z-index: 22;" id="section-00">
            <article>
                <h2 class="v-txt01">挑戦を恐れず進める場所、<br/>そして新しい可能性に<br/>出会える場所</h2>
                <strong class="tit-top js-split">綜合キャリアオプションの中途採用</strong>
            </article>
            <?php
            // セクションの番号の配列
            $sectionNumbers = [100, 101, 102, 103];
            // セクション番号の配列をシャッフル
            shuffle($sectionNumbers);

            // ランダムに並び替えられたセクションを生成
            foreach ($sectionNumbers as $number) {
                echo '<section class="mvimg mv-' . $number . ' swiper-slide">';
                echo '<div class="wraper-box bot01"><div class="box"></div></div>';
                echo '</section>';
            }
            ?>
            <a href="#section-recruit" class="btn-maru-big"><span>NEXT</span></a>
        </div>
    </DIV>
    <script>
        const top_mv_swp = new Swiper('#sw', {
            autoplay: {
                delay: 3500, //2800
                disableOnInteraction: false,
                reverseDirection: false,
                pauseOnMouseEnter: false,
            },
            speed: 2000,//4000
            fadeEffect: {
                crossFade: true
            },
            effect: "fade",
            centeredSlides: false,
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
        });
    </script>

    <?php /*==========================
中途採用
===============================*/ ?>
    <SECTION class="mvimg mv-000" id="section-recruit" style="z-index: 12;margin-top:-7%;">
        <div class="wraper-box bot01">
            <div class="box"></div>
        </div>
        <article class="flex-col2">
            <div class="order-md-1 col-tittxt">
                <div class="tit-m v-txt01">
                    <h2>募集職種
                        <i>Mid-career Recruiting</i>
                    </h2>
                    <p class="tit-s v-txt01">
                        常に新しいことに挑戦し、<br>
                        成長し続けたい方へ。<br><br>
                        綜合キャリアオプションにはあなたの<br>
                        培ってきた経験とスキルを活かし、<br> 多様なプロジェクトに<br>挑戦できるステージがあります。
                    </p>
                </div>
            </div>
            <div class="order-md-3 ps-md-4">
                <div id="lst-top-recruit">
                    <?php require("./inc_templates/inc_menu_job.php"); ?>
                </div>
            </div>
        </article>
        <div class="tit02 title-index-recruit">
            <h2>募集要項一覧</h2>
        </div>
        <div class="box-btn">
            <a href="#section-message" class="btn-maru-big mx-4" data-js="add_hover"><span>NEXT</span></a>
        </div>
    </SECTION>

    <?php /*==========================
代表メッセージ
===============================*/ ?>
    <SECTION class="mvimg mv-041" id="section-message" style="z-index: 11;margin-top:-7%;">
        <div class="wraper-box bot01">
            <div class="box"></div>
        </div>
        <article class="flex-col2">
            <div class="order-md-1" style="width:160px"></div>
            <div class="order-md-2" style="transform: translateY(-5%);">
                <div class="tit-m v-txt01">
                    <h2><span>メッセージ</span><i>Message</i></h2>
                    <p class="tit-s v-txt01">
                        自由なビジネスの舞台で、<br>能動的に挑戦したい方へ。
                    </p>
                </div>
            </div>
            <div class="order-md-3" style="transform: translate(25%,0);">
                <button class="btn-message" onclick="App.loadSection('modal_contents_A.php?section=0', '#modal_contents_A','代表メッセージ')">
                    <img src="img/pic/menu_g01.jpg?<?= VER ?>">
                </button>
            </div>
        </article>
        <div class="box-btn">
            <a href="#section-cominfo" class="btn-maru-big mx-4" data-js="add_hover"><span>NEXT</span></a>
        </div>
    </SECTION>
    <SECTION class="mvimg mv-001" id="section-cominfo" style="z-index: 10;margin-top:-7%;">
        <div class="wraper-box bot01">
            <div class="box"></div>
        </div>
        <article>
            <section class="flex-col2">
                <div class="order-md-1">
                    <div class="tit-m v-txt01" style="color:#FFF">
                        <h2>会社紹介
                            <i style="background:#FFF;color:#232323">Company Information</i>
                        </h2>
                        <p class="tit-s v-txt01">
                            年齢、性別、バックグラウンドなど、<br>
                            多様な経験を持つ仲間と<br>切磋琢磨しながら、<br>
                            新たな価値を生み出します。
                        </p>
                    </div>
                </div>
            </section>

            <?php require("./inc_templates/inc_menu_company.php"); ?>

        </article>
        <div class="box-btn">
            <a href="#section-top-interview" class="btn-maru-big mx-4" data-js="add_hover"><span>NEXT</span></a>
        </div>
    </SECTION>

    <?php /*==========================
社員インタビュー
===============================*/ ?>
    <SECTION class="mvimg mv-000" id="section-top-interview">
        <?php require("./inc_templates/inc_menu_interview.php"); ?>
        <?php require("./inc_templates/inc_devimg.php"); ?>
    </SECTION>

    <?php require("./inc_templates/inc_menu_worker.php"); ?>
</MAIN>

<script>
    $(function () {
        function initializeSwiper(containerId, menuId) {
            var menuSwiper = new Swiper(menuId, {
                spaceBetween: 10,
                slidesPerView: 5,
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

        initializeSwiper("#box-gallery2", "#box-gallery2_menu");
    });
</script>
<?php require("./inc_templates/footer.php"); ?>
