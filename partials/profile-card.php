<article class="profile-card round">
    <?php if( has_post_thumbnail() ) { ?>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <?php } ?>
    <div>
        <header>
            <div class="profile-card_name">
                <?php the_title(); ?>
            </div>
            <div class="profile-card_role">
                <?php the_excerpt(); ?>
            </div>

            <?php the_content(); ?>
        </header>
    </div>
</article>