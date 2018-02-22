<?php

include_once('../../../../common.php');
$return = getGames($page, $search, $on, $page_set, $block_set, $g5);
$return["json"] = json_encode($return);
echo json_encode($return);
?>