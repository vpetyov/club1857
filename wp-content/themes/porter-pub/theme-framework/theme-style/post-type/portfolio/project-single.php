<?php
/**
 * @package 	WordPress
 * @subpackage 	Porter Pub
 * @version		1.0.3
 * 
 * Project Single Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = porter_pub_get_global_options();


$cmsmasters_project_title = get_post_meta(get_the_ID(), 'cmsmasters_project_title', true);

$cmsmasters_project_features = get_post_meta(get_the_ID(), 'cmsmasters_project_features', true);

$cmsmasters_project_image_show = get_post_meta(get_the_ID(), 'cmsmasters_project_image_show', true);


$cmsmasters_project_link_text = get_post_meta(get_the_ID(), 'cmsmasters_project_link_text', true);
$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);
$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$cmsmasters_project_details_title = get_post_meta(get_the_ID(), 'cmsmasters_project_details_title', true);


$cmsmasters_project_features_one_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one_title', true);
$cmsmasters_project_features_one = get_post_meta(get_the_ID(), 'cmsmasters_project_features_one', true);

$cmsmasters_project_features_two_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two_title', true);
$cmsmasters_project_features_two = get_post_meta(get_the_ID(), 'cmsmasters_project_features_two', true);

$cmsmasters_project_features_three_title = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three_title', true);
$cmsmasters_project_features_three = get_post_meta(get_the_ID(), 'cmsmasters_project_features_three', true);


$project_details = '';

if (
	$cmsmasters_option['porter-pub' . '_portfolio_project_like'] || 
	$cmsmasters_option['porter-pub' . '_portfolio_project_date'] || 
	$cmsmasters_option['porter-pub' . '_portfolio_project_cat'] || 
	$cmsmasters_option['porter-pub' . '_portfolio_project_comment'] || 
	$cmsmasters_option['porter-pub' . '_portfolio_project_author'] || 
	$cmsmasters_option['porter-pub' . '_portfolio_project_tag'] || 
	$cmsmasters_option['porter-pub' . '_portfolio_project_link'] || 
	(
		!empty($cmsmasters_project_features[0][0]) || 
		!empty($cmsmasters_project_features[0][1])
	) || (
		!empty($cmsmasters_project_features[1][0]) || 
		!empty($cmsmasters_project_features[1][1])
	)
) {
	$project_details = 'true';
}


$project_sidebar = '';

if (
	$project_details == 'true' || 
	(
		!empty($cmsmasters_project_features_one[0][0]) || 
		!empty($cmsmasters_project_features_one[0][1])
	) || (
		!empty($cmsmasters_project_features_one[1][0]) || 
		!empty($cmsmasters_project_features_one[1][1])
	) || (
		!empty($cmsmasters_project_features_two[0][0]) || 
		!empty($cmsmasters_project_features_two[0][1])
	) || (
		!empty($cmsmasters_project_features_two[1][0]) || 
		!empty($cmsmasters_project_features_two[1][1])
	) || (
		!empty($cmsmasters_project_features_three[0][0]) || 
		!empty($cmsmasters_project_features_three[0][1])
	) || (
		!empty($cmsmasters_project_features_three[1][0]) || 
		!empty($cmsmasters_project_features_three[1][1])
	)
) {
	$project_sidebar = 'true';
}


$cmsmasters_post_format = get_post_format();


$project_tags = get_the_terms(get_the_ID(), 'pj-tags');


$cmsmasters_project_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_project_sharing_box', true);

$cmsmasters_project_author_box = get_post_meta(get_the_ID(), 'cmsmasters_project_author_box', true);

$cmsmasters_project_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_project_more_posts', true);

?>
<!-- Start Project Single Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_project'); ?>>
	<?php
	if ($cmsmasters_project_title == 'true') {
		echo '<header class="cmsmasters_project_header entry-header">';
			porter_pub_project_title_nolink(get_the_ID(), 'h1');
		echo '</header>';
	}
	
	
	echo '<div class="project_content' . (($project_sidebar == 'true') ? ' with_sidebar' : '') . '">';
		
		if ($cmsmasters_post_format == 'gallery') {
			$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_project_images', true))));
			$cmsmasters_project_columns = get_post_meta(get_the_ID(), 'cmsmasters_project_columns', true);
			
			porter_pub_post_type_gallery(get_the_ID(), $cmsmasters_project_images, $cmsmasters_project_columns, 'cmsmasters-project-thumb', 'cmsmasters-project-full-thumb');
		} elseif ($cmsmasters_post_format == 'video') {
			$cmsmasters_project_video_type = get_post_meta(get_the_ID(), 'cmsmasters_project_video_type', true);
			$cmsmasters_project_video_link = get_post_meta(get_the_ID(), 'cmsmasters_project_video_link', true);
			$cmsmasters_project_video_links = get_post_meta(get_the_ID(), 'cmsmasters_project_video_links', true);
			
			porter_pub_post_type_video(get_the_ID(), $cmsmasters_project_video_type, $cmsmasters_project_video_link, $cmsmasters_project_video_links, 'cmsmasters-project-full-thumb');
		} elseif ($cmsmasters_post_format == '') {
			$cmsmasters_project_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_project_images', true))));
			
			if ($cmsmasters_project_image_show == 'true' && $cmsmasters_project_images[0] == '') {
				echo '';
			} else {
				porter_pub_post_type_slider(get_the_ID(), $cmsmasters_project_images, 'cmsmasters-full-masonry-thumb');
			}
		}
		
		
		if (get_the_content() != '') {
			echo '<div class="cmsmasters_project_content entry-content">' . "\n";
				
				the_content();
				
				
				wp_link_pages(array( 
					'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'porter-pub') . ':</strong>', 
					'after' => '</div>', 
					'link_before' => '<span>', 
					'link_after' => '</span>' 
				));
				
			echo '</div>';
		}
		
		
		if ($project_sidebar == 'true') {
			echo '<div class="project_sidebar">';
				
				if ($project_details == 'true') {
					echo '<div class="project_details entry-meta">' . 
						'<h3 class="project_details_title">' . esc_html($cmsmasters_project_details_title) . '</h3>';
						
						porter_pub_get_project_likes('post');
						
						porter_pub_get_project_comments('post');
						
						porter_pub_get_project_author('post');
						
						porter_pub_get_project_date('post');
						
						porter_pub_get_project_category(get_the_ID(), 'pj-categs', 'post');
						
						porter_pub_get_project_tags(get_the_ID(), 'pj-tags');
						
						porter_pub_get_project_features('details', $cmsmasters_project_features, false, 'h3', true);
						
						porter_pub_project_link($cmsmasters_project_link_text, $cmsmasters_project_link_url, $cmsmasters_project_link_target);
						
					echo '</div>';
				}
				
				
				porter_pub_get_project_features('features', $cmsmasters_project_features_one, $cmsmasters_project_features_one_title, 'h3', true);
				
				porter_pub_get_project_features('features', $cmsmasters_project_features_two, $cmsmasters_project_features_two_title, 'h3', true);
				
				porter_pub_get_project_features('features', $cmsmasters_project_features_three, $cmsmasters_project_features_three_title, 'h3', true);
				
			echo '</div>';
		}
		
	echo '</div>';
	?>
</article>
<!-- Finish Project Single Article  -->
<?php 

if ($cmsmasters_option['porter-pub' . '_portfolio_project_nav_box']) {
	$order_cat = (isset($cmsmasters_option['porter-pub' . '_portfolio_project_nav_order_cat']) ? $cmsmasters_option['porter-pub' . '_portfolio_project_nav_order_cat'] : false);
	
	porter_pub_prev_next_posts($order_cat);
}


if ($cmsmasters_project_sharing_box == 'true') {
	porter_pub_sharing_box(esc_html__('Like this project?', 'porter-pub'), 'h2');
}


if ($cmsmasters_project_author_box == 'true') {
	porter_pub_author_box(esc_html__('About author', 'porter-pub'), 'h2', 'h4');
}


if ($project_tags) {
	$tgsarray = array();
	
	
	foreach ($project_tags as $tagone) {
		$tgsarray[] = $tagone->term_id;
	}
} else {
	$tgsarray = '';
}


if ($cmsmasters_project_more_posts != 'hide') {
	porter_pub_related( 
		'h2', 
		esc_html__('More projects', 'porter-pub'), 
		esc_html__('No projects found', 'porter-pub'), 
		$cmsmasters_project_more_posts, 
		$tgsarray, 
		$cmsmasters_option['porter-pub' . '_portfolio_more_projects_count'], 
		$cmsmasters_option['porter-pub' . '_portfolio_more_projects_pause'], 
		'project', 
		'pj-tags' 
	);
}


comments_template();

