<?php
require 'C:\xampp\htdocs\dimsum-shop\wp-load.php';
$args = array('post_type' => 'product', 'posts_per_page' => -1);
$loop = new WP_Query($args);
if (!$loop->have_posts()) {
    echo "No products found.\n";
}
while ($loop->have_posts()) {
    $loop->the_post();
    global $product;
    echo $product->get_name() . ' - ID: ' . $product->get_id() . "\n";
}
wp_reset_query();
?>
