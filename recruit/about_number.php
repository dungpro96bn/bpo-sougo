<?php 
$title = "数字で見る｜";
$description = "綜合キャリアオプションの拠点数・社員数・年代など私たちを表す数字をご紹介します。";
// $keywords = "";
$pagename = "about_number";
require("./app/common.php");
require("./inc_templates/header.php");
?>
<MAIN>
<SECTION class="mvimg mv-003 mv-second" id="section-mv-number">
<div class="wraper-box bot01"><div class="box"></div></div>
<!--*-->
<DIV class="container flex-col2">
<div class="tit-m v-txt01">
<h2>数字で見る<i>Number</i></h2>
<p class="tit-s v-txt01">
拠点数・社員数・年代など<br>私たちを表す数字をご紹介します。
</p>
</div>
<?php require("./inc_templates/inc_devimg.php");?>
</SECTION>


<SECTION id="section-number">
<DIV class="container">



  
<!-- * -->
<DIV class="flex-col2">
    <DIV class="order-md-1">
    <article class="box-number box-line">
    <h3 class="tit">
      <i class="fa-solid fa-flag"></i>
      実績数</h3>
    <div class="in-box">
      <div>
      <h4 class="txt-num rem5"><i>11524</i><em>件</em></h4>
      <p class="py-2">取引社数累計 グループ合算（2023年3月末）</p>
      </div>
    </div>
    </article>
    </DIV>
    <DIV class="order-md-2">
      <article class="box-number box-line">
        <h3 class="tit">
        <i class="fa-solid fa-chart-line"></i>
        売上高</h3>
        <div class="in-box">
          <div>
          <h4 class="txt-num rem4"><i>1292</i><em>億円</em></h4>
          <p class="py-2">売上高 グループ合算 （2022年度）</p>
          </div>
          <table class="tbl-a">
            <tr>
              <td>2022年</td>
              <td><div class="bar1" style="width:calc((1229 / 1300) * 100% + 50%)">1229億</div></td>
            </tr>
            <tr>
              <td>2021年</td>
              <td><div class="bar1" style="width:calc((1179 / 1300) * 100% + 50%)">1179億</div></td>
            </tr>
            <tr>
              <td>2020年</td>
              <td><div class="bar1" style="width:calc((975 / 1300) * 100% + 50%)">975億</div></td>
            </tr>
          </table>
        </div>
      </article>
    </DIV>
</DIV>



<!-- * -->
<article class="box-number box-line mt-3">
  <h3 class="tit">
    <i class="fa-solid fa-location-dot"></i>
    <span>拠点数</span></h3>
  <div class="in-box">
      <div class="flex-col2">
          <div>
          <h4 class="txt-num rem3">    
          <i>169</i><em>拠点</em></h4>
          <p class="py-2">
          キャムコムグループは、<br>国内約60都市、169拠点に展開し、<br>地域密着型のサービスを提供しています。
          </p>
          </div>
          <div>
          <div class="man-jp-01">
          <img src="img/ill_map_japan_p.svg?<?= VER ?>" class="map-point" alt="日本国内拠点数">
          <img src="img/ill_map_japan.svg?<?= VER ?>" class="map-base" alt="日本地図">
          </div>
        </div>
      </div>
  </div>
</article>

<!-- * -->
<DIV class="flex-col2 mt-3">
  <DIV class="order-md-1">
    <article class="box-number box-line">
      <h3 class="tit">
        <i class="fa-solid fa-user-tie" style="transform: translateX(3px);"></i>
        社員数</h3>
      <div class="in-box">
        <table class="tbl-b">
          <thead>
            <tr>
            <th class="w-50">
              <strong>全グループ総計</strong></th>
          </thead>
          <tbody>
            <tr>
            <td class="w-50"><h4 class="txt-num rem3""><i>2385</i><em>名</em></h4></td>
            </tr>
          </tbody>
        </tr>
      </table>

        <p class="py-2">私たち綜合キャリアオプションは創業以来一貫して雇用機会の拡大を支援しています。</p>
        <table class="tbl-b">
          <thead>
            <tr>
            <th>
              <strong>平均年齢</strong></th>
          </thead>
          <tbody>
            <tr>
            <td><h4 class="txt-num rem3""><i>33</i><em>歳</em></h4></td>
            </tr>
          </tbody>
        </tr>
      </table>
     
      </div>
    </article>
  </DIV>
  
  <DIV class="order-md-2">
    <article class="box-number box-line">
      <h3 class="tit">
        <i class="fa-solid fa-children fa-flip-horizontal" style="transform: translateX(3px);"></i>
        男女比</h3>
      <div class="in-box">
        <table class="tbl-b">
          <thead>
            <tr>
            <th class="w-50">
              <strong>男性</strong></th>
            <th class="w-50">
              <strong>女性</strong></th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <td class="w-50"><h4 class="txt-num rem2"><i>61</i><em>%</em></h4></td>
            <td class="w-50"><h4 class="txt-num rem2"><i>39</i><em>%</em></h4></td>
            </tr>
          </tbody>
        </tr>
      </table>
      <p class="py-2">男女共に働きやすい環境を目指しております。</p>

      <table class="tbl-b">
        <thead>
          <tr>
          <th>
          <strong>女性管理職</strong></th>
        </thead>
        <tbody>
          <tr>
          <td>
            <?php /*18.3%*/ ?>
            <h4 class="txt-num rem2"><i>18</i><em>%</em></h4></td>
          </tr>
        </tbody>
      </tr>
    </table>
      </div>
    </article>
  </DIV>
  </DIV>
  

<!-- * -->
<?php /*
<article class="box-number box-line mt-3">
  <h3 class="tit">
    <i class="fa-solid fa-people-group"></i>
    年代</h3>
  <div class="in-box">
      <table class="tbl-b m-auto">
        <tr>
        <td style="vertical-align: bottom;"><div class="bar2" style="height:200px";>20代</div></td>
        <td style="vertical-align: bottom;"><div class="bar2" style="height:190px";>30代</div></td>
        <td style="vertical-align: bottom;"><div class="bar2" style="height:160px";>40代</div></td>
        <td style="vertical-align: bottom;"><div class="bar2" style="height:170px";>50代</div></td>
        </tr>
        <tbody>
        <tr>
        <td><h4 class="txt-num rem2 size-m"><i>30</i><em>%</em></td>
        <td><h4 class="txt-num rem2 size-m"><i>22</i><em>%</em></td>
        <td><h4 class="txt-num rem2 size-m"><i>23</i><em>%</em></td>
        <td><h4 class="txt-num rem2 size-m"><i>25</i><em>%</em></td>
        </tr>
        </tbody>
      </tr>
    </table>
    <p class="mt-3">綜合キャリアオプションでは20代から50代以上まで幅広い年代の方が活躍しています<span style="color:red">★</span></p>
  </div>
</article>
*/ ?>

<!-- * -->
<DIV class="flex-col2 mt-3">
    <DIV class="order-md-1">
      <article class="box-number box-line">
      <h3 class="tit">
      <i class="fa-regular fa-calendar-days"style="transform: translateX(3px);"></i>
      平均勤続年数</h3>
        <div class="in-box">
        <?php /* 6.8年 */ ?>
        <h4 class="txt-num"><i>7</i><em>年</em></h4>
        <p class="py-2">働きやすい環境を目指し、長く働いて頂ける<br>より良い環境づくりを目指しています。</p>
        </div>
      </article>
    </DIV>

    <DIV class="order-md-2">
      <article class="box-number box-line">
      <h3 class="tit">
      <i class="fa-solid fa-mug-hot" style="transform: translateX(7px);"></i>
      有給取得日数</h3>
      <div class="in-box">
        <div class="flex-col2">
          <div>
          <?php /*10.7日*/?>
          <h4 class="txt-num"><i>11</i><em>日</em></h4>
          <p class="py-2">ワークライフバランスを大切に、<br>充実した休暇取得をサポートしています。</p>
          </div>

        </div>
      </div>
      </article>
    </DIV>
  </DIV>

<!-- * -->
<article class="box-number box-line mt-3">
  <div class="in-box">

  <h3 class="tit">
  <i class="fa-solid fa-person-walking-luggage"></i>
  <ruby>休日の過ごし方</ruby>
  </h3>

  <div class="flex-col2">
    <table class="tbl-a tbl-holiday">
      <tr>
        <td class="w1"><h4 class="txt-num size-s"><i>78</i><em>%</em></h4></td>

        <td class="w9"><div class="bar1" style="width:calc(78 / 100 * 100%)"></div>
          <h5>❶ 家族や友人と過ごす</h5>
        </td>
        </tr>
        <tr>
         <td class="w1"><h4 class="txt-num size-s"><i>73</i><em>%</em></h4></td>
        <td class="w9"><div class="bar1" style="width:calc(73 / 100 * 100%)"></div>
          <h5>❷ 自宅でリラックスして過ごす</h5>
        </td>
        </tr>
        <tr>
         <td class="w1"><h4 class="txt-num size-s"><i>71</i><em>%</em></h4></td>
        <td class="w9"><div class="bar1" style="width:calc(71 / 100 * 100%)"></div>
          <h5>❸ お酒を飲む・美味しいご飯を食べる</h5>
        </td>
        </tr>
        <tr>
         <td class="w1"><h4 class="txt-num size-s"><i>54</i><em>%</em></h4></td>
        <td class="w9"><div class="bar1" style="width:calc(54 / 100 * 100%)"></div>
          <h5>❹ ゲーム・読書・映画鑑賞・美術館</h5>
        </td>
        </tr>
        <tr>
 
         <td class="w1"><h4 class="txt-num size-s"><i>52</i><em>%</em></h4></td>
        <td class="w9"><div class="bar1" style="width:calc(52 / 100 * 100%)"></div>
          <h5>❺ 旅行・ドライブ・キャンプ・ショッピング</h5>
        </td>
        </tr>
        <tr>
         <td class="w1"><h4 class="txt-num size-s"><i>33</i><em>%</em></h4></td>
        <td class="w9"><div class="bar1" style="width:calc(33 / 100 * 100%)"></div>
          <h5>❻ スポーツなどアクティブに体を動かす</h5>
        </td>
        </tr>
        <tr>
         <td class="w1"><h4 class="txt-num size-s"><i>28</i><em>%</em></h4></td>
        <td class="w9"><div class="bar1" style="width:calc(28 / 100 * 100%)"></div>
          <h5>❼ スキルアップのための活動</h5>
        </td>
      </tr>
    </table>
  </div>
  </div>
</article>

<!-- * -->
<article class="box-number mt-3">
  <div class="in-box">
    <h3 class="tit">
      <i class="fa-solid fa-chart-simple"></i>
      中途採用率</h3>

      <table class="tbl-b">
          <thead>
            <tr>
            <th style="width:33.33333%"><strong>2020年度</strong></th>
            <th style="width:33.33333%"><strong>2021年度</strong></th>
            <th style="width:33.33333%"><strong>2022年度</strong></th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <td style="width:33.33333%;padding-top:1rem"><h4 class="txt-num size-3"><i>84</i><em>%</em></h4></td>
            <td style="width:33.33333%;padding-top:1rem"><h4 class="txt-num size-3"><i>86</i><em>%</em></h4></td>
            <td style="width:33.33333%;padding-top:1rem"><h4 class="txt-num size-3"><i>46</i><em>%</em></h4></td>
            </tr>
          </tbody>
        </tr>
      </table>
      <p class="py-4">
        綜合キャリアオプションにおける正規雇用労働者の中途採用比率 (公表:2023年8月31日)</p>
  </div>
</article>

<script>
  $(function() {
    $('.txt-num').each(function() {
        var width = $(this).width(); 
        $(this).css('min-width', width); 
    });
});
</script>


<br>
<img src="img/acc/acc_05.svg?<?= VER ?>" class="img-hr1">

<?php require("./inc_templates/inc_menu_company.php"); ?>
<br>
<br>
<br>
<?php require("./inc_templates/inc_menu_job.php"); ?>

</DIV>
</SECTION>
</MAIN>
<?php require("./inc_templates/footer.php"); ?>