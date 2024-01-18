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

var text = [
    "<strong>Independence:</strong> To empower people by supporting them to build capacity to be as independent as possible; from strength to strength.",
    "<strong>Inclusion:</strong> Social inclusion is important to enjoy life to its fullest. Yarra Valley Support Coordination can provide support to achieve this.",
    "<strong>Choice and Control:</strong> Yarra Valley Support Coordination uses a person-centred approach to hand the reins to the person.",
    "<strong>Passion:</strong> We are driven by passion to contribute and make a difference in issues that matter to the community, both individually and to the broader community.", 

];
var counter = 0;
var elem = document.querySelector(".values p");
setInterval(change, 5000);

function change() {
    elem.classList.add('hide');
    setTimeout(function () {
        elem.innerHTML = text[counter];
        elem.classList.remove('hide');
        counter++;
        if (counter >= text.length) {
            counter = 0;
        }
    }, 500);
}
