<!-- 홈 배너 -->
<script src="<?php echo G5_THEME_URL; ?>/pages/schedule/schedule_admin.js"></script>
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/schedule.css">
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/schedule_admin.css">
<section id="game-detail">
    <div class="container flexbox flow-col align-center">
        <div class="title-box flexbox flow-col align-center">
            <div class="game-title">
                <span>대회이름</span>
                <input type="text"/>
            </div>
            <div class="part-title">
                <span>서브타이틀</span>
                <input type="text"/>
            </div>
            <div class="game-image">
                <span>대회리스트 배경 이미지</span>
                <input type="file"/>
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
                        <input type="text" style="width:225px;"/>
                    </div> 
                </div>
            </div>
            <div class="game-right">
                <div class="game-info flexbox flow-col just-between">
                    <div class="game-info-row"><span class="row-label">일시</span><input type="text" /></div>
                    <div class="game-info-row"><span class="row-label">주최</span><input type="text" /></div>
                    <div class="game-info-row"><span class="row-label">주관</span><input type="text" /></div>
                    <div class="game-info-row"><span class="row-label">후원</span><input type="text" /></div>
                    <div class="game-info-row"><span class="row-label">협찬</span><input type="text" /></div>
                    <div class="game-info-row"><span class="row-label">참가상품</span><input type="text" /></div>
                    <div class="game-info-row flexbox align-center">
                        <span class="row-label">참가비</span>
                        <span style="font-weight:bold;">팀당</span>
                        <input type="text" class="input_sm" style="margin: 0 4px;"/>
                        <span style="font-weight:bold;">원</span>
                        <input type="checkbox" style="margin: 0 0 0 10px;"/>
                        <span style="margin-left: 3px;">(유소년 육성기금 2,000원 포함)</span>
                    </div>
                    <div class="game-info-row"><span class="row-label">참가팀</span><input type="text" class="input_sm" /></div>
                </div>
                <div class="pre-caution">
                    <div class="pre-caution-label">
                        <span>* 참가신청시 주의사항</span>
                    </div>
                    <div class="pre-caution-descript">
                        <textarea rows="6" style="width:100%; height:100%;"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="game-etc">
    <div class="container flexbox flow-col align-center">
        <div class="game-tab-content flexbox align-center just-center">
            <div id="game-1" class="active content-box flexbox flow-col align-center">
                <div class="flexbox flow-col align-center">
                    <div class="game-tab-title">
                        대회 우승상품
                    </div>
                    <div class="reward-list flexbox align-end just-start">
                        <div class="reward-box flexbox flow-col align-center">
                            <div class="reward-img-1"></div>
                            <div class="reward-name">우승</div>
                            <div class="reward-gift">상패 및 100만원</div>
                        </div>
                        <div class="reward-box flexbox flow-col align-center">
                            <div class="reward-img-1"></div>
                            <div class="reward-name">우승</div>
                            <div class="reward-gift">상패 및 100만원</div>
                        </div>
                        <div class="reward-box flexbox flow-col align-center">
                            <div class="reward-img-1"></div>
                            <div class="reward-name">우승</div>
                            <div class="reward-gift">상패 및 100만원</div>
                        </div>
                        <div style="width:2px; margin-left: 70px;" class="flexbox just-center">
                            <div class="div-line-v" style="height:73px; margin-bottom:44px;"></div>
                        </div>
                        <div class="reward-box flexbox flow-col align-center">
                            <div class="reward-img-1"></div>
                            <div class="reward-name">우승</div>
                            <div class="reward-gift">상패 및 100만원</div>
                        </div>
                    </div>
                    <div class="reward-desc">
                        <span>* 각 리그별 70팀 미만시 시상금이 조정될 수 있습니다.</span>
                    </div>
                </div>  
            </div>  
            <div id="game-2" class="active content-box">
                <div class="game-tab-title">
                    대회일정 및 참가허용기준
                </div>
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
            <div id="game-3" class="active content-box">
                <div class="game-tab-title">
                    대회진행
                </div>
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
            <div id="game-4" class="active content-box">
                <div class="game-tab-title">
                    대회문의
                </div>
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
        </div>
    </div>  
</section>
