<?php get_header(); ?>

<div id="posts-page">
    <div class="posts-container">
        <?php
            while(have_posts()) {
                the_post(); ?>
                <a href="<?php the_permalink() ?>" class="post-container-wrapper">
                    <div class="post-container">
                        <div class="date-container">
                            <p>
                                <?php echo get_the_date('m.d.Y') ?>
                            </p>
                        </div>
                        <div class="title-and-excerpt-container">
                            <h2 class="post-container-title"><?php the_title() ?></h2>
                            <div class="excerpt-container">
                                <?php the_excerpt() ?>
                            </div>
                        </div>
                    </div>
                </a>
            <?php }
        ?>
    </div>
</div>

<?php get_footer(); ?>