<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php bloginfo('language'); ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?php bloginfo('language'); ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?php bloginfo('language'); ?>"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php bloginfo('language'); ?>"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="BHeeIntmfmfSzvdFGuVHsavtWDn2mVSX8u3y0ghUezM"/>
    <title><?php wp_title('&laquo;', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<header class="header">
    <div class="container container-header container-flex">
        <div class="header__left">
            <a href="/" class="header__left__logo">fcsaufhamptonsm</a>
            <ul class="header__left__menu">
                <li><a href="/shop/">Shop</a></li>
                <li><a href="/produkt-kategorie/snzr-shirt/">Shirts</a></li>
                <li><a href="/produkt-kategorie/hoodies/">Hoodies</a></li>
            </ul>
        </div>
        <div class="header__right">
            <a href="/wishlist">
                <svg class="w-[32px] h-[32px] text-gray-800 dark:text-white" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"/>
                </svg>
            </a>
            <a href="/warenkorb" style="position: relative">
                <?php
                $cartAmount = WC()->cart->get_cart_contents_count();
                if ($cartAmount > 0) :
                ?>
                    <div class="cart-amount"><?php echo $cartAmount; ?></div>
                <?php endif; ?>

                <svg class="w-[32px] h-[32px] text-gray-800 dark:text-white" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                </svg>
            </a>
            <div class="hamburger">
                <div class="hamburger-menu" id="hamburger">
                    <div class="hamburger-menu--center">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <ul>
            <li><a href="/shop/">Shop</a></li>
            <li><a href="/produkt-kategorie/snzr-shirt/">Shirts</a></li>
            <li><a href="/produkt-kategorie/hoodies/">Hoodies</a></li>
        </ul>
    </div>
</header>
<body>