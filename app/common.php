<?php
////////////////////////////////////////////////////////////////
// ★プログラムの階層を document root の位置階層上と定義
define('PROGRAM_DIR', realpath(__DIR__));
$logDirectory = PROGRAM_DIR . "/logs/";
if (!file_exists($logDirectory)) {
    mkdir($logDirectory, 0777, true);
}
////////////////////////////////////////////////////////////////
// ★本番かDEVか判定
function isProduction() {
    $domain = $_SERVER['HTTP_HOST'];
   return ($domain === 'sc-bpo.jp');
   // return ($domain === 'sc-bpo.liber-web-dev.com');
}
////////////////////////////////////////////////////////////////
// ★各種属性
$now = new DateTime();
$datetime = $now->format('Ymd-His');
$host = $_SERVER['HTTP_HOST'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$isDevParam = isset($_GET['dev']);
define('DR', $_SERVER['DOCUMENT_ROOT']);
define('HOST', $_SERVER['HTTP_HOST']);
define('UA', $ua);
define('THIS_URL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
// ★Version
//define('VER', $datetime);
define('VER', '20240515');
////////////////////////////////////////////////////////////////
//Session
///////////////////////
if (!isset($_SESSION)) {
    session_start();
}
// 既存のトークンがなければ新しく生成してセッションに保存
if (!isset($_SESSION['form_token'])) {
    if (function_exists('random_bytes')) {
        $formToken = bin2hex(random_bytes(32));
    } else {
        $formToken = bin2hex(openssl_random_pseudo_bytes(32));
    }
    $_SESSION['form_token'] = $formToken;
}
$formToken = $_SESSION['form_token'];
///////////////////////
//HEADER　情報再定義
///////////////////////
$suffix_title = "綜合キャリアオプション｜ビジネス・プロセス・ソリューション事業本部";
$defaultTitle = "";
$defaultDescription = "BPOというソリューションで、お客様の「できない」を「できる」に。人材総合サービスCAMCOMグループ、株式会社綜合キャリアオプション、ビジネス・プロセス・ソリューション事業本部のサービスページです。";
$defaultKeywords = "CAMCOM,綜合キャリアオプション,人材サービス,アウトソーシング,業務委託,課題解決BPO,ビジネス,ソリューション,SC";
$title = isset($title) ? $title . $suffix_title : $defaultTitle . $suffix_title;$description = isset($description) ? $description : $defaultDescription;
$keywords = isset($keywords) ? $keywords : $defaultKeywords;
$pagename = isset($pagename) ? $pagename : "unkown";
///////////////////////
//エスケープ処理 FORM出力用
///////////////////////
function escapeHtml($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>