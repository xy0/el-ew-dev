<?php /* Template Name: Home */ ?>
<?php get_header() ?>
<?php ter_template_comment(__FILE__) ?>
<?php
	$page_background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' )[0];
	if($page_background == ''){
		$page_background = 'http://ew.fyn.host/wp-content/uploads/2017/05/tempbg.jpg';
	}
?>

<div class="ew-slider-bg" style="background-image:url('<?php echo $page_background; ?>');">
	<?php
		$args = array(
		  'name'        => 'homepage-slider',
		  'post_type'   => 'post',
		  'post_status' => 'publish',
		  'numberposts' => 1
		);
		$slider_post = get_posts($args);
		if( $slider_post ){
		  echo $slider_post[0]->post_content;
		}

	?>
</div>
<div id="main" class="container">
	<div id="main-row" class="row">
		<div id="primary" class="<?php echo TER_FULL_WIDTH_CLASS ?>">
			<div id="content" role="main">
				<?php the_post() ?>
				<?php get_template_part('content','home') ?>
			</div><!-- /#content -->
		</div><!-- /#primary -->
	</div><!-- /#main-row -->
</div><!-- /#main -->
<?php get_footer() ?>