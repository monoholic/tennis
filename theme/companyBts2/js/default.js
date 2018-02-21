function makeGameBox(gameBoxClass, row, dataUrl) {

    console.log(row);
    console.log(row['competition_id']);
    var str = 
            '<div class="game-box bg-image flexbox flow-col align-start just-end" '
        + '    style="background-image:url(' + dataUrl + '/competition_img/competition_bg/' + row['competition_id'] + '/' + row['competition_id'] + '.jpg)"'
        + '    onclick="goDetail(' + row['competition_id'] + ')">'
        + '    <div class="game-info">'
        + '        <div style="font-size:18px;">' + row['competition_schedule_from'] + ' ~ ' + row['competition_schedule_to'] + '</div>'
        + '        <div style="font-size:26px; margin-top: 8px;">' + row['competition_title'] + '</div>'
        + '        <div style="font-size:13px; margin-top: 8px;">' + row['competition_address'] + '</div>'
        + '        <div class="game-owner">'
        + '            <span>주최</span>'
        + '            <span class="text-bold">' + row['competition_host'] + '</span>'
        + '            <span>주관</span>'
        + '            <span class="text-bold">' + row['competition_subj'] + '</span>'
        + '    </div>'
        + '    </div>'
        + '    <div class="game-remain-date flexbox align-center just-center">'
        + '        접수마감일'
        + '    </div>'
        + '</div>';
    $(gameBoxClass).append(str);
}