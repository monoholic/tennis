<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

if(defined('_INDEX_')) {
    $idx_nav = ' navigation';
    $menu_href = '';
} else {
    $idx_nav = '';
    $menu_href = G5_URL;
}

// active 처리
if(defined('_INDEX_')) {
    $nav_li_1 = ' class="active"';
    $nav_li_2 = '';
    $nav_li_3 = '';
    $nav_li_4 = '';
    $nav_li_5 = '';
    $nav_li_6 = '';
} else {
    $nav_li_1 = '';
    $nav_li_2 = '';
    $nav_li_3 = '';
    $nav_li_4 = '';
    $nav_li_5 = '';
    $nav_li_6 = '';

    if(isset($co_id) && $co_id == 'company')
        $nav_li_1 = ' class="active"';

    if(isset($bo_table)) {
        if($bo_table == 'works') // 홍보센터
            $nav_li_3 = ' class="active"';

        if($bo_table == 'recruit') // 채용정보
            $nav_li_4 = ' class="active"';
    }
}
?>

<!-- 상단 시작 { -->
<div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

<!-- } 상단 끝 -->
<header id="header" class="navbar-fixed-top navbar-inverse video-menu" role="banner">
    <div class="container">
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo G5_URL ?>">
                <img src="<?php echo G5_THEME_IMG_URL ?>/logo.png" alt="" class="img-responsive" style="margin-top:27px;">
            </a>
        </div>
        <nav class="collapse navbar-collapse<?php echo $idx_nav; ?>" id="bs-example-navbar-collapse-1" role="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li<?php echo $nav_li_1; ?>><a href="<?php echo $menu_href; ?>#introduce">테니스라인소개</a></li>
                <li<?php echo $nav_li_2; ?>><a href="<?php echo $menu_href; ?>#business">대회스케쥴</a></li>
                <li<?php echo $nav_li_3; ?>><a href="<?php echo $menu_href; ?>#public_relation">랭킹</a></li>
                <li<?php echo $nav_li_4; ?>><a href="<?php echo $menu_href; ?>#recruit_process">클럽리그</a></li>
                <li<?php echo $nav_li_4; ?>><a href="<?php echo $menu_href; ?>#recruit">커뮤니티</a></li>
                <li<?php echo $nav_li_5; ?>><a href="<?php echo $menu_href; ?>#request">스토어</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container">
        <?php if ((!$bo_table || $w == 's' ) && !defined("_INDEX_")) { ?><div id="container_title"><?php echo $g5['title'] ?></div><?php } ?>