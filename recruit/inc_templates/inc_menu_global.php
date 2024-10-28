




<?php 
if ($sidemenu !== true) : ?>
<li><a href="index.php#section-recruit">中途採用</a></li>
<li><a href="about_number.php">数字で見る</a></li>
<li><a href="about_company.php">職場環境</a></li>
<li><a href="about_culture.php">企業文化</a></li>
<li><a href="index.php#section-top-interview">社員の声</a></li>
<li><a href="index.php#lst-work-day">職場密着動画</a></li>
<li><a href="javascript:void(0)" onclick="App.loadSection('modal_contents_A.php?section=0', '#modal_contents_A','代表メッセージ')">代表メッセージ</a></li>
<?php else:?>
<li><a href="about_number.php">数字で見る</a></li>
<li><a href="about_company.php">職場環境</a></li>
<li><a href="about_culture.php">企業文化</a></li>
<li><a href="index.php#section-recruit">中途採用</a>
    <?php /*require("./inc_templates/inc_menu_job.php");*/ ?>
<ul>
    <li class="<?php if(isset($jobtype) && $jobtype === '1'):?>active<?php endif;?>">
        <a href="job_01.php">
        <figure><img src="img/pic/recruit_01.jpg?<?= VER ?>" alt="営業"></figure>
        <h3 class="v-txt01">営業</h3>
        </a>
        </li>
        <li class="<?php if(isset($jobtype) && $jobtype === '2'):?>active<?php endif;?>">
        <a href="job_02.php">
        <figure><img src="img/pic/recruit_02.jpg?<?= VER ?>" alt="営業"></figure>
        <h3 class="v-txt01">営業企画</h3>
        </a>
        </li>
        <li class="<?php if(isset($jobtype) && $jobtype === '3'):?>active<?php endif;?>">
        <a href="job_03.php">
        <figure><img src="img/pic/recruit_03.jpg?<?= VER ?>" alt="構築コンサル"></figure>
        <h3 class="v-txt01">構築コンサル</h3>
        </a>
        </li>
        <li class="<?php if(isset($jobtype) && $jobtype === '4'):?>active<?php endif;?>">
        <a href="job_04.php">
        <figure><img src="img/pic/recruit_04.jpg?<?= VER ?>" alt="PM（経験）"></figure>
        <h3 class="v-txt01 v-o-up">PM<small>（経験）</small></h3>
        </a>
        </li>
        <li class="<?php if(isset($jobtype) && $jobtype === '5'):?>active<?php endif;?>">
        <a href="job_05.php">
        <figure><img src="img/pic/recruit_05.jpg?<?= VER ?>" alt="AnewS"></figure>
        <h3 class="v-txt01 v-o-up" style="letter-spacing: -5px;">AnewS</h3>
        </a>
        </li>
</ul>

</li>

<li><a href="index.php#section-top-interview">社員の声</a>

    <ul>
        <li>
        <!--*1-->
        <a href="interview_01.php">
          <figure>
          <img src="img/interview/1/pic_0.jpg?<?= VER ?>" alt="山口 恭平 入社歴7カ月">
          </figure>
          <h3 class="v-txt01">山口 恭平</h3>
        </a>
      </li>
      
      <!--*2-->
      <li>
      <a href="interview_02.php">
          <figure>
          <img src="img/interview/2/pic_0.jpg?<?= VER ?>" alt="林泰之 50代 入社歴3年 PM">
          </figure>
          <h3 class="v-txt01">林 泰之</h3>
      </a>
      </li>
      
      <!--*5-->
      <li>
      <a href="interview_05.php">
 
        <figure>
        <img src="img/interview/5/pic_0.jpg?<?= VER ?>" alt="千葉景子 40代 入社歴6年 営業">
        </figure>
        <h3 class="v-txt01">千葉 景子</h3>
      </a>
      </li>
      
        <!--*7-->
        <li>
        <a href="interview_07.php">
    
          <figure>
          <img src="img/interview/7/pic_0.jpg?<?= VER ?>" alt="伊藤梨佐	20代 入社歴10カ月 営業">
          </figure>
          <h3 class="v-txt01">伊藤 梨佐</h3>
        </a>
      </li>
      
        <!--*9-->
        <li>
        <a href="interview_09.php">
          <figure>
          <img src="img/interview/9/pic_0.jpg?<?= VER ?>" alt="廣田尚紀	30代 入社歴2年	営業 ">
          </figure>
          <h3 class="v-txt01">廣田 尚紀</h3>
        </a>
      </li>
      
        <!--*10-->
        <li>
        <a href="interview_10.php">
          <figure>
          <img src="img/interview/10/pic_0.jpg?<?= VER ?>" alt="松宮貴明 30代 1年 入社歴営業（営業企画）">
          </figure>
          <h3 class="v-txt01">松宮 貴明</h3>
        </a>
        </li>
      </ul>
</li>


<li><a href="index.php#lst-work-day">職場密着動画</a>
    <ul>
    <li>
        <a href="img/oneday/day_mov02.mp4?<?= VER ?>" 
        data-fancybox="int_day2" 
        data-caption="職場密着動画　高山さん（営業）"  
        data-thumb="img/oneday/day_02.jpg?<?= VER ?>">
        <figure><img src="img/oneday/day_02.jpg?<?= VER ?>" alt="職場密着動画　高山さん（営業"></figure>
        <h3 class="v-txt01">高山さん<br><small>（営業）</small></h3>
        </a>
    </li>
    <li>
        <a href="img/oneday/day_mov03.mp4?<?= VER ?>" 
        data-fancybox="int_day2" 
        data-caption="職場密着動画　伊藤さん（営業）" 
        data-thumb="img/oneday/day_03.jpg?<?= VER ?>">
        <figure><img src="img/oneday/day_03.jpg?<?= VER ?>" alt="職場密着動画　伊藤さん（営業）"></figure>
        <h3 class="v-txt01">伊藤さん<br><small>営業</small></h3>
        </a>
    </li>
    <li>
        <a href="img/oneday/day_mov04.mp4?<?= VER ?>" 
        data-fancybox="int_day2" 
        data-caption="職場密着動画　小峰さん（営業・営業企画）" 
        data-thumb="img/oneday/day_04.jpg?<?= VER ?>">
        <figure><img src="img/oneday/day_04.jpg?<?= VER ?>" alt="職場密着動画　小峰さん（営業・営業企画）"></figure>
        <h3 class="v-txt01 v-o-up">小峰さん<br><small>営業・営業企画</small></h3>
        </a>
    </li>
      <li>
        <a href="img/oneday/day_mov05.mp4?<?= VER ?>" 
        data-fancybox="int_day2" 
        data-caption="職場密着動画　山路さん（AnewS）" 
        data-thumb="img/oneday/day_05.jpg?<?= VER ?>">
        <figure><img src="img/oneday/day_05.jpg?<?= VER ?>" alt=" 職場密着動画　山路さん（AnewS）"></figure>
        <h3 class="v-txt01 v-o-up">山路さん<br><small>Anews</small></h3>
        </a>
      </li>
</ul>
</li>

<li><a href="javascript:void(0)" onclick="App.loadSection('modal_contents_A.php?section=0', '#modal_contents_A','代表メッセージ')">代表メッセージ</a>
    <ul>
        <!--*10-->
        <li>
            <a href="javascript:void(0)" onclick="App.loadSection('modal_contents_A.php?section=0', '#modal_contents_A','代表メッセージ')">
          <figure>
          <img src="img/interview/0/pic_0.jpg?<?= VER ?>" alt="綜合キャリアオプション 取締役副社長 神保光路郎">
          </figure>
          <h3 class="v-txt01">神保光路郎</h3>
        </a>
        </li>
      </ul>
</li>
<?php endif; ?>
