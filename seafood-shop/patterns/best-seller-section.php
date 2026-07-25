<?php
/**
 * Title: Best Seller Section
 * Slug: seafood-shop/best-seller-section
 * Categories: seafood-shop
 * Keywords: best-seller-section
 * Block Types: core/post-content
 * Post Types: page, wp_template
 */

$seafood_shop_pluginsList = get_option( 'active_plugins' );
$seafood_shop_plugin = 'woocommerce/woocommerce.php';
$seafood_shop_results = in_array( $seafood_shop_plugin , $seafood_shop_pluginsList);
if ( $seafood_shop_results )  {
?>
<!-- wp:group {"metadata":{"name":"Best Seller Section"},"className":"best-seller-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"83%"}} -->
<div class="wp-block-group best-seller-section has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-right:0px;padding-bottom:var(--wp--preset--spacing--40);padding-left:0px"><!-- wp:group {"className":"head-box wow zoomIn","style":{"spacing":{"margin":{"bottom":"35px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group head-box wow zoomIn" style="margin-bottom:35px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","textDecoration":"underline"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"heading"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-heading-font-family" style="font-size:22px;font-style:normal;font-weight:600;text-decoration:underline;text-transform:capitalize"><?php echo esc_html__( 'our best sellers', 'seafood-shop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"23px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"spacing":{"margin":{"top":"12px"}}},"textColor":"text-2","fontFamily":"body"} -->
<p class="has-text-align-center has-text-2-color has-text-color has-link-color has-body-font-family" style="margin-top:12px;font-size:23px;font-style:normal;font-weight:400;text-transform:capitalize"><?php echo esc_html__( 'Most Loved by Our Customers', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":10,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"timeFrame":{"operator":"in","value":"-7 days"},"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"best-product-main-box wow zoomIn"} -->
<div class="wp-block-woocommerce-product-collection best-product-main-box wow zoomIn"><!-- wp:woocommerce/product-template {"className":"best-product-inner-box owl-carousel"} -->
<!-- wp:group {"className":"best-product-box","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group best-product-box has-base-2-background-color has-background" style="border-radius:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"200px","scale":"contain","className":"product-img","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}}} -->
<!-- wp:post-terms {"term":"product_tag","textAlign":"right","className":"product-tag","style":{"border":{"radius":"20px"},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"}}} /-->
<!-- /wp:woocommerce/product-image -->

<!-- wp:group {"className":"product-content","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content"><!-- wp:columns {"className":"product-head-box"} -->
<div class="wp-block-columns product-head-box"><!-- wp:column {"width":"60%","className":"product-left"} -->
<div class="wp-block-column product-left" style="flex-basis:60%"><!-- wp:post-title {"textAlign":"left","isLink":true,"className":"product-title","style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-summary {"isDescendentOfQueryLoop":true,"showDescriptionIfEmpty":true,"summaryLength":10,"className":"product-desc","textColor":"text-2","style":{"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"spacing":{"margin":{"bottom":"0px","top":"0px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","className":"product-right"} -->
<div class="wp-block-column product-right" style="flex-basis:40%"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"right","className":"product-price","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"product-btm-box","style":{"spacing":{"margin":{"top":"15px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group product-btm-box" style="margin-top:15px;margin-bottom:0px"><!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"className":"product-rating","style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontSize":"15px"},"color":{"text":"#ffbe0b"},"elements":{"link":{"color":{"text":"#ffbe0b"}}},"spacing":{"padding":{"left":"60px"}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"className":"product-btn","backgroundColor":"secondary","textColor":"text-1","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"20px","right":"50px"}},"elements":{"link":{"color":{"text":"var:preset|color|text-1"}}},"typography":{"fontSize":"14px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->

<?php } else { ?>

<!-- wp:group {"metadata":{"name":"Best Seller Section"},"className":"best-seller-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"constrained","contentSize":"83%"}} -->
<div class="wp-block-group best-seller-section has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-right:0px;padding-bottom:var(--wp--preset--spacing--30);padding-left:0px"><!-- wp:group {"className":"head-box wow zoomIn","style":{"spacing":{"margin":{"bottom":"35px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group head-box wow zoomIn" style="margin-bottom:35px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"22px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","textDecoration":"underline"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"heading"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-heading-font-family" style="font-size:22px;font-style:normal;font-weight:600;text-decoration:underline;text-transform:capitalize"><?php echo esc_html__( 'our best sellers', 'seafood-shop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"23px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"spacing":{"margin":{"top":"12px"}}},"textColor":"text-2","fontFamily":"body"} -->
<p class="has-text-align-center has-text-2-color has-text-color has-link-color has-body-font-family" style="margin-top:12px;font-size:23px;font-style:normal;font-weight:400;text-transform:capitalize"><?php echo esc_html__( 'Most Loved by Our Customers', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"best-product-main-box wow zoomIn","layout":{"type":"default"}} -->
<div class="wp-block-group best-product-main-box wow zoomIn"><!-- wp:columns {"className":"best-product-inner-box owl-carousel"} -->
<div class="wp-block-columns best-product-inner-box owl-carousel"><!-- wp:column {"className":"best-product-box","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"backgroundColor":"base-2"} -->
<div class="wp-block-column best-product-box has-base-2-background-color has-background" style="border-radius:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:group {"className":"product-img","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-img"><!-- wp:image {"id":33,"width":"auto","height":"200px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product1.png" alt="" class="wp-image-33" style="width:auto;height:200px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"product-tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"border":{"radius":"20px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"15px","right":"15px"},"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"quaternary","textColor":"text-2"} -->
<p class="product-tag has-text-2-color has-quaternary-background-color has-text-color has-background has-link-color" style="border-radius:20px;margin-top:0px;margin-bottom:0px;padding-top:6px;padding-right:15px;padding-bottom:6px;padding-left:15px;font-size:15px;font-style:normal;font-weight:500"><?php echo esc_html__( '35% Off', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","style":{"spacing":{"margin":{"top":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content" style="margin-top:30px"><!-- wp:columns {"className":"product-head-box"} -->
<div class="wp-block-columns product-head-box"><!-- wp:column {"width":"60%","className":"product-left"} -->
<div class="wp-block-column product-left" style="flex-basis:60%"><!-- wp:heading {"level":5,"className":"product-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"20px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary","fontFamily":"heading"} -->
<h5 class="wp-block-heading product-title has-secondary-color has-text-color has-link-color has-heading-font-family" style="font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'Red Snapper Fillet', 'seafood-shop' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"typography":{"fontSize":"14px"}},"textColor":"text-2"} -->
<p class="product-desc has-text-2-color has-text-color has-link-color" style="font-size:14px"><?php echo esc_html__( 'Skin-on, boneless fillet — perfect for grilling or baking.', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","className":"product-right"} -->
<div class="wp-block-column product-right" style="flex-basis:40%"><!-- wp:paragraph {"align":"right","className":"product-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary"} -->
<p class="has-text-align-right product-price has-secondary-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( '$180', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"product-btm-box","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group product-btm-box"><!-- wp:paragraph {"className":"product-review","style":{"typography":{"fontSize":"16px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}}},"textColor":"text-2"} -->
<p class="product-review has-text-2-color has-text-color has-link-color" style="font-size:16px;text-transform:capitalize">rating:  <img class="wp-image-40" style="width: 37px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/star-img.png" alt=""><?php echo esc_html__( ' 4.9', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"secondary","textColor":"text-1","style":{"typography":{"fontSize":"14px","textTransform":"capitalize"},"spacing":{"padding":{"left":"20px","right":"20px","top":"8px","bottom":"8px"}},"elements":{"link":{"color":{"text":"var:preset|color|text-1"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-1-color has-secondary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="padding-top:8px;padding-right:20px;padding-bottom:8px;padding-left:20px;font-size:14px;text-transform:capitalize"><?php echo esc_html__( 'buy now', 'seafood-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"best-product-box","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"backgroundColor":"base-2"} -->
<div class="wp-block-column best-product-box has-base-2-background-color has-background" style="border-radius:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:group {"className":"product-img","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-img"><!-- wp:image {"id":69,"width":"auto","height":"200px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product2.png" alt="" class="wp-image-69" style="width:auto;height:200px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"product-tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"border":{"radius":"20px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"15px","right":"15px"},"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"quaternary","textColor":"text-2"} -->
<p class="product-tag has-text-2-color has-quaternary-background-color has-text-color has-background has-link-color" style="border-radius:20px;margin-top:0px;margin-bottom:0px;padding-top:6px;padding-right:15px;padding-bottom:6px;padding-left:15px;font-size:15px;font-style:normal;font-weight:500"><?php echo esc_html__( '35% Off', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","style":{"spacing":{"margin":{"top":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content" style="margin-top:30px"><!-- wp:columns {"className":"product-head-box"} -->
<div class="wp-block-columns product-head-box"><!-- wp:column {"width":"60%","className":"product-left"} -->
<div class="wp-block-column product-left" style="flex-basis:60%"><!-- wp:heading {"level":5,"className":"product-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"20px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary","fontFamily":"heading"} -->
<h5 class="wp-block-heading product-title has-secondary-color has-text-color has-link-color has-heading-font-family" style="font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'Silver Pomfret Whole', 'seafood-shop' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"typography":{"fontSize":"14px"}},"textColor":"text-2"} -->
<p class="product-desc has-text-2-color has-text-color has-link-color" style="font-size:14px"><?php echo esc_html__( 'Wild-caught, juicy, and ideal for stir-fry or curry dishes.', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","className":"product-right"} -->
<div class="wp-block-column product-right" style="flex-basis:40%"><!-- wp:paragraph {"align":"right","className":"product-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary"} -->
<p class="has-text-align-right product-price has-secondary-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( '$220', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"product-btm-box","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group product-btm-box"><!-- wp:paragraph {"className":"product-review","style":{"typography":{"fontSize":"16px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}}},"textColor":"text-2"} -->
<p class="product-review has-text-2-color has-text-color has-link-color" style="font-size:16px;text-transform:capitalize">rating:  <img class="wp-image-40" style="width: 37px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/star-img.png" alt=""><?php echo esc_html__( ' 4.9', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"secondary","textColor":"text-1","style":{"typography":{"fontSize":"14px","textTransform":"capitalize"},"spacing":{"padding":{"left":"20px","right":"20px","top":"8px","bottom":"8px"}},"elements":{"link":{"color":{"text":"var:preset|color|text-1"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-1-color has-secondary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="padding-top:8px;padding-right:20px;padding-bottom:8px;padding-left:20px;font-size:14px;text-transform:capitalize"><?php echo esc_html__( 'buy now', 'seafood-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"best-product-box","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"backgroundColor":"base-2"} -->
<div class="wp-block-column best-product-box has-base-2-background-color has-background" style="border-radius:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:group {"className":"product-img","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-img"><!-- wp:image {"id":70,"width":"auto","height":"200px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product3.png" alt="" class="wp-image-70" style="width:auto;height:200px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"product-tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"border":{"radius":"20px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"15px","right":"15px"},"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"quaternary","textColor":"text-2"} -->
<p class="product-tag has-text-2-color has-quaternary-background-color has-text-color has-background has-link-color" style="border-radius:20px;margin-top:0px;margin-bottom:0px;padding-top:6px;padding-right:15px;padding-bottom:6px;padding-left:15px;font-size:15px;font-style:normal;font-weight:500"><?php echo esc_html__( '35% Off', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","style":{"spacing":{"margin":{"top":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content" style="margin-top:30px"><!-- wp:columns {"className":"product-head-box"} -->
<div class="wp-block-columns product-head-box"><!-- wp:column {"width":"60%","className":"product-left"} -->
<div class="wp-block-column product-left" style="flex-basis:60%"><!-- wp:heading {"level":5,"className":"product-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"20px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary","fontFamily":"heading"} -->
<h5 class="wp-block-heading product-title has-secondary-color has-text-color has-link-color has-heading-font-family" style="font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'Atlantic Mackerel', 'seafood-shop' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"typography":{"fontSize":"14px"}},"textColor":"text-2"} -->
<p class="product-desc has-text-2-color has-text-color has-link-color" style="font-size:14px"><?php echo esc_html__( 'Sustainably sourced, shipped live with cold packs for freshness.', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","className":"product-right"} -->
<div class="wp-block-column product-right" style="flex-basis:40%"><!-- wp:paragraph {"align":"right","className":"product-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary"} -->
<p class="has-text-align-right product-price has-secondary-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( '$390', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"product-btm-box","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group product-btm-box"><!-- wp:paragraph {"className":"product-review","style":{"typography":{"fontSize":"16px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}}},"textColor":"text-2"} -->
<p class="product-review has-text-2-color has-text-color has-link-color" style="font-size:16px;text-transform:capitalize">rating:  <img class="wp-image-40" style="width: 37px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/star-img.png" alt=""><?php echo esc_html__( ' 4.9', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"secondary","textColor":"text-1","style":{"typography":{"fontSize":"14px","textTransform":"capitalize"},"spacing":{"padding":{"left":"20px","right":"20px","top":"8px","bottom":"8px"}},"elements":{"link":{"color":{"text":"var:preset|color|text-1"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-1-color has-secondary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="padding-top:8px;padding-right:20px;padding-bottom:8px;padding-left:20px;font-size:14px;text-transform:capitalize"><?php echo esc_html__( 'buy now', 'seafood-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"best-product-box","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"backgroundColor":"base-2"} -->
<div class="wp-block-column best-product-box has-base-2-background-color has-background" style="border-radius:20px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:group {"className":"product-img","layout":{"type":"constrained"}} -->
<div class="wp-block-group product-img"><!-- wp:image {"id":72,"width":"auto","height":"200px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/product4.png" alt="" class="wp-image-72" style="width:auto;height:200px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"product-tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"border":{"radius":"20px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"15px","right":"15px"},"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"quaternary","textColor":"text-2"} -->
<p class="product-tag has-text-2-color has-quaternary-background-color has-text-color has-background has-link-color" style="border-radius:20px;margin-top:0px;margin-bottom:0px;padding-top:6px;padding-right:15px;padding-bottom:6px;padding-left:15px;font-size:15px;font-style:normal;font-weight:500"><?php echo esc_html__( '35% Off', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","style":{"spacing":{"margin":{"top":"30px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group product-content" style="margin-top:30px"><!-- wp:columns {"className":"product-head-box"} -->
<div class="wp-block-columns product-head-box"><!-- wp:column {"width":"60%","className":"product-left"} -->
<div class="wp-block-column product-left" style="flex-basis:60%"><!-- wp:heading {"level":5,"className":"product-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"20px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary","fontFamily":"heading"} -->
<h5 class="wp-block-heading product-title has-secondary-color has-text-color has-link-color has-heading-font-family" style="font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'Fresh Atlantic Salmon Fillet', 'seafood-shop' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}},"typography":{"fontSize":"14px"}},"textColor":"text-2"} -->
<p class="product-desc has-text-2-color has-text-color has-link-color" style="font-size:14px"><?php echo esc_html__( 'Wild-caught, juicy, and ideal for stir-fry or curry dishes.', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","className":"product-right"} -->
<div class="wp-block-column product-right" style="flex-basis:40%"><!-- wp:paragraph {"align":"right","className":"product-price","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary"} -->
<p class="has-text-align-right product-price has-secondary-color has-text-color has-link-color" style="font-size:24px;font-style:normal;font-weight:600"><?php echo esc_html__( '$180', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"product-btm-box","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group product-btm-box"><!-- wp:paragraph {"className":"product-review","style":{"typography":{"fontSize":"16px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|text-2"}}}},"textColor":"text-2"} -->
<p class="product-review has-text-2-color has-text-color has-link-color" style="font-size:16px;text-transform:capitalize">rating:  <img class="wp-image-40" style="width: 37px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/star-img.png" alt=""><?php echo esc_html__( ' 4.5', 'seafood-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"product-btn"} -->
<div class="wp-block-buttons product-btn"><!-- wp:button {"backgroundColor":"secondary","textColor":"text-1","style":{"typography":{"fontSize":"14px","textTransform":"capitalize"},"spacing":{"padding":{"left":"20px","right":"20px","top":"8px","bottom":"8px"}},"elements":{"link":{"color":{"text":"var:preset|color|text-1"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-1-color has-secondary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="padding-top:8px;padding-right:20px;padding-bottom:8px;padding-left:20px;font-size:14px;text-transform:capitalize"><?php echo esc_html__( 'buy now', 'seafood-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php } ?>