<!DOCTYPE html>
<HTML lang="ja">
<HEAD prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if (isProduction() !== true): ?>
<meta name="robots" content="noindex, nofollow">
<?php else:?>
<meta name="robots" content="index, follow">
<?php endif; ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
<title><?php echo $title ?></title>
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $description ?>" />
<meta property="og:title" content="<?php echo $title ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?= THIS_URL ?>" />
<meta property="og:image" content="img/ogp_logo.png?<?= VER ?>" />
<meta property="og:description" content="<?php echo $description ?>" />
<link rel="apple-touch-icon" type="image/png" href="img/icon_180x180.png?<?= VER ?>">
<link rel="icon" href="img/favicon.png?<?= VER ?>" sizes="32x32" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" id="font_awesome" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" type="text/css" media="all">
<link rel="stylesheet" href="css/global.css?<?= VER ?>">
<script src="js/main.js?<?= VER ?>"></script>
</HEAD>
<?php
//◆TAGS
//$tagarea = "append_head"; 
//include('./inc_templates/tags.php');
?>

<BODY class="page_<?php echo $pagename;?>" id="body">
<?php
//◆TAGS
//$tagarea = "prepend_body"; 
//require('./inc_templates/tags.php');
?>
<!--/////////////////////////////
// SP BURGER
/////////////////////////////////-->
<div id="global_burgermenu" class="d-lg-none">
    <button id="menu05" class="menu-trigger">
    <span></span>
    <span></span>
    <span></span>
    </button>
</div>
<!--/////////////////////////////
// SP GLOBALMENU
/////////////////////////////////-->
<nav id="global-sp-menu">
      <div class="box-in">
    <a href="index.php" class="sp-logo"><img src="img/logo00_w.svg?<?= VER ?>" alt="綜合キャリアオプション"></a>
     <ul class="lst-sp-menu">
    <?php 
    $sidemenu = true;
    require('./inc_templates/inc_menu_global.php'); ?>
    </ul>
</div>
</nav>

<!--/////////////////////////////
// HEADER
/////////////////////////////////-->
<nav id="pc-menu" class="d-none d-lg-block">
    <ul>
        <?php 
        $sidemenu = false;
        require('./inc_templates/inc_menu_global.php'); ?>
    </ul>
</nav>
<DIV id="wrapper-content">
<header id="header">
<div class="header-logo">
<a href="index.php" class="h_logo">
    <img src="img/logo00.svg?<?= VER ?>" alt="綜合キャリアオプション" id="logo00" ><span>中途採用</span>
</a>
</div>
</header>