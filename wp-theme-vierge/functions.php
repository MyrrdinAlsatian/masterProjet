<?php
function wp_import_css_js() {
/**  Ajout css  **/
/** 1 param id unique,2 param lien */
    wp_enqueue_style( 'bootstrap',
        get_template_directory_uri() . '/styles/bootstrap4/bootstrap.min.css' );

/** Ajout js **/

    /** le troisieme paramêtre corespond au dépendance, le 4 la version et le dernier paramtre correspond a l'inclusion dans le footer */
    wp_enqueue_script(
         'Jqury', /** id unique */
          get_template_directory_uri() . '/js/jquery-3.2.1.min.js',/** lien vers la ressource**/
          array(), /** dependance  peut être null */
           '3.2.1', /** version peut être null  */
            true ); /*** inclusion dans le footer true ou false (default) */
}

/** appel script appel alors function créé **/
add_action( 'wp_enqueue_scripts', 'wp_import_css_js');


add_action('init', 'ajouter_menu'); // au chargement appel cette function

function ajouter_menu() {
register_nav_menu('main_menu', 'Menu principal'); // function qui dit a wp qu'il y a un menu
//register_nav_menu('id unique du menu', 'Libellé comment  elle apparetra sur l'admin)
}

add_theme_support('post-thumbnails'); // activer les images mise en avant
