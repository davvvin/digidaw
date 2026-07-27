<?php
require 'C:\xampp\htdocs\dimsum-shop\wp-load.php';

// Enable pretty permalinks
update_option('permalink_structure', '/%postname%/');
global $wp_rewrite;
$wp_rewrite->init();
$wp_rewrite->flush_rules();

echo "Pretty permalinks enabled and flushed.\n";
?>
