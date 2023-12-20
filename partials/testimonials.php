<div class="block-title">
    <h2>Testimonials</h2>
</div>
<section id="testimonials" class="testimonials-section">
    <div class="container-narrow">
        <div class="testimonial-grid">
            <?php $query = new WP_Query( 'post_type=testimonial&posts_per_page=2&orderby=rand' ); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            
                <div class="testimonial-card round">
                    <i><?php the_content( ); ?></i>
                    <strong>
                        <?php the_title(); ?><br>
                        <?php the_date('F, Y'); ?>
                    </strong>
                </div>
                        
            <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>