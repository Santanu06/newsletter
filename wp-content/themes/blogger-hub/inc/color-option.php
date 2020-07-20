<?php
	
	$blogger_hub_first_theme_color = get_theme_mod('blogger_hub_first_theme_color');

	$blogger_hub_second_theme_color = get_theme_mod('blogger_hub_second_theme_color');

	$blogger_hub_custom_css = '';

	if($blogger_hub_first_theme_color != false){
		$blogger_hub_custom_css .='input[type="submit"], a.button, #footer input[type="submit"], #comments input[type="submit"].submit, #comments a.comment-reply-link:hover, #sidebar input[type="submit"], #footer input[type="submit"], span.page-number,span.page-links-title, .nav-menu ul ul a:hover, h1.page-title, h1.search-title, #category_post h1, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li , .blogbtn a, .inner, .footerinner .tagcloud a, .bradcrumbs a, #sidebar h3, #sidebar .tagcloud a:hover, .pagination .current, span.meta-nav, #comments a.comment-reply-link, .woocommerce span.onsale {'; 
			$blogger_hub_custom_css .='background-color: '.esc_html($blogger_hub_first_theme_color).';';
		$blogger_hub_custom_css .='}';
	}
	if($blogger_hub_first_theme_color != false){
		$blogger_hub_custom_css .=' a, .nav-menu ul ul a, .nav-menu li a:hover, .social-links i:hover, span.post-title, .logo h1 a, .logo p.site-title a, .logo p, .nav-menu ul li a:active, .nav-menu ul li a:hover{';
			$blogger_hub_custom_css .='color: '.esc_html($blogger_hub_first_theme_color).';';
		$blogger_hub_custom_css .='}';
	}
	if($blogger_hub_first_theme_color != false){
		$blogger_hub_custom_css .='  #header .nav ul li:hover > ul{';
			$blogger_hub_custom_css .='border-color: '.esc_html($blogger_hub_first_theme_color).';';
		$blogger_hub_custom_css .='}';
	}
	if($blogger_hub_first_theme_color != false){
		$blogger_hub_custom_css .=' #sidebar h3:after, #category_post h1:after {';
			$blogger_hub_custom_css .='border-top-color: '.esc_html($blogger_hub_first_theme_color).';';
		$blogger_hub_custom_css .='}';
	}


	if($blogger_hub_second_theme_color != false){
		$blogger_hub_custom_css .=' .nav-menu ul ul a, body{';
			$blogger_hub_custom_css .='background-color: '.esc_html($blogger_hub_second_theme_color).';';
		$blogger_hub_custom_css .='}';
	}
	if($blogger_hub_second_theme_color != false){
		$blogger_hub_custom_css .='
		@media screen and (max-width:1000px){
			.nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a, .nav-menu ul li a:hover{';
			$blogger_hub_custom_css .='color: '.esc_html($blogger_hub_second_theme_color).';';
		$blogger_hub_custom_css .='} }';
	}
	if($blogger_hub_second_theme_color != false){
		$blogger_hub_custom_css .='.nav-menu ul ul{';
			$blogger_hub_custom_css .='border-color: '.esc_html($blogger_hub_second_theme_color).';';
		$blogger_hub_custom_css .='}';
	}
	if($blogger_hub_second_theme_color != false){
		$blogger_hub_custom_css .='.nav-menu ul ul a:hover, .nav-menu ul li a:hover,  		.nav-menu li a:hover{';
			$blogger_hub_custom_css .='border-left-color: '.esc_html($blogger_hub_second_theme_color).';';
		$blogger_hub_custom_css .='}';
	}

	// Layout Options
	$blogger_hub_theme_layout = get_theme_mod( 'blogger_hub_theme_layout_options','Default Theme');
    if($blogger_hub_theme_layout == 'Default Theme'){
		$blogger_hub_custom_css .='body{';
			$blogger_hub_custom_css .='max-width: 100%;';
		$blogger_hub_custom_css .='}';
	}else if($blogger_hub_theme_layout == 'Container Theme'){
		$blogger_hub_custom_css .='body{';
			$blogger_hub_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$blogger_hub_custom_css .='}';
	}else if($blogger_hub_theme_layout == 'Box Container Theme'){
		$blogger_hub_custom_css .='body{';
			$blogger_hub_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$blogger_hub_custom_css .='}';
		$blogger_hub_custom_css .='.search-box label{';
			$blogger_hub_custom_css .=' width: 72%; ';
		$blogger_hub_custom_css .='}';
	}

	/*--------- , .preloaderader Color Option -------*/
	$blogger_hub_preloader_color = get_theme_mod('blogger_hub_preloader_color');

	if($blogger_hub_preloader_color != false){
		$blogger_hub_custom_css .=' .tg-loader{';
			$blogger_hub_custom_css .='border-color: '.esc_html($blogger_hub_preloader_color).';';
		$blogger_hub_custom_css .='} ';
		$blogger_hub_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$blogger_hub_custom_css .='background-color: '.esc_html($blogger_hub_preloader_color).';';
		$blogger_hub_custom_css .='} ';
	}

	$blogger_hub_preloader_bg_color = get_theme_mod('blogger_hub_preloader_bg_color');

	if($blogger_hub_preloader_bg_color != false){
		$blogger_hub_custom_css .=' #overlayer, .preloader{';
			$blogger_hub_custom_css .='background-color: '.esc_html($blogger_hub_preloader_bg_color).';';
		$blogger_hub_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$blogger_hub_top_button_padding = get_theme_mod('blogger_hub_top_button_padding');
	$blogger_hub_bottom_button_padding = get_theme_mod('blogger_hub_bottom_button_padding');
	$blogger_hub_left_button_padding = get_theme_mod('blogger_hub_left_button_padding');
	$blogger_hub_right_button_padding = get_theme_mod('blogger_hub_right_button_padding');
	if($blogger_hub_top_button_padding != false || $blogger_hub_bottom_button_padding != false || $blogger_hub_left_button_padding != false || $blogger_hub_right_button_padding != false){
		$blogger_hub_custom_css .='.blogbtn a, #comments input[type="submit"].submit{';
			$blogger_hub_custom_css .='padding-top: '.esc_html($blogger_hub_top_button_padding).'px; padding-bottom: '.esc_html($blogger_hub_bottom_button_padding).'px; padding-left: '.esc_html($blogger_hub_left_button_padding).'px; padding-right: '.esc_html($blogger_hub_right_button_padding).'px; display:inline-block;';
		$blogger_hub_custom_css .='}';
	}

	$blogger_hub_button_border_radius = get_theme_mod('blogger_hub_button_border_radius',4);
	$blogger_hub_custom_css .='.blogbtn a, #comments input[type="submit"].submit, .hvr-sweep-to-right:before{';
		$blogger_hub_custom_css .='border-radius: '.esc_html($blogger_hub_button_border_radius).'px;';
	$blogger_hub_custom_css .='}';

	/*----------- Copyright css -----*/
	$blogger_hub_copyright_top_padding = get_theme_mod('blogger_hub_top_copyright_padding');
	$blogger_hub_copyright_bottom_padding = get_theme_mod('blogger_hub_top_copyright_padding');
	if($blogger_hub_copyright_top_padding != false || $blogger_hub_copyright_bottom_padding != false){
		$blogger_hub_custom_css .='.inner{';
			$blogger_hub_custom_css .='padding-top: '.esc_html($blogger_hub_copyright_top_padding).'px; padding-bottom: '.esc_html($blogger_hub_copyright_bottom_padding).'px; ';
		$blogger_hub_custom_css .='}';
	} 

	$blogger_hub_copyright_alignment = get_theme_mod('blogger_hub_copyright_alignment', 'center');
	if($blogger_hub_copyright_alignment == 'center' ){
		$blogger_hub_custom_css .='#footer .copyright p{';
			$blogger_hub_custom_css .='text-align: '. $blogger_hub_copyright_alignment .';';
		$blogger_hub_custom_css .='}';
	}elseif($blogger_hub_copyright_alignment == 'left' ){
		$blogger_hub_custom_css .='#footer .copyright p{';
			$blogger_hub_custom_css .=' text-align: '. $blogger_hub_copyright_alignment .';';
		$blogger_hub_custom_css .='}';
	}elseif($blogger_hub_copyright_alignment == 'right' ){
		$blogger_hub_custom_css .='#footer .copyright p{';
			$blogger_hub_custom_css .='text-align: '. $blogger_hub_copyright_alignment .';';
		$blogger_hub_custom_css .='}';
	}

	$blogger_hub_copyright_font_size = get_theme_mod('blogger_hub_copyright_font_size');
	$blogger_hub_custom_css .='#footer .copyright p{';
		$blogger_hub_custom_css .='font-size: '.esc_html($blogger_hub_copyright_font_size).'px;';
	$blogger_hub_custom_css .='}';

	/*------ Woocommerce ----*/
	$blogger_hub_product_border = get_theme_mod('blogger_hub_product_border',true);

	if($blogger_hub_product_border == false){
		$blogger_hub_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$blogger_hub_custom_css .='border: 0;';
		$blogger_hub_custom_css .='}';
	}

	$blogger_hub_product_top = get_theme_mod('blogger_hub_product_top_padding', 10);
	$blogger_hub_product_bottom = get_theme_mod('blogger_hub_product_bottom_padding', 10);
	$blogger_hub_product_left = get_theme_mod('blogger_hub_product_left_padding', 10);
	$blogger_hub_product_right = get_theme_mod('blogger_hub_product_right_padding', 10);

	$blogger_hub_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$blogger_hub_custom_css .='padding-top: '.esc_html($blogger_hub_product_top).'px; padding-bottom: '.esc_html($blogger_hub_product_bottom).'px; padding-left: '.esc_html($blogger_hub_product_left).'px; padding-right: '.esc_html($blogger_hub_product_right).'px;';
	$blogger_hub_custom_css .='}';

	$blogger_hub_product_border_radius = get_theme_mod('blogger_hub_product_border_radius');

	$blogger_hub_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$blogger_hub_custom_css .='border-radius: '.esc_html($blogger_hub_product_border_radius).'px;';
	$blogger_hub_custom_css .='}';
	

	/*----- WooCommerce button css --------*/
	$blogger_hub_product_button_top = get_theme_mod('blogger_hub_product_button_top_padding',10);
	$blogger_hub_product_button_bottom = get_theme_mod('blogger_hub_product_button_bottom_padding',10);
	$blogger_hub_product_button_left = get_theme_mod('blogger_hub_product_button_left_padding',15);
	$blogger_hub_product_button_right = get_theme_mod('blogger_hub_product_button_right_padding',15);

	$blogger_hub_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$blogger_hub_custom_css .='padding-top: '.esc_html($blogger_hub_product_button_top).'px; padding-bottom: '.esc_html($blogger_hub_product_button_bottom).'px; padding-left: '.esc_html($blogger_hub_product_button_left).'px; padding-right: '.esc_html($blogger_hub_product_button_right).'px;';
	$blogger_hub_custom_css .='}';

	$blogger_hub_product_button_border_radius = get_theme_mod('blogger_hub_product_button_border_radius');

	$blogger_hub_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
		$blogger_hub_custom_css .='border-radius: '.esc_html($blogger_hub_product_button_border_radius).'px;';
	$blogger_hub_custom_css .='}';

	/*----- WooCommerce product sale css --------*/
	$blogger_hub_product_sale_top = get_theme_mod('blogger_hub_product_sale_top_padding');
	$blogger_hub_product_sale_bottom = get_theme_mod('blogger_hub_product_sale_bottom_padding');
	$blogger_hub_product_sale_left = get_theme_mod('blogger_hub_product_sale_left_padding');
	$blogger_hub_product_sale_right = get_theme_mod('blogger_hub_product_sale_right_padding');

	$blogger_hub_custom_css .='.woocommerce span.onsale {';
		$blogger_hub_custom_css .='padding-top: '.esc_html($blogger_hub_product_sale_top).'px; padding-bottom: '.esc_html($blogger_hub_product_sale_bottom).'px; padding-left: '.esc_html($blogger_hub_product_sale_left).'px; padding-right: '.esc_html($blogger_hub_product_sale_right).'px;';
	$blogger_hub_custom_css .='}';

	$blogger_hub_product_sale_border_radius = get_theme_mod('blogger_hub_product_sale_border_radius',50);
	
	$blogger_hub_custom_css .='.woocommerce span.onsale {';
		$blogger_hub_custom_css .='border-radius: '.esc_html($blogger_hub_product_sale_border_radius).'px;';
	$blogger_hub_custom_css .='}';

	$blogger_hub_menu_case = get_theme_mod('blogger_hub_product_sale_position', 'Right');
	if($blogger_hub_menu_case == 'Right' ){
		$blogger_hub_custom_css .='.woocommerce ul.products li.product .onsale{';
			$blogger_hub_custom_css .=' left:auto; right:0;';
		$blogger_hub_custom_css .='}';
	}elseif($blogger_hub_menu_case == 'Left' ){
		$blogger_hub_custom_css .='.woocommerce ul.products li.product .onsale{';
			$blogger_hub_custom_css .=' left:-10px; right:auto;';
		$blogger_hub_custom_css .='}';
	}