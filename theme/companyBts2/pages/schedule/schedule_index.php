<!-- 홈 배너 -->
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/schedule.css">
<section id="game-detail" class="flexbox flexbox-col flexbox-align-center">
    <div class="title-box flexbox flexbox-col flexbox-align-center">
        <div class="due-date-box flexbox flexbox-center">
            <span class="due-date-label">접수마감</span>
            <span class="due-date">2018.12.31(일) PM 6:00</span>
        </div>
        <div class="game-title">
            <span>제 100회 프리다이빙 대회</span>
        </div>
        <div class="part-title">
            <span>혼합복식부 지역 신인부(남자)</span>
        </div>
    </div>
    <div class="game-content flexbox flexbox-just-between">
        <div class="game-left">
            <div class="complex-map"></div>
            <div class="complex-address"></div> 
        </div>
        <div class="game-right">
            <div class="game-info flexbox flexbox-just-between">
                <?php
                    
                    for ($i=0; $i<8; $i++) {
                ?>
                <div class="game-info-row">
                    <span class="row-label">일시</span><span>2019.01.01(월) ~ 14(일) 2주간</span>
                </div>
                <?php } ?>
            </div>
            <div class="btns-area flexbox">
                <div class="button btn-1 flexbox flexbox-center">
                    <span>참가신청</span>
                </div>
                <div class="button btn-2 flexbox flexbox-center">
                    <span>뒤로가기</span>
                </div>
            </div>
            <div class="pre-caution">
                <div class="label">
                    <span>* 참가신청시 주의사항</span>
                </div>
                <div class="descript">
                    <span>- 사이트에서만 접수가능하며 신청 마감일까지 참가비 미입금자는 대진표에서 제외</span>
                </div>
                <div class="descript">
                    <span>- 사이트에서만 접수가능하며 신청 마감일까지 참가비 미입금자는 대진표에서 제외</span>
                </div>
            </div>
        </div>
    </div>
</section>
