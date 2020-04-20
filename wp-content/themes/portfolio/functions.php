<?php
  
  function addAssets(){

        wp_enqueue_style("bootstrap",get_template_directory_uri(  )."/assets/css/bootstrap.min.css");
        wp_enqueue_style("main",get_template_directory_uri(  )."/assets/css/main.css");
        wp_enqueue_script("bootstrap",get_template_directory_uri(  )."/assets/js/bootstrap.min.js",[
            'jquery'
        ]);

    }

    add_action( "wp_enqueue_scripts" ,"addAssets");
    add_theme_support("post-thumbnails" );


    function my_cptui_add_post_types_to_archives( $query ) {
        // We do not want unintended consequences.
        if ( is_admin() || ! $query->is_main_query() ) {
            return;    
        }
    
        if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
            $cptui_post_types = cptui_get_post_type_slugs();
    
            $query->set(
                'post_type',
                array_merge(
                    array( 'post' ),
                    $cptui_post_types
                )
            );
        }
    }
    add_filter( 'pre_get_posts', 'my_cptui_add_post_types_to_archives' );

    add_theme_support("menus");
    register_nav_menus(array(
        'main-menu'=>"Main Menu"
    ));

  
?>