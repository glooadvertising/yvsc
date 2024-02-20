<?php get_header();?>

<!-- ABOUT US -->

<?php if(is_page('about-us')){?>
<section class="standard-page-main <?php echo basename(get_permalink()); ?>"> 
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
    <?php get_template_part( 'partials/testimonials' ); ?>
    <?php } ?>


<!-- SERVICES -->

<?php if(is_page('services')){?>
<section class="dir-col <?php echo basename(get_permalink()); ?>">
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
                    <img src="<?php echo get_template_directory_uri(  )?>/assets/images/icons/<?php echo $service['icon']; ?>.png" alt="">
                </div>
                <div class="service-label">
                    <?php echo $service['name']; ?>
                </div>
            </div>
            <?php } ?>
        </div>
        <span id="referral-form"></span>
        <details class="price-accordion round">
            <summary>Web referral form <span>View</span><span>Hide</span></summary>
            <br><br>
            <?php echo do_shortcode( '[fluentform id="4"]' ); ?>
        </details>
        <br>
        <?php the_content(); ?>
        <?php $query = new WP_Query( 'post_type=block&category_name=service-block-2&posts_per_page=1' ); ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        
            <div class="grey-box round">
                <h2><?php the_title();?></h2>
                <?php the_content(); ?>
            </div>
        
        <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
<?php $query = new WP_Query( 'post_type=block&category_name=service-block-3&posts_per_page=1' ); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<section class="standard-page-main services">
    <div class="container-narrow">
        <div class="col-left">
            <div>
                <h2><?php the_title(); ?></h2>
                <?php the_content( ); ?>
            </div>
        </div>
        <div class="col-right">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="round">
        </div>
    </div>
</section>
<?php endwhile; wp_reset_postdata(); ?>
<?php endif; ?>
<?php } ?>
    
    
<!-- PRICE GUIDE -->

<?php if(is_page('price-guide')){ ?>
<section class="dir-col">
    <div class="container-narrow">
        <?php
            $args = array(
                'post_parent' => $post->ID,
                'post_type' => 'page',
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );

            $child_query = new WP_Query( $args );
        ?>

        <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
            <?php get_template_part( 'partials/prices' );?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        

    <span class="margin-top-thick">
        <?php the_content(); ?>
    </span>
    </div>
</section>
<?php }?>

<!-- OUR TEAM -->

<?php if(is_page('our-team')){?>
<section class="dir-col">
    <div class="container-narrow">
        <div class="team-grid">
            <?php $team = array(
                array(
                    'name' => 'Sue Hayden',
                    'role' => 'Director & specialist support coordinator',
                    'headshot' => 'sue-hayden'
                ),
                array(
                    'name' => 'Sam Wu',
                    'role' => 'Finance manager',
                    'headshot' => 'sam-wu'
                ),
                array(
                    'name' => 'Amber Green',
                    'role' => 'Operations manager',
                    'headshot' => 'amber-green'
                ),
                array(
                    'name' => 'Jacqueline',
                    'role' => 'Scheduling coordinator',
                    'headshot' => 'jaqueline'
                ),
                array(
                    'name' => 'Lachlan',
                    'role' => 'Scheduling coordinator',
                    'headshot' => 'lachlan'
                ),
                array(
                    'name' => 'Lauren',
                    'role' => 'Planning coordinator',
                    'headshot' => 'lauren'
                ),
                array(
                    'name' => 'Laura',
                    'role' => 'Junior support coordinator',
                    'headshot' => 'laura'
                ),
                array(
                    'name' => 'Rebecca',
                    'role' => 'Junior support coodinator',
                    'headshot' => 'rebecca'
                ),
                array(
                    'name' => 'Hans',
                    'role' => 'Support Worker',
                    'headshot' => 'hans'
                ),
                array(
                    'name' => 'Andrea',
                    'role' => 'Support worker',
                    'headshot' => 'andrea'
                ),
                // array(
                //     'name' => 'Erin',
                //     'role' => 'Junior support',
                //     'headshot' => 'erin'
                // ),
                array(
                    'name' => 'Tracy',
                    'role' => 'Home maintenance',
                    'headshot' => 'tracy'
                ),
                array(
                    'name' => 'Marlee',
                    'role' => 'Support worker',
                    'headshot' => 'marlee'
                ),
                array(
                    'name' => 'Peter',
                    'role' => 'Support worker',
                    'headshot' => 'peter'
                ),

            )?>
            <?php foreach($team as $member) { ?>
            <article class="team-member round">
                <figure class="headshot">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/staff/<?php echo $member['headshot']; ?>.jpg" alt="<?php echo $member['name']; ?>" />
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
<?php } ?>
<!-- RESOURCES -->

<?php if(is_page('resources')){ ?>
<section class="dir-col">
    <div class="container-narrow">
        
        <?php
            $args = array(
                'post_parent' => $post->ID,
                'post_type' => 'page',
                'orderby' => 'menu_order',
                'order' => 'ASC'
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

