<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<!-- 홈 배너 -->
<section id="home" class="home_section">
    <div class="background_bg"></div>
    <div class="container">
        <div class="home_content text-center">
            <div class="blue_bg text-vertical-center">
                <h3 class="title">COMPANY THEME</h3>
                <p class="description">Gnuboard5 &amp; bootstrap</p>
            </div>
        </div>
    </div>
</section>
<script>
    //IE8에서 background 100% 적용
	$( function() {
        $.backstretch("<?php echo G5_THEME_IMG_URL ?>/bg.jpg");
    });
</script>

<!-- 회사소개 -->
<section id="introduce">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ct_header text-center">
                    <h3 class="ct_title">회사소개</h3>
                    <a class="more_down" href="#business"></a>
                </div>
            </div>
        </div>
        <div class="row itd_ct">
            <div class="main_feature text-center">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <div class="content">
                        <?php
                        // 회사소개 co_id=company
                        // co_content 중 <!--more--> 가 포함되어 있으면 그 이전까지만 출력

                        $co_id = 'company';
                        $sql = " select * from {$g5['content_table']} where co_id = '$co_id' ";
                        $co = sql_fetch($sql);
                        $content = preg_split('#<!--more-->#i', $co['co_content']);

                        echo conv_content($content[0], $co['co_html']);
                        ?>
                        <a class="com_intro_more" href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company"><i class="fa fa-plus" aria-hidden="true"></i> 더보기</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 사업영역 -->
<section id="business">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ct_header text-center">
                    <h3 class="ct_title">사업영역</h3>
                    <a class="more_down2" href="#public_relation"></a>
                </div>
            </div>
        </div>
        <div class="row bis_ct">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <div class="col-md-4">
                    <div class="content">
                        <span class="icon01"></span>
                        <h5>그누보드 &amp; 영카트</h5>
                        <p>그누보드와 영카트를 통하여 웹 쇼핑몰, 커뮤니티, 기업 등 사이트를 구축하려고 할 때 더욱 편리하게 작성된 높은 품질의 컨텐츠입니다.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content">
                        <span class="icon02"></span>
                        <h5>커뮤니티</h5>
                        <p>현재 운영되는 sir 커뮤니티를 통해 웹 개발자, 기획자, 퍼블리셔, 디자이너 등의 정보를 교류하고 쾌적한 환경을 만들도록 힘쓰고 있습니다.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content">
                        <span class="icon03"></span>
                        <h5>무료 컨텐츠</h5>
                        <p>오랜 기간 사랑을 받았던 그누보드, 영카트를 통해 더 편리하고 쉽게 사용자가 웹을 구현하고 사용할 수 있도록 무료 서비를 진행하고 있습니다. 앞으로도 더 많은 서비를 위하여 개발에 노력을 아끼지 않고 있습니다.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 홍보센터 -->
<section id="public_relation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title"><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=works&page=">홍보센터</a></h3>
                    <a class="more_down" href="#recruit_process"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        $options = array(
                'thumb_width'    => 500, // 썸네일 width
                'thumb_height'   => 450,  // 썸네일 height
                'content_length' => 40  // 간단내용 길이
        );
        echo latest('theme/gallery', 'works', 8, 20, 2, $options);
        ?>
    </div>
</section>

<!-- 채용절차 -->
<section id="recruit_process">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">채용절차</h3>
                    <a class="more_down" href="#recruit"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="tal_tabs">
                <ul class="tabs">
                    <li class="active" rel="tab1">Step 01</li>
                    <li rel="tab2">Step 02</li>
                    <li rel="tab3">Step 03</li>
                    <li rel="tab3">Step 04</li>
                </ul>
                <div class="tab_container">
                    <div id="tab1" class="tab_content">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/step04.png" alt="원서접수" />
                    </div>
                    <!-- #tab1 -->
                    <div id="tab2" class="tab_content">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/step04.png" alt="서류전형" />
                    </div>
                    <!-- #tab2 -->
                    <div id="tab3" class="tab_content">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/step03.png" alt="내용을 입력하세요" />
                    </div>
                    <!-- #tab3 -->
                    <div id="tab4" class="tab_content">
                        <img src="<?php echo G5_THEME_IMG_URL ?>/step03.png" alt="내용을 입력하세요" />
                    </div>
                    <!-- #tab4 -->
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(function () {

    $(".tab_content").hide();
    $(".tab_content:first").show();

    $("ul.tabs li").click(function () {
        $("ul.tabs li").removeClass("active").css("color", "#333");
        //$(this).addClass("active").css({"color": "darkred","font-weight": "bolder"});
        $(this).addClass("active").css("color", "darkred");
        $(".tab_content").hide()
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn()
    });
});
	
</script>

<!-- 채용정보 -->
<section id="recruit">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">채용정보</h3>
                    <a class="more_down" href="#request"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="recruit_info">
                <div class="single_blog text-center">
                    <?php
                    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                    $options = array(
                            'thumb_width'    => 255,  // 썸네일 width
                            'thumb_height'   => 225,  // 썸네일 height
                            'content_length' => 100   // 간단내용 길이
                    );
                    echo latest('theme/gallery2', 'recruit', 4, 20, 2, $options);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 문의하기 -->
<section id="request">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">문의</h3>
                    <a class="more_down" href="#location"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <div id="contact_from" class="col-lg-10 col-lg-offset-1">
                    <form name="fcontact" action="<?php echo G5_THEME_URL; ?>/contact_send.php" method="post" onsubmit="return fcontact_submit(this);">
                        <fieldset id="contact_fs">
                            <legend>Contact</legend>
                            <label for="con_name">이름</label>
                            <input type="text" name="con_name" id="con_name" required class="frm_input required" minlength="2" maxlength="100" placeholder=" 보내실 분의 이름을 입력해 주세요.">
                            <label for="con_name">이메일</label>
                            <input type="text" name="con_email" id="con_email" required class="frm_input required email" maxlength="100" placeholder=" 보내실 분의 이메일을 입력해 주세요.">
                            <label for="con_tel">연락처</label>
                            <input type="text" name="con_tel" id="con_tel" required class="frm_input required telnum" maxlength="20" placeholder=" 예) 010-1234-5678">
                            <label for="">메시지</label>
                            <textarea name="con_message" rows="15" cols="100%" id="con_message"  title="내용쓰기" required class="required" placeholder=" 내용을 입력해주세요."></textarea>
                            <label for="">자동등록방지</label>
                            <div class="captcha"><?php echo captcha_html(); ?></div>
                            <input type="submit" value="보내기" id="btn_submit" class="btn_submit">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 찾아오시는 길 -->
<section id="location">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">찾아오시는 길</h3>
                    <a class="scl_top" href="#home"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="location_info">
            <ul>
                <li class="col-md-3 col-xs-12 col-sm-6"><i class="fa fa-lg fa-thumb-tack" aria-hidden="true"></i><br /><?php echo get_text($config['cf_1']); ?></li>
                <li class="col-md-3 col-xs-12 col-sm-6"><i class="fa fa-lg fa-phone" aria-hidden="true"></i><br />+<?php echo get_text($config['cf_2']); ?></li>
                <li class="col-md-3 col-xs-12 col-sm-6"><i class="fa fa-lg fa-envelope" aria-hidden="true"></i><br /><?php echo get_text($config['cf_admin_email']); ?></li>
                <li class="col-md-3 col-xs-12 col-sm-6"><i class="fa fa-lg fa-home" aria-hidden="true"></i><br /><?php echo get_text($config['cf_3']); ?></li>
            </ul>
        </div>
    </div>
    <div id="map" style="width:100%;height:400px;overflow:hidden;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1581.1226347718832!2d126.9757597!3d37.5728418!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2eb3e16f081%3A0x60277c9a54a3d4d!2z7IS47KKF64yA7JmVIOuPmeyDgQ!5e0!3m2!1sko!2skr!4v1508474705358" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>

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