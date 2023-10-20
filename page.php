<?php get_header(); ?>

<main id="main">
    <div class="container space">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="entry">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; ?>
    </div>


</main>

<?php get_footer(); ?>