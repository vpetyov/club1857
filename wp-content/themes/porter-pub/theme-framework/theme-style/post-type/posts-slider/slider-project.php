<?php
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version		1.0.0
 * 
 * Posts Slider Project Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_project_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && in_array('categories', $cmsmasters_metadata)) ? true : false;
$comments = (comments_open() && in_array('comments', $cmsmasters_metadata)) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);
$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);
$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$cmsmasters_post_format = get_post_format();

?>
<!-- Start Posts Slider Project Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_project'); ?>>
	<div class="cmsmasters_slider_project_outer">
	<?php
		echo '<div class="cmsmasters_slider_project_inner">';
			porter_pub_thumb_rollover(get_the_ID(), 'cmsmasters-project-thumb', false, false, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
			
			
			if ($categories || $comments || $likes || $title) {
				echo '<div class="cmsmasters_slider_project_cont_wrap">' . 
					'<div class="cmsmasters_slider_project_cont_wrap_inner">';
								
						$title ? porter_pub_slider_post_heading(get_the_ID(), 'project', 'h2', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, true, $cmsmasters_project_link_target) : '';
						
						
						if ($comments || $likes || $categories) {
							echo '<footer class="cmsmasters_slider_project_footer entry-meta">';
							
								($categories) ? porter_pub_get_slider_post_category(get_the_ID(), 'pj-categs', 'project') : '';
								
								if ($title) {
									echo '<div class="cmsmasters_slider_project_cont_info entry-meta">';
									
										($comments) ? porter_pub_get_slider_post_comments('project') : '';
										
										($likes) ? porter_pub_slider_post_like('project') : '';
										
									echo '</div>';
								}
							echo '</footer>';
						}
						
						
					echo '</div>' . 
				'</div>';
			}
			
		echo '</div>';
	?>
	</div>
</article>
<!-- Finish Posts Slider Project Article  -->

