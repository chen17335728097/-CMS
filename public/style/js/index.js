$(document).ready(function() {
    boutiqueHover();
    coursesHover();
});

function boutiqueHover() {
    $(".boutique-item-hook").on("mouseover", function() {
        $(this).find(".boutique-item-hover").addClass("boutique-block");
    })
    $(".boutique-item-hook").on("mouseout", function() {
        $(this).find(".boutique-item-hover").removeClass("boutique-block");
    })
}
function coursesHover() {
    $(".courses-item-hook").on("mouseover", function() {
        $(this).find(".item-hover").addClass("block");
    })
    $(".courses-item-hook").on("mouseout", function() {
        $(this).find(".item-hover").removeClass("block");
    })
}