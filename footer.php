    <?php wp_footer();?>
    <footer class="main-footer">
        <div class="container">
            <div class="top-row">
                <div class="col-left">
                    <a href="<?php echo site_url(); ?>" class="footer-logo">
                        <img src="<?php echo get_template_directory_uri(  ); ?>/assets/images/iso.png" alt="Yarra Valley Suport Coordination Isotype">
                    </a>
                    <div class="contact-method">
                        <h3><?php bloginfo( 'title' ); ?></h3>
                        <p>Specialist Support Coordination<br> Registered NDIS Provider.Provider No: 4050110593</p>
                    </div>
                </div>
                <div class="col-right">
                    <div class="contact-method">
                        <h3>Location</h3>
                        <a href="https://www.google.com/maps/search/Suite+3,+5+Church+Street+Healesville+VIC+3777+2F+John+St,+Lilydale+3140/@-37.7059082,145.2634998,11z/data=!3m1!4b1?entry=ttu" target="_blank" rel="noopener noreferrer" >
                            <p>Suite 3, 5 Church Street Healesville VIC 3777<br> 2F John St, Lilydale 3140</p>
                        </a>
                    </div>
                    <div class="contact-method">
                        <h3>Phone</h3>
                        <a href="tel:0387992672">
                            <p>(03) 8799 2672</p>
                        </a>
                    </div>
                </div>
                <div class="col-center">
                    <?php wp_nav_menu(); ?>
                </div>
            </div>
            <div class="bottom-row">
                <p>Copyright <?php echo date('Y'); ?> <?php bloginfo('title'); ?> | Site by <a href="https://glooadvertising.com.au" target="_blank" rel="noopener noreferrer" > Gloo</a></p>
            </div>
        </div>
    </footer>
</body>
</html>