<!-- 홈 배너 -->
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/main.css">
<section id="home" class="home_section">
    <div class="background_bg"></div>
    <div class="black_overlay"></div>
    <div class="container">
        <div class="home_content text-center">
            <div class="blue_bg text-vertical-center">
                <img src="<?php echo G5_THEME_IMG_URL ?>/map.png" height="242px"/>
                <h3 class="title">모든 테니스대회는 테니스라인과 함께 하세요</h3>
                <p class="description">전국에서 진행되는 대회를 한눈에 확인 하실 수 있습니다.</p>
                <div class="btn-area">
                    <div class="go-ongoing flexbox just-center">
                        <span>진행중인 대회 보기</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="black_overlay" style="opacity: 0.1"></div>
</section>
<script>
    //IE8에서 background 100% 적용
	$( function() {
        $.backstretch("<?php echo G5_THEME_IMG_URL ?>/main_banner.jpg");
    });
</script>

<!-- 랭킹 -->
<section id="ranking">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ct_header text-center">
                    <h3 class="ct_title">RANKING TOP CLASS</h3>
                </div>
            </div>
        </div>
        <div class="row itd_ct">
            <div class="main_feature text-center">
                <ul class="underline-tab">
                    <li class="" onclick="onClickRankingTab(this)"><a>MAJOR</a></li>
                    <li class="" onclick="onClickRankingTab(this)"><a>TOUR</a></li>
                    <li class="" onclick="onClickRankingTab(this)"><a>CHALLENGER</a></li>
                    <li class="" onclick="onClickRankingTab(this)"><a>CIRCUIT</a></li>
                </ul>
                <div class="user-list flexbox align-start just-between">
                    <?php
                    for ($i=0; $i<5; $i++) {
                    ?>
                    <div class="user-box flexbox flow-col align-center just-between">
                        <div class="info flexbox flow-col align-center just-between">
                            <div class="photo"></div>
                            <span class="name" >안정민</span>
                            <span class="belong">분당알파</span>
                        </div>
                        <div class="score-box flexbox flow-col just-center">
                            <div class="score-title">RANKING POINT</div>
                            <div>
                                <span class="score-total">TOTAL</span><span class="score">757</span>
                            </div>
                        </div>
                        <div class="rank rank-img-<?php echo$i+1 ?>"></div>
                    </div>
                    <?php } ?>
                </div> 
            </div>
        </div>
    </div>
</section>

<section id="games">
    <div class="container">
        <div class="games-box flexbox just-between align-cont-between">
            <?php
                error_log("1");
                for ($i=0; $i<4; $i++) {
                ?>
                <div class="game-box flexbox flow-col align-start just-end">
                    <div class="game-info">
                        <div style="font-size:18px;">2018.01.01 ~ 2018.01.18</div>
                        <div style="font-size:26px; margin-top: 8px;">제 100회 다이빙대회</div>
                        <div style="font-size:13px; margin-top: 8px;">수지구청 스포츠센터 다이빙 풀</div>
                        <div class="game-owner">
                            <span style="font-size:13px;">주최</span>
                            <span style="font-size:13px; font-weight:bold;">인투터블루</span>
                            <span style="font-size:13px;">주관</span>
                            <span style="font-size:13px; font-weight:bold;">스쿠버블</span>
                        </div>
                    </div>
                    <div style="width:100px; height:100px; background: orange; position:absolute; top:0px; right: 0px;"></div>
                </div>
            <?php } ?>
        </div>
        <div class="more flexbox just-center">
            <a class="more_down" href="#recruit_process"></a>
        </div>
    </div>

</section>

<section>
    <div class="container" style="background-color:gray; height: 350px;"> 
    </div>
</section>

<section id="supporter" style="height: 150px;"> 
    <div class="title-box flexbox just-center">
        <span>공식 후원사</span>
    </div>
</section>


