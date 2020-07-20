<?php
/**
 * The template for displaying 404 pages (Not Found).
 * @package Blogger Hub
 */

get_header(); ?>

<main id="maincontent" role="main">
	<div class="container">
	    <div class="page-content">
			<div class="notfound feature-box">
				<?php if(get_theme_mod('blogger_hub_404_title','404 Not Found')){ ?>
					<h1><?php echo esc_html( get_theme_mod('blogger_hub_404_title',__('404 Not Found', 'blogger-hub' )) ); ?></h1>
				<?php }?>
				<?php if(get_theme_mod('blogger_hub_404_title','404 Not Found')){ ?>
					<div class="read-moresec">
		        		<a href="<?php echo esc_url( home_url() ); ?>" class="button"><?php echo esc_html( get_theme_mod('blogger_hub_404_button_label',__('Return to the home page', 'blogger-hub' )) ); ?><span class="screen-reader-text"><?php esc_html_e('Return to the home page','blogger-hub'); ?></span></a>
					</div>
				<?php }?>
			</div>
			<div class="clearfix"></div>
	    </div>
	</div>
</main>
	
<?php get_footer(); ?>