(function ($) {
	$(function () {

		$('.button-collapse').sideNav();
		$('.parallax').parallax();
		$('.modal-trigger').leanModal()
		$('.slider').slider({
			full_width: true,
			height: '100%;'
		});
		 $('.least-gallery').least();

	}); // end of document ready
})(jQuery); // end of jQuery name space