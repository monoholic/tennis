<?php

include_once('../../../../common.php');
$result_array = getGames($page, $search, $isProgress, $willBeOpen, $page_set, $block_set);

$res["json"] = json_encode($result_array);
echo json_encode($res);
?>