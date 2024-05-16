<?php
/**
 * Plugin Name: Admin Post View All
 * Description: Erhöht die Anzahl der angezeigten Beiträge auf der Admin-Seite.
 * Version: 1.0
 * Author: Volkan Sah
 */

function apva_set_posts_per_page($query) {
    if (is_admin() && $query->is_main_query() && ( $query->get('post_type') == 'post' || $query->get('post_type') == 'page' || $query->get('post_type') == 'aicc_content')) {
        $query->set('posts_per_page', 200); // -1 shows all posts for shared host use maximum 50.
    }
}
add_action('pre_get_posts', 'apva_set_posts_per_page');
