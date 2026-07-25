<?php
/**
 * Title: FAQ Section
 * Slug: seafood-shop/faq-section
 * Categories: seafood-shop
 * Keywords: faq-section, articles
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"FAQ Section"},"className":"faq-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"83%"}} -->
<div class="wp-block-group faq-section has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0px;padding-bottom:var(--wp--preset--spacing--40);padding-left:0px"><!-- wp:group {"className":"head-box wow zoomIn","style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group head-box wow zoomIn" style="margin-bottom:40px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"22px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","textDecoration":"underline"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"heading"} -->
<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-heading-font-family" style="font-size:22px;font-style:normal;font-weight:600;text-decoration:underline;text-transform:capitalize"><?php echo esc_html__( 'Need Help or Have Questions?', 'seafood-shop' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"23px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"spacing":{"margin":{"top":"12px"}}},"textColor":"text-2","fontFamily":"body"} -->
<p class="has-text-align-center has-text-2-color has-text-color has-link-color has-body-font-family" style="margin-top:12px;font-size:23px;font-style:normal;font-weight:400"><?php echo esc_html__( 'We’re here to help you enjoy every bite.', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"faq-content"} -->
<div class="wp-block-columns faq-content"><!-- wp:column {"width":"45%","className":"faq-left-box wow zoomIn"} -->
<div class="wp-block-column faq-left-box wow zoomIn" style="flex-basis:45%"><!-- wp:cover {"overlayColor":"secondary","isUserOverlayColor":true,"className":"faq-left-bg","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover faq-left-bg" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:image {"id":25,"sizeSlug":"full","linkDestination":"none","align":"full","className":"faq-left-img","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image alignfull size-full has-custom-border faq-left-img"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/faq-img.png" alt="" class="wp-image-25" style="border-radius:20px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"faq-info-box","style":{"spacing":{"padding":{"right":"40px","left":"40px","top":"30px","bottom":"30px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group faq-info-box" style="margin-top:0px;margin-bottom:0px;padding-top:30px;padding-right:40px;padding-bottom:30px;padding-left:40px"><!-- wp:paragraph {"className":"faq-phone","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"15px"}},"textColor":"base-2"} -->
<p class="faq-phone has-base-2-color has-text-color has-link-color" style="font-size:15px"><a href="tel:1234567890"><i class="fa-solid fa-phone-volume"></i><?php echo esc_html__( '+1234567890', 'seafood-shop' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"faq-time","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"15px"}},"textColor":"base-2"} -->
<p class="faq-time has-base-2-color has-text-color has-link-color" style="font-size:15px"><i class="fa-solid fa-clock"></i><?php echo esc_html__( 'Mon–Sat: 9:00 AM – 6:00 PM EST', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"faq-mail","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"15px"}},"textColor":"base-2"} -->
<p class="faq-mail has-base-2-color has-text-color has-link-color" style="font-size:15px"><a href="mailto:freshnetcatch@example.com"><i class="fa-solid fa-envelope"></i><?php echo esc_html__( 'freshnetcatch@example.com', 'seafood-shop' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"faq-btm-box","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group faq-btm-box"><!-- wp:paragraph {"className":"faq-location","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"fontSize":"15px"}},"textColor":"base-2"} -->
<p class="faq-location has-base-2-color has-text-color has-link-color" style="font-size:15px"><a href="#"><i class="fa-solid fa-location-dot"></i><?php echo esc_html__( 'FreshNet Catch HQ 122 Oceanview Avenue Portland, ME 04101, USA', 'seafood-shop' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"faq-btn","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"3px","right":"3px"},"blockGap":{"left":"var:preset|spacing|10"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons faq-btn" style="padding-top:3px;padding-right:3px;padding-bottom:3px;padding-left:3px"><!-- wp:button {"className":"btn-text","style":{"typography":{"fontSize":"15px","textTransform":"capitalize"},"border":{"radius":"30px"},"spacing":{"padding":{"left":"30px","right":"30px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button btn-text"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-radius:30px;padding-top:8px;padding-right:30px;padding-bottom:8px;padding-left:30px;font-size:15px;text-transform:capitalize"><?php echo esc_html__( 'contact us', 'seafood-shop' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"btn-icon","style":{"typography":{"fontSize":"15px","textTransform":"capitalize"},"border":{"radius":"100px"},"spacing":{"padding":{"left":"10px","right":"10px","top":"11px","bottom":"11px"}}}} -->
<div class="wp-block-button btn-icon"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-radius:100px;padding-top:11px;padding-right:10px;padding-bottom:11px;padding-left:10px;font-size:15px;text-transform:capitalize"><img class="wp-image-29" style="width: 48px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-btn-icon.png" alt=""><img class="wp-image-49" style="width: 26px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-btn-icon1.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%","className":"faq-right-box wow zoomIn"} -->
<div class="wp-block-column faq-right-box wow zoomIn" style="flex-basis:55%"><!-- wp:details {"showContent":true,"className":"faq-title","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}}},"textColor":"text-2"} -->
<details class="wp-block-details faq-title has-text-2-color has-text-color has-link-color" style="font-size:16px" open><summary><?php echo esc_html__( 'How is the seafood kept fresh during delivery?', 'seafood-shop' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"faq-desc","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"text-2"} -->
<p class="faq-desc has-text-2-color has-text-color has-link-color" style="margin-top:10px;font-size:14px"><?php echo esc_html__( 'All seafood is packed in insulated, recyclable boxes with temperature-controlled gel packs to ensure optimal freshness upon arrival.', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-title","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}}},"textColor":"text-2"} -->
<details class="wp-block-details faq-title has-text-2-color has-text-color has-link-color" style="font-size:16px"><summary><?php echo esc_html__( 'Do you deliver nationwide?', 'seafood-shop' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"faq-desc","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"text-2"} -->
<p class="faq-desc has-text-2-color has-text-color has-link-color" style="margin-top:10px;font-size:14px"><?php echo esc_html__( 'All seafood is packed in insulated, recyclable boxes with temperature-controlled gel packs to ensure optimal freshness upon arrival.', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-title","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}}},"textColor":"text-2"} -->
<details class="wp-block-details faq-title has-text-2-color has-text-color has-link-color" style="font-size:16px"><summary><?php echo esc_html__( 'Can I track my order?', 'seafood-shop' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"faq-desc","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"text-2"} -->
<p class="faq-desc has-text-2-color has-text-color has-link-color" style="margin-top:10px;font-size:14px"><?php echo esc_html__( 'All seafood is packed in insulated, recyclable boxes with temperature-controlled gel packs to ensure optimal freshness upon arrival.', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-title","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}}},"textColor":"text-2"} -->
<details class="wp-block-details faq-title has-text-2-color has-text-color has-link-color" style="font-size:16px"><summary><?php echo esc_html__( 'Is your seafood sustainably sourced?', 'seafood-shop' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"faq-desc","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"text-2"} -->
<p class="faq-desc has-text-2-color has-text-color has-link-color" style="margin-top:10px;font-size:14px"><?php echo esc_html__( 'All seafood is packed in insulated, recyclable boxes with temperature-controlled gel packs to ensure optimal freshness upon arrival.', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-title","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}}},"textColor":"text-2"} -->
<details class="wp-block-details faq-title has-text-2-color has-text-color has-link-color" style="font-size:16px"><summary><?php echo esc_html__( 'What if I receive a damaged or delayed order?', 'seafood-shop' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"faq-desc","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"text-2"} -->
<p class="faq-desc has-text-2-color has-text-color has-link-color" style="margin-top:10px;font-size:14px"><?php echo esc_html__( 'All seafood is packed in insulated, recyclable boxes with temperature-controlled gel packs to ensure optimal freshness upon arrival.', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-title","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}}},"textColor":"text-2"} -->
<details class="wp-block-details faq-title has-text-2-color has-text-color has-link-color" style="font-size:16px"><summary><?php echo esc_html__( 'Can I schedule my seafood delivery in advance?', 'seafood-shop' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"faq-desc","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"text-2"} -->
<p class="faq-desc has-text-2-color has-text-color has-link-color" style="margin-top:10px;font-size:14px"><?php echo esc_html__( 'All seafood is packed in insulated, recyclable boxes with temperature-controlled gel packs to ensure optimal freshness upon arrival.', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"faq-title","style":{"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}}},"textColor":"text-2"} -->
<details class="wp-block-details faq-title has-text-2-color has-text-color has-link-color" style="font-size:16px"><summary><?php echo esc_html__( 'Do you offer gift orders or seafood gift boxes?', 'seafood-shop' ); ?></summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"faq-desc","style":{"typography":{"fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"spacing":{"margin":{"top":"10px"}}},"textColor":"text-2"} -->
<p class="faq-desc has-text-2-color has-text-color has-link-color" style="margin-top:10px;font-size:14px"><?php echo esc_html__( 'All seafood is packed in insulated, recyclable boxes with temperature-controlled gel packs to ensure optimal freshness upon arrival.', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->