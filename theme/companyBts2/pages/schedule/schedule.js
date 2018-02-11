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