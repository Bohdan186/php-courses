(function ($) {

	function initTiny() {
		tinymce.init({
			selector: '#mytextarea'
		});
	}


	$(document).ready(function () {
		initTiny();
	});
})(jQuery);