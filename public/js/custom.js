$(window).scroll(function () {
    addNavBackground();
});

function addNavBackground() {
    if (
        document.body.scrollTop > 450 ||
        document.documentElement.scrollTop > 450
    ) {
        $("#navbar").addClass("fixed-top");
        // $(".scroll-to-top").removeClass("d-none");
    } else {
        $("#navbar").removeClass("fixed-top");
        // $(".scroll-to-top").addClass("d-none");
    }
}
