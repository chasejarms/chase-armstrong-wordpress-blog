<?php get_header(); ?>

<div id="posts-page">
    <div class="posts-container">
        <?php
            while(have_posts()) {
                the_post(); ?>
                <a href="<?php the_permalink() ?>" class="post-container-wrapper">
                    <div class="post-container">
                        <h2 class="post-container-title"><?php the_title() ?></h2>
                        <p><?php the_excerpt() ?></p>
                    </div>
                </a>
            <?php }
        ?>
    </div>
</div>

<?php get_footer(); ?>