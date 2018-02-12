
function onClickJoinTab (btn) {
    var btn = $(btn)
    btn.parent().children().removeClass('active');
    btn.addClass('active');
}   

var curr_step = 1;
function goNextStep() {
    
    curr_step++;

    var tabs = $('.tab-step');
    var tab = $('.tab-step-' + curr_step);
    
    var contents = $('.join-step');
    var content = $('#join-step-' + curr_step);

    tabs.removeClass("active");
    tab.addClass("active");
    
    contents.removeClass("active");
    content.addClass("active");

}
