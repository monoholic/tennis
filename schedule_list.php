<?php
include_once('./_common.php');

$page_id = "schedule_list";

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');
include_once(G5_THEME_PATH.'/head.php');
include_once(G5_THEME_PATH.'/pages/schedule/schedule_list.php');
include_once(G5_THEME_PATH.'/tail.php');
?>