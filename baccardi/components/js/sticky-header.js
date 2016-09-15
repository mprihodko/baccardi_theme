jQuery(document).ready(function($){


	$(window).scroll(function () {
		if( $(window).width() < 768 ){
			$('#bc_header').removeClass('sticky');
      		$('#bc_header').addClass('non-sticky');
		}else{
	    	if( $(window).scrollTop() > $('#bc_header').height() && !($('#bc_header').hasClass('sticky'))){
	      		$('#bc_header').addClass('sticky');
	      		$('#bc_header').removeClass('non-sticky');
			} else if ($(window).scrollTop() == 0){
	      		$('#bc_header').removeClass('sticky');
	      		$('#bc_header').addClass('non-sticky');
	    	}
	    }
	});


});