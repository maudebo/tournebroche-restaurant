<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';


add_filter( 'wc_product_sku_enabled', '__return_false' );

// * * * * * *  ============================================================================== * * * * * *
// * * * * * *   Fonctions pour personnaliser les onglets (tabs) dans les fiches des produits  * * * * * *
// * * * * * *  ============================================================================== * * * * * *

add_filter( 'woocommerce_product_tabs', 'woo_custom_onglet_produits', 98 );

function woo_custom_onglet_produits( $onglets ) {

    // Enlever les onglets par défaut
    unset( $onglets['description'] );
    unset( $onglets['reviews'] );
    unset( $onglets['additional_information'] );

    // Ajouter les nouveaux onglets
    $onglets['onglet_coupe'] = array(
        'title'     => __( 'Coupe', 'woocommerce' ),
        'priority'  => 100,
        'callback'  => 'woo_tab_content_coupe'
    );
    $onglets['onglet_qualite_boeuf'] = array(
        'title'     => __( 'Qualité de boeuf', 'woocommerce' ),
        'priority'  => 110,
        'callback'  => 'woo_tab_content_qualite_boeuf'
    );
    $onglets['onglet_conseils_cuisson'] = array(
        'title'     => __( 'Conseils de cuisson', 'woocommerce' ),
        'priority'  => 120,
        'callback'  => 'woo_tab_content_conseils_cuisson'
    );
    return $onglets;
}

function woo_tab_content_coupe( $onglets) {
    global $post;
    $produit_coupe = get_post_meta( $post->ID, 'coupe', true );
    if ( ! empty( $produit_coupe ) ) {
        echo '<h2>' . esc_html__( 'Coupe', 'woocommerce' ) . '</h2>';
        echo apply_filters( 'the_content', $produit_coupe );

    }
}
function woo_tab_content_qualite_boeuf() {
    global $post;
    $produit_qualite_boeuf = get_post_meta( $post->ID, 'qualite_de_boeuf', true );
    if ( ! empty( $produit_qualite_boeuf ) ) {
        echo '<h2>' . esc_html__( 'Qualités de boeuf', 'woocommerce' ) . '</h2>';
        echo apply_filters( 'the_content', $produit_qualite_boeuf );
    }
}
function woo_tab_content_conseils_cuisson() {
    global $post;
    $product_conseils_cuisson = get_post_meta( $post->ID, 'conseils_de_cuisson', true );
    if ( ! empty( $product_conseils_cuisson ) ) {
        echo '<h2>' . esc_html__( 'Conseils de cuisson', 'woocommerce' ) . '</h2>';
        echo apply_filters( 'the_content', $product_conseils_cuisson );
    }
}

