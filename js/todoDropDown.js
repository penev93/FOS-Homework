
$("document").ready(function () {
    $(".submenu").hide();
});

$(".Cicero > li").mouseover(function () {
    $(this).children().show();

});

$(".Cicero > li").mouseout(function () {
    $(this).show();
    $(".submenu").hide();
});
$(".Cicero > li").mouseout(function () {
    return false;
});
$(".Cicero > li").mouseover(function () {
    return false;
});