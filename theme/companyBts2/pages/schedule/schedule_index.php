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
            <div class="complex-map" id="map"></div>
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=2f17c15d3dc2614a3da80008b5b1d91a"></script>
            <script>
                var container = document.getElementById('map');
                var options = {
                    center: new daum.maps.LatLng(<?php echo 37.5662952 ?>, <?php echo 126.9779451 ?>),
                    level: 3
                };

                var map = new daum.maps.Map(container, options);

                function setZoomable(zoomable) {
                    // 마우스 휠로 지도 확대,축소 가능여부를 설정합니다
                    map.setZoomable(zoomable);    
                }

                setZoomable(false);
            </script>
            <div class="complex-address flexbox flexbox-align-center flexbox-just-center">
                <div class="addr-img">
                </div>
                <div>
                    <span>사천시 수청테니스장외 보조구장</span>
                </div> 
                <div class="copy-addr-btn flexbox flexbox-center">
                    <span>주소복사</span>
                </div>
            </div>
        </div>
        <div class="game-right">
            <div class="game-info flexbox flexbox-col flexbox-just-between">
                <div class="game-info-row"><span class="row-label">일시</span><span>2019.01.01(월) ~ 14(일) 2주간</span></div>
                <div class="game-info-row"><span class="row-label">주최</span><span>경남 필, 빅토리아 운영위원회</span></div>
                <div class="game-info-row"><span class="row-label">주관</span><span>테니스나라</span></div>
                <div class="game-info-row"><span class="row-label">후원</span><span>사천테니스협회, 동광플라워, 프로켄넥스, KT사천대리점</span></div>
                <div class="game-info-row"><span class="row-label">협찬</span><span>아머스포츠코리아, 윌슨</span></div>
                <div class="game-info-row"><span class="row-label">참가상품</span><span>지역 특산품</span></div>
                <div class="game-info-row"><span class="row-label">참가비</span><span>팀당</span><span>52,000</span><span>원</span><span>(유소년 육성기금 2,000원 포함)</span></div>
                <div class="game-info-row"><span class="row-label">참가팀</span><span>100</span><span>/</span><span>23</span><span>팀 접수중</span></div>
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
                <div class="pre-caution-label">
                    <span>* 참가신청시 주의사항</span>
                </div>
                <div class="pre-caution-descript">
                    <span>- 사이트에서만 접수가능하며 신청 마감일까지 참가비 미입금자는 대진표에서 제외</span>
                </div>
                <div class="pre-caution-descript" style="margin-top: 5px;">
                    <span>- 마감 후 환불 불가하며 참가시 상품 지급</span>
                </div>
            </div>
        </div>
    </div>
</section>
