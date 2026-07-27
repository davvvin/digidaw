<?php
require 'C:\xampp\htdocs\dimsum-shop\wp-load.php';

$pages = array(
    array(
        'post_title'    => 'Tentang Kami',
        'post_content'  => '<!-- wp:paragraph --><p>Selamat datang di Dimsum Shop. Kami menyajikan dimsum autentik yang dibuat segar setiap hari.</p><!-- /wp:paragraph -->',
        'post_status'   => 'publish',
        'post_type'     => 'page',
    ),
    array(
        'post_title'    => 'Kontak',
        'post_content'  => '<!-- wp:paragraph --><p>Hubungi kami melalui WhatsApp di +62 812-3456-7890 atau email ke hello@dimsumshop.id.</p><!-- /wp:paragraph -->',
        'post_status'   => 'publish',
        'post_type'     => 'page',
    ),
    array(
        'post_title'    => 'Blog Dimsum',
        'post_content'  => '', // Usually empty, used as posts page
        'post_status'   => 'publish',
        'post_type'     => 'page',
    )
);

foreach ($pages as $page) {
    // Check if page already exists by title
    $page_check = get_page_by_title($page['post_title']);
    
    if (!isset($page_check->ID)) {
        $new_page_id = wp_insert_post($page);
        if(!is_wp_error($new_page_id)){
            echo "Created page: " . $page['post_title'] . "\n";
        }
    } else {
        echo "Page already exists: " . $page['post_title'] . "\n";
    }
}
?>
