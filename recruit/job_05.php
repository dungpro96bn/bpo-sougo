<?php 
$title = "AnewS｜募集職種｜";
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
    <h2 class="v-o-up" style="letter-spacing: -10px;">AnewS<i>Project Manager</i></h2>
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
<article class="jobinfo">
<div class="tbl-01">
<table>
<tr>
    <th>業務内容</th>
    <td>
      一般事務、営業事務、経理事務、学校事務、貿易事務、受付、人事、営業アシスタント、コールセンター、庫内作業など
    </td>
  </tr>
  <tr>
    <th>具体的業務</th>
  <td>
    <h5>営業がとってきた業務委託/派遣現場で就業していただきます。</h5>
    <ul class="lst-type00">
     <li>フロント/バックオフィス実務業務 </li>
     <li>受電業務</li>
     <li>お問い合わせ対応</li>
     <li>データ入力</li>
     <li>書類不備チェック</li>
     <li>書類作成</li></li>
     <li>仕分け/検品
     <li>梱包</li>
     <li>軽作業　など</li>
  </ul>
  </td>
</tr>
<tr>
  <th>特徴／魅力</th>
<td>
<ul class="lst-type00">
  <li>現場によって業務内容が幅広いため、様々な経験を積むことができます。</li>
   <li>学歴や経験ではなく将来性に重きを置いたポテンシャル採用。未経験でも正社員として新たなキャリアをスタートできます。</li>
</ul>
  </td>
</tr>

  <tr>
    <th>求める人材</th>
    <td>
      <h5>必須条件</h5>
      <ul class="lst-type00">
      <li>高卒以上</li>
      <li>PC両手入力</li>
      </ul>
  
      <dl class="txt-pr">
      <dt>第二新卒歓迎</dt>
      </dl>
      <dl class="txt-pr">
      <dt>未経験歓迎</dt>
      </dl>
      <dl class="txt-pr">
      <dt>年齢不問／30代・40代が活躍中</dt>
      </dl>
      <dl class="txt-pr">
      <dt>男女不問</dt>
      </dl>
    </td>
</tr>
<tr>
  <th>勤務地</th>
  <td>
    東京都・神奈川県・埼玉県・千葉県
    <p class="memo"> ※配属先プロジェクトにより異なる</p>
  </td>
</tr>
<tr>
    <th>給与</th>
    <td>
      月収20万5000円～
    <p class="memo">※賞与年2回支給予定</p>
   </td>
  </tr>
  <tr>
    <th>勤務時間</th>
    <td>
      原則、所定8時間
      <p class="memo">※配属先プロジェクトにより異なる</p>
      
    </td>
  </tr>
  <tr>
    <th>休日・休暇</th>
    <td>
      原則、週休2日
      <p class="memo">※配属先プロジェクトにより異なる</p>

    </td>
  </tr>
  <tr>
    <th>待遇・福利厚生</th>
    <td>
      <?php require("./inc_templates/inc_job_benefit.php"); ?>
  </td>
</tr>
</table>
</div>
<?php require("./inc_templates/inc_menu_job.php"); ?>
</article>
  </DIV>
  <?php require("./inc_templates/inc_devimg.php");?>
</SECTION>
</MAIN>

<?php require("./inc_templates/footer.php"); ?>
