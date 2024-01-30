function scrollToTop() {
    window.scrollTo(0, 0);
}
var $logo = $('#scroll_top');
$(document).scroll(function() {
    if ($(this).scrollTop() > 300) {
        $('#scroll_top').css("display", "block");
    } else {
        $('#scroll_top').css("display", "none");
    }
});