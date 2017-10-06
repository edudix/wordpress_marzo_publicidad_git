(function($){
	//masonry
	var msnry = new Masonry( ".grid", {columnWidth: ".grid-sizer", itemSelector: ".grid-item"});
    //Slideshow
    setTimeout(function(){
    	$('.subtagText').removeClass('hidden').addClass('fadeIn');
    },3000);
    var totalSlides = $('.slide').length;
    var actualSlide = 1;
    var oldSlide = 1;
    function slide()
    {
    	$('.slide-' + oldSlide + ' .tagText').removeClass('fadeIn').addClass('fadeOut');
    	$('.slide-' + oldSlide + ' .subtagText').removeClass('fadeIn').addClass('fadeOut');
    	$('.slide-' + actualSlide + ' .tagText').removeClass('fadeOut hidden').addClass('fadeIn');
    	$('.slide-' + actualSlide + ' .subtagText').removeClass('fadeOut hidden').addClass('fadeIn');
    	oldSlide = actualSlide;
    	actualSlide += 1;
    	if (actualSlide > totalSlides)
    		actualSlide = 1;
    }
    self.setInterval(function(){slide()},3000);
    //Servicios
    $('.service_title').mouseover(function(){
    	$('.service_title').parent().children('.service_sublist').slideUp();
    	$(this).parent().children('.service_sublist').slideDown();
    });
    //Proyectos
    $('.proyecto, .home-post-img').mouseover(function(){
    	$(this).parent().children('.overlayer').removeClass('fadeOut').addClass('fadeIn visible');
    }).mouseout(function(){
    	$(this).parent().children('.overlayer').removeClass('fadeIn').addClass('fadeOut');
    });
    //scrolltop
    $(".arrow_up").click(function() {
    	$("html, body").animate({ scrollTop: 0 }, "slow");
    	return false;
    });
    //fade logos
    $('.logo_img').mouseover(function(){
    	changeImage(this);
    }).mouseout(function(){
    	changeImageAgain(this);
    })
    function changeImage(image) {
    	image.src = image.src.replace("/bn/", "/color/");
    }
    function changeImageAgain(image) {
    	image.src = image.src.replace("/color/", "/bn/");
    }
    //botón para subir
    $('.flaticon-menu').click(function(){
    	$('.flaticon-close').css('right','310px');
    	$('.main-menu').css('right', '0px');
    });
    $('.flaticon-close').click(function(){
    	$(this).css('right','-400px');
    	$('.main-menu').css('right', '-400px');
    });

		//Botones compartir RRSS:
		$('.dc-social a').click(function(event){
				event.preventDefault();

							//popup
							var width  = 575,
									height = 520,
									left   = ($(window).width()  - width)  / 2,
									top    = ($(window).height() - height) / 2,
									opts   = 'status=1' +
											',width='  + width  +
											',height=' + height +
											',top='    + top    +
											',left='   + left;

							window.open($(this).attr("href"), 'share', opts);

			});
  })(jQuery);
