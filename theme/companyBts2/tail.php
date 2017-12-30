<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
        <a href="#" id="top_btn">상단으로</a>    
    </div>
</div>

<!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
    
<footer>
    <div class="container">
        <div id="ft" class="col-lg-10 text-center">
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
            <div id="ft_copy">
                <div>
                    Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.
                </div>
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