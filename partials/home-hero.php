<section id="home-hero" class="home-hero" style="background-image:url('<?php echo the_post_thumbnail_url(); ?>')">
    
    <div class="container">
        <?php the_post_thumbnail( ); ?>
        <div class="white-trans-block round">
            <?php the_content(); ?>
        </div>
    </div>
</section>