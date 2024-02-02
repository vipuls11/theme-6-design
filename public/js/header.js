// ............................header scroll.....................

$('.mobile_menu_btn').click(function() {
    $('.mobile_menu_view').slideToggle('slow');
});
$(".accordian").click(function() {
    $(".accordian").toggleClass("fa-minus fa-plus");
});
$(".accordian_subcat").click(function() {
    $(".accordian_subcat").toggleClass("fa-minus fa-plus");
});
$('.submenu_btn').click(function() {
    $('.submenu_view').slideToggle('slow');
});
$('.subcat_submenu_btn').click(function() {
    $('.subcat_submenu_view').slideToggle('slow');
});
$(".hamber").click(function() {
    $(".hamber").toggleClass("fa-bars fa-times");
});


$(document).ready(function() {
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).delay(500).slideDown(
                "slow");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).delay(500).slideUp(
                "slow");
            $(this).toggleClass('open');
        }
    );
});


$(document).ready(function() {
    if (location.pathname == '/') {
        var scroll_pos = 0;
        $(document).scroll(function() {
            scroll_pos = $(this).scrollTop();
            if (scroll_pos > 30) {
                $(".d_header").css('background-color', '#86A8E7');
                $(".d_header").css('position', 'fixed');

                $(".menu_color").css('color', 'white');
                $(".right_menu_color").css('color', 'white');
                $(".count_color").css('color', 'black');
                $(".hamber").css('color', '#8B9474');
            } else {
                $(".d_header").css('background-color', 'transparent');
                $(".d_header").css('position', 'fixed');
                $(".menu_color").css('color', '#86A8E7');
                $(".right_menu_color").css('color', '#86A8E7');
                $(".count_color").css('color', '#8B9474');
                $(".hamber").css('color', 'black');
            }
        });
    } else {
        $(".d_header").css('background-color', 'black');
        $(".d_header").css('position', 'sticky');
        $(".d_header").css('box-shadow',
            ' 0 6px 6px 0 rgba(0, 0, 0, 0.03), 0 8px 8px 0 rgba(0, 0, 0, 0.03)');
        $(".menu_color").css('color', '#8B9474');
        $(".right_menu_color").css('color', '#8B9474');
        $(".count_color").css('color', 'black');
        $(".hamber").css('color', '#8B9474');

    }
});
// ............................header scroll.....................