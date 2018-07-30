$(document).ready(function(){
	//smooth scrolling
	//reference http://css-tricks.com/snippets/jquery/smooth-scrolling/
	$(function() {
		function filterPath(string) {
			return string
			.replace(/^\//,'')
			.replace(/(index|default).[a-zA-Z]{3,4}$/,'')
			.replace(/\/$/,'');
		}
	
		var locationPath = filterPath(location.pathname);
		var scrollElem = scrollableElement('html', 'body');
	
		// Any links with hash tags in them (can't do ^= because of fully qualified URL potential)
		$('a[href*=#].anchor').each(function() {
	
			// Ensure it's a same-page link
			var thisPath = filterPath(this.pathname) || locationPath;
			if (  locationPath == thisPath
				&& (location.hostname == this.hostname || !this.hostname)
				&& this.hash.replace(/#/,'') ) {
	
					// Ensure target exists
					var $target = $(this.hash), target = this.hash;
					if (target) {
	
						// Find location of target
						if ($target.offset())
							var targetOffset = $target.offset().top;
						else
							var targetOffset = 0;
						$(this).click(function(event) {
	
							// Prevent jump-down
							event.preventDefault();
	
							// Animate to target
							$(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
	
								// Set hash in URL after animation successful
								location.hash = target;
	
							});
						});
					}
			}
	
		});
	
		// Use the first element that is "scrollable"  (cross-browser fix?)
		function scrollableElement(els) {
			for (var i = 0, argLength = arguments.length; i <argLength; i++) {
				var el = arguments[i],
				$scrollElement = $(el);
				if ($scrollElement.scrollTop()> 0) {
					return el;
				} else {
					$scrollElement.scrollTop(1);
					var isScrollable = $scrollElement.scrollTop()> 0;
					$scrollElement.scrollTop(0);
					if (isScrollable) {
						return el;
					}
				}
			}
			return [];
		}
	
	});
	
	//show hide texts from inputs
	$(".toggleText").focus(function(){
		if ($(this).val()==$(this).attr("alt")) $(this).val('');
	});
	$(".toggleText").blur(function(){
		if ($(this).val()=='') $(this).val($(this).attr("alt"));
	});
	
	//functie care trimite un form
	$(".formSend").live('click',function(){
		$(this).closest('form').submit();
		return false;
	});

	
	//AJAX general properties
	$.ajaxSetup({
		type: "POST",
		cache: false,
		dataType: 'html',
		timeout: 15000,
		contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		error: function(jqXHR, textStatus, errorThrown) {
		   //alert( "Error: " + textStatus +" "+ errorThrown +" Try reloading the page" );  
		}
	});
	//functie care curata tot textul din input-urile unui form; util dupa un ajax call cu succes 
	function clear_form_elements(ele) {
		$(ele).find(':input').each(function() {
			switch(this.type) {
				case 'password':
				case 'select-multiple':
				case 'select-one':
				case 'text':
				case 'textarea':
					$(this).val('');
					break;
				case 'checkbox':
				case 'radio':
					this.checked = false;
			}
		});
	}

	//trimitere mesaj / form-uri prin intermediul AJAX
	$(".ajaxSend").live('click',function(){
		
		if ($(this).attr('disabled')=='disabled') return false;
		$("#submit-results").empty().fadeIn().removeClass('hide');
		$(".ajaxSend").attr('disabled','disabled');
		
		var url = $(this).closest('form').attr('action');
		var formName = $(this).closest('form').attr('id');
				
		//if we have more than one forms to submit
		//we check for a dataset1, dataset2, dataset3 class
		var dataString = $(this).closest('form').serialize();
		//alert(dataString);return false;
		var obj = $(this);
		//alert(url);
		$.ajax({
		  type: 'POST',
		  url: url+'/',
		  data: dataString,
		  success: function(data){
			  $("#submit-results").empty().html(data).fadeIn();
			  // If we dont have an error we reset the form to its original settings
			  if (!$("#submit-results div").hasClass('error')) {
				// We clear the form afte success
				clear_form_elements(obj.closest('form'));
				window.setTimeout(function() {
					$("#submit-results").empty().fadeOut();
				}, 3000);
			  }
		  },
		  complete: function(){
			  $(".ajaxSend").removeAttr('disabled');
		  },
		  dataType: 'html'
		});
		return false;
	});
	
	//load ajax boxes content
	$(".ajaxbox").each(function(){
		var obj = $(this);
		$.ajax({
		  type: 'GET',
		  url: '/ajax/ajaxbox/'+$(this).attr('lang')+'/',
		  success: function(data){
			  obj.html(data);
		  },
		  complete: function(){
			  obj.removeClass('loading');
		  },
		  dataType: 'html'
		});
	});
	
	/* MAIN MENU */
	/* Uncomment to use
	var configHover = {    
		sensitivity: 3, 
		interval: 100,
		over: function() {
			$('.secondary-menu',this).slideDown(400);
		}, 
		timeout: 200,
		out: function(){
			$('.secondary-menu',this).slideUp(400);
		} 
	};
	$(".main-menu li.lvl1").hoverIntent(configHover);
	*/
	/* END MAIN MENU */
	
	// Homepage Slider
	var inter1 = setInterval(function() {
  		$('#a2').addClass('green');
		$('#a1').removeClass('green');
		$('#a3').removeClass('green');
		$('#slider2').fadeIn(500);
		$('#slider1').hide();
		$('#slider3').hide();
		}, 3000); // 3000 milliseconds
	var inter2 = setInterval(function() {
  		$('#a3').addClass('green');
		$('#a2').removeClass('green');
		$('#a1').removeClass('green');
		$('#slider3').fadeIn(500);
		$('#slider2').hide();
		$('#slider1').hide();
	}, 6000); // 6000 milliseconds
	var inter3 = setInterval(function() {
  		$('#a1').addClass('green');
		$('#a2').removeClass('green');
		$('#a3').removeClass('green');
		$('#slider1').fadeIn(500);
		$('#slider2').hide();
		$('#slider3').hide();
	}, 9000); // 9000 milliseconds

	$('#a1').click(function(){
		$('#a1').addClass('green');
		$('#a2').removeClass('green');
		$('#a3').removeClass('green');
		$('#slider1').fadeIn(500);
		$('#slider2').hide();
		$('#slider3').hide();
		clearInterval(inter1);
		clearInterval(inter2);
		clearInterval(inter3);
		
	});
	$('#a2').click(function(){
		$('#a2').addClass('green');
		$('#a1').removeClass('green');
		$('#a3').removeClass('green');
		$('#slider2').fadeIn(500);
		$('#slider1').hide();
		$('#slider3').hide();
		clearInterval(inter1);
		clearInterval(inter2);
		clearInterval(inter3);
	});
	$('#a3').click(function(){
		$('#a3').addClass('green');
		$('#a2').removeClass('green');
		$('#a1').removeClass('green');
		$('#slider3').fadeIn(500);
		$('#slider2').hide();
		$('#slider1').hide();
		clearInterval(inter1);
		clearInterval(inter2);
		clearInterval(inter3);
	});
	//Autofocus placeholder
	$('#search-text input').keypress(function(){
		$(this).attr('placeholder', '');
		if( ($(this).attr('value').length) >1 ){
			$('#verif').hide();
			$('#reg').show();
		}
		else{
			$('#reg').hide();
			$('#verif').show();
		}
	});
	//cart slidedown
	$('#cart').click(function(){
		$('#cart-down').slideToggle(200);	
	})
	$(".question h2, .question .elipse").click(function(){
		$(".answer",$(this).parent()).slideToggle(400,function(){
			if($(".plus",$(this).parent()).html()=="-")
				$(".plus",$(this).parent()).html("+")
				else
				$(".plus",$(this).parent()).html("-")
			});
	});
	
	//contact 
	//$("#contactForm input, #contactForm textarea").click().css('border','1px solid #b6cae9');
	$('#check-name input').keyup(function(){
		if( parseInt($(this).attr("value").length)<=2){
			$(this).parent().find('.error2').show();
			$(this).parent().find('.check').hide();
			$('#check-name').find('#name-error').show();
			$(this).css('border', '1px solid #ec5744');	
		}
		else{
			$(this).parent().find('.check').show();
			$(this).parent().find('.error2').hide();
			$('#check-name').find('#name-error').hide();
			$(this).css('border', '1px solid #85a100');	
		}
	});
	
	$('#check-email input').keyup(function(){
		if( validateEmail($(this).attr("value"))==false ){
			$(this).parent().find('.error2').show();
			$(this).parent().find('.check').hide();
			$('#check-email').find('#email-error').show();
			$(this).css('border', '1px solid #ec5744');		
		}
		else{
			$(this).parent().find('.check').show();
			$(this).parent().find('.error2').hide();
			$('#check-email').find('#email-error').hide();	
			$(this).css('border', '1px solid #85a100');	
		}
	});
	
	function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	} 
		
});