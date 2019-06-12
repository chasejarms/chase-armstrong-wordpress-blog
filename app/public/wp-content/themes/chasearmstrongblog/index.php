<?php get_header(); ?>

<div id="posts">
    <?php
        while(have_posts()) {
            the_post(); ?>
            <a href="<?php the_permalink() ?>">
                <div class="post-container">
                    <h2 ><?php the_title() ?></h2>
                    <p><?php the_content() ?></p>
                </div>
            </a>
        <?php }
    ?>
</div>

<?php get_footer(); ?>