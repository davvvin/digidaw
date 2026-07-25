<?php
/**
 * Title: Banner
 * Slug: seafood-shop/banner
 * Categories: seafood-shop
 * Keywords: banner
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */
?>
<!-- wp:group {"metadata":{"name":"Banner"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"right":"0px","left":"0px"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-right:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-bg-img.png","id":7,"dimRatio":90,"overlayColor":"text-2","isUserOverlayColor":true,"minHeight":650,"sizeSlug":"large","align":"full","className":"banner-cover","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"0px","right":"0px"}},"border":{"radius":"30px"}},"layout":{"type":"constrained","contentSize":"87%"}} -->
<div class="wp-block-cover alignfull banner-cover" style="border-radius:30px;padding-top:15px;padding-right:0px;padding-bottom:15px;padding-left:0px;min-height:650px"><img class="wp-block-cover__image-background wp-image-7 size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-bg-img.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-text-2-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"banner-boxes","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns banner-boxes"><!-- wp:column {"verticalAlignment":"center","width":"45%","className":"banner-left wow zoomIn"} -->
<div class="wp-block-column is-vertically-aligned-center banner-left wow zoomIn" style="flex-basis:45%"><!-- wp:heading {"level":1,"className":"banner-title","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"600","lineHeight":1.6}},"fontFamily":"heading"} -->
<h1 class="wp-block-heading banner-title has-heading-font-family" style="font-size:40px;font-style:normal;font-weight:600;line-height:1.6"><?php echo esc_html__( 'Savor the Freshest Catch from the Ocean', 'seafood-shop' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-para","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-1"}}},"typography":{"fontSize":"22px"},"spacing":{"padding":{"right":"18rem"},"margin":{"top":"30px","bottom":"30px"}}},"textColor":"text-1"} -->
<p class="banner-para has-text-1-color has-text-color has-link-color" style="margin-top:30px;margin-bottom:30px;padding-right:18rem;font-size:22px"><?php echo esc_html__( 'Delivered fresh daily from dock to your doorstep', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btn","style":{"spacing":{"padding":{"top":"3px","bottom":"3px","left":"3px","right":"3px"},"blockGap":{"left":"var:preset|spacing|10"}}}} -->
<div class="wp-block-buttons banner-btn" style="padding-top:3px;padding-right:3px;padding-bottom:3px;padding-left:3px"><!-- wp:button {"className":"btn-text","style":{"typography":{"fontSize":"15px","textTransform":"capitalize"},"border":{"radius":"30px"},"spacing":{"padding":{"left":"35px","right":"35px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button btn-text"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-radius:30px;padding-top:8px;padding-right:35px;padding-bottom:8px;padding-left:35px;font-size:15px;text-transform:capitalize"><?php echo esc_html__( 'shop now', 'seafood-shop' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"btn-icon","style":{"typography":{"fontSize":"15px","textTransform":"capitalize"},"border":{"radius":"100px"},"spacing":{"padding":{"left":"11px","right":"11px","top":"11px","bottom":"11px"}}}} -->
<div class="wp-block-button btn-icon"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-radius:100px;padding-top:11px;padding-right:11px;padding-bottom:11px;padding-left:11px;font-size:15px;text-transform:capitalize"><img class="wp-image-29" style="width: 48px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-btn-icon.png" alt=""><img class="wp-image-49" style="width: 26px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-btn-icon1.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"55%","className":"banner-right wow zoomIn"} -->
<div class="wp-block-column is-vertically-aligned-bottom banner-right wow zoomIn" style="flex-basis:55%"><!-- wp:image {"id":46,"width":"auto","height":"400px","sizeSlug":"full","linkDestination":"none","align":"right","className":"banner-right-img","style":{"spacing":{"margin":{"right":"0px","left":"0px"}}}} -->
<figure class="wp-block-image alignright size-full is-resized banner-right-img" style="margin-right:0px;margin-left:0px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-right-img.png" alt="" class="wp-image-46" style="width:auto;height:400px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->