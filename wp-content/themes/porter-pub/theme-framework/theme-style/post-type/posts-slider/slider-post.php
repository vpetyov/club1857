<?php
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version		1.0.0
 * 
 * Posts Slider Post Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && porter_pub_slider_post_check_exc_cont('post')) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_post_format = get_post_format();

?>
<!-- Start Posts Slider Post Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_post'); ?>>
	<div class="cmsmasters_slider_post_outer">
	<?php
		echo '<div class="cmsmasters_slider_post_date_img_wrap">';
		
			porter_pub_thumb_rollover(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, false, false, false, false, false, false, false, true, false, false);
		
		echo '</div>';
		
		if ($comments || $likes || $date) {
			echo '<footer class="cmsmasters_slider_post_footer entry-meta">';
			
				$date ? porter_pub_get_slider_post_date('post') : '';
				
				if ($comments || $likes) {
					echo '<div class="cmsmasters_slider_post_meta_info">';
						
						$comments ? porter_pub_get_slider_post_comments('post') : '';
						
						$likes ? porter_pub_slider_post_like('post') : '';
						
					echo '</div>';
				}
				
			echo '</footer>';
		}
		
		$title ? porter_pub_slider_post_heading(get_the_ID(), 'post', 'h2') : '';
		
		if ($author || $categories) {
			echo '<div class="cmsmasters_slider_post_cont_info entry-meta">';
				
				$author ? porter_pub_get_slider_post_author('post') : '';
				
				if ($author && $categories) {
					echo '<span class="cmsmasters_post_cont_info_divider">/</span>';
				}
				
				$categories ? porter_pub_get_slider_post_category(get_the_ID(), 'category', 'post') : '';
				
			echo '</div>';
		}
		
		if ($excerpt || $more) {
			echo '<div class="cmsmasters_slider_post_inner">';
				
				$excerpt ? porter_pub_slider_post_exc_cont('post') : '';
				
				$more ? porter_pub_slider_post_more(get_the_ID()) : '';
				
			echo '</div>';
		}
	?>
	</div>
</article>
<!-- Finish Posts Slider Post Article  -->

