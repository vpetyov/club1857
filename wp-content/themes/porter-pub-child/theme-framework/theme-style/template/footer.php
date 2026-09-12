<?php 
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version		1.0.0
 * 
 * Footer Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = porter_pub_get_global_options();
?>
<div class="footer <?php echo 'cmsmasters_color_scheme_' . $cmsmasters_option['porter-pub' . '_footer_scheme'] . ($cmsmasters_option['porter-pub' . '_footer_type'] == 'default' ? ' cmsmasters_footer_default' : ' cmsmasters_footer_small'); ?>">
	<div class="footer_inner">
		<?php 
		if (
			$cmsmasters_option['porter-pub' . '_footer_type'] == 'default' && 
			$cmsmasters_option['porter-pub' . '_footer_logo']
		) {
			porter_pub_footer_logo($cmsmasters_option);
		}
		
		
		if (
			has_nav_menu('footer') && 
			(
				(
					$cmsmasters_option['porter-pub' . '_footer_type'] == 'default' && 
					$cmsmasters_option['porter-pub' . '_footer_nav']
				) || (
					$cmsmasters_option['porter-pub' . '_footer_type'] == 'small' && 
					$cmsmasters_option['porter-pub' . '_footer_additional_content'] == 'nav'
				)
			)
		) {
			echo '<div class="footer_nav_wrap">' . 
				'<nav>';
				
				
				wp_nav_menu(array( 
					'theme_location' => 'footer', 
					'menu_id' => 'footer_nav', 
					'menu_class' => 'footer_nav' 
				));
				
				
				echo '</nav>' . 
			'</div>';
		}
		
		
		if (
			(
				$cmsmasters_option['porter-pub' . '_footer_type'] == 'default' && 
				$cmsmasters_option['porter-pub' . '_footer_html'] !== ''
			) || (
				$cmsmasters_option['porter-pub' . '_footer_type'] == 'small' && 
				$cmsmasters_option['porter-pub' . '_footer_additional_content'] == 'text' && 
				$cmsmasters_option['porter-pub' . '_footer_html'] !== ''
			)
		) {
			echo '<div class="footer_custom_html_wrap">' . 
				'<div class="footer_custom_html">' . 
					do_shortcode(wp_kses(stripslashes($cmsmasters_option['porter-pub' . '_footer_html']), 'post')) . 
				'</div>' . 
			'</div>';
		}
		//custom
		$working_time = get_field('working_time',get_option('page_on_front'));
		$address = get_field('bar_address',get_option('page_on_front'));
		$social_links = get_field('social_links',get_option('page_on_front'));
		$address = $address ? __(' ') . $address : '';
		if($working_time){

			echo 
			"<div class='bar-address'>" . $address . "</div>".
			"<div class='working-time'>
				<div><span>" . __('Monday: ') . "</span>" . $working_time['monday'] . "</div>
				<div><span>" . __('Tuesday: ') . "</span>" . $working_time['tuesday'] . "</div>
				<div><span>" . __('Wednesday: ') . "</span>" . $working_time['wednesday'] . "</div>
				<div><span>" . __('Thursday: ') . "</span>" . $working_time['thursday'] . "</div>
				<div><span>" . __('Friday: ') . "</span>" . $working_time['friday'] . "</div>
				<div><span>" . __('Saturday: ') . "</span>" . $working_time['saturday'] . "</div>
				<div><span>" . __('Sunday: ') . "</span>" . $working_time['sunday'] . "</div>
			</div>".
			"<div class='social-links'>" .
			// (function_exists('cn_social_icon') ? cn_social_icon() : "") .
			 '<a target="_blank" title="Instagram" href="https://www.instagram.com/liveclub1857/"><img style="width:50px;height:50px;margin:10px" src="https://cdn.club1857.com/wp-content/uploads/2020/02/01155445/instagram.png"></a>' .
			 '<a target="_blank" title="Facebook" href="https://www.facebook.com/club1857.sofia/"><img <img style="width:50px;height:50px;margin:10px" src="https://cdn.club1857.com/wp-content/uploads/2020/02/01155445/facebook.png"></a>' .
			 '<a class="social_icon" target="_blank" title="WhatsApp" href=""><img <img style="width:50px;height:50px;margin:10px" src="https://cdn.club1857.com/wp-content/uploads/2020/02/01155444/whatsapp.png"></a>' .
			 '<a target="_blank" title="Viber" href="viber://contact?number=359876001857"><img <img style="width:50px;height:50px;margin:10px" src="https://cdn.club1857.com/wp-content/uploads/2020/02/01155444/viber.png"></a>' .
			 "</div>";
		}
		//end custom
		

		// if (
		// 	isset($cmsmasters_option['porter-pub' . '_social_icons']) && 
		// 	(
		// 		(
		// 			$cmsmasters_option['porter-pub' . '_footer_type'] == 'default' && 
		// 			$cmsmasters_option['porter-pub' . '_footer_social']
		// 		) || (
		// 			$cmsmasters_option['porter-pub' . '_footer_type'] == 'small' && 
		// 			$cmsmasters_option['porter-pub' . '_footer_additional_content'] == 'social'
		// 		)
		// 	)
		// ) {
		// 	porter_pub_social_icons();
		// }
		?>
		<div class="privacy-policy" style="text-align:center;margin-top:15px;">
			<a target="_blank"href="https://club1857.com/privacy-policy/" style="font-size: 18px;"> <?php echo __('Политика за поверителност') ?></a>
		</div>
		<span class="footer_copyright copyright">
			<?php 
			if (function_exists('the_privacy_policy_link')) {
				the_privacy_policy_link('', ' / ');
			}
			
			echo esc_html(stripslashes($cmsmasters_option['porter-pub' . '_footer_copyright']));
			?>
		</span>

	</div>
</div>