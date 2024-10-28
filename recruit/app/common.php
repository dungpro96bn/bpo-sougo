<?php
////////////////////////////////////////////////////////////////
// ★本番かDEVか判定
function isProduction() {
    $domain = $_SERVER['HTTP_HOST'];
    return ($domain === 'sc-bpo.jp');
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
// define('VER', $datetime);
define('VER', '20240515');

define('DEV', isset($_GET['dev']));

///////////////////////
//HEADER　情報再定義
///////////////////////
$suffix_title = "綜合キャリアオプション中途採用サイト";
$defaultTitle = "";
$defaultDescription = "綜合キャリアオプションにはあなたの培ってきた経験とスキルを活かし、多様なプロジェクトに挑戦できるステージがあります。";
$defaultKeywords = "中途採用,CAMCOM,綜合キャリアオプション,人材サービス,アウトソーシング,業務委託,課題解決BPO,ビジネス,ソリューション,SC";
$title = isset($title) ? $title . $suffix_title : $defaultTitle . $suffix_title;$description = isset($description) ? $description : $defaultDescription;
$keywords = isset($keywords) ? $keywords : $defaultKeywords;
$pagename = isset($pagename) ? $pagename : "unkown";
?>
