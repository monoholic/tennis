<!-- 홈 배너 -->
<?php
    include_once(G5_PLUGIN_PATH.'/jquery-ui/datepicker.php');
?>
<script type="text/javascript">
    //datepicker ie 적용
    jQuery.browser = {};
    (function () {
        jQuery.browser.msie = false;
        jQuery.browser.version = 0;
        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
            jQuery.browser.msie = true;
            jQuery.browser.version = RegExp.$1;
        }
    })();


    $(function(){

        //datepicker
        $("#date_wr1, #date_wr2, #date_wr3, #date_wr4, #date_wr5, #date_wr6, #date_wr7").datepicker({ changeMonth: true, changeYear: true, dateFormat: "yy-mm-dd", showButtonPanel: true, yearRange: "c-99:c+99", minDate: "+1d;" });
        $('.timepicker').timepicki();
        
        //각 등급별 체크박스 클릭시 제어
        $('#check_level1, #check_level2, #check_level3, #check_level4').on('change', function() { 
            // From the other examples
            var Name = this.name;
            Name = Name.split("_");

            if (this.checked) {
                $("input[name=" + Name[0] + "_schedule]").removeAttr("disabled");
                $("input[name=" + Name[0] + "_schedule_time]").removeAttr("disabled");
                $("input[name=" + Name[0] + "_court_chk]").removeAttr("disabled");
                $("input[name=" + Name[0] + "_age]").removeAttr("disabled");
            } else {
                $("input[name=" + Name[0] + "_schedule]").attr("disabled", "disabled");
                $("input[name=" + Name[0] + "_schedule_time]").attr("disabled", "disabled");
                $("input[name=" + Name[0] + "_court_chk]").attr("disabled", "disabled");
                $("input[name=" + Name[0] + "_court_chk]").attr("checked", false);
                $("input[name=" + Name[0] + "_court]").attr("disabled", "disabled");
                $("input[name=" + Name[0] + "_age]").attr("disabled", "disabled");

                $("input[name=" + Name[0] + "_schedule]").val("");
                $("input[name=" + Name[0] + "_schedule_time]").val("");
                $("input[name=" + Name[0] + "_court]").val("");
                $("input[name=" + Name[0] + "_age]").val("");
            }
        });
        $('#major_court_chk, #tour_court_chk, #challenger_court_chk, #circuit_court_chk').on('change', function() { 
            // From the other examples
            var Name = this.name;
            Name = Name.split("_");

            if (this.checked) {
                $("input[name=" + Name[0] + "_court]").removeAttr("disabled");
            } else {
                $("input[name=" + Name[0] + "_court]").attr("disabled", "disabled");
            }
        });

        //파일선택시 상단 div 에 이미지 미리보기
        $(".competition_helper").on('change',function(){
            readURL(this);
        });
    });

    //파일선택시 상단 div 에 이미지 미리보기
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#helper_photo'+input.name.charAt(input.name.length-1)).css('background-image', 'url(\"' + e.target.result + '\")');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function addHelper(){

        var content = "";
        for(var i = 4; i<5; i++){
            content += "<div class=\"user-box flexbox flow-col align-center just-between\">";
            content += "<div class=\"info flexbox flow-col align-center just-between\">";
            content += "<div class=\"photo\" id=\"helper_photo"+ i +"></div>";
            content += "<input type=\"file\" class=\"helper_img\" id=\"helper_img"+ i +" name=\"helper_img"+ i +">";
            content += "<span class=\"name\"><span>이름</span><input type=\"text\" class=\"input_sm\" id=\"helper_name"+ i + "></span>";
            content += "<span class=\"belong\"><span>부서</span><input type=\"text\" class=\"input_sm\" id=\"helper_belong" + i + "></span>";
            content += "</div>";

            content += "<div class=\"info-box flexbox flow-col just-center\">";
            content += "<span class=\"phone-number\">";
            content += "<input type=\"number\" maxlength=\"3\" name=\"helper_phonef" + i + ">";
            content += "- <input type=\"number\" maxlength=\"4\" name=\"helper_phones" + i + ">";
            content += "- <input type=\"number\" maxlength=\"4\" name=\"helper_phonet" + i +">";
        }
        
        $("#game-helper-box").html(content);
        
    }

    function onlyNumber(event){
        event = event || window.event;
        var keyID = (event.which) ? event.which : event.keyCode;
        if ( (keyID >= 48 && keyID <= 57) || (keyID >= 96 && keyID <= 105) || keyID == 8 || keyID == 46 || keyID == 37 || keyID == 39 ) 
            return;
        else
            return false;
    }
    function removeChar(event) {
        event = event || window.event;
        var keyID = (event.which) ? event.which : event.keyCode;
        if ( keyID == 8 || keyID == 46 || keyID == 37 || keyID == 39 ) 
            return;
        else
            event.target.value = event.target.value.replace(/[^0-9]/g, "");
    }

    function addGame(){
        $("#game-form").submit();
    }

    function cancelGame(){
        location.href = "./schedule_list.php";
    }
</script>
<script src="<?php echo G5_THEME_URL; ?>/pages/schedule/schedule_admin.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>
<script src="<?php echo G5_THEME_JS_URL; ?>/timepicki.js"></script>
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/timepicki.css">
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/schedule.css">
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/schedule_admin.css">
<form name="game-form" id="game-form" method="post" action="<?php echo G5_COMPETITION_DIR; ?>/schedule/schedule_admin_regist.php" enctype="multipart/form-data">
<section id="game-detail">
    <div class="container flexbox flow-col align-center">
        <div class="title-box flexbox flow-col align-center">

            <div class="game-deadline flexbox align-center">
                <span>접수마감일</span>
                <input type="text" id="date_wr6" name="competition_deadline" class="m-left-10" value=""/> 
                <input type="text" id="competition_deadline_time" name="competition_deadline_time" class="timepicker m-left-10"  value=""/>
            </div>
            <div class="game-title">
                <span>대회이름</span>
                <input type="text" id="competition_title" name="competition_title" class="m-left-10" value=""/>
            </div>
            <div class="part-title">
                <span>서브타이틀</span>
                <input type="text" id="competition_subtitle" name="competition_subtitle" class="m-left-10" value=""/>
            </div>
            <div class="game-image">
                <span>대회리스트 배경 이미지</span>
                <input type="file" name="competition_bg" id="competition_bg" class="m-left-10">
                <!-- <input type="file" name="competition_bg" id="competition_bg" class="frm_input"> -->
            </div>
        </div>
        <div class="game-content flexbox just-between">
            <div class="game-left">
                <div class="complex-map" id="map"></div>
                <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=2f17c15d3dc2614a3da80008b5b1d91a&libraries=services"></script>
                <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
                <script>
                    var container = document.getElementById('map');
                    var options = {
                        center: new daum.maps.LatLng(<?php echo 37.5662952 ?>, <?php echo 126.9779451 ?>),
                        level: 3
                    };

                    var map = new daum.maps.Map(container, options);
                    var geocoder = new daum.maps.services.Geocoder();

                    function setZoomable(zoomable) {
                        // 마우스 휠로 지도 확대,축소 가능여부를 설정합니다
                        map.setZoomable(zoomable);    
                    }

                    setZoomable(false);

                    function mapPopUp(){
                        new daum.Postcode({
                            oncomplete: function(data) {
                                getCoder(data);
                            }
                        }).open();
                    }
                    
                    function getCoder(data){
                        // 주소로 좌표를 검색합니다
                        geocoder.addressSearch(data.address, function(result, status) {

                        // 정상적으로 검색이 완료됐으면 
                        if (status === daum.maps.services.Status.OK) {

                            var coords = new daum.maps.LatLng(result[0].y, result[0].x);
                            
                            // 마커가 표시될 위치입니다 
                            var markerPosition  = new daum.maps.LatLng(result[0].y, result[0].x); 

                            // 마커를 생성합니다
                            var marker = new daum.maps.Marker({
                                position: markerPosition
                            });

                            // 지도의 중심을 결과값으로 받은 위치로 이동시킵니다
                            map.setCenter(coords);
                            // 마커가 지도 위에 표시되도록 설정합니다
                            marker.setMap(map);
                            
                            $("#competition_address").val(data.address);
                            $("#competition_latitude").val(result[0].y);
                            $("#competition_longitude").val(result[0].x);
                        } 
                        });    
                    }
                </script>
                <div class="complex-address flexbox align-center just-center">
                    <div class="addr-img">
                    </div>
                    <div>
                        <input type="text" id="competition_address" name="competition_address" style="width:225px;" readOnly="readOnly"/>
                        <input type="hidden" id="competition_latitude" name="competition_latitude" readOnly="readOnly" value=""/>
                        <input type="hidden" id="competition_longitude" name="competition_longitude" readOnly="readOnly" value=""/>
                        <input type="button" onClick="javascript:mapPopUp();" value="주소검색">
                    </div> 
                </div>
            </div>
            <div class="game-right">
                <div class="game-info flexbox flow-col just-between">
                    <div class="df-row">
                        <span class="df-row-label">일시</span>
                        <input type="text" id="date_wr1" class="frm_input" name="competition_schedule_from" style="width:80px;"/>
                        <input type="text" id="date_wr7" class="frm_input" name="competition_schedule_to" style="width:80px;"/>
                    </div>
                    <div class="df-row"><span class="df-row-label">주최</span><input type="text" class="frm_input" id="competition_host" name="competition_host"/></div>
                    <div class="df-row"><span class="df-row-label">주관</span><input type="text" class="frm_input" id="competition_subj" name="competition_subj"/></div>
                    <div class="df-row"><span class="df-row-label">후원</span><input type="text" class="frm_input" id="competition_support" name="competition_support"/></div>
                    <div class="df-row"><span class="df-row-label">협찬</span><input type="text" class="frm_input" id="competition_sponsor" name="competition_sponsor"/></div>
                    <div class="df-row"><span class="df-row-label">참가상품</span><input type="text" class="frm_input" style="margin: 0 1px;" id="competition_goods" name="competition_goods"/></div>
                    <div class="df-row flexbox align-center">
                        <span class="df-row-label">참가비</span>
                        <span style="font-weight:bold;">팀당</span>
                        <input type="text" class="input_sm" style="margin: 0 4px;" id="competition_fee" name="competition_fee" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;'/>
                        <span style="font-weight:bold;">원</span>
                        <input type="checkbox" style="margin: 0 0 0 5px;" id="competition_youth_fund" name="competition_youth_fund"/>
                        <span style="margin-left: 3px;">(유소년 육성기금 2,000원 포함)</span>
                    </div>
                    <div class="df-row"><span class="df-row-label">참가팀</span><input type="text" class="input_sm" id="competition_teamcnt" name="competition_teamcnt" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;'/></div>
                </div>
                <div class="pre-caution">
                    <div class="pre-caution-label">
                        <span>* 참가신청시 주의사항</span>
                    </div>
                    <div class="pre-caution-descript">
                        <textarea rows="6" style="width: 100%; resize: none;" id="competition_caution" name="competition_caution"></textarea>
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
                            <div class="reward-img reward-img-1"></div>
                            <div class="reward-name">우승</div>
                            <div class="reward-gift"><input type="text" class="w-100" id="goods_first" name="goods_first"/></div>
                        </div>
                        <div class="reward-box flexbox flow-col align-center">
                            <div class="reward-img reward-img-2"></div>
                            <div class="reward-name">준우승</div>
                            <div class="reward-gift"><input type="text" class="w-100" id="goods_second" name="goods_second"/></div>
                        </div>
                        <div class="reward-box flexbox flow-col align-center">
                            <div class="reward-img reward-img-3"></div>
                            <div class="reward-name">4강</div>
                            <div class="reward-gift"><input type="text" class="w-100" id="goods_third" name="goods_third"/></div>
                        </div>
                        <div style="width:2px; margin-left: 70px;" class="flexbox just-center">
                            <div class="div-line-v" style="height:73px; margin-bottom:44px;"></div>
                        </div>
                        <div class="reward-box flexbox flow-col align-center">
                            <div class="reward-img reward-img-4"></div>
                            <div class="reward-name">8강</div>
                            <div class="reward-gift"><input type="text" class="w-100" id="goods_quater" name="goods_quater"/></div>
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
                        <th><input type="checkbox" id="check_level1" name="major_chk">메이져</th>
                        <th><input type="checkbox" id="check_level2" name="tour_chk">투어</th>
                        <th><input type="checkbox" id="check_level3" name="challenger_chk">챌린져</th>
                        <th><input type="checkbox" id="check_level4" name="circuit_chk">서킷</th>
                    </tr>
                    <tr class="col-type-1">
                        <td>
                            <div class="flexbox flow-col align-center just-center">
                                <span class="flexbox align-center just-center">
                                    <input type="text" id="date_wr2" class="frm_input w-90" name="major_schedule" disabled="disabled"/><br/>
                                    <input name="major_schedule_time" id="timepicker" class="timepicker w-90 m-left-10" type="text" disabled="disabled"/>
                                </span>
                                <div class="div-line-h" style="width: 13px; margin: 8px 0;"></div>
                                <span><input type="checkbox" id="major_court_chk" name="major_court_chk" disabled="disabled">코트 추후 안내 예정</span>
                                <span class="m-top-10"><input type="text" id="major_court" class="w-190" name="major_court" disabled="disabled"></span>
                            </div>
                        </td>
                        <td>
                            <div class="flexbox flow-col align-center just-center">
                                <span class="flexbox align-center just-center">
                                    <input type="text" id="date_wr3" class="frm_input w-90" name="tour_schedule" disabled="disabled"/><br/>
                                    <input name="tour_schedule_time" id="timepicker" class="timepicker w-90 m-left-10" type="text" disabled="disabled"/>
                                </span>
                                <div class="div-line-h" style="width: 13px; margin: 8px 0;"></div>
                                <span><input type="checkbox" id="tour_court_chk" name="tour_court_chk" disabled="disabled">코트 추후 안내 예정</span>
                                <span class="m-top-10"><input type="text" id="tour_court" class="w-190" name="tour_court" disabled="disabled"></span>
                            </div>
                        </td>
                        <td>
                            <div class="flexbox flow-col align-center just-center">
                                <span class="flexbox align-center just-center">
                                    <input type="text" id="date_wr4" class="frm_input w-90" name="challenger_schedule" disabled="disabled"/><br/>
                                    <input name="challenger_schedule_time" id="timepicker" class="timepicker w-90 m-left-10" type="text" disabled="disabled"/>
                                </span>
                                <div class="div-line-h" style="width: 13px; margin: 8px 0;"></div>
                                <span><input type="checkbox" id="challenger_court_chk" name="challenger_court_chk" disabled="disabled">코트 추후 안내 예정</span>
                                <span class="m-top-10"><input type="text" id="challenger_court" class="w-190" name="challenger_court" disabled="disabled"></span>
                            </div>
                        </td>
                        <td>
                            <div class="flexbox flow-col align-center just-center">
                                <span class="flexbox align-center just-center">
                                    <input type="text" id="date_wr5" class="frm_input w-90" name="circuit_schedule" disabled="disabled"/><br/>
                                    <input name="circuit_schedule_time" id="timepicker" class="timepicker w-90 m-left-10" type="text" disabled="disabled"/>
                                </span>
                                <div class="div-line-h" style="width: 13px; margin: 8px 0;"></div>
                                <span><input type="checkbox" id="circuit_court_chk" name="circuit_court_chk" disabled="disabled">코트 추후 안내 예정</span>
                                <span class="m-top-10"><input type="text" id="circuit_court" class="w-190" name="circuit_court" disabled="disabled"></span>
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
                        <td>만 <input type="number" name="major_age" min="5" max="120" disabled="disabled" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;'> 세 이상</td>
                        <td>만 <input type="number" name="tour_age" min="5" max="120" disabled="disabled" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;'>세 이상</td>
                        <td>만 <input type="number" name="challenger_age" min="5" max="120" disabled="disabled" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;'>세 이상</td>
                        <td>만 <input type="number" name="circuit_age" min="5" max="120" disabled="disabled" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;'>세 이상</td>
                    </tr>
                </table>
                <table class="table game-schd-table">
                    <tr>
                        <th>공통부분</th>
                    </tr>
                    <tr class="col-type-4">
                        <td>
                            <textarea name="common_standard" rows="10" style="width: 100%; resize: none;"></textarea>
                        </td>
                    </tr>
                </table>
            </div>  
            <div id="game-3" class="active content-box">
                <div class="game-tab-title">
                    대회진행
                </div>
                <div class="tab-sub-title"><span>진행방식</span></div>
                <div class="border-box">
                    <textarea rows="6" style="width: 100%; resize: none;" id="competition_proceed" name="competition_proceed"></textarea>
                </div>
                <div class="gray-box">
                    예선리그 성적우선순위</br>
                    <textarea rows="6" style="width: 100%; resize: none;" id="competition_priority1" name="competition_priority1"></textarea>
                </div>
                <div class="tab-sub-title"><span>경기순서</span></div>
                <div class="border-box">
                    * 3팀일 경우 : 1-2, 3-(1-2번승자), 3-(1-2번패자)<input type="text" id="competition_priority2" name="competition_priority2" class="m-left-10"></br>
                    * 4팀일 경우 : 1-4, 2-3, 2-4, 3-4<input type="text" id="competition_priority3" name="competition_priority3" class="m-left-10"></br>
                </div>
                <div class="grame-seq-content gray-box flexbox flow-col align-center">
                    <div>1코트에 2개조가 들어갈 경우</div>
                    <input type="text" id="competition_priority4" name="competition_priority4" class="m-top-10">
                    <div class="game-seq-court flexbox align-center just-between">
                        <div class="court flexbox flow-col align-center just-between">
                            <div class="court-img"></div>
                            <div class="m-top-10"><span>홀수조 1-2, 3-(1-2번승자), 3-(1-2번패자)</span></div>
                            <input type="text" id="competition_priority5" name="competition_priority5" class="m-top-10">
                        </div>
                        <div class="court flexbox flow-col align-center just-between">
                            <div class="court-img"></div>
                            <div class="m-top-10"><span>홀수조 1-2, 3-(1-2번승자), 3-(1-2번패자)</span></div>
                            <input type="text" id="competition_priority6" name="competition_priority6" class="m-top-10">
                        </div>
                    </div>
                </div>
                <div class="tab-sub-title"><span>참가자 준수사항</span></div>
                <div class="border-box">
                    <textarea name="participant_caution" rows="10" style="width: 100%; resize: none;"></textarea>
                </div>
            </div>  
            <div id="game-4" class="active content-box">
                <div class="game-tab-title">
                    대회문의
                </div>
                <div class="game-helper user-list flexbox align-start just-between" id="game-helper-box">
                    <?php
                    for ($i=0; $i<4; $i++) {
                    ?>
                    <div class="user-box flexbox flow-col align-center just-between">
                        <div class="info flexbox flow-col align-center just-between">
                            <div class="photo" id="helper_photo<?php echo $i?>"></div>
                            <input type="file" class="competition_helper" id="helper_img<?php echo $i?>" name="helper_img<?php echo $i?>" style="width: 150px; margin-top: 7px">
                            <span class="name">
                            <span style="font-size: 12px; font-weight: normal; color: initial;">이름</span>
                            <input type="text" name="helper_name<?php echo $i?>" id="helper_name<?php echo $i?>" placeholder="" style="width: 85px;"></span>
                            <span class="belong">
                            <span style="font-size: 12px; font-weight: normal; color: initial;">부서</span>
                            <input type="text" name="helper_belong<?php echo $i?>" id="helper_belong<?php echo $i?>" placeholder="" style="width: 85px;"></span>
                            <span class="phone-number" style="margin-top: 7px;">
                                <input type="number" class="w-45" maxlength="3" name="helper_phonef<?php echo $i?>" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;'> -
                                <input type="number" class="w-45" maxlength="4" name="helper_phones<?php echo $i?>" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;'> -
                                <input type="number" class="w-45" maxlength="4" name="helper_phonet<?php echo $i?>" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;'>
                            </span>
                        </div>
                    </div>
                    <?php } ?>
                    <input type="hidden" value="4" name="helper_cnt">
                </div> 
            </div>  
        </div>
    </div>  
    <div class="btns-area flexbox align-center just-center" style="margin: 115px;">
        <div class="button btn-1 flexbox just-center" onclick="addGame()">
            <span>대회등록</span>
        </div>
        <div class="button btn-2 flexbox just-center" onclick="cancelGame()">
            <span>취소</span>
        </div>
    </div>
</section>
</form>
