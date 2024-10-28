<?php
$VER = date("ymdhis");
$title = "お問い合わせありがとうございました｜";
$pagename = "contact_done";//ページ種別
require('./app/common.php');
$formTokenFromPost = isset($_POST['token']) ? $_POST['token'] : '';
if (!isset($_SESSION['form_token']) || empty($_SESSION['form_token']) || $formTokenFromPost !== $_SESSION['form_token']) {
    header('Location:index.php');
    exit;
}
unset($_SESSION['form_token']);
require('./inc_templates/header.php');
?>
<MAIN class="main-contact_done">
<DIV class="box-thankyou">
<figure class="this_logo">
<img src="img/logo00.svg?<?= VER ?>" alt="綜合キャリアオプション">
</figure>
<h2 >お問い合わせ、ありがとうございます。</h2>
<p>
この度は、お問い合わせいただき、誠にありがとうございます。<br>
ご記入の内容は無事送信されました。<br>
内容を確認次第、担当者よりご連絡差し上げます。
</p>
<div class="text-center">
<a href="index.php" class="this_btn btn btn-secondary" style="border-radius: .2rem;">TOPページ</a>
</div>

</DIV>
</MAIN>
<?php require('./inc_templates/footer.php') ?>

