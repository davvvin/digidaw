<?php
require 'C:\xampp\htdocs\dimsum-shop\wp-load.php';

// 1. Set Blog Dimsum as the posts page
$blog_page = get_page_by_title('Blog Dimsum');
if ($blog_page) {
    update_option('show_on_front', 'page');
    // keep home as whatever it was, usually we need a front page too but maybe the user hasn't set one up yet. 
    // Wait, by default block themes use the front-page.html template. Let's just set page_for_posts.
    update_option('page_for_posts', $blog_page->ID);
    echo "Blog page configured.\n";
}

// 2. Flesh out "Tentang Kami" (About Us)
$about_page = get_page_by_title('Tentang Kami');
if ($about_page) {
    $about_content = '
<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/banner-bg-img.png","dimRatio":60,"overlayColor":"base-2","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:100px;padding-bottom:100px"><span aria-hidden="true" class="wp-block-cover__background has-base-2-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/banner-bg-img.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"60px"}},"textColor":"base"} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-size:60px">Cerita Kami</h1>
<!-- /wp:heading -->
</div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:60px;padding-bottom:60px">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"24px"}}} -->
<p class="has-text-align-center" style="font-size:24px">Berawal dari resep turun-temurun, Dimsum Shop hadir untuk membawa cita rasa autentik Kanton ke tengah keluarga Anda. Setiap lipatan dimsum dibuat dengan ketelitian dan bahan paling segar.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"seafood-shop/sustainability-section"} /-->
';
    
    wp_update_post(array(
        'ID' => $about_page->ID,
        'post_content' => $about_content
    ));
    echo "Tentang Kami page fleshed out.\n";
}

// 3. Flesh out "Kontak"
$contact_page = get_page_by_title('Kontak');
if ($contact_page) {
    $contact_content = '
<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/banner-bg-img.png","dimRatio":70,"overlayColor":"secondary","align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:100px;padding-bottom:100px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/banner-bg-img.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"60px"}},"textColor":"base"} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="font-size:60px">Hubungi Kami</h1>
<!-- /wp:heading -->
</div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:80px;padding-bottom:80px">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kami Ingin Mendengar dari Anda!</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Punya pertanyaan tentang pesanan besar, katering, atau hanya ingin menyapa? Jangan ragu untuk menghubungi tim kami.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><strong><i class="fa-solid fa-phone"></i> Telepon/WhatsApp:</strong> +62 812-3456-7890</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><strong><i class="fa-solid fa-envelope"></i> Email:</strong> hello@dimsumshop.id</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><strong><i class="fa-solid fa-location-dot"></i> Alamat:</strong> Jl. Kuliner No. 8, Jakarta, Indonesia</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Jam Operasional</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><strong>Senin - Minggu:</strong> 08:00 - 20:00 WIB</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><em>Pengiriman di hari yang sama untuk pesanan sebelum jam 16:00 WIB.</em></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"seafood-shop/faq-section"} /-->
';
    
    wp_update_post(array(
        'ID' => $contact_page->ID,
        'post_content' => $contact_content
    ));
    echo "Kontak page fleshed out.\n";
}
?>
