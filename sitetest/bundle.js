'use strict';

(function () {
	var sidebarOpened = false;
	var button = document.querySelector('#menu');
	button.addEventListener('click', function(e) {
		e.stopPropagation();
		e.preventDefault();
		document.body.classList.add('has-sidebar');
		sidebarOpened = true;
	});

	document.body.addEventListener('click', function() {
		if (sidebarOpened) {
			document.body.classList.remove('has-sidebar');
		}
	});
})();
