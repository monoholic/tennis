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

function onSearchGame(url) {
    var searchText = $('form[name="search-form"] input[name="search"]').val();
    window.location.href = url + '?search=' + searchText;
}