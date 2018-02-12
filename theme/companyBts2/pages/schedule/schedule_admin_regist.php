<?php
include_once('../../../../common.php');

$competition_title      = $_POST['competition_title'];
$competition_subtitle   = $_POST['competition_subtitle'];
$competition_schedule   = $_POST['competition_schedule'];
$competition_host       = $_POST['competition_host'];
$competition_subj       = $_POST['competition_subj'];
$competition_support    = $_POST['competition_support'];
$competition_sponsor    = $_POST['competition_sponsor'];
$competition_goods      = $_POST['competition_goods'];
$competition_fee        = $_POST['competition_fee'];
$competition_youth_fund = $_POST['competition_youth_fund'];
$competition_teamcnt    = $_POST['competition_teamcnt'];
$competition_caution    = $_POST['competition_caution'];
$goods_first            = $_POST['goods_first'];
$goods_second           = $_POST['goods_second'];
$goods_third            = $_POST['goods_third'];
$goods_quater           = $_POST['goods_quater'];

//competition max 값 가져와서 comp_id 결정
$sql = "SELECT ifnull(max(competition_id),0)+1 AS comp_id FROM $g5[competition_table]";
$comp = sql_fetch($sql);
$comp_id = $comp['comp_id'];

$sql = " insert {$g5['competition_table']}
            set competition_id          =  '$comp_id',
                competition_title       =  '$competition_title',
                competition_subtitle    =  '$competition_subtitle',
                competition_schedule    =  '$competition_schedule',
                competition_host        =  '$competition_host',
                competition_subj        =  '$competition_subj',
                competition_support     =  '$competition_support',
                competition_sponsor     =  '$competition_sponsor',
                competition_goods       =  '$competition_goods',
                competition_fee         =  '$competition_fee',
                competition_youth_fund  =  '$competition_youth_fund',
                competition_teamcnt     =  '$competition_teamcnt',
                competition_caution     =  '$competition_caution',
                goods_first             =  '$goods_first',
                goods_second             =  '$goods_second',
                goods_third             =  '$goods_third',
                goods_quater             =  '$goods_quater'
                ";

sql_query($sql);
?>