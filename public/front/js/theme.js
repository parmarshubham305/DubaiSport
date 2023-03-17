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
$(document).ready(function () {
    var navListItems = $('ul.setup-panel li a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');
    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-select').addClass('btn-default');
            $item.addClass('btn-select').parent().addClass("active");
            allWells.hide();
            $target.show().addClass("active");
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('ul.setup-panel li a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('ul.setup-panel li a.btn-select').trigger('click');
    });
