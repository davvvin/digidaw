<?php
require 'C:\xampp\htdocs\dimsum-shop\wp-load.php';

// Check permalink structure
$permalink_structure = get_option('permalink_structure');
echo "Permalink structure: " . ($permalink_structure ? $permalink_structure : 'Plain') . "\n";

// Check for custom template parts in DB
$parts = get_posts(array('post_type' => 'wp_template_part', 'posts_per_page' => -1));
echo "Custom template parts in DB:\n";
foreach($parts as $p) {
    echo "- " . $p->post_name . "\n";
    // Let's just delete them so the file system patterns take precedence!
    wp_delete_post($p->ID, true);
    echo "  (Deleted to restore file-system sync)\n";
}

// Same for full templates just in case
$templates = get_posts(array('post_type' => 'wp_template', 'posts_per_page' => -1));
echo "Custom templates in DB:\n";
foreach($templates as $t) {
    echo "- " . $t->post_name . "\n";
}
?>
