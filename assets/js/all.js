
//----------=======>>> Document Ready <<<=======----------
$(document).ready(function(){

    //---==>>> Hide empty paragraphs   
    $('p:empty').remove();
 
    //---==>>> Remove special characters van tel: href link
    $('a[href^="tel:"]').attr('href', function(_,v){ 
        return v.replace(/\(0\)|\s+/g,'')
    });

    //---==>>> Bootstrap Carousel
    let items = document.querySelectorAll('.carousel .carousel-item')
    items.forEach((el) => {
      const minPerSlide = 4
      let next = el.nextElementSibling
      for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
          next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
      }
    });
});//----------=======>>> End Document Ready <<<=======----------



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
