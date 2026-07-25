<?php
/*
 * @package Seafood Shop
 */


 function seafood_shop_admin_enqueue_scripts() {
    wp_enqueue_style( 'seafood-shop-admin-style', esc_url( get_template_directory_uri() ).'/assets/css/addon.css' );
}
add_action( 'admin_enqueue_scripts', 'seafood_shop_admin_enqueue_scripts' );

function seafood_shop_theme_info_menu_link() {

    $seafood_shop_theme = wp_get_theme();
    add_theme_page(
        /* translators: 1: Theme name. */
        sprintf( esc_html__( 'Welcome to %1$s', 'seafood-shop' ), $seafood_shop_theme->get( 'Name' )),
        esc_html__( 'Theme Info', 'seafood-shop' ),
        'edit_theme_options',
        'seafood-shop',
        'seafood_shop_theme_info_page'
    );
}
add_action( 'admin_menu', 'seafood_shop_theme_info_menu_link' );

function seafood_shop_theme_info_page() {

    $seafood_shop_theme = wp_get_theme();
    ?>
<div class="wrap theme-info-wrap">
    <h1><?php printf( esc_html__( 'Welcome to %1$s', 'seafood-shop' ), esc_html($seafood_shop_theme->get( 'Name' ))); ?>
    </h1>
    <p class="theme-description">
    <?php esc_html_e( 'Do you want to configure this theme? Look no further, our easy-to-follow theme documentation will walk you through it.', 'seafood-shop' ); ?>
    </p>
    <div class="columns-wrapper clearfix theme-demo">
        <div class="column column-quarter clearfix start-box"></div>
        <div class="column column-first clearfix">
            <div class="important-link">
                <div class="main-box columns-wrapper clearfix">

                    <div class="themelink column column-half column-border clearfix">
                        <p><strong><?php esc_html_e( 'Free Theme Documentation', 'seafood-shop' ); ?></strong></p>
                        <p><?php esc_html_e( 'Need more details? Please check our complete and detailed documentation for full theme setup.', 'seafood-shop' ); ?></p>
                        <a href="<?php echo esc_url( SEAFOOD_SHOP_THEME_DOCUMENTATION ); ?>" target="_blank">
                        <?php esc_html_e( 'Documentation', 'seafood-shop' ); ?>
                        </a>
                    </div>

                    <div class="themelink column column-half column-padding clearfix">
                        <p><strong><?php esc_html_e( 'Need Help?', 'seafood-shop' ); ?></strong></p>
                        <p><?php esc_html_e( 'Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'seafood-shop' ); ?></p>
                        <a href="<?php echo esc_url( SEAFOOD_SHOP_SUPPORT ); ?>" target="_blank">
                        <?php esc_html_e( 'Contact Us', 'seafood-shop' ); ?>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="main-box columns-wrapper clearfix">

                    <div class="themelink column column-half column-border clearfix">
                        <p><strong><?php esc_html_e( 'Pro version of our theme', 'seafood-shop' ); ?></strong></p>
                        <p><?php esc_html_e( 'Are you excited for our theme? Then we will proceed for pro version of theme.', 'seafood-shop' ); ?></p>
                        <a class="get-premium" href="<?php echo esc_url( SEAFOOD_SHOP_PREMIUM_PAGE ); ?>" target="_blank">
                        <?php esc_html_e( 'Get Premium', 'seafood-shop' ); ?>
                        </a>
                    </div>

                    <div class="themelink column column-half column-padding clearfix">
                        <p><strong><?php esc_html_e( 'Leave us a review', 'seafood-shop' ); ?></strong></p>
                        <p><?php esc_html_e( 'Are you enjoying our theme? We would love to hear your feedback.', 'seafood-shop' ); ?></p>
                        <a href="<?php echo esc_url( SEAFOOD_SHOP_REVIEW ); ?>" target="_blank">
                        <?php esc_html_e( 'Rate This Theme', 'seafood-shop' ); ?>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="column column-quarter clearfix start-box"> 
            <div class="bundle-info">
                <img src="<?php echo esc_url( get_template_directory_uri().'/assets/images/bundle.png'); ?>" alt="<?php echo esc_attr( 'screenshot', 'seafood-shop'); ?>" class="bundle-image"/>
                <div class="bundle-content themelink">
                    <h3><?php esc_html_e( 'WordPress Theme Bundle', 'seafood-shop' ); ?></h3>
                    <small><b><?php esc_html_e( 'Get access to a collection of 100+ stunning WordPress themes for just $99 — featuring designs for every business niche!', 'seafood-shop' ); ?></small></b>
                    <a class="get-premium" href="<?php echo esc_url( SEAFOOD_SHOP_BUNDLE_PAGE ); ?>" target="_blank">
                    <?php esc_html_e( 'Get Bundle at 20% OFF', 'seafood-shop' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="getting-started">
        <div class="section">
            <h3><?php 
            /* translators: %s: Theme name. */
            printf( esc_html__( 'Getting started with %s', 'seafood-shop' ),
            esc_html($seafood_shop_theme->get( 'Name' ))); ?></h3>
            <div class="columns-wrapper clearfix">
                <div class="column column-half clearfix">
                    <div class="section themelink">
                        <div class="">
                            <a class="" href="<?php echo esc_url( SEAFOOD_SHOP_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Get Premium', 'seafood-shop' ); ?></a>
                            <a href="<?php echo esc_url( SEAFOOD_SHOP_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e( 'View Demo', 'seafood-shop' ); ?></a>
                            <a class="get-premium" href="<?php echo esc_url( SEAFOOD_SHOP_BUNDLE_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Bundle of 100+ Themes at $99', 'seafood-shop' ); ?></a>
                        </div>
                        <div class="theme-description-1"><?php echo esc_html($seafood_shop_theme->get( 'Description' )); ?></div>
                    </div>
                </div>
                <div class="column column-half clearfix">
                    <img src="<?php echo esc_url( $seafood_shop_theme->get_screenshot() ); ?>" alt="<?php echo esc_attr( 'screenshot', 'seafood-shop'); ?>"/>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="theme-author">
      <p><?php
        /* translators: 1: Theme name, 2: Author name, 3: Call to action text. */
        printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'seafood-shop' ),
            esc_html($seafood_shop_theme->get( 'Name' )),
            '<a target="_blank" href="' . esc_url( 'https://www.theclassictemplates.com/', 'seafood-shop' ) . '">classictemplate</a>',
            '<a target="_blank" href="' . esc_url(SEAFOOD_SHOP_REVIEW ) . '" title="' . esc_attr__( 'Rate it', 'seafood-shop' ) . '">' . esc_html_x( 'rate it', 'If you like this theme, rate it', 'seafood-shop' ) . '</a>'
        );
        ?></p>
    </div>
</div>
<?php
}
?>