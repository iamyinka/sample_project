
$(document).ready(function(ev){
  // $('#custom_carousel').on('slide.bs.carousel', function (evt) {
  //   $('#custom_carousel .controls li.active').removeClass('active');
  //   $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
  // })
  // Instantiate the Bootstrap carousel
	$('.multi-item-carousel').carousel({
	  interval: false
	});

	let promoItems = $('.controls .nav li').toArray();
	console.log(promoItems);

	$(promoItems).each(function(){
		$(this).click(function() {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			} else {
				$(this).siblings().removeClass('active');
				$(this).addClass('active');
			}
		})
		// $(this).click(function() {
	 //  	if ($(this).hasClass(' active')) {
	 //  		$(this).next().addClass(' active');
	 //  	} else {
	 //  		$(this).addClass(' active');
	 //  	}
	 //  });
	})

	// $('.controls .nav li').click(function() {
 //  	if ($('.controls .nav li').hasClass(' active')) {
 //  		console.log("Active Class");
 //  	} else {
 //  		$('.controls .nav li').addClass(' active');
 //  	}
 //  });
	// for every slide in carousel, copy the next slide's item in the slide.
	// Do the same for the next, next item.
	$('.multi-item-carousel .item').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
	    next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));
	  
	  if (next.next().length>0) {
	    next.next().children(':first-child').clone().appendTo($(this));
	  } else {
	  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
	  }
	});


	$('.carousel').carousel();
    var caption = $('div.item:nth-child(1) .carousel-caption');
    $('.new-caption-area').html(caption.html());
    caption.css('display', 'none');

    $(".carousel").on('slide.bs.carousel', function (evt) {
        var caption = $('div.item:nth-child(' + ($(evt.relatedTarget).index() + 1) + ') .carousel-caption');
        $('.new-caption-area').html(caption.html());
        caption.css('display', 'none');
    });


	$(".ezyfxInfo").on("click", function() {
		$(".moreInfo").toggle();
	});

 $("#ezyfxInfo").on("click", function() {
   $("#moreInfo").toggle();
 });

 $("#ezyfxInfo2").on("click", function() {
   $("#moreInfo2").toggle();
 });

 $("#learnMore1").on("click", function() {
   $("#learnMore1").css("display", "none");
   $("#learnMore2").show();
   $("#openInfo1").toggle();
 });

 $("#learnMore2").on("click", function() {
   $("#learnMore2").css("display", "none");
   $("#learnMore1").show();
   $("#openInfo1").toggle();
 });

 $("#learnMore3").on("click", function() {
   $("#learnMore3").css("display", "none");
   $("#learnMore4").show();
   $("#openInfo2").toggle();
 });

 $("#learnMore4").on("click", function() {
   $("#learnMore4").css("display", "none");
   $("#learnMore3").show();
   $("#openInfo2").toggle();
 });

 $("#learnMore5").on("click", function() {
   $("#learnMore5").css("display", "none");
   $("#learnMore6").show();
   $("#openInfo3").toggle();
 });

 $("#learnMore6").on("click", function() {
   $("#learnMore6").css("display", "none");
   $("#learnMore5").show();
   $("#openInfo3").toggle();
 });

});




