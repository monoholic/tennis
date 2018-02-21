<?php
include_once('../../../../common.php');

$competition_title          = $_POST['competition_title'];
$competition_subtitle       = $_POST['competition_subtitle'];
$competition_schedule_from  = $_POST['competition_schedule_from'];
$competition_schedule_to    = $_POST['competition_schedule_to'];
$competition_address        = $_POST['competition_address'];
$competition_host           = $_POST['competition_host'];
$competition_subj           = $_POST['competition_subj'];
$competition_support        = $_POST['competition_support'];
$competition_sponsor        = $_POST['competition_sponsor'];
$competition_goods          = $_POST['competition_goods'];
$competition_fee            = $_POST['competition_fee'];
$competition_youth_fund     = $_POST['competition_youth_fund'];
$competition_teamcnt        = $_POST['competition_teamcnt'];
$competition_caution        = $_POST['competition_caution'];
$participant_caution        = $_POST['participant_caution'];
$competition_deadline       = $_POST['competition_deadline'];
$competition_deadline_time  = $_POST['competition_deadline_time'];
$major_schedule             = $_POST['major_schedule'];
$major_schedule_time        = $_POST['major_schedule_time'];
$tour_schedule              = $_POST['tour_schedule'];
$tour_schedule_time         = $_POST['tour_schedule_time'];
$challenger_schedule        = $_POST['challenger_schedule'];
$challenger_schedule_time   = $_POST['challenger_schedule_time'];
$circuit_schedule           = $_POST['circuit_schedule'];
$circuit_schedule_time      = $_POST['circuit_schedule_time'];
$major_court                = $_POST['major_court'];
$tour_court                 = $_POST['tour_court'];
$challenger_court           = $_POST['challenger_court'];
$circuit_court              = $_POST['circuit_court'];
$major_age                  = $_POST['major_age'];
$tour_age                   = $_POST['tour_age'];
$challenger_age             = $_POST['challenger_age'];
$circuit_age                = $_POST['circuit_age'];
$common_standard            = $_POST['common_standard'];
$competition_proceed        = $_POST['competition_proceed'];
$competition_priority1      = $_POST['competition_priority1'];
$competition_priority2      = $_POST['competition_priority2'];
$competition_priority3      = $_POST['competition_priority3'];
$competition_priority4      = $_POST['competition_priority4'];
$competition_priority5      = $_POST['competition_priority5'];
$competition_priority6      = $_POST['competition_priority6'];
$goods_first                = $_POST['goods_first'];
$goods_second               = $_POST['goods_second'];
$goods_third                = $_POST['goods_third'];
$goods_quater               = $_POST['goods_quater'];
$helper_cnt                 = $_POST['helper_cnt'];

//competition max 값 가져와서 comp_id 결정
$sql = "SELECT ifnull(max(competition_id),0)+1 AS comp_id FROM $g5[competition_table]";
$comp = sql_fetch($sql);
$comp_id = $comp['comp_id'];

// 아이콘 업로드
if (is_uploaded_file($_FILES['competition_bg']['tmp_name'])) {
    if (!preg_match("/(\.jpg)$/i", $_FILES['competition_bg']['name'])) {
        alert($_FILES['competition_bg']['name'] . '은(는) jpg 파일이 아닙니다.');
    }

    if (preg_match("/(\.jpg)$/i", $_FILES['competition_bg']['name'])) {
        @mkdir(G5_DATA_PATH.'/competition_img/competition_bg/'.$comp_id, G5_DIR_PERMISSION);
        @chmod(G5_DATA_PATH.'/competition_img/competition_bg/'.$comp_id, G5_DIR_PERMISSION);

        $dest_path = G5_DATA_PATH.'/competition_img/competition_bg/'.$comp_id.'/'.$comp_id.'.jpg';

        move_uploaded_file($_FILES['competition_bg']['tmp_name'], $dest_path);
        chmod($dest_path, G5_FILE_PERMISSION);
    }
}

// 아이콘 업로드
for ($i=0; $i<$helper_cnt; $i++) {
    if (is_uploaded_file($_FILES['helper_img'.$i]['tmp_name'])) {
        if (!preg_match("/(\.jpg)$/i", $_FILES['helper_img'.$i]['name'])) {
            alert($_FILES['helper_img'.$i]['name'] . '은(는) jpg 파일이 아닙니다.');
        }
    
        if (preg_match("/(\.jpg)$/i", $_FILES['helper_img'.$i]['name'])) {
            @mkdir(G5_DATA_PATH.'/competition_img/competition_helper/'.$comp_id, G5_DIR_PERMISSION);
            @chmod(G5_DATA_PATH.'/competition_img/competition_helper/'.$comp_id, G5_DIR_PERMISSION);
    
            $dest_path = G5_DATA_PATH.'/competition_img/competition_helper/'.$comp_id.'/'.$comp_id.'_'.$i.'.jpg';
    
            move_uploaded_file($_FILES['helper_img'.$i]['tmp_name'], $dest_path);
            chmod($dest_path, G5_FILE_PERMISSION);
        }
    }

    $helper_name                = $_POST['helper_name'.$i];
    $helper_belong              = $_POST['helper_belong'.$i];
    echo $_POST['helper_phonef'.$i];
    if($_POST['helper_phonef'.$i] != null || $_POST['helper_phonef'.$i] != ''){
        $helper_phone               = $_POST['helper_phonef'.$i].'-'.$_POST['helper_phones'.$i].'-'.$_POST['helper_phonet'.$i];
    }
    $helper_img                 = $comp_id.'_'.$i.'.jpg';

    $sql = " insert {$g5['game_helper_table']}
                set competition_id = '$comp_id',
                    helper_img     = '$helper_img',
                    helper_id      = '$i',
                    helper_name    = '$helper_name',
                    helper_belong  = '$helper_belong',
                    helper_phone   = '$helper_phone',
                    helper_use_yn  = 'Y',
                    helper_regi_dt = NOW()
                    ";
    sql_query($sql);
}

$sql = " insert {$g5['competition_table']}
            set competition_id              =  '$comp_id',
                competition_title           =  '$competition_title',
                competition_subtitle        =  '$competition_subtitle',
                competition_address         =  '$competition_address',
                competition_schedule_from   =  '$competition_schedule_from',
                competition_schedule_to     =  '$competition_schedule_to',
                competition_host            =  '$competition_host',
                competition_subj            =  '$competition_subj',
                competition_support         =  '$competition_support',
                competition_sponsor         =  '$competition_sponsor',
                competition_goods           =  '$competition_goods',
                competition_fee             =  '$competition_fee',
                competition_youth_fund      =  '$competition_youth_fund',
                competition_teamcnt         =  '$competition_teamcnt',
                competition_caution         =  '$competition_caution',
                participant_caution         =  '$participant_caution',
                competition_deadline        =  '$competition_deadline',
                competition_deadline_time   =  '$competition_deadline_time',
                goods_first                 =  '$goods_first',
                goods_second                =  '$goods_second',
                goods_third                 =  '$goods_third',
                goods_quater                =  '$goods_quater',
                major_schedule              =  '$major_schedule',  
                major_schedule_time         =  '$major_schedule_time',
                tour_schedule               =  '$tour_schedule',
                tour_schedule_time          =  '$tour_schedule_time',
                challenger_schedule         =  '$challenger_schedule',
                challenger_schedule_time    =  '$challenger_schedule_time',
                circuit_schedule            =  '$circuit_schedule',
                circuit_schedule_time       =  '$circuit_schedule_time',
                major_court                 =  '$major_court',
                tour_court                  =  '$tour_court',
                challenger_court            =  '$challenger_court',
                circuit_court               =  '$circuit_court',
                major_age                   =  '$major_age',
                tour_age                    =  '$tour_age',
                challenger_age              =  '$challenger_age',       
                circuit_age                 =  '$circuit_age',          
                common_standard             =  '$common_standard',
                competition_proceed         =  '$competition_proceed',     
                competition_priority1       =  '$competition_priority1',
                competition_priority2       =  '$competition_priority2',
                competition_priority3       =  '$competition_priority3',       
                competition_priority4       =  '$competition_priority4',
                competition_priority5       =  '$competition_priority5',
                competition_priority6       =  '$competition_priority6',
                helper_cnt                  =  '$helper_cnt' 
                ";

sql_query($sql);

alert("등록되었습니다.");

goto_url(G5_URL.'/schedule_list.php');
?>