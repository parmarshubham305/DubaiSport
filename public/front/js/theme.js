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
        responsive: [
            {
              breakpoint: 1025,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
              }
            },
            {
                breakpoint: 769,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  infinite: true,
                }
              },
            {
              breakpoint: 575,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
      })
      $(".distributors-slider").slick({
        infinite: true,
        draggable: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: '<div class="slick-nav slick-btn prev-arrow"><i class="fa-solid fa-angle-left"></i></div>',
        nextArrow: '<div class="slick-nav slick-btn next-arrow"><i class="fa-solid fa-chevron-right"></i></div>',
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
              }
            },
            {
              breakpoint: 575,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
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
      $(function () {
        $('[data-bs-toggle="popover"]').popover()
    })
    $('.popover-dismiss').popover({
        trigger: 'focus'
    });

});



$(window).scroll(function() {
	var stickyTop = $('#header').height();
	if( $(this).scrollTop() > stickyTop ) {
		$("#header").addClass("sticky-header");
	} else {
		$("#header").removeClass("sticky-header");
	}
});

$(function () {
    $(".add").click(function () {
        var currentVal = parseInt($(this).next(".qty").val());
        if (currentVal != NaN) {
            $(this).next(".qty").val(currentVal + 1);
        }
    });

    $(".minus").click(function () {
        var currentVal = parseInt($(this).prev(".qty").val());
        if (currentVal != NaN) {
            if (currentVal > 0) {
                $(this).prev(".qty").val(currentVal - 1);
            }

        }
    });
});

// registration Js
$(function () {
    var $sections = $('.form-section');

    function navigateTo(index) {
      // Mark the current section with the class 'current'
      $sections
        .removeClass('current')
        .eq(index)
          .addClass('current');
      // Show only the navigation buttons that make sense for the current section:
      $('.form-navigation .previous').toggle(index > 0);
      var atTheEnd = index >= $sections.length - 1;
      $('.form-navigation .next').toggle(!atTheEnd);
      $('.form-navigation [type="submit"]').toggle(atTheEnd);
    }

    function curIndex() {
      // Return the current index by looking at which section has the class 'current'
      return $sections.index($sections.filter('.current'));
    }

    // Previous button is easy, just go back
    $('.form-navigation .previous').click(function() {
      navigateTo(curIndex() - 1);
    });

    // Next button goes forward iff current block validates
    $('.form-navigation .next').click(function() {
      $('.demo-form').parsley().whenValidate({
        group: 'block-' + curIndex()
      }).done(function() {
        navigateTo(curIndex() + 1);
      });
    });

    // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
    $sections.each(function(index, section) {
      $(section).find(':input').attr('data-parsley-group', 'block-' + index);
    });
    navigateTo(0); // Start at the beginning
  });
