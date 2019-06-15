<?php get_header() ?>
<div class="single-post-container">
    <?php
        while(have_posts()) {
            the_post(); ?>
            <div class="single-post-header">
                <a href="/" class="to-posts-anchor">
                    <div class="to-posts-container">
                        <p class="to-posts-text"><</p>
                        <p class="to-posts-text not-carrot">TO ARTICLES</p>
                    </div>
                </a>
            </div>
            <hr class="single-post-hr"/>
            <p class="single-post-date">
                <?php
                    echo get_the_date('m.d.Y');
                ?>
            </p>
            <h1 class="single-post-title">
                <?php
                    the_title()
                ?>
            </h1>
        <?php }
    ?>
</div>
<?php get_footer() ?>