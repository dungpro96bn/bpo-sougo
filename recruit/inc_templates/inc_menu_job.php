

<?php if($pagename !== "index"):?>
<div class="tit02">
    <h2>中途採用　募集職種</h2>
</div>
<?php endif; ?>
<div id="lst-top-recruit" class="<?php if($pagename !== 'index'):?>p2nd<?php endif;?>">
<ul>
    <li class="<?php if(isset($jobtype) && $jobtype === '1'):?>active<?php endif;?>">
    <a href="job_01.php">
    <figure><img src="img/pic/recruit_01.jpg?<?= VER ?>" alt="営業"></figure>
    <h3 class="v-txt01">営業</h3>
    </a>
    </li>
    <li class="<?php if(isset($jobtype) && $jobtype === '2'):?>active<?php endif;?>">
    <a href="job_02.php">
    <figure><img src="img/pic/recruit_02.jpg?<?= VER ?>" alt="営業企画"></figure>
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
    <h3 class="v-txt01 v-o-up">プロジェクトマネージャー</h3>
    </a>
    </li>

    <li class="<?php if(isset($jobtype) && $jobtype === '5'):?>active<?php endif;?>">
    <a href="job_05.php">
    <figure><img src="img/pic/recruit_05.jpg?<?= VER ?>" alt="AnewS"></figure>
    <h3 class="v-txt01 v-o-up">事務職</h3>
    </a>
    </li>
</ul>
</div>