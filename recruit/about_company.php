<?php
$title = "職場環境｜";
$description = "綜合キャリアオプションの職場環境の紹介です。一人ひとりの経験を活かし、働き方を支える職場環境を紹介します。";
// $keywords = "";
$pagename = "about_company";
require("./app/common.php");
require("./inc_templates/header.php");
?>
<style>

</style>
<MAIN>

    <SECTION class="mvimg mv-008 mv-second" id="section-mv-we">
        <div class="wraper-box bot01">
            <div class="box"></div>
        </div>
        <!--*-->
        <DIV class="container">
            <div class="tit-m v-txt01">
                <h2>職場環境<i>Work Environment</i></h2>
                <p class="tit-s v-txt01">
                    一人ひとりの経験を活かし、<br>
                    働き方を支える職場環境を紹介します。
                </p>
            </div>
        </DIV>
        <?php require("./inc_templates/inc_devimg.php"); ?>
    </SECTION>

    <SECTION id="section-company">
        <DIV class="container">
            <!-- * -->
            <article class="box-number mt-5">
                <h3 class="tit">全国に広がる拠点</h3>
                <div id="box-company-group">
                    <h4 class="txt-num rem3"><i>169</i><em>拠点</em></h4>
                    <small class="d-block"> 店舗（2023年3月末時点）</small>
                </div>
                <div class="map-jp">
                    <img src="img/ill_map_japan_p.svg?<?= VER ?>" class="map-point">
                    <div class="figure-map"></div>
                </div>
                <div class="dl-group-num">
                    <dl>
                        <dt>北海道</dt>
                        <dd><i>1</i><span>店舗</span></dd>
                    </dl>
                    <dl>
                        <dt>東北</dt>
                        <dd><i>8</i><span>店舗</span></dd>
                    </dl>
                    <dl>
                        <dt>北関東</dt>
                        <dd><i>5</i><span>店舗</span></dd>
                    </dl>
                    <dl>
                        <dt>首都圏</dt>
                        <dd><i>7</i><span>店舗</span></dd>
                    </dl>
                    <dl>
                        <dt>甲信越</dt>
                        <dd><i>11</i><span>店舗</span></dd>
                    </dl>
                    <dl>
                        <dt>東海</dt>
                        <dd><i>12</i><span>店舗</span></dd>
                    </dl>
                    <dl>
                        <dt>北陸</dt>
                        <dd><i>3</i><span>店舗</span></dd>
                    </dl>
                    <dl>
                        <dt>関西</dt>
                        <dd><i>5</i><span>店舗</span></dd>
                    </dl>
                    <dl>
                        <dt>中国四国</dt>
                        <dd><i>3</i><span>店舗</span></dd>
                    </dl>
                    <dl>
                        <dt>九州</dt>
                        <dd><i>3</i><span>店舗</span></dd>
                    </dl>
                    <p class="text-start">
                        キャムコムグループは、国内約60都市、169拠点に展開し、
                        地域密着型のサービスを提供しています。
                    </p>
                </div>
            </article>


            <!-- * -->
            <DIV class="flex-col2 bg-box-r" style="margin:80px 0">
                <DIV class="order-md-2">
                    <div class="v-txt">
                        <h3 class="tit">職場の環境</h3>
                        <p>オフィスは分け隔てなく、席の間にパーテーションの設置もありません。
                            人に対してのおもてなし精神を大切にする社風のため、
                            新しいメンバーに対しても歓迎感が強く、普段一緒に仕事をしていない人同士でも気軽に挨拶できる環境です。</p>
                    </div>
                </DIV>

                <DIV class="order-md-1">
                    <section class="wrap-gallery03">
                        <DIV class="swiper swiper_body" id="box-gallery11">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="img/pic/comA_01.jpg?<?= VER ?>" alt="職場の環境"/></div>
                                <div class="swiper-slide"><img src="img/pic/comA_02.jpg?<?= VER ?>" alt="職場の環境"/></div>
                                <div class="swiper-slide"><img src="img/pic/comA_03.jpg?<?= VER ?>" alt="職場の環境"/></div>
                                <div class="swiper-slide"><img src="img/pic/comA_04.jpg?<?= VER ?>" alt="職場の環境"/></div>
                                <div class="swiper-slide"><img src="img/pic/comA_05.jpg?<?= VER ?>" alt="職場の環境"/></div>
                            </div>
                        </DIV>
                        <DIV class="swiper swiper_menu" id="box-gallery11_menu">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="img/pic/comA_01.jpg?<?= VER ?>" alt="職場の環境"/></div>
                                <div class="swiper-slide"><img src="img/pic/comA_02.jpg?<?= VER ?>" alt="職場の環境"/></div>
                                <div class="swiper-slide"><img src="img/pic/comA_03.jpg?<?= VER ?>" alt="職場の環境"/></div>
                                <div class="swiper-slide"><img src="img/pic/comA_04.jpg?<?= VER ?>" alt="職場の環境"/></div>
                                <div class="swiper-slide"><img src="img/pic/comA_05.jpg?<?= VER ?>" alt="職場の環境"/></div>
                            </div>
                        </DIV>
                    </section>
                </DIV>
            </DIV>

            <!-- * -->
            <DIV class="flex-col2 bg-box-l" style="margin:80px 0">
                <DIV class="order-md-1">
                    <div class="v-txt">
                        <h3 class="tit">チームワーク</h3>
                        <p>
                            チームワークを重視し、毎日の朝夕礼では進捗状況や課題を共有し、チームで改善策を検討します。
                            フラットな組織体制で、営業情報や案件について相談し合い、メンバー同士がサポートしながら仕事を進めます。
                            「新しい施策をやりたい」「新しい営業手法をしてみたい」など自ら主体となって挑戦する機会もたくさんあります。
                        </p>
                    </div>
                </DIV>

                <DIV class="order-md-2">
                    <section class="wrap-gallery03">
                        <DIV class="swiper swiper_body" id="box-gallery12">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="img/pic/comB_04.jpg?<?= VER ?>" alt="働き方"/></div>
                                <div class="swiper-slide"><img src="img/pic/comB_02.jpg?<?= VER ?>" alt="働き方"/></div>
                                <div class="swiper-slide"><img src="img/pic/comB_03.jpg?<?= VER ?>" alt="働き方"/></div>
                                <div class="swiper-slide"><img src="img/pic/comB_01.jpg?<?= VER ?>" alt="働き方"/></div>
                                <div class="swiper-slide"><img src="img/pic/comB_05.jpg?<?= VER ?>" alt="働き方"/></div>
                            </div>
                        </DIV>
                        <DIV class="swiper swiper_menu" id="box-gallery12_menu">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="img/pic/comB_04.jpg?<?= VER ?>" alt="働き方"/></div>
                                <div class="swiper-slide"><img src="img/pic/comB_02.jpg?<?= VER ?>" alt="働き方"/></div>
                                <div class="swiper-slide"><img src="img/pic/comB_03.jpg?<?= VER ?>" alt="働き方"/></div>
                                <div class="swiper-slide"><img src="img/pic/comB_01.jpg?<?= VER ?>" alt="働き方"/></div>
                                <div class="swiper-slide"><img src="img/pic/comB_05.jpg?<?= VER ?>" alt="働き方"/></div>
                            </div>
                        </DIV>
                    </section>
                </DIV>
            </DIV>


            <!-- * -->
            <DIV class="flex-col2 bg-box-r" style="margin:80px 0">
                <DIV class="order-md-2">
                    <div class="v-txt">
                        <h3 class="tit">思いをはせる</span></h3>
                        <p>私たちが大切にしている考えかたは相手に「思いをはせる」ことです。
                            目の前の顧客に思いをはせることで、根本的な課題に気づき、解決策を提案していきます。隣の同僚に思いをはせることで、
                            お互いが気持ちよく仕事ができる環境が生まれます。そのような目に見えない気づかいや気配りを大切にしています。
                            毎日、社員が各部屋に花を活けて飾るのも、小さな「気づき」を日々養うためのひとつの取り組みです。</p>
                    </div>
                </DIV>
                <DIV class="order-md-1">
                    <section class="wrap-gallery03">
                        <DIV class="swiper swiper_body" id="box-gallery14">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="img/pic/comC_01.jpg?<?= VER ?>" alt="思いをはせる"/></div>
                                <div class="swiper-slide"><img src="img/pic/comC_02.jpg?<?= VER ?>" alt="思いをはせる"/></div>
                                <div class="swiper-slide"><img src="img/pic/comC_03.jpg?<?= VER ?>" alt="思いをはせる"/></div>
                                <div class="swiper-slide"><img src="img/pic/comC_04.jpg?<?= VER ?>" alt="思いをはせる"/></div>
                                <div class="swiper-slide"><img src="img/pic/comC_05.jpg?<?= VER ?>" alt="思いをはせる"/></div>
                            </div>
                        </DIV>
                        <DIV class="swiper swiper_menu" id="box-gallery14_menu">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="img/pic/comC_01.jpg?<?= VER ?>" alt="思いをはせる"/></div>
                                <div class="swiper-slide"><img src="img/pic/comC_02.jpg?<?= VER ?>" alt="思いをはせる"/></div>
                                <div class="swiper-slide"><img src="img/pic/comC_03.jpg?<?= VER ?>" alt="思いをはせる"/></div>
                                <div class="swiper-slide"><img src="img/pic/comC_04.jpg?<?= VER ?>" alt="思いをはせる"/></div>
                                <div class="swiper-slide"><img src="img/pic/comC_05.jpg?<?= VER ?>" alt="思いをはせる"/></div>
                            </div>
                        </DIV>
                    </section>
                </DIV>
            </DIV>


            <!-- * -->
            <DIV class="flex-col2 bg-box-l" style="margin:80px 0">
                <DIV class="order-md-1">
                    <div class="v-txt">
                        <h3 class="tit">待遇・福利厚生</h3>
                        <p>働く一人ひとりが心身ともに健康に、そして安心して働くことができるよう、
                            厚生年金や雇用保険など、充実した福利厚生を完備しています。</p>
                    </div>
                </DIV>

                <DIV class="order-md-2">
                    <?php
                    $jobtype = "all";
                    require("./inc_templates/inc_job_benefit.php");
                    ?>
                    <p class="memo">※上記の福利厚生は一例です。実際の福利厚生は職種によって異なります。</p>
                </DIV>
            </DIV>

            <!-- * -->
            <DIV id="box-present">
                <button class="object" id="txt-what">バースデー祝い制度とは？</button>
                <div id="img-present">
                    <figure><img src="img/pic/comO_present_01.jpg?<?= VER ?>"/></figure>
                    <span>社員の誕生月に会社、仲間からささやかなプレゼントが贈られます</span>
                </div>
            </DIV>


            <img src="img/acc/acc_05.svg?<?= VER ?>" class="img-hr1">
            <?php require("./inc_templates/inc_menu_worker.php"); ?>
            <?php require("./inc_templates/inc_menu_company.php"); ?>
            <?php require("./inc_templates/inc_menu_job.php"); ?>


        </DIV>
    </SECTION>
</MAIN>


<!-- * -->
<script>
    $(function () {
        function initializeSwiper(containerId, menuId) {
            var menuSwiper = new Swiper(menuId, {
                spaceBetween: 5,
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

        initializeSwiper("#box-gallery11", "#box-gallery11_menu");
        initializeSwiper("#box-gallery12", "#box-gallery12_menu");
        initializeSwiper("#box-gallery13", "#box-gallery13_menu");
        initializeSwiper("#box-gallery14", "#box-gallery14_menu");
    });
</script>


<?php require("./inc_templates/footer.php"); ?>

