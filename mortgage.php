<?php

    /*
    * Plugin Name: Mortgage Calculator STIT
    * Plugin URI: https://softtechiit.com
    * Description: Mortgage Calculator Api
    * Author: mtm-sujon
    * Author URI: https://github.com/mtmsujon
    * Version: 1.0.0
    */


    if ( ! defined( 'ABSPATH' ) )
    {
        exit; // Exit if accessed directly
    }

    define('PLUGIN_URL', plugin_dir_path( __FILE__ ));
    define('PLUGIN_URL_INCLUDE', PLUGIN_URL.'/include');

    if(file_exists(PLUGIN_URL_INCLUDE. '/mortgage-calculator.php')){
        require_once(PLUGIN_URL_INCLUDE. '/mortgage-calculator.php');
    }
    if(file_exists(PLUGIN_URL_INCLUDE. '/api.php')){
        require_once(PLUGIN_URL_INCLUDE. '/api.php');
    }

  
