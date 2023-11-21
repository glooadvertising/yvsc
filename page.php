<?php get_header();?>

<section class="standard-page-main">
    <div class="container-narrow">
        <?php if(is_page('about-us')){?>
        <div class="col-left">
            <div>
                <?php the_content( ); ?>
            </div>

            <?php $query = new WP_Query( 'post_type=staff-member&posts_per_page=1' ); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            
                <?php get_template_part('partials/profile-card'); ?>
            
            <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
        <div class="col-right">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="round">
        </div>
        <?php } ?>
</section>

<section class="dir-col">
    <div class="container-narrow">
        <?php if(is_page('price-guide')){ ?>
            <details class="price-accordion round">
                <summary>Centre Capital Costs <span>View</span><span>Hide</span></summary>
                <p>Claiming for establishment fees for personal care/participation supports</p>
                <table>
                    <thead>
                        <tr>
                            <td>Item number</td>
                            <td>Item name and notes</td>
                            <td>Unit</td>
                            <td>National</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01_049_0107_1_1</td>
                            <td>Establishment fee for personal care/participation</td>
                            <td>Each</td>
                            <td>$654.70</td>
                        </tr>
                        <tr>
                            <td>01_049_0125_1_1</td>
                            <td>Establishment fee for personal care/participation</td>
                            <td>Each</td>
                            <td>$654.70</td>
                        </tr>
                    </tbody>
                </table>
            </details>
        <?php }?>
    </div>
</section>


<section class="dir-col">
    <div class="container-narrow">
        <!-- RESOURCES -->

        <?php
            $args = array(
                'post_parent' => $post->ID,
                'post_type' => 'page',
                'orderby' => 'menu_order'
            );

            $child_query = new WP_Query( $args );
        ?>

            <?php if(is_page('resources')){ ?>
            <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
                <details class="price-accordion round">
                    <summary><?php the_title(); ?> <span>View</span><span>Hide</span></summary>
                    <?php the_content(); ?>

                </details>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php } ?>

    </div>
</section>

<?php get_footer()?>

