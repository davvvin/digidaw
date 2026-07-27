<?php
/**
 * Title: Header
 * Slug: seafood-shop/header
 * Categories: header, seafood-shop
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"backgroundColor":"base","layout":{"type":"constrained","justifyContent":"center","contentSize":"100%"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"header-top","backgroundColor":"base-2","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group header-top has-base-2-background-color has-background"><!-- wp:group {"className":"header-top-inner","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"83%"}} -->
<div class="wp-block-group header-top-inner has-base-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:columns {"verticalAlignment":"center","className":"header-top-boxes"} -->
<div class="wp-block-columns are-vertically-aligned-center header-top-boxes"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"header-phone-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-phone-box" style="flex-basis:40%"><!-- wp:group {"className":"header-phone-inner","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group header-phone-inner"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color" style="font-size:14px"><a href="tel:+6281234567890" data-type="tel" data-id="tel:+6281234567890"><i class="fa-solid fa-phone"></i><?php echo esc_html__( '+62 812-3456-7890', 'seafood-shop' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px"}},"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color has-link-color" style="font-size:14px"><a href="mailto:hello@dimsumshop.id"><i class="fa-regular fa-envelope"></i><?php echo esc_html__( 'hello@dimsumshop.id', 'seafood-shop' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-logo-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo-box" style="flex-basis:20%"><!-- wp:site-title {"level":0,"textAlign":"center","style":{"typography":{"fontSize":"28px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"header-top-right"} -->
<div class="wp-block-column is-vertically-aligned-center header-top-right" style="flex-basis:40%"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px","textTransform":"capitalize"}},"textColor":"secondary"} -->
<p class="has-text-align-right has-secondary-color has-text-color has-link-color" style="font-size:14px;text-transform:capitalize"><i class="fa-solid fa-bullhorn"></i><?php echo esc_html__( 'Pesan Sebelum Jam 4 Sore untuk Pengiriman Dihari yang Sama!', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"header-bottom","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"83%"}} -->
<div class="wp-block-group header-bottom has-secondary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:20px;padding-bottom:20px"><!-- wp:columns {"verticalAlignment":"center","className":"header-btm-boxes","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center header-btm-boxes"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"header-btm-left"} -->
<div class="wp-block-column is-vertically-aligned-center header-btm-left" style="flex-basis:40%"><!-- wp:navigation {"textColor":"text-1","icon":"menu","overlayBackgroundColor":"primary","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"spacing":{"blockGap":"25px"},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"15px","textTransform":"capitalize"}},"layout":{"type":"flex","justifyContent":"left"}} --><!-- wp:navigation-link {"label":"Beranda","url":"/dimsum-shop/","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Toko","url":"/dimsum-shop/shop/","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Tentang Kami","url":"/dimsum-shop/tentang-kami/","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog Dimsum","url":"/dimsum-shop/blog-dimsum/","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Kontak","url":"/dimsum-shop/kontak/","kind":"custom","isTopLevelLink":true} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-btm-middle"} -->
<div class="wp-block-column is-vertically-aligned-center header-btm-middle" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","className":"header-btm-right"} -->
<div class="wp-block-column is-vertically-aligned-center header-btm-right" style="flex-basis:40%"><!-- wp:group {"className":"header-right-info","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group header-right-info"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search seafood, recipes…","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"className":"header-search","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"radius":"30px"},"spacing":{"margin":{"right":"var:preset|spacing|20"}}},"backgroundColor":"base-2","textColor":"secondary","namespace":"woocommerce/product-search"} /-->

<!-- wp:buttons {"className":"header-wishlist"} -->
<div class="wp-block-buttons header-wishlist"><!-- wp:button {"style":{"color":{"background":"#00000000"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" style="background-color:#00000000"><img class="wp-image-82" style="width: 60px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wishlist.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:woocommerce/cart-link {"className":"header-cart","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}}}} /-->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"alt","iconClass":"wc-block-customer-account__account-icon","className":"header-account","textColor":"base-2","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"22px"},"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->