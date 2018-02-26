function onClickTab(selected, tabNum) {
    var tab = $(selected);
    var tabs = tab.parent().children();
    tabs.removeClass("active");
    tab.addClass("active");

    $('#game-etc .content-box').removeClass("active");
    $('#game-etc .content-box#game-' + tabNum).addClass("active");

}

function openRegister() {
    var popup = $('#popup-register');
    popup.addClass("active");
}

function closeRegister() {
    var popup = $('#popup-register');
    popup.removeClass("active");
}

function onSearchGame(url, on) {
    var searchText = $('.search-area input[name="search"]').val();
    goScheduleList(url, searchText, on);
}

function onClickListTab(selected, url, search, on) {
    var tab = $(selected);
    var tabs = tab.parent().children();
    tabs.removeClass("active");
    tab.addClass("active");

    goScheduleList(url, search, on);
}

function goScheduleList(url, search, on) {
    window.location.href = url + '?search=' + search + '&inProgress=' + on;
}