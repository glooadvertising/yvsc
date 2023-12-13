<?php if(is_page('about-us')) { ?>

    <?php $query = new WP_Query( 'post_type=block&category_name=about-page&posts_per_page=1' ); ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <section class="page-hero <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>">
        <div class="bg-figures">
            <div class="left-figure"></div>
            <div class="right-figure"></div>
        </div>
        <div class="container-narrow">
            <div class="col-left">
                <h1><?php the_title();?></h1>
                <?php the_excerpt(); ?>
            </div>
            <div class="col-right">
                <img src="<?php echo the_post_thumbnail_url( ); ?>" alt="" class="round">
            </div>
        </div>
    </section>

    <?php endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>

<?php } ?>






<?php if(is_page('services')) { ?>


<section class="page-hero services-page">
    <div class="bg-figures">
        <div class="left-figure services-page"></div>
        <div class="right-figure"></div>
    </div>
    <div class="container-narrow">
        <div class="col-left">
            <h1><?php the_title();?></h1>
            <?php has_excerpt() ? the_excerpt() : null; ?>
        </div>
        <div class="col-right">
            <img src="<?php echo the_post_thumbnail_url( ); ?>" alt="" class="round">
        </div>
    </div>
</section>


<?php } ?>





<?php if(is_page('price-guide')) { ?>


<section class="page-hero price-page">
    <div class="bg-figures">
        <div class="left-figure price-page"></div>
        <div class="right-figure"></div>
    </div>
    <div class="container-narrow">
        <div class="col-left">
            <h1><?php the_title();?></h1>
            <?php has_excerpt() ? the_excerpt() : null; ?>
        </div>
        <div class="col-right">
            <img src="<?php echo the_post_thumbnail_url( ); ?>" alt="" class="round">
        </div>
    </div>
</section>


<?php } ?>



<?php if(is_page('our-team')) { ?>


<section class="page-hero team-page">
    <div class="bg-figures">
        <div class="left-figure team-page"></div>
        <div class="right-figure"></div>
    </div>
    <div class="container-narrow">
        <div class="col-left">
            <h1><?php the_title();?></h1>
            <?php has_excerpt() ? the_excerpt() : null; ?>
        </div>
        <div class="col-right">
            <img src="<?php echo the_post_thumbnail_url( ); ?>" alt="" class="round">
        </div>
    </div>
</section>


<?php } ?>


<?php if(is_page('resources')) { ?>


<section class="page-hero resources-page">
    <div class="bg-figures">
        <div class="left-figure resources-page"></div>
        <div class="right-figure"></div>
    </div>
    <div class="container-narrow">
        <div class="col-left">
            <h1><?php the_title();?></h1>
            <?php has_excerpt() ? the_excerpt() : null; ?>
        </div>
        <div class="col-right">
            <img src="<?php echo the_post_thumbnail_url( ); ?>" alt="" class="round">
        </div>
    </div>
</section>


<?php } ?>