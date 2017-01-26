<?php 
	get_header();
    setup_postdata($post);

	$full_width = '';
	if(get_field('full_width','options'))
		$full_width = 'no-padding';
	if(get_field('full_width'))
		$full_width = 'no-padding';

	if(get_field('page_background_image')){
		  echo '<style>
			  		.stoned-container.main{
				    background-image: url('.get_field('page_background_image').');
				}
				</style>';
	}

	if(get_field('custom_css'))
	{
	  echo '<style>';
	  echo get_field('custom_css');
	  echo '</style>';
	}

	$container = get_field('enable_default_container_1200px');
	$container_type = 'stoned-container';
	if($container){
		$container_type = 'container';
	}
?>
<?php if(get_field('sub_header_content')): ?>
	<?php 
	$subheader_style = '';
	if(get_field('sub_header_background_image')){
		$subheader_style = 'background-image: url("'.get_field('sub_header_background_image').'");';
	} elseif(get_field('sub_header_background_color')){
		$subheader_style = 'background-color: '.get_field('sub_header_background_color').';';
	}
	?>
<div class="subheader" style="<?php echo esc_attr($subheader_style);?>; padding: 40px 0;">
	<div class="stoned-container">
		<?php 
			remove_filter('acf_the_content', 'wpautop');
			echo get_field('sub_header_content');
			add_filter('acf_the_content', 'wpautop');
		?>
	</div>
</div>
<?php endif;?>
<div id="<?php echo esc_attr($post->post_name); ?>">
	<div class="main container margin-top-lg">
		<?php if(get_field('display_page_title')):?>
			<h3 class="collective-title"><?php the_title(); ?></h3>
		<?php endif;?>	
		<div class="row">
			<?php $disable_sidebar = get_field('disable_sidebar_in_shop_pages','options');?>

			<?php if($disable_sidebar):?>
			<div class="col-md-12">
				<?php wc_print_notices();?>
				<?php woocommerce_content(); ?>	
			</div>	
			<?php else : ?>
				<div class="col-md-9">
					<?php wc_print_notices();?>
					<?php woocommerce_content(); ?>
				</div>
				<div class="col-md-3">
					<?php  if ( !function_exists('dynamic_sidebar') ||  !dynamic_sidebar('sidebar-6') ) ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer();?>