<section id="home-hero" class="home-hero">
    <?php the_post_thumbnail(); ?>
    <div class="container">
        <div class="white-trans-block round">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php $query = new WP_Query( 'post_type=block&category_name=home-block-1&posts_per_page=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<section id="services" class="services-block <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>">
    <div class="container">
        <div class="col-left">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </div>
        <div class="col-right">
            <span>
                <?php the_content(); ?>
            </span>
            <a href="#" class="btn">
            
                <?php the_title(); ?>
            </a>
        </div>
    </div>
</section>

<?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>



<?php $query = new WP_Query( 'post_type=block&category_name=home-block-3&posts_per_page=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<section id="services" class="services-block <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>">
    <div class="container">
        <div class="col-left">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </div>
        <div class="col-right">
            <span>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </span>
            
        </div>
    </div>
</section>

<?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>



<?php $query = new WP_Query( 'post_type=block&category_name=home-block-4&posts_per_page=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<section id="services" class="services-block <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>">
    <div class="container">
        <div class="col-left">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </div>
        <div class="col-right">
            <span>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </span>
            <a href="#" class="btn">
                View our services
            </a>
        </div>
    </div>
</section>

<?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>

