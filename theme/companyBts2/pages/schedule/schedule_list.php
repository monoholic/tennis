<script src="<?php echo G5_THEME_URL; ?>/pages/schedule/schedule.js"></script>
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/schedule_list.css">
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
            <li class="<?php if($inProgress == 'true' || $inProgress == null) echo 'active'?>" onclick="onClickListTab(this, '<?php echo $PHP_SELF?>', '<?php echo $search?>', true)"><a>참가 가능한 대회</a></li>
            <li class="<?php if($inProgress == 'false') echo 'active'?>" onclick="onClickListTab(this, '<?php echo $PHP_SELF?>', '<?php echo $search?>', false)"><a>지난 대회</a></li>
        </ul>
        <div class="games-box flexbox just-between">
            <?php 
 
                // 페이지 설정
                if ($page == null) $page = 1; // 현재페이지(넘어온값)
                $page_set = 10; // 한페이지 줄수
                $block_set = 5; // 한페이지 블럭수
                $limit_idx = ($page - 1) * $page_set; // limit시작위치
                $sql = "SELECT count(*) as total FROM {$g5['competition_table']} WHERE 1=1";

                $sql = makeWhereSql($sql, $search, $inProgress, 'false', null, null);
                                
                $result = sql_query($sql, false);
                $row = sql_fetch_array($result);
                
                $total = $row['total']; // 전체글수
                $total_page = ceil ($total / $page_set); // 총페이지수(올림함수)
                $total_block = ceil ($total_page / $block_set); // 총블럭수(올림함수)
                
                $block = ceil ($page / $block_set); // 현재블럭(올림함수)
                
                // 현재페이지 쿼리
                $sql = "SELECT * FROM {$g5['competition_table']} WHERE 1=1";

                $sql = makeWhereSql($sql, $search, $inProgress, 'false', $limit_idx, $page_set);
                $result = sql_query($sql, false) or die ("db 에러");
                for ($i=0; $row=sql_fetch_array($result); $i++){
                ?>

                <script>
                    makeGameBox('.games-box', <?php echo json_encode($row) ?>, '<?php echo G5_DATA_URL ?>');
                </script>
                
            <?php } ?>
        </div>
        <div class="page-box flexbox align-center just-between">
            <div class="btns-area flexbox align-center just-center" style="margin: 0px;">
                <div class="button btn-1 flexbox just-center" onclick="addGame()">
                    <span>대회등록</span>
                </div>
            </div>
            <div class="paging-area">
                <?php
                    // 페이지번호 & 블럭 설정
                    $first_page = (($block - 1) * $block_set) + 1; // 첫번째 페이지번호
                    $last_page = min ($total_page, $block * $block_set); // 마지막 페이지번호
                    
                    $prev_page = $page - 1; // 이전페이지
                    $next_page = $page + 1; // 다음페이지
                    
                    $prev_block = $block - 1; // 이전블럭
                    $next_block = $block + 1; // 다음블럭
                    
                    // 이전블럭을 블럭의 마지막으로 하려면...
                    $prev_block_page = $prev_block * $block_set; // 이전블럭 페이지번호
                    // 이전블럭을 블럭의 첫페이지로 하려면...
                    $prev_block_page = $prev_block * $block_set - ($block_set - 1);
                    $next_block_page = $next_block * $block_set - ($block_set - 1); // 다음블럭 페이지번호
                    
                    // 페이징 화면
                    echo ($prev_page > 0) ? "<a href='$PHP_SELF?page=$prev_page&search=$search&on=$inProgress'>[prev]</a> " : "";
                    echo ($prev_block > 0) ? "<a href='$PHP_SELF?page=$prev_block_page&search=$search&on=$inProgress'>...</a> " : "";
                    
                    for ($i=$first_page; $i<=$last_page; $i++) {
                        echo ($i != $page) ? "<a href='$PHP_SELF?page=$i&search=$search&on=$inProgress'>$i</a> " : "<b>$i</b> ";
                    }
                    
                    echo ($next_block <= $total_block) ? "<a href='$PHP_SELF?page=$next_block_page&search=$search&on=$inProgress'>...</a> " : "";
                    echo ($next_page <= $total_page) ? "<a href='$PHP_SELF?page=$next_page&search=$search&on=$inProgress'>[next]</a>" : "";
                    
                ?>
            </div>
            <div class="search-area flexbox align-center">
                <input type="text" name="search" placeholder="대회명 검색" value="<?php echo $search?>"/>
                <div class="" onclick="onSearchGame('<?php echo $PHP_SELF?>', '<?php echo $inProgress?>')">
                    <span>O</span>
                </div>
            </div>
        </div>
    </div>
</section>