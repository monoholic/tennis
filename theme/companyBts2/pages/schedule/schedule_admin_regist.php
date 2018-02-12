<?php
include_once('../../../../common.php');

$competition_title          = $_POST['competition_title'];
$competition_subtitle       = $_POST['competition_subtitle'];
$competition_schedule       = $_POST['competition_schedule'];
$competition_host           = $_POST['competition_host'];
$competition_subj           = $_POST['competition_subj'];
$competition_support        = $_POST['competition_support'];
$competition_sponsor        = $_POST['competition_sponsor'];
$competition_goods          = $_POST['competition_goods'];
$competition_fee            = $_POST['competition_fee'];
$competition_youth_fund     = $_POST['competition_youth_fund'];
$competition_teamcnt        = $_POST['competition_teamcnt'];
$competition_caution        = $_POST['competition_caution'];
$competition_deadline       = $_POST['competition_deadline'];
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



//competition max 값 가져와서 comp_id 결정
$sql = "SELECT ifnull(max(competition_id),0)+1 AS comp_id FROM $g5[competition_table]";
$comp = sql_fetch($sql);
$comp_id = $comp['comp_id'];

$sql = " insert {$g5['competition_table']}
            set competition_id              =  '$comp_id',
                competition_title           =  '$competition_title',
                competition_subtitle        =  '$competition_subtitle',
                competition_schedule        =  '$competition_schedule',
                competition_host            =  '$competition_host',
                competition_subj            =  '$competition_subj',
                competition_support         =  '$competition_support',
                competition_sponsor         =  '$competition_sponsor',
                competition_goods           =  '$competition_goods',
                competition_fee             =  '$competition_fee',
                competition_youth_fund      =  '$competition_youth_fund',
                competition_teamcnt         =  '$competition_teamcnt',
                competition_caution         =  '$competition_caution',
                goods_first                 =  '$goods_first',
                goods_second                =  '$goods_second',
                goods_third                 =  '$goods_third',
                goods_quater                =  '$goods_quater',
                major_schedule              =  '$major_schedule.$major_schedule_time',  
                tour_schedule               =  '$tour_schedule.$tour_schedule_time',
                challenger_schedule         =  '$challenger_schedule.$challenger_schedule_time',
                circuit_schedule            =  '$circuit_schedule.$circuit_schedule_time',
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
                competition_priority6       =  '$competition_priority6'
                ";

sql_query($sql);
?>