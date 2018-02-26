<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
        <!-- <a href="#" id="top_btn">상단으로</a>     -->
    </div>
</div>

<!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
    
<footer class="flexbox align-center">
  <div id="ft" class="flexbox align-start just-between" >
    <div id="ft_copy">
        <div class="flexbox flow-col align-start" >
          <span>서울특별시 강남구 논현동 216-11 원일빌딩 1층</span>
          <span>사업자등록번호 000 - 00 - 00000</span>
          <span style="margin-top:27px;">COPYRIGHT &copy; <b>소유하신 도메인.</b> ALL RIGHT RESERVED</span>
        </div>
    </div>
    <div id="ft_company">
        <div class="f_link">
            <a href="https://twitter.com/"><i class="fa fa-lg fa-facebook" aria-hidden="true"></i><span class="sound_only">페이스북</span></a>
            <a href="https://www.facebook.com/"><i class="fa fa-lg fa-twitter" aria-hidden="true"></i><span class="sound_only">트위터</span></a>
            <a href="http://instagram.com/"><i class="fa fa-lg fa-google" aria-hidden="true"></i><span class="sound_only">구글</span></a>
            <?php if ($is_admin == 'super' || $is_auth) { ?>
      <a href="<?php echo G5_ADMIN_URL ?>"><i class="fa fa-lg fa-cog" aria-hidden="true"></i><span class="sound_only">관리자</span></a>
      <?php } ?>
      <?php if ($is_member) {  ?>
      <a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="fa fa-lg fa-sign-in" aria-hidden="true"></i><span class="sound_only">로그아웃</span></a></li>
      <?php } else {  ?>
      <a href="<?php echo G5_BBS_URL ?>/login.php"><i class="fa fa-lg fa-power-off" aria-hidden="true"></i><span class="sound_only">로그인</span></a>
      <?php } ?>
        </div>
    </div>
  </div>
</footer>


<script>
$(function() {
    $("#top_btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '500');
        return false;
    });
});
</script>

<!-- } 하단 끝 -->
<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>