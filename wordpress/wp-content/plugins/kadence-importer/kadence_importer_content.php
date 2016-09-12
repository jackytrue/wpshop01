<div class="kt-updated kt-error importer-notice importer-notice-possible" style="display:none">
<p>
<strong><?php echo __('Some items have not completely installed. This is likely do to your servers max execution time. Because this plugin logs progress you can re-click the "import demo content" button. Do this until the import is complete.', 'kadence-importer');?> 
</strong>
</p>
</div>

<div class="kt-updated importer-notice importer-notice-imported" style="display:none">
<p>
<strong><?php echo __('Demo data successfully imported.', 'kadence-importer'); ?></strong>
</p>
</div>

<div class="kt-updated kt-error importer-notice importer-notice-failed" style="display:none">
<p>
<strong><?php _e('Some items may not have completely installed. PLease check your site if your are missing content you can re-click the "import demo content" button. Do this until the import is complete.', 'kadence-importer'); ?></strong>
</p>
</div>
<div class="wrap kadence-importer-wrap">
<div id="kt_ajax_overlay">
<div class="ajaxnotice-kt"><?php echo __( 'Please Wait. This can take up to 10 minutes.', 'kadence-importer' ); ?>
<div class="bubblingG">
    <span id="bubblingG_1">
    </span>
    <span id="bubblingG_2">
    </span>
    <span id="bubblingG_3">
    </span>
</div>
</div>
</div>
    <h1><?php echo __( 'Kadence Themes Importer', 'kadence-importer' ); ?></h1>
    <h4 class="kt-subhead"><?php echo __( 'Please note using this importer will override all your theme options settings.', 'kadence-importer' ); ?></h4>
    <div id="kt-results">&nbsp;</div>
    <?php 

    	$theme = $this->kt_themename();
    	switch($theme) {
    			case 'Virtue - Premium' :

                     $theme_data = array(
                        'slug' => 'vp',
                        'plugins' => array(
                            '0' => 'pagebuilder',
                            '1' => 'woocommerce',
                            '3' => 'kadenceslider',
                            ),
                        'demostyles' => array(
                            'http://themes.kadencethemes.com/virtue-premium/' => __('Site Style 01', 'kadence-importer'),
                            'http://themes.kadencethemes.com/virtue-premium-2/' => __('Site Style 02', 'kadence-importer'),
                            'http://themes.kadencethemes.com/virtue-premium-3/' => __('Site Style 03', 'kadence-importer'),
                            'http://themes.kadencethemes.com/virtue-premium-4/' => __('Site Style 04', 'kadence-importer'),
                            ),
                        'demooptions' => array(
                            'style01' => __('Site Style 01', 'kadence-importer'),
                            'style02' => __('Site Style 02', 'kadence-importer'),
                            'style03' => __('Site Style 03', 'kadence-importer'),
                            'style04' => __('Site Style 04', 'kadence-importer'),
                            ),
                        );
    			
    			break;
    			case 'Pinnacle Premium' : 

                    $theme_data = array(
                        'slug' => 'pp',
                        'plugins' => array(
                            '0' => 'pagebuilder',
                            '1' => 'visualeditor',
                            '2' => 'woocommerce',
                            '4' => 'kadenceslider',
                            ),
                        'demostyles' => array(
                            'http://themes.kadencethemes.com/pinnacle-premium/' => __('Site Style 01', 'kadence-importer'),
                            'http://themes.kadencethemes.com/pinnacle-premium-2/' => __('Site Style 02', 'kadence-importer'),
                            'http://themes.kadencethemes.com/pinnacle-premium-3/' => __('Site Style 03', 'kadence-importer'),
                            ),
                        'demooptions' => array(
                            'style01' => __('Site Style 01', 'kadence-importer'),
                            'style02' => __('Site Style 02', 'kadence-importer'),
                            'style03' => __('Site Style 03', 'kadence-importer'),
                            ),
                        );
    			
    			break;
    			case 'Virtue' : 

                $theme_data = array(
                        'slug' => 'v',
                        'plugins' => array(
                            '0' => 'virtuetoolkit',
                            '1' => 'woocommerce',
                            ),
                        'demostyles' => array(
                            'http://themes.kadencethemes.com/virtue/' => __('Site Style 01', 'kadence-importer'),
                            'http://themes.kadencethemes.com/virtue2/' => __('Site Style 02', 'kadence-importer'),
                            ),
                        'demooptions' => array(
                            'style01' => __('Site Style 01', 'kadence-importer'),
                            'style02' => __('Site Style 02', 'kadence-importer'),
                            ),
                        );    			
    			break;
    			case 'Pinnacle' : 

                $theme_data = array(
                        'slug' => 'p',
                        'plugins' => array(
                            '0' => 'virtuetoolkit',
                            '1' => 'woocommerce',
                            ),
                        'demostyles' => array(
                            'http://themes.kadencethemes.com/pinnacle/' => __('Site Style 01', 'kadence-importer'),
                            ),
                        'demooptions' => array(
                            'style01' => __('Site Style 01', 'kadence-importer'),
                            ),
                        );

    			break;
                case 'Virtue Premium - Bold' :
                     $theme_data = array(
                        'slug' => 'vpb',
                        'plugins' => array(
                            '0' => 'pagebuilder',
                            '1' => 'woocommerce',
                            '3' => 'kadenceslider',
                            ),
                        'demostyles' => array(
                            'http://themes.kadencethemes.com/virtue-bold/' => __('Demo Site', 'kadence-importer'),
                            ),
                        'demooptions' => array(
                            'style01' => __('Demo Site', 'kadence-importer'),
                            ),
                        );
                
                break;
				default:
				 $theme_data = 'none';
				echo __('No Kadence Theme activated. If you are using a child theme please activate the Parent Theme to import demo content.', 'kadence-importer');


	} 
    if($theme_data != 'none') {
                    foreach ($theme_data['plugins'] as $key => $pluginname) {
                        if($pluginname == 'pagebuilder') {
                            if($this->kt_check_pagebuilder()) {
                                echo '<p class="kt-active-plugin">'.__('Page Builder Activated', 'kadence-importer').'</p>';
                            } else {
                                echo '<p class="kt-inactive-plugin"><span>'.__('Page Builder Inactive.', 'kadence-importer').'</span><br>'.__('If you would like to install demo content with page builder elements please activate page builder', 'kadence-importer').'</p>';
                            }
                        }
                        if($pluginname == 'visualeditor') {
                            if($this->kt_check_visualeditor()) {
                                echo '<p class="kt-active-plugin">'.__('Black Studio TinyMCE Widget Activated', 'kadence-importer').'</p>';
                            } else {
                                echo '<p class="kt-inactive-plugin">'.__('Black Studio TinyMCE Widget Inactive.', 'kadence-importer').'<br>'.__('If you would like to install demo content with page builder elements please activate Black Studio TinyMCE Widget', 'kadence-importer').'</p>';
                            }
                        }
                        if($pluginname == 'woocommerce') {
                            if($this->kt_check_woocommerce()) {
                                echo '<p class="kt-active-plugin">'.__('Woocommerce Activated', 'kadence-importer').'</p>';
                            } else {
                                echo '<p class="kt-inactive-plugin kt-woonotice"><span>'.__('Woocommerce Inactive.', 'kadence-importer').'</span><br>'.__('If you would like to install the shop demo please activate woocommerce', 'kadence-importer').'</p>';
                            }
                        }
                        if($pluginname == 'kadenceslider') {
                            if($this->kt_check_kadenceslider()) {
                                echo '<p class="kt-active-plugin">'.__('Kadence Slider Activated', 'kadence-importer').'</p>';
                            } else {
                                echo '<p class="kt-inactive-plugin">'.__('Kadence Slider Inactive.', 'kadence-importer').'<br>'.__('If you would like to install the demo sliders activate the Kadence Slider.', 'kadence-importer').'</p>';
                            }
                        }
                        if($pluginname == 'virtuetoolkit') {
                            if($this->kt_check_virtuetoolkit()) {
                                echo '<p class="kt-active-plugin">'.__('Virtue/Pinnacle Toolkit Activated', 'kadence-importer').'</p>';
                            } else {
                                echo '<p class="kt-inactive-plugin">'.__('Virtue/Pinnacle Toolkit Inactive. If you would like to install demo content with portfolio options please activate the toolkit.', 'kadence-importer').'</p>';
                            }
                        }
                    }

                $php_max_time = ini_get('max_execution_time'); 
                if(isset($php_max_time) &&  $php_max_time < 120) {
                    echo '<p class="php-ex-notice">Your servers php max time is: <span class="kt-highlight">'.$php_max_time.'</span>. <br>We suggest increasing that to at least 300 to import demo content else you will likely need to click the import button more then once</p>';
                } 
                    ?>
                    <div class="import-action">
                    <h4 class="kt-choose"><?php echo $theme .':'. __('Choose Your Demo Style', 'kadence-importer');?></h4>
                    <p class="sitelinks"><?php echo __('View Site Styles:', 'kadence-importer');?> 
                    <?php 
                        foreach ($theme_data['demostyles'] as $url => $name) {
                        echo '<a href="'.$url.'" target="_blank">'.$name.'</a>';
                        }
                    
                    ?>
                    </p>
                    <select class="demo-style">
                     <?php 
                        foreach ($theme_data['demooptions'] as $id => $name) {
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                    </select>
                        <button id="kt-import-demo-<?php echo $theme_data['slug'];?>" class="kt-import-demo-class button button-primary"><?php echo __('Import Demo Content', 'kadence-importer');?></button>
                    </div>
                    <?php 

    }
                ?>

<div class="import-warning">
	<p>
		<span style="color:#B94A48;">
			<?php echo __("Warning this can't be undone.", "kadence_importer");?>
		</span>
		<?php echo __("If you decide you want to completely remove everything on your site after testing out the demo content you can use this plugin:", "kadence-importer");?>
		<a href="https://wordpress.org/plugins/wordpress-reset-database/"><?php echo __("Wordpress Reset Database", "kadence-importer"); ?></a>.<br>
        <?php echo __("Also if you want to try a different demo after you've installed one it's best to use the reset plugin and clear your site before you install a second demo.", "kadence-importer"); ?>
	</p>
</div>
</div><!-- wrap -->