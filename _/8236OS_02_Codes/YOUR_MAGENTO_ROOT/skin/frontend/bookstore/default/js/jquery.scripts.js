jQuery.noConflict();
jQuery(document).ready(function() {
   // Insert here your scripts
   
   	jQuery('.navbar .parent').addClass('dropdown');
	jQuery('.navbar a.level-top').addClass('dropdown-toggle');
	jQuery('.navbar li.parent ul').addClass('dropdown-menu');
	jQuery('.navbar li.level1 ul').wrap('<li class="dropdown-submenu" />');
	
	jQuery('.navbar ul.nav li.level0.dropdown').hover(function() {
		jQuery(this).find('.level0.dropdown-menu').stop(true, true).fadeIn();
			}, function() {
		jQuery(this).find('.level0.dropdown-menu').stop(true, true).fadeOut();
	});

});
