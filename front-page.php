<?php get_header(); ?>

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
            <a href="<?php echo site_url(); ?>/services" class="btn btn-fwd">
            
                <?php the_title(); ?>
            </a>
        </div>
    </div>
</section>

<?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>



<!-- MISSION, VISION, VALUES  -->

<section id="mvv" class="mvv">
    <div class="container-full">
        <div class="row">
            <div class="grey-block-left round"></div>
            <div class="centered-content mission round">
                <h2>Mission</h2>
                <p>To work with and alongside people to support them to fulfil their goals to enjoy their life. We are driven with a person-centred passion to contribute and make a difference in issues that matter to the community, both individually and collectively.</p>
            </div>
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/11/stock-photo-down-syndrome-man-attending-education-class-in-community-center-inclusivity-of-disabled-person-1974822152.jpg" alt="Mission" class="round">
        </div>
        <div class="row">
            <div class="centered-content vision round">
                <h2>Vision</h2>
                <p>That everyone has a right to social inclusion, equally and wholly. Yarra Valley Support Coordination will support people of all abilities to achieve this and more.</p>
            </div>
        </div>
        <div class="row">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/11/stock-photo-portrait-of-happy-women-with-disability-on-spring-lawn-375512857.jpg" alt="Mission" class="round">
            <div class="centered-content values round">
                <h2>Values</h2>
                <p><strong>Passion:</strong> We are driven by passion to contribute and make a difference in issues that matter to the community, both individually and to the broader community.

</p>
            </div>
            <div class="grey-block-right round"></div>
        </div>
    </div>
</section>



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
            <a href="<?php echo site_url(); ?>/services" class="btn btn-fwd">
                View our services
            </a>
        </div>
    </div>
</section>

<?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>