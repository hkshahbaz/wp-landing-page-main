
	<!-- ********************** FOOTER ************************************ -->
    <footer id="colophon" class="site-footer">
        <div class="container-fluid fdiv">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-12 col-sm-12 text-center fheading mb-4">
                    <?php if ( is_active_sidebar( 'sidebar-16' ) ) : ?>
                    <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Header', 'landingpage' ); ?>">
                            <?php
                            if ( is_active_sidebar( 'sidebar-16' ) ) {
                            ?>
                            <div class="widget-column footer-widget-1 mt-5">
                                <?php dynamic_sidebar( 'sidebar-16' ); ?>
                            </div>
                            <?php
                                }
                            ?>
                    </aside><!-- .SECTION 3 SIDEBAR 3 WIDGET  -->
                    <?php endif; ?>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-6 col-sm-6">
                    <form class="d-flex flex-row text-center finput ">
                        <div class="form-group col-sm-8 p-0">
                            <input type="email" class="form-control emailinput shadow p-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address">
                        </div>
                        <div class="col-md-4 col-sm-4 p-0">
                            <button type="submit" class="btn subscribe shadow p-3">SUBSCRIBE</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-5 footer-menu-div">
                    <!-- CUSTOM MENUS USING WALKER CLASS  -->
                    <?php 
                    //CUSTOME BOOTSTRAP MENUS
                        wp_nav_menu( array(
                            'menu'            => 'footer',
                            'container'       => 'nav',
                            'container_class' => 'navbar navbar-expand-sm col-md-6 footer-menu d-flex justify-content-center ',
                            'container_id'    => '',
                            'menu_class'      => 'navbar-nav',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'item_spacing'    => 'preserve',
                            'depth'           => 0,
                            'walker'          => '',
                            'theme_location'  => 'footer',
                            'add_li_class'  => 'nav-item mr-4',
                        ));      
                    ?>
            </div>
            <div class="row d-flex justify-content-center mt-1">
                <div class="col-md-6 col-sm-6 text-center">
                    <p class="copyright">ALL RIGHTS RESERVED.</p>
                </div>
            </div>
            <div class="fwave1"></div>
            <div class="fwave2"></div>
            <div class="fwave3"></div>
        </div>
    </footer><!-- #colophon -->
    <?php wp_footer(); ?>
    </body>
</html>