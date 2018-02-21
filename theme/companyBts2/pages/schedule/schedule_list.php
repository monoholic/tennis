<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/schedule_list.css">
<script type="text/javascript">
    function goDetail(id){
        location.href="./schedule.php?competition_id=" + id;
    }

    function addGame(){
        location.href = "./schedule_admin.php";
    }
</script>
<section id="banner" class="container">
    <div class="banner-box">
        <div class="banner banner-1"></div>
    </div>
    <!-- <div class="banner-1"></div> -->
    <!-- <div class="banner-1"></div> -->
</section>
<section id="schedule-list" class="flexbox flow-col align-center">
    <div class="container">
        <ul class="underline-tab">
            <li class="" onclick="onClickListTab(this)"><a>참가 가능한 대회</a></li>
            <li class="" onclick="onClickListTab(this)"><a>지난 대회</a></li>
        </ul>
        <div class="games-box flexbox">
        <?php 
                $sql = " select * from {$g5['competition_table']}";
                $result = sql_query($sql, false);
                for ($i=0; $row=sql_fetch_array($result); $i++){
                ?>

                <div class="game-box flexbox flow-col align-start just-end" style="cursor:pointer;" onclick="goDetail(<?php echo $row['competition_id'] ?>);">
                    <div class="game-info">
                        <div style="font-size:18px;"><?php echo $row['competition_schedule_from'].' ~ '.$row['competition_schedule_to'] ?></div>
                        <div style="font-size:26px; margin-top: 8px;"><?php echo $row['competition_title'] ?></div>
                        <div style="font-size:13px; margin-top: 8px;"><?php echo $row['competition_address'] ?></div>
                        <div class="game-owner">
                            <span style="font-size:13px;">주최</span>
                            <span style="font-size:13px; font-weight:bold;"><?php echo $row['competition_host'] ?></span>
                            <span style="font-size:13px;">주관</span>
                            <span style="font-size:13px; font-weight:bold;"><?php echo $row['competition_subj'] ?></span>
                      </div>
                    </div>
                    <div style="width:100px; height:100px; background: orange; position:absolute; top:0px; right: 0px;"></div>
                </div>
                
            <?php } ?>
        </div>
        <div class="page-box flexbox align-center just-between">
            <div class="btns-area flexbox align-center just-center" style="margin: 0px;">
                <div class="button btn-1 flexbox just-center" onclick="addGame()">
                    <span>대회등록</span>
                </div>
            </div>
            <div class="pager-area">
                <?php
                    for ($i=0; $i<6; $i++) {
                ?>
                <span><?php echo $i+1 ?></span>
                <?php } ?>
            </div>
            <div class="search-area flexbox align-center">
                <input type="text" placeholder="대회명 검색"/>
                <div class="" onclick="addGame()">
                    <span>O</span>
                </div>
            </div>
        </div>
    </div>
</section>