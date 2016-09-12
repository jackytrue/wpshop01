jQuery(document).ready(function($){

	/* Virtue Premium */
	$('#kt-import-demo-vp').live('click', function(e) {
		var confirm = window.confirm('WARNING: Importing demo content will replace your current theme options, sliders and widgets. It can also take a few minutes to complete.');
		var demo_select = jQuery(this).parents('.import-action').find('select.demo-style').val();
		var overlay = $(document.getElementById('kt_ajax_overlay'));

		if(confirm == true) {
			overlay.fadeIn();

			var data = {
				action: 'kadence_import_vp_demo_data',
				demo_switch: demo_select
			};

			jQuery('.importer-notice').hide();

			$.post(ajaxurl, data, function(response) {
				if( jQuery.trim(response) !== 'Imported' ) {
					overlay.fadeOut();
					jQuery('.importer-notice-possible').show();
					$("#kt-results").html(response);
				} else {
					overlay.fadeOut();
					jQuery('.importer-notice-imported').show();
				}
			}).fail(function() {
				overlay.fadeOut();
				jQuery('.importer-notice-failed').show();
			});
		}
		e.preventDefault();
	});
	/* Virtue Bold */
	$('#kt-import-demo-vpb').live('click', function(e) {
		var confirm = window.confirm('WARNING: Importing demo content will replace your current theme options, sliders and widgets. It can also take a few minutes to complete.');
		var demo_select = jQuery(this).parents('.import-action').find('select.demo-style').val();
		var overlay = $(document.getElementById('kt_ajax_overlay'));

		if(confirm == true) {
			overlay.fadeIn();

			var data = {
				action: 'kadence_import_vpb_demo_data',
				demo_switch: demo_select
			};

			jQuery('.importer-notice').hide();

			$.post(ajaxurl, data, function(response) {
				if( jQuery.trim(response) !== 'Imported' ) {
					overlay.fadeOut();
					jQuery('.importer-notice-possible').show();
					$("#kt-results").html(response);
				} else {
					overlay.fadeOut();
					jQuery('.importer-notice-imported').show();
				}
			}).fail(function() {
				overlay.fadeOut();
				jQuery('.importer-notice-failed').show();
			});
		}
		e.preventDefault();
	});
	/* Virtue */
	$('#kt-import-demo-v').live('click', function(e) {
		var confirm = window.confirm('WARNING: Importing demo content will replace your current theme options and widgets. It can also take a few minutes to complete.');
		var demo_select = jQuery(this).parents('.import-action').find('select.demo-style').val();
		var overlay = $(document.getElementById('kt_ajax_overlay'));

		if(confirm == true) {
			overlay.fadeIn();

			var data = {
				action: 'kadence_import_v_demo_data',
				demo_switch: demo_select
			};

			jQuery('.importer-notice').hide();

			$.post(ajaxurl, data, function(response) {
				if( jQuery.trim(response) !== 'Imported' ) {
					overlay.fadeOut();
					jQuery('.importer-notice-possible').show();
					$("#kt-results").html(response);
				} else {
					overlay.fadeOut();
					jQuery('.importer-notice-imported').show();
				}
			}).fail(function() {
				overlay.fadeOut();
				jQuery('.importer-notice-failed').show();
			});
		}
		e.preventDefault();
	});

	/* Pinnacle */
	$('#kt-import-demo-p').live('click', function(e) {
		var confirm = window.confirm('WARNING: Importing demo content will replace your current theme options and widgets. It can also take a few minutes to complete.');
		var demo_select = jQuery(this).parents('.import-action').find('select.demo-style').val();
		var overlay = $(document.getElementById('kt_ajax_overlay'));

		if(confirm == true) {
			overlay.fadeIn();

			var data = {
				action: 'kadence_import_p_demo_data',
				demo_switch: demo_select
			};

			jQuery('.importer-notice').hide();

			$.post(ajaxurl, data, function(response) {
				if( jQuery.trim(response) !== 'Imported' ) {
					overlay.fadeOut();
					jQuery('.importer-notice-possible').show();
					$("#kt-results").html(response);
				} else {
					overlay.fadeOut();
					jQuery('.importer-notice-imported').show();
				}
			}).fail(function() {
				overlay.fadeOut();
				jQuery('.importer-notice-failed').show();
			});
		}
		e.preventDefault();
	});

	/* Pinnacle Premium */
	$('#kt-import-demo-pp').live('click', function(e) {
		var confirm = window.confirm('WARNING: Importing demo content will replace your current theme options and widgets. It can also take a few minutes to complete.');
		var demo_select = jQuery(this).parents('.import-action').find('select.demo-style').val();
		var overlay = $(document.getElementById('kt_ajax_overlay'));

		if(confirm == true) {
			overlay.fadeIn();

			var data = {
				action: 'kadence_import_pp_demo_data',
				demo_switch: demo_select
			};

			jQuery('.importer-notice').hide();

			$.post(ajaxurl, data, function(response) {
				if( jQuery.trim(response) !== 'Imported' ) {
					overlay.fadeOut();
					jQuery('.importer-notice-possible').show();
					$("#kt-results").html(response);
				} else {
					overlay.fadeOut();
					jQuery('.importer-notice-imported').show();
				}
			}).fail(function() {
				overlay.fadeOut();
				jQuery('.importer-notice-failed').show();
			});
		}
		e.preventDefault();
	});

});
