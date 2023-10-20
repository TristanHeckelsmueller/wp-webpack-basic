<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Saufhampton
 */

get_header();
?>

    <main id="main">
        <div class="container">
            <?php
            while (have_posts()) :
                the_post();

                ?>

                <ul class="blog__list">
                    <li class="blog__list__item">
                        <?php the_post_thumbnail('medium'); ?>
                        <div>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_date(); ?>
                            <?php the_excerpt(); ?>
                            <p><a href="<?php the_permalink(); ?>">Hier weiterlesen</a></p>
                        </div>
                    </li>
                </ul>
            <?php
            endwhile; // End of the loop.
            ?>

        </div>


    </main>

<?php
get_footer();
