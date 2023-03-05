$( document ).ready(function() {
    $('#flexSwitchCheckChecked').click(function(){
        if($(this).is(":checked")){
            $("body").attr("data-bs-theme","dark");
        }
        else{
            $("body").attr("data-bs-theme","light");
        }
    });


    $('.slider').slick({
        autoplay: true,
        draggable: false,
        infinite:true,
        speed: 1500,
        autoplaySpeed:3000,
        lazyLoad: 'progressive',
        arrows: true,
        dots: false,
          prevArrow: '<div class="slick-nav prev-arrow"><span class="long-arrow-left"></span><svg><use xlink:href="#circle"></svg></div>',
          nextArrow: '<div class="slick-nav next-arrow"><span class="long-arrow-right"></span><svg><use xlink:href="#circle"></svg></div>',
      }).slickAnimation();

      $(".product-slider").slick({
        infinite: true,
        draggable: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<div class="slick-nav slick-btn prev-arrow"><i class="fa-solid fa-angle-left"></i></div>',
        nextArrow: '<div class="slick-nav slick-btn next-arrow"><i class="fa-solid fa-chevron-right"></i></div>',
      })
      $(".distributors-slider").slick({
        infinite: true,
        draggable: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: '<div class="slick-nav slick-btn prev-arrow"><i class="fa-solid fa-angle-left"></i></div>',
        nextArrow: '<div class="slick-nav slick-btn next-arrow"><i class="fa-solid fa-chevron-right"></i></div>',
      })

      $(".viewport li a").click(function(){
           $(".viewport li a").removeClass("active");
           $(this).addClass("active");
           if($(".list-view").hasClass("active")){
                $(".product-list").addClass("list-product-view")
                $(".listing-product .mb-4").removeClass("col-md-4");
                $(".listing-product .mb-4").addClass("col-md-6");
                $(".listing-product .card").addClass("flex-row");
           }
           else{
            $(".product-list").removeClass("list-product-view");
            $(".listing-product .mb-4").removeClass("col-md-6");
            $(".listing-product .mb-4").addClass("col-md-4");
            $(".listing-product .card").removeClass("flex-row");
           }
      })
});



$(window).scroll(function() {
	var stickyTop = $('#header').height();
	if( $(this).scrollTop() > stickyTop ) {
		$("#header").addClass("sticky-header");
	} else {
		$("#header").removeClass("sticky-header");
	}
});

