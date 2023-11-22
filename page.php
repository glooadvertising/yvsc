<?php get_header();?>

<!-- ABOUT US -->

<?php if(is_page('about-us')){?>
<section class="standard-page-main">
    <div class="container-narrow">
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
    </section>
    <?php } ?>


<!-- SERVICES -->

<?php if(is_page('services')){?>
<section class="dir-col">
    <div class="container-narrow">
        <div class="services-grid">
            <?php $services = array (
                array (
                    'name' => 'Support coordination',
                    'icon' => 'support-coordination'
                ),
                array (
                    'name' => 'Assistance to access community, social & recreational activities',
                    'icon' => 'assistance-to-access-community-social-recreational-activities'
                ),
                array (
                    'name' => 'Supported independent living',
                    'icon' => 'supported-independent-living'
                ),
                array (
                    'name' => 'Home and yard maintenance / cleaning',
                    'icon' => 'home-and-yard-maintenance-cleaning'
                ),
                array (
                    'name' => 'Specialist support coordination',
                    'icon' => 'specialist-support-coordination'
                ),
                array (
                    'name' => 'Assistance with self care activities',
                    'icon' => 'assistance-with-self-care-activities'
                ),
                array (
                    'name' => 'Individual social skill development',
                    'icon' => 'individual-social-skill-development'
                ),
                array (
                    'name' => 'Psychosocial recovery coaching',
                    'icon' => 'psychosocial-recovery-coaching'
                ),
                array (
                    'name' => 'Development of daily living and life skills',
                    'icon' => 'development-of-daily-living-and-life-skills'
                ),

            ); ?>
            <?php foreach($services as $service) { ?>
            <div class="service-card">
                <div class="service-icon">
                    <img src="<?php echo get_template_directory_uri(  )?>/assets/images/icons/<?php echo $service['icon']; ?>.svg" alt="">
                </div>
                <div class="service-label">
                    <?php echo $service['name']; ?>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php the_content(); ?>
        <?php $query = new WP_Query( 'post_type=block&category_name=service-block-2&posts_per_page=1' ); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        
            <?php get_template_part('partials/profile-card'); ?>
        
        <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
<section class="standard-page-main">
    <div class="container-narrow">
        <div class="col-left">
            <div>
                <?php the_content( ); ?>
            </div>
        </div>
        <div class="col-right">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="round">
        </div>
    </div>
</section>
<?php } ?>
    
    
<!-- PRICE GUIDE -->

<?php if(is_page('price-guide')){ ?>
<section class="dir-col">
    <div class="container-narrow">
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
        </div>
    </section>
    <?php }?>

<!-- OUR TEAM -->

<section class="dir-col">
    <div class="container-narrow">
        <div class="team-grid">
            <?php $team = array(
                array(
                    'name' => '',
                    'role' => '',
                    'headshot' => ''
                ),
            )?>
            <?php foreach($team as $member) { ?>
            <article class="team-member">
                <figure class="headshot">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/staff/<?php echo $member['role']; ?>.png" alt="">
                </figure>
                <header>
                    <div class="name">
                        <?php echo $member['name']; ?>
                    </div>
                    <div class="role">
                        <?php echo $member['role']; ?>
                    </div>
                </header>
            </article>
            <?php } ?>
        </div>
    </div>
</section>

<!-- RESOURCES -->

<?php if(is_page('resources')){ ?>
<section class="dir-col">
    <div class="container-narrow">
        
        <?php
            $args = array(
                'post_parent' => $post->ID,
                'post_type' => 'page',
                'orderby' => 'menu_order'
            );

            $child_query = new WP_Query( $args );
        ?>

            <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
                <details class="price-accordion round">
                    <summary><?php the_title(); ?> <span>View</span><span>Hide</span></summary>
                    <?php the_content(); ?>

                </details>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            
        </div>
    </section>
    <?php } ?>

<?php get_footer()?>

