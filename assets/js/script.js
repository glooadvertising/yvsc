jQuery(document).ready(function ($) {
    $("#menu-button").click(function () {
        $("#menu-button").toggleClass("cross");
        $("#mobile-menu").toggleClass("hidden-menu");
    });
    $(".contact-us").click(function () {
        $("#menu-button").toggleClass("cross");
        $("#mobile-menu").toggleClass("hidden-menu");
    });
});
