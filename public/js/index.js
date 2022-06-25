$(document).ready(function (e) {
    // hide and show navlists
    $("#open_mobile_nav").click(function () {
        $("#list_view").toggle(300);
    });

    //hide element
    $(document).mouseup(function (e) {
        var container = $("#list_view");
        // If the target of the click isn't the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide(300);
            $("#open_mobile_nav").removeClass("change");
        }
    });

// display search area
$("#searchBtn").click(function(){
    $("#overlay").show(1).addClass("return_overlay");
});

$("#closingBtn,#btn_search").click(function(){
    $("#overlay").removeClass("return_overlay");
    $("#overlay").removeClass("close_overylay");
});

// fix navbar on scroll down
// $(window).scroll(function () {
//     if ($(window).scrollTop() > 100) {
//         $("#navbar").addClass("navbar-fixed");
//     } else {
//         $("#navbar").removeClass("navbar-fixed");
//     }
// }, 100);

});
