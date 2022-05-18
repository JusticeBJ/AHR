
//---===>>> Detect element on screen
$(window).on('load scroll resize', function() {
    $(".on-screen").each(function() {
        var docViewTop = $(window).scrollTop() + $(window).height();
        var elemTop = $(this).offset().top;
        if (docViewTop >= elemTop) {
            $(this).addClass("is-screened");
        }
        else{
            $(this).removeClass('is-screened');
        }
    });
});
