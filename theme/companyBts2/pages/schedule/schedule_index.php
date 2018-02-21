<!-- 홈 배너 -->
<script src="<?php echo G5_THEME_URL; ?>/pages/schedule/schedule.js"></script>
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/schedule.css">
<section id="game-detail">
    <div class="container flexbox flow-col align-center">
        <div class="title-box flexbox flow-col align-center">
            <div class="due-date-box flexbox just-center">
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
        <div class="game-content flexbox just-between">
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
                <div class="complex-address flexbox align-center just-center">
                    <div class="addr-img">
                    </div>
                    <div>
                        <span>사천시 수청테니스장외 보조구장</span>
                    </div> 
                    <div class="copy-addr-btn flexbox just-center">
                        <span>주소복사</span>
                    </div>
                </div>
            </div>
            <div class="game-right">
                <ul class="game-info flexbox flow-col just-between">
                    <li class="df-row">
                        <span class="df-row-label">일시</span>
                        <span>2019.01.01(월) ~ 14(일) 2주간</span>
                    </li>
                    <li class="df-row">
                        <span class="df-row-label">주최</span>
                        <span>경남 필, 빅토리아 운영위원회</span>
                    </li>
                    <li class="df-row">
                        <span class="df-row-label">주관</span>
                        <span>테니스나라</span>
                    </li>
                    <li class="df-row">
                        <span class="df-row-label">후원</span>
                        <span>사천테니스협회, 동광플라워, 프로켄넥스, KT사천대리점</span>
                    </li>
                    <li class="df-row">
                        <span class="df-row-label">협찬</span>
                        <span>아머스포츠코리아, 윌슨</span>
                    </li>
                    <li class="df-row">
                        <span class="df-row-label">참가상품</span>
                        <span>지역 특산품</span>
                    </li>
                    <li class="df-row">
                        <span class="df-row-label">참가비</span>
                        <span>팀당</span><span>52,000</span><span>원</span><span>(유소년 육성기금 2,000원 포함)</span>
                    </li>
                    <li class="df-row">
                        <span class="df-row-label">참가팀</span>
                        <span>100</span><span>/</span><span>23</span><span>팀 접수중</span>
                    </li>
                </ul>
                <div class="btns-area flexbox" style="margin-top: 50px">
                    <div class="button btn-1 flexbox just-center" onclick="openRegister()">
                        <span>참가신청</span>
                    </div>
                    <div class="button btn-2 flexbox just-center">
                        <span>뒤로가기</span>
                    </div>
                </div>
                <div class="pre-caution">
                    <div class="pre-caution-label">
                        <span>* 참가신청시 주의사항</span>
                    </div>
                    <div class="pre-caution-descript">
                        - 사이트에서만 접수가능하며 신청 마감일까지 참가비 미입금자는 대진표에서 제외</br>
                        - 마감 후 환불 불가하며 참가시 상품 지급
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="game-etc">
    <div class="container">
        <ul class="underline-tab"><!--510-->
            <li class="active" onclick="onClickTab(this, 1)" style="width: calc(95px + 81px);"><a>대회 우승상품</a></li>
            <li class="" onclick="onClickTab(this, 2)" style="width: calc(175px + 81px);"><a>대회일정 및 참가허용기준</a></li>
            <li class="" onclick="onClickTab(this, 3)" style="width: calc(60px + 81px);"><a>대회진행</a></li>
            <li class="" onclick="onClickTab(this, 4)" style="width: calc(60px + 81px);"><a>대회문의</a></li>
            <li class="" onclick="onClickTab(this, 5)" style="width: calc(60px + 81px);"><a>대진표</a></li>
            <li class="" onclick="onClickTab(this, 6)" style="width: calc(60px + 81px);"><a>대회결과</a></li>
        </ul>
        <div class="game-tab-content flexbox just-center">
            <div id="game-1" class="active content-box ">
                <div class="flexbox flow-col align-center">
                    <div class="reward-list flexbox align-end just-start">
                        <div class="reward-box flexbox flow-col align-center">
                            <div class="reward-img reward-img-1"></div>
                            <div class="reward-name">우승</div>
                            <div class="reward-gift">상패 및 100만원</div>
                        </div>
                        <div class="reward-box flexbox flow-col align-center">
                            <div class="reward-img reward-img-2"></div>
                            <div class="reward-name">우승</div>
                            <div class="reward-gift">상패 및 100만원</div>
                        </div>
                        <div class="reward-box flexbox flow-col align-center">
                            <div class="reward-img reward-img-3"></div>
                            <div class="reward-name">우승</div>
                            <div class="reward-gift">상패 및 100만원</div>
                        </div>
                        <div style="width:2px; margin-left: 70px;" class="flexbox just-center">
                            <div class="div-line-v" style="height:73px; margin-bottom:44px;"></div>
                        </div>
                        <div class="reward-box flexbox flow-col align-center">
                            <div class="reward-img reward-img-4"></div>
                            <div class="reward-name">우승</div>
                            <div class="reward-gift">상패 및 100만원</div>
                        </div>
                    </div>
                    <div class="reward-desc">
                        <span>* 각 리그별 70팀 미만시 시상금이 조정될 수 있습니다.</span>
                    </div>
                </div>
            </div>  
            <div id="game-2" class="content-box">
                <div class="tab-sub-title"><span>대회일정</span></div>
                <table class="table game-schd-table">
                    <tr>
                        <th>메이져</th>
                        <th>투어</th>
                        <th>챌린져</th>
                        <th>서킷</th>
                    </tr>
                    <tr class="col-type-1">
                        <td>
                            <div class="flexbox flow-col align-center">
                                <span>2017. 12. 17 (금) AM 9:00</span>
                                <div class="div-line-h" style="width: 13px; margin: 8px 0;"></div>
                                <span>코트 추후 안내 예정</span>
                            </div>
                        </td>
                        <td>
                            <div class="flexbox flow-col align-center">
                                <span>2017. 12. 17 (금) AM 9:00</span>
                                <div class="div-line-h" style="width: 13px; margin: 8px 0;"></div>
                                <span>코트 추후 안내 예정</span>
                            </div>
                        </td>
                        <td>
                            <div class="flexbox flow-col align-center">
                                <span>2017. 12. 17 (금) AM 9:00</span>
                                <div class="div-line-h" style="width: 13px; margin: 8px 0;"></div>
                                <span>코트 추후 안내 예정</span>
                            </div>
                        </td>
                        <td>
                            <div class="flexbox flow-col align-center">
                                <span>2017. 12. 17 (금) AM 9:00</span>
                                <div class="div-line-h" style="width: 13px; margin: 8px 0;"></div>
                                <span>코트 추후 안내 예정</span>
                            </div>
                        </td>
                    </tr>
                </table>
                <div class="tab-sub-title"><span>참가 허용기준</span></div>
                <table class="table game-schd-table">
                    <tr>
                        <th>메이져</th>
                        <th>투어</th>
                        <th>챌린져</th>
                        <th>서킷</th>
                    </tr>
                    <tr class="col-type-3">
                        <td>만 50세 이상</td>
                        <td>만 50세 이상</td>
                        <td>만 50세 이상</td>
                        <td>만 50세 이상</td>
                    </tr>
                </table>
                <table class="table game-schd-table">
                    <tr>
                        <th>공통부분</th>
                    </tr>
                    <tr class="col-type-4">
                        <td>- 연령은 주민등록상의 연도만 적용</br>- 연령은 주민등록상의 연도만 적용</br>- 연령은 주민등록상의 연도만 적용</br>- 연령은 주민등록상의 연도만 적용</br>- 연령은 주민등록상의 연도만 적용</td>
                    </tr>
                </table>
            </div>  
            <div id="game-3" class="content-box">
                <div class="tab-sub-title"><span>진행방식</span></div>
                <div class="border-box">
                    - 예선은 조별리그로 하고</br>
                    - 예선은 조별리그로 하고</br>
                    - 예선은 조별리그로 하고</br>
                    - 예선은 조별리그로 하고</br>
                    - 예선은 조별리그로 하고</br>
                </div>
                <div class="gray-box">
                    예선리그 성적우선순위</br>
                    가)승률</br>
                    가)승률</br>
                    가)승률</br>
                    가)승률</br>
                    가)승률</br>
                    가)승률</br>
                    가)승률</br>
                    가)승률</br>
                    가)승률</br>
                    가)승률</br>
                </div>
                <div class="tab-sub-title"><span>경기순서</span></div>
                <div class="border-box">
                    * 3팀일 경우 : 1-2, 3-(1-2번승자), 3-(1-2번패자)</br>
                    * 4팀일 경우 : 1-4, 2-3, 2-4, 3-4</br>
                </div>
                <div class="grame-seq-content gray-box flexbox flow-col align-center">
                    <div>1코트에 2개조가 들어갈 경우</div>
                    <div class="game-seq-court flexbox align-center just-between">
                        <div class="court flexbox flow-col align-center just-between">
                            <div class="court-img"></div>
                            <div><span>홀수조 1-2, 3-(1-2번승자), 3-(1-2번패자)</span></div>
                        </div>
                        <div class="court flexbox flow-col align-center just-between">
                            <div class="court-img"></div>
                            <div><span>홀수조 1-2, 3-(1-2번승자), 3-(1-2번패자)</span></div>
                        </div>
                    </div>
                </div>
                <div class="tab-sub-title"><span>참가자 준수사항</span></div>
                <div class="border-box">
                    - 부서별 연령기준은 연도만 적용한다.</br>
                    - 부서별 연령기준은 연도만 적용한다.</br>
                    - 부서별 연령기준은 연도만 적용한다.</br>
                    - 부서별 연령기준은 연도만 적용한다.</br>
                    - 부서별 연령기준은 연도만 적용한다.</br>
                    - 부서별 연령기준은 연도만 적용한다.</br>
                    - 부서별 연령기준은 연도만 적용한다.</br>
                    - 부서별 연령기준은 연도만 적용한다.</br>
                    - 부서별 연령기준은 연도만 적용한다.</br>
                </div>
            </div>  
            <div id="game-4" class="content-box">
                <div class="game-helper user-list flexbox align-start just-between">
                    <?php
                    for ($i=0; $i<4; $i++) {
                    ?>
                    <div class="user-box flexbox flow-col align-center just-between">
                        <div class="info flexbox flow-col align-center just-between">
                            <div class="photo"></div>
                            <span class="name" >안정민</span>
                            <span class="belong">분당알파</span>
                        </div>
                        <div class="info-box flexbox flow-col just-center">
                            <span class="phone-number">010-1234-1234</span>
                        </div>
                    </div>
                    <?php } ?>
                </div> 
            </div>  
            <div id="game-5" class="content-box major-index">
                <?php
                    for ($a=0; $a<4; $a++) {
                ?>
                <div class="game-num"><span><?php echo $a+1 ?> GAME</span></div>
                <?php
                    for ($b=0; $b<4; $b++) {
                ?>
                <div class="court-num"><span>- <?php echo $b+1 ?>번 코트 - </span></div>
                <div class="court-list flexbox align-center just-between">
                    <?php
                        for ($i=0; $i<4; $i++) {
                    ?>
                    <div class="court-detail court-img-2 flexbox align-center just-between">
                        <div class="team flexbox flow-col align-start just-around">
                            <?php
                                for ($j=0; $j<2; $j++) {
                            ?>
                            <div class="player flexbox align-end">
                                <span class="name">문재인</span>
                                <span class="team-name">[청와대]</span>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="team flexbox flow-col align-end just-around">
                            <?php
                                for ($j=0; $j<2; $j++) {
                            ?>
                            <div class="player flexbox align-end">
                                <span class="name">김어준</span>
                                <span class="team-name">[흑와대]</span>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <?php } ?>
            </div>  
            <div id="game-6" class="content-box">
                <div class="result-box flexbox align-center just-between"><!-- 우승 -->
                    <?php
                        for ($i=0; $i<4; $i++) {
                    ?>
                    <div class="result-rank-box"><!-- 메이저 -->
                        <div class="result-rank-name"><span>메이저</span></div>
                        <div class="user-list flexbox align-start just-center">
                            <?php
                            for ($j=0; $j<2; $j++) {
                            ?>
                            <div class="user-box flexbox flow-col align-center just-between">
                                <div class="info flexbox flow-col align-center just-between">
                                    <div class="photo"></div>
                                    <span class="name" >안정민</span>
                                    <span class="belong">분당알파</span>
                                </div>
                            </div>
                            <?php } ?>
                        </div> 
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>  
</section>
<div id="popup-register" class="popup flexbox flow-col align-center">
    <div class="popup-back"></div>
    <div class="popup-box">
        <div class="popup-title flexbox align-center just-center">
            <span>참가 신청서</span>
        </div>
        <div class="popup-content flexbox flow-col align-center just-start">
            <div class="game-name flexbox align-center just-center">제 10회 사천단감배 전국동호인테니스대회</div>
            <div class="inner-content">
                <table class="game-info-1">
                    <col align="right" width="70">
                    <col align="left"  width="130">
                    <col align="right" width="70">
                    <col align="left"  width="130">
                    <tr class="df-row">
                        <td class="df-row-label df-text-right">출전종목</td>
                        <td colspan="3">
                            <select>
                                <option value="test">test1</option>
                                <option value="test">test2</option>
                                <option value="test">test3</option>
                                <option value="test">test4</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="df-row">
                        <td class="df-row-label df-text-right">신청자명</td>
                        <td>안정민</td>
                        <td class="df-row-label df-text-right">클럽명</td>
                        <td>강남오픈테니스</td>
                    </tr>
                    <tr class="df-row">
                        <td class="df-row-label df-text-right">휴대폰</td>
                        <td colspan="3">010 - 5249 - 9994</td>
                    </tr>
                </table>
                <div class="game-info-2">
                    <table>
                        <col align="right" width="100">
                        <col align="left">
                        <tr class="df-row">
                            <td class="df-row-label df-text-right">파트너 성명</td>
                            <td colspan="3"></td>
                        </tr>
                        <tr class="df-row">
                            <td class="df-row-label df-text-right">파트너 클럽</td>
                            <td></td>
                        </tr>
                        <tr class="df-row">
                            <td class="df-row-label df-text-right">파트너 휴대폰</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div style="padding: 8px 12px;">
                    <span>메모</span>
                </div>
                <textarea style="width: 100%;" rows="8">
                </textarea>
                <div class="flexbox align-center just-center" style="height: 40px;">
                    <span class="df-label-caution">* 경기 중 안전사고에 대한 책임은 본인에게 있음을 동의합니다.</span>
                    <input type="checkbox" style="margin: 0 0 0 6px;"/>
                </div>
            </div>            
        </div>
        <div class="btns-area flexbox align-center just-center">
            <div class="button btn-1 flexbox just-center">
                <span>결제하기</span>
            </div>
            <div class="button btn-2 flexbox just-center" onclick="closeRegister()">
                <span>취소</span>
            </div>
        </div>
    </div>
</div>
