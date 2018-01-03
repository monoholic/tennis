<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');
include_once(G5_THEME_PATH.'/head.php');
?>
<?
include_once(G5_THEME_PATH.'/skin/main/main.php');
?>

<!-- <script>
    smoothScroll.init({
      speed: 400,
      easing: 'easeInQuad',
      offset:0,
      updateURL: true,
      callbackBefore: function ( toggle, anchor ) {},
      callbackAfter: function ( toggle, anchor ) {}
    });
</script> -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>