$(document).ready(function (e) {
    // hide and show navlists
    $("#open_mobile_nav").click(function () {
        $("#list_view").toggle(300);
    });

    //hide element
    $(document).mouseup(function (e) {
        var container = $("#list_view");
        var container2 = $("#category_box");
        // If the target of the click isn't the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide(300);
            $("#open_mobile_nav").removeClass("change");
        }
        // hide and show category box in product page
        if (!container2.is(e.target) && container2.has(e.target).length === 0) {
            container2.hide(300);
        }
    });

    // display search area
    $("#searchBtn").click(function () {
        $("#overlay").show(1).addClass("return_overlay");
    });

    $("#closingBtn,#btn_search").click(function () {
        $("#overlay").removeClass("return_overlay");
        $("#overlay").removeClass("close_overylay");
    });

    // modals in form section change
    $("#Acc_btn").click(function () {
        $("#login_form").show();
        $("#reg_form").hide();
        $("#forgot_form").hide();
        $("#exampleModalCenteredScrollableLabel").html(
            "Login Form"
        );
    });

    $("#signin_btn_change,#back_to_signin").click(function () {
        $("#login_form").show(300);
        $("#reg_form").hide();
        $("#forgot_form").hide();
        $("#exampleModalCenteredScrollableLabel").html(
            "Login Form"
        );
    });

    $("#reg_btn_change").click(function () {
        $("#login_form").hide();
        $("#reg_form").show(300);
        $("#forgot_form").hide();
        $("#exampleModalCenteredScrollableLabel").html("Registration Form");
    });

    $("#forgot_btn_change").click(function () {
        $("#login_form").hide();
        $("#reg_form").hide();
        $("#forgot_form").show(300);
        $("#exampleModalCenteredScrollableLabel").html("Password Recovery");
    });


    // fix navbar on scroll down
    $(document).scroll(function () {
        var scroll = $(this).scrollTop();
        // var topDist = $("#container").position();
        if (scroll > 100) {
            $('#navbar').addClass("navbar-fixed", 300);
        } else {
            $('#navbar').removeClass("navbar-fixed", 300);
        }
    });

    // showing the sidebar category box in mobile view
    $("#reveal_category_box").click(function () {
        $("#category_box").toggle(300);
    })
});
