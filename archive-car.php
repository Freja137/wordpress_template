<?php 

get_header();

while (have_posts()) : the_post(); ?>

        <article>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>

            <div>
                <?php the_content(); ?>
            </div>
        </article>

    <?php endwhile; ?>