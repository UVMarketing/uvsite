$(document).ready(function() {
	var doAnimations = function() {
		// Calc current offset and get all animatables
		var offset = $(window).scrollTop() + $(window).height(),
			$animatables = $('.animatable');
		// Unbind scroll handler if we have no animatables
		if ($animatables.size() == 0) {
			$(window).off('scroll', doAnimations);
		}
		// Check all animatables and animate them if necessary
		$animatables.each(function(i) {
			var $animatable = $(this);
			if (($animatable.offset().top + $animatable.height() - 20) < offset) {
				$animatable.removeClass('animatable').addClass('animated');
			}
		});
	};
	// Hook doAnimations on scroll, and trigger a scroll
	$(window).on('scroll', doAnimations);
	$(window).trigger('scroll');
	$('.carousel').carousel();
	$('.scrollspy').scrollSpy();
	$(".circle:visible .mask-top").css("transform", "rotate(180deg)");
	$(".circle:visible .mask-bottom").css("transform", "rotate(-180deg)");
	$('form').submit(function(event) {
		$.ajax({
			type: 'POST',
			url: 'config/save.php',
			data: $('form').serialize(),
			success: function() {
				$('#status').html('Enviando...').hide()
					.fadeIn(3000, function() {
						$('#status').append('...Enviado!, por favor verifica tu spam');
					});
			}
		});
		event.preventDefault();
	});
});
