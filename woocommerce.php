<?php get_header(); ?>

    <main id="main">
        <div class="container <?php if (is_single()) { echo "container-product"; } ?> space">
            <?php woocommerce_content(); ?>
        </div>


    </main>

<?php get_footer(); ?>