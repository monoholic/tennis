<?php
include_once('./_common.php');

define('_schedule/index_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/pages/schedule/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>



<?php
include_once(G5_PATH.'/tail.php');
?>