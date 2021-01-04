jQuery.noConflict();
	jQuery(document).ready(function() {
		
		jQuery('ul.nav li.parent').addClass('dropdown');
		jQuery('ul.nav li.parent a.level-top').addClass('dropdown-toggle').append('<b class="caret"></b>');
		jQuery('ul.nav li.parent ul').addClass('dropdown-menu');
		jQuery('ul.nav li.level1 ul').wrap('<li class="dropdown-submenu" />');
		
		
		jQuery('ul.nav li.level0.dropdown').hover(function() {
		  jQuery(this).find('.level0.dropdown-menu').stop(true, true).fadeIn();
		}, function() {
		  jQuery(this).find('.level0.dropdown-menu').stop(true, true).fadeOut();
		});
		
		jQuery('ul.nav li.level1.parent.dropdown').hover(function() {
		  jQuery(this).find('.level1.dropdown-menu').stop(true, true).fadeIn();
		}, function() {
		  jQuery(this).find('.level1.dropdown-menu').stop(true, true).fadeOut();
		});
	
	jQuery("a[rel^='prettyPhoto']").prettyPhoto({
			theme: 'facebook',
			opacity: 0.50,
			keyboard_shortcuts: true,
			show_title: true,
			social_tools:""
	 });
	 
	 jQuery("#zoom").click(function() {
	   jQuery("a[rel^='prettyPhoto']:first").click();
	});	
		
	
	jQuery(".more-views a").hover( function() {
       var hoverImg = jQuery(this).find("img").attr("rel");
       jQuery("#product_main_img").attr("src", hoverImg);
     });
     
       
			
});
