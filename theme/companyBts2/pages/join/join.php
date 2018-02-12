<script src="<?php echo G5_THEME_URL; ?>/pages/join/join.js"></script>
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/join.css">
<div class="flexbox flow-col align-center">
    <section id="join-top" class="flexbox flow-col align-center">
        <div class="flexbox flow-col align-center" style="margin-bottom:40px;">
            <span style="font-size: 66px;">SIGN UP</span>
            <span>대회에 참가하기 위해서 회원가입이 필요합니다.</span>
        </div>
        <ul class="underline-tab">
            <li class="tab-step tab-step-1 active"><a>약관동의</a></li>
            <li class="tab-step tab-step-2"><a>개인정보입력</a></li>
            <li class="tab-step tab-step-3"><a>가입완료</a></li>
        </ul>
    </section>
    <section id="join-step-1" class="join-step active">
        <div class="join-rule-content">
            <div style=" color: #929292; font-weight: bold; margin: 0 0 15px 20px">
                * 회원가입 약관
            </div>
            <div class="join-rule-box">
                <div class="join-rule-text"></div>
                <div class="flexbox align-center just-end" style="margin-top:15px; font-weight: bold;">
                    <input type="radio" name="" value="true" style="margin: 0 8px 0 10px;"/>동의함
                    <input type="radio" name="" value="false" style="margin: 0 8px 0 10px;"/>동의하지않음      
                </div>
            </div>
        <div>
        <div class="join-rule-content">
            <div style=" color: #929292; font-weight: bold; margin: 0 0 15px 20px">
                * 개인정보 처리방침 안내
            </div>
            <div class="join-rule-box">
                <div class="join-rule-text"></div>
                <div class="flexbox align-center just-end" style="margin-top:15px; font-weight: bold;">
                    <input type="radio" name="" value="true" style="margin: 0 8px 0 10px;"/>동의함
                    <input type="radio" name="" value="false" style="margin: 0 8px 0 10px;"/>동의하지않음      
                </div>
            </div>
        <div>        
        <div class="btns-area flexbox align-center just-center" style="margin: 43px 0 45px 0;">
            <div class="button btn-1 flexbox just-center" onclick="goNextStep()">
                <span>다음</span>
            </div>
            <div class="button btn-2 flexbox just-center">
                <span>취소</span>
            </div>
        </div>
    </section>
    <section id="join-step-2" class="join-step">
        <div class="required-box">
            <div>* 필수 입력사항</div>
            <table class="join-table">
                <col align="right" width="152">
                <col>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">아이디</td>
                    <td class="join-tb-input flexbox align-center">
                        <input type="text" name="" class="w-150"/>            
                        <div class="button sm-fit-btn flexbox just-center">
                            <span>확인</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">비밀번호</td>
                    <td class="join-tb-input flexbox align-center">
                        <input type="text" name="" class="w-150"/>            
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">비밀번호 확인</td>
                    <td class="join-tb-input flexbox align-center">
                        <input type="text" name="" class="w-150"/>            
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">이름</td>
                    <td class="join-tb-input flexbox align-center">
                        <input type="text" name="" class="w-150"/>            
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">성별</td>
                    <td class="join-tb-input flexbox align-center">
                        <div class="button sm-fit-btn flexbox just-center" style="margin: 0px;">
                            <span>남자</span>
                        </div>          
                        <div class="button sm-fit-btn flexbox just-center">
                            <span>여자</span>
                        </div>          
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">생년월일</td>
                    <td class="join-tb-input flexbox align-center">
                        <select style="margin: 0 4px 0 0;">
                            <?php
                                $to_year = date("Y");
                                $to_month = date("m");
                                $to_day = date("d");
                                $start_year = $to_year - 100;
                                for ($i=$start_year; $i<=$to_year; $i++) {
                            ?>
                                <option value="<?php echo $i ?>" <?php if($i === 1985) echo "selected" ?>>
                                    <?php echo $i ?>
                                </option>
                            <?php } ?>
                        </select>            
                        년
                        <select style="margin: 0 4px 0 5px;">
                            <?php
                                for ($i=1; $i<=12; $i++) {
                            ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php } ?>
                        </select>    
                        월
                        <select style="margin: 0 4px 0 5px;">
                            <?php
                                // month 선택에 따른 날짜 바뀜이 필요
                                for ($i=1; $i<=31; $i++) {
                            ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php } ?>
                        </select>           
                        일
                        <input type="radio" name="" value="true" style="margin: 0 0 0 10px;"/>양력
                        <input type="radio" name="" value="false" style="margin: 0 0 0 10px;"/>음력      
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">휴대전화</td>
                    <td class="join-tb-input flexbox align-center">
                        <input type="text" name="" class="w-60"/>
                        <span style="margin: 0 5px 0 5px;">-</span>
                        <input type="text" name="" class="w-60"/>
                        <span style="margin: 0 5px 0 5px;">-</span>
                        <input type="text" name="" class="w-60"/>              
                        <div class="button sm-fit-btn flexbox just-center">
                            <span>본인인증</span>
                        </div>        
                    </td>
                </tr>
                <tr class="sub">
                    <td class="join-tb-label df-row-label df-text-right"></td>
                    <td class="join-tb-input flexbox align-start">
                        <input type="text" name="" class="w-134"/>              
                        <div class="button sm-fit-btn flexbox just-center">
                            <span>확인</span>
                        </div>                
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">주소</td>
                    <td class="join-tb-input flexbox align-center">
                        <input type="text" name="" class="w-60"/>           
                        <div class="button sm-fit-btn flexbox just-center">
                            <span>주소검색</span>
                        </div>    
                    </td>
                </tr>
                <tr class="sub">
                    <td class="join-tb-label df-row-label df-text-right"></td>
                    <td class="join-tb-input flexbox align-start">    
                        <input type="text" name="" class="w-365"/>    
                    </td>
                </tr>
                <tr class="sub">
                    <td class="join-tb-label df-row-label df-text-right"></td>
                    <td class="join-tb-input flexbox align-start">    
                        <input type="text" name="" class="w-365"/>    
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">클럽</td>
                    <td class="join-tb-input flexbox align-center">
                        <input type="checkbox" name="" style="margin: 0 6px 0 0 ;"/> 
                        <input type="text" name="" class="w-150"/>    
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right"></td>
                    <td class="join-tb-input flexbox align-center">
                        <input type="checkbox" name="" style="margin: 0 6px 0 0;"/> 
                        <input type="text" name="" class="w-150"/>    
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right"></td>
                    <td class="join-tb-input flexbox align-center">
                        <input type="checkbox" name="" style="margin: 0 6px 0 0;"/>
                        <input type="text" name="" class="w-150"/>    
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right"></td>
                    <td class="join-tb-input flexbox align-center">
                        <div style="padding-left:20px;">
                            * 기본클럽을 선택해주세요</br>
                            미 체크시 첫번째 클럽으로 기본설정 됩니다. 
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">테니스 레벨</td>
                    <td class="join-tb-input flexbox align-center">
                        <div class="button md-btn flexbox just-center">
                            <span>레벨 선택</span>
                        </div>             
                    </td>
                </tr>
            </table>
        </div>
        <div class="extra-box">
            <div>* 필수 입력사항</div>
            <table class="join-table">
                <col align="right" width="152">
                <col>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">테니스 구력</td>
                    <td class="join-tb-input flexbox align-center">
                        <div class="button md-btn flexbox just-center">
                            <span>선택</span>
                        </div>                   
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">플레이 스타일</td>
                    <td class="join-tb-input flexbox align-center">
                        <div class="button md-btn flexbox just-center">
                            <span>선택</span>
                        </div>                   
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">주무기</td>
                    <td class="join-tb-input flexbox align-center">
                        <div class="button md-btn flexbox just-center">
                            <span>선택</span>
                        </div>                   
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">사용라켓</td>
                    <td class="join-tb-input flexbox align-center">
                        <div class="button md-btn flexbox just-center">
                            <span>선택</span>
                        </div>                   
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">즐겨입는 의류</td>
                    <td class="join-tb-input flexbox align-center">
                        <div class="button md-btn flexbox just-center">
                            <span>선택</span>
                        </div>                   
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">즐겨신는 신발</td>
                    <td class="join-tb-input flexbox align-center">
                        <div class="button md-btn flexbox just-center">
                            <span>선택</span>
                        </div>                   
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">프로필 사진 올리기</td>
                    <td class="join-tb-input flexbox align-center">
                        <input type="file"></span>
                    </td>
                </tr>
                <tr class="big-sub">
                    <td class="join-tb-label df-row-label df-text-right"></td>
                    <td class="join-tb-input flexbox flow-col" style="padding-bottom: 22px;">
                        <div class="flexbox align-center" style="margin-bottom: 14px;">
                            <div style="width: 130px; height: 150px; background: blue;"></div>
                            <div style="width: 130px; height: 150px; background: blue; margin-left: 20px;"></div>
                        </div>
                        <span>* 정면사진으로 업로드 해주시기 바랍니다.</span>
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">메일서비스</td>
                    <td class="join-tb-input flexbox align-center">
                        <input type="checkbox" name="" style="margin: 0 6px 0 0;"/>                  
                        <span>다양한 테니스대회정보를 메일로 받겠습니다.</span>
                    </td>
                </tr>
                <tr>
                    <td class="join-tb-label df-row-label df-text-right">SMS 수신여부</td>
                    <td class="join-tb-input flexbox align-center">
                        <input type="checkbox" name="" style="margin: 0 6px 0 0;"/>                  
                        <span>다양한 테니스대회정보를 SMS문자로 받겠습니다.</span>
                    </td>
                </tr>
            </table>
        </div>

        <div class="btns-area flexbox align-center just-center" style="margin: 43px 0 45px 0;">
            <div class="button btn-1 flexbox just-center" onclick="goNextStep()">
                <span>다음</span>
            </div>
            <div class="button btn-2 flexbox just-center">
                <span>취소</span>
            </div>
        </div>
    </section>

    <section id="join-step-3" class="join-step">
        <div class="flexbox flow-col align-center">
            <div class="join-result-title">
                회원가입이 완료되었습니다.
            </div>
            <div class="join-result flexbox flow-col align-center just-between">
                <div><span class="join-result-name">홍길동님</span>, 회원가입을 축하합니다.</div>
                <div>테니스라인의 새로운 아이디는 <span class="join-result-id">boboss</span>입니다.</div>
                <div>로그인 후 다양한 서비스를 이용하실 수 있습니다.</div>
            </div>
        </div>
    </section>
</div>