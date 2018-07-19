<?php
/*
Plugin Name: WP Custom post type
Plugin URI: https://github.com/Pacomarchante/WP-Custom-post-type
Description: Ejemplo de Custom post type para WordPress.
Author: Paco Marchante
Author URI: https://github.com/Pacomarchante/

Version: 1.0.0
License: GPLv2 or later.
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * WP Custom post type
 *
 * @since      1.0.0
 * 
 * Creación del Custom post type
 * Codex WordPress: https://codex.wordpress.org/Post_Types
 * Ayuda para generar Custom post type: https://generatewp.com/post-type/
 */

add_action( "init" , "pc_cpt_ejemplo" );

function pc_cpt_ejemplo()
{
    register_post_type( "ejemplos", // Identificador del Custom post type
                       [
                           "labels" => [

                               "name"          => __( "Ejemplos" , "ejemplo"),
                               "singular_name" => __( "Ejemplo" , "ejemplo"),
						   
							],
						   
                           "public"      => true,
                           "has_archive" => true,
                           "menu_icon"   => "dashicons-images-alt",
                           "supports"    => array( "title" , "thumbnail" , "excerpt" , "editor" ),	// Codex WordPress:	https://codex.wordpress.org/Function_Reference/post_type_supports
                           "rewrite"     => array( "slug" => "ejemplos-wordpress" ),
                       ]
    );
}

/**
 * WP Custom post type
 *
 * @since      1.0.0
 * 
 * Esta función permite cambiar el texto del placeholder que aparece en el título de la entrada personalizada.
 * 
 */

add_filter( "enter_title_here" , "pc_cpt_ejemplos_placeholder_titulo" );

function pc_cpt_ejemplos_placeholder_titulo( $title ){

    $screen = get_current_screen();
  
    if  ( "ejemplos" == $screen->post_type ) {	// Cambiar "ejemplos" por el identificador que elijamos para nuestro Custom post type

        $title = __( "Nombre del ejemplo" , "ejemplo" );
	 
	}
  
	return $title;
	
}