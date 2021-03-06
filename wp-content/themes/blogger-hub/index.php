<?php
/**
 * The template for displaying home page.
 * @package Blogger Hub
 */
get_header(); ?>

<main id="maincontent" role="main">
    <?php
    $blogger_hub_left_right = get_theme_mod( 'blogger_hub_layout','Right Sidebar');
    if($blogger_hub_left_right == 'Right Sidebar'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
        		<div class="container"> 
                    <div class="row">       
                        <div class="col-lg-9 col-md-9">                
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content', get_post_format() );           
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                        'next_text'          => __( 'Next page', 'blogger-hub' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div>      
                	    <div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
                    </div>
          		    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    <?php }else if($blogger_hub_left_right == 'Left Sidebar'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
                        <div class="col-lg-9 col-md-9" >                
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content', get_post_format() );           
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                        'next_text'          => __( 'Next page', 'blogger-hub' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div>            
                    </div>        
                </div>
            </div>
        </section>
    <?php }else if($blogger_hub_left_right == 'One Column'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">               
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content', get_post_format() );           
                        endwhile;
                          else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                'next_text'          => __( 'Next page', 'blogger-hub' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>                  
                </div>
            </div>
        </section>
    <?php }else if($blogger_hub_left_right == 'Three Columns'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="row">
                        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                        <div class="col-lg-6 col-md-6">                
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content', get_post_format() );           
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                        'next_text'          => __( 'Next page', 'blogger-hub' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div> 
                        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                    </div>               
                </div>
            </div>
        </section>
    <?php }else if($blogger_hub_left_right == 'Four Columns'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="row">
                        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                        <div class="col-lg-3 col-md-3">                
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content', get_post_format() );           
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                        'next_text'          => __( 'Next page', 'blogger-hub' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div> 
                        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                        <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
                    </div>
                </div>
            </div>
        </section>
    <?php }else if($blogger_hub_left_right == 'Grid Layout'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="row">
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/grid-layout' );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                    </div>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                'next_text'          => __( 'Next page', 'blogger-hub' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>                   
                </div>
            </div>
        </section>
    <?php }else{?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">   
                    <div class="row">     
                        <div class="col-lg-9 col-md-9">                
                            <?php if ( have_posts() ) :
                                /* Start the Loop */
                                while ( have_posts() ) : the_post();
                                    get_template_part( 'template-parts/content', get_post_format() );           
                                endwhile;
                                  else :
                                    get_template_part( 'no-results' ); 
                                endif; 
                            ?>
                            <div class="navigation">
                                <?php
                                    // Previous/next page navigation.
                                    the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                        'next_text'          => __( 'Next page', 'blogger-hub' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                                    ) );
                                ?>
                                <div class="clearfix"></div>
                            </div>
                        </div>      
                        <div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    <?php } ?>
</main>

<?php get_footer(); ?>