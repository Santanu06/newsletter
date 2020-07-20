<?php

  add_action('admin_menu','add_news_letter_menu');

  function add_news_letter_menu()
  {
    add_menu_page(
            'News Letter Page',
            'News Letter Menu',
            'manage_options',
            __FILE__,'new_letter_page'
            // 'news-letter/includes/nl-news-letter-page.php'
    );
    add_shortcode('new_letter_shortcode','new_letter_page');
    function new_letter_page()
    {
      include('nl-news-letter-page.php');
    }
    
  }