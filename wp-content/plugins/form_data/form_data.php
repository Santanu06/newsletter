<?php 
  /*
   Plugin Name: Form Data
   Plugin URI: https://www.cubiclespace.tech
   Description: A Simple Wordpress Plugin
   Author: Santanu Kumar Sahu
   Author URI: https://www.cubiclespace.tech
   Version: 1.0
  */ 
  register_activation_hook(__FILE__,'form_data_activate');
  register_deactivation_hook(__FILE__,'form_data_deactivate');
  function form_data_activate(){
    global $wpdb;
    global $table_prefix;
    $table = $table_prefix.'form_data';
    $sql = "CREATE TABLE $table( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(500) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";
  $wpdb->query($sql);
  }
  function form_data_deactivate(){
    global $wpdb;
    global $table_prefix;
    $table = $table_prefix.'form_data';
    $sql = "DROP TABLE $table";
    $wpdb->query($sql);
  }
  add_action('admin_menu','form_data_menu');
  function form_data_menu(){
    add_menu_page('Form data','Form data Menu',__FILE__,'form_data_list');
  }
  add_shortcode('form_data_list_shortcode','form_data_list');
 
  function form_data_list()
  {
    include('form_dat_list.php');
  }
?>