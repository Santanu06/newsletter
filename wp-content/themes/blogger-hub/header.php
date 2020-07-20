<?php
/**
 * The Header for our theme.
 * @package Blogger Hub
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>

  <?php if(get_theme_mod('blogger_hub_preloader',true)){ ?>
    <?php if(get_theme_mod( 'blogger_hub_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
        <span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'blogger_hub_preloader_type') == 'Circle') {?>    
      <div class="preloader">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
  <?php }?>
  
  <header role="banner">
    <div id="header">
      <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'blogger-hub' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to Content', 'blogger-hub' ); ?></span></a>
      <div class="toggle-menu responsive-menu">
        <button onclick="blogger_hub_resMenu_open()"><i class="fas fa-bars"></i><?php esc_html_e('Menu','blogger-hub'); ?><span class="screen-reader-text"><?php esc_html_e('Menu','blogger-hub'); ?></span></button>
      </div>
      <div class="menu-sec <?php if( get_theme_mod( 'blogger_hub_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
        <div class="container">
          <div class="row">
            <div class="menubox <?php if(get_theme_mod('blogger_hub_show_search',true)) { ?>col-lg-8" <?php } else { ?>col-lg-10 <?php } ?>">
              <div id="sidelong-menu" class="nav side-nav">
                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'blogger-hub' ); ?>">
                  <?php 
                    wp_nav_menu( array( 
                      'theme_location' => 'primary',
                      'container_class' => 'main-menu-navigation clearfix' ,
                      'menu_class' => 'clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) ); 
                  ?>
                  <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="blogger_hub_resMenu_close()"><?php esc_html_e('Close Menu','blogger-hub'); ?><i class="fas fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','blogger-hub'); ?></span></a>
                </nav>
              </div>
            </div>
            <div class="<?php if(get_theme_mod('blogger_hub_show_search',true)) { ?>col-lg-2 col-md-7" <?php } else { ?>col-lg-2 col-md-12 <?php } ?>">
              <div class="social-links">
                <?php if( get_theme_mod( 'blogger_hub_facebook_url' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'blogger_hub_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'blogger-hub' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'blogger_hub_twitter_url' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'blogger_hub_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'blogger-hub' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'blogger_hub_insta_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'blogger_hub_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram', 'blogger-hub' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'blogger_hub_linkdin_url') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'blogger_hub_linkdin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin', 'blogger-hub' ); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'blogger_hub_youtube_url' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'blogger_hub_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube', 'blogger-hub' ); ?></span></a>
                <?php } ?>
              </div>
            </div>
            <?php if(get_theme_mod('blogger_hub_show_search',true) ){ ?>
              <div class="col-lg-2 col-md-5">
                <div class="search-box">
                  <?php get_search_form(); ?>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <main id="maincontent" role="main" class="logo header-image">
      <?php if ( has_custom_logo() ) : ?>
        <div class="site-logo"><?php the_custom_logo(); ?></div>
      <?php else: ?>
        <?php $blog_info = get_bloginfo( 'name' ); ?>
        <?php if ( ! empty( $blog_info ) ) : ?>
          <?php if ( is_front_page() && is_home() ) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php else : ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
          <?php endif; ?>
        <?php endif; ?>
        <?php
        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) :
          ?>
          <p class="site-description">
            <?php echo esc_html($description); ?>
          </p>
        <?php endif; ?>
      <?php endif; ?>
    </main>
  </header>