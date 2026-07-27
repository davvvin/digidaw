<?php
require 'C:\xampp\htdocs\dimsum-shop\wp-load.php';

// Revert show_on_front to posts
update_option('show_on_front', 'posts');
echo "Fixed: show_on_front set to posts.\n";
?>
