<?php /* Template Name: Maintenance Template */ get_header(); ?>


<!-- section -->


<h1 class="no-display"><?php the_title(); ?></h1>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <section>
                <?php the_content(); ?>
            </section>
        </article>
        <?php edit_post_link(); ?>
        <!-- /article -->

    <?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article>

        <h2><?php _e('Sorry, nothing to display.', 'ac-ningbo'); ?></h2>

    </article>
    <!-- /article -->

<?php endif; ?>

</section>
<!-- /section -->
</main>


<?php get_footer(); ?>
