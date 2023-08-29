<!-- Below the fold page section 3 -->
<div class="section3bluediv"></div>
    <section class="section3" >
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-sm-12 col-xs-4 mr-4" >
                <?php if ( is_active_sidebar( 'sidebar-13' ) ) : ?>
                    <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Header', 'landingpage' ); ?>">
                        <?php
                        if ( is_active_sidebar( 'sidebar-13' ) ) {
                        ?>
                        <div class="widget-column footer-widget-1">
                            <?php dynamic_sidebar( 'sidebar-13' ); ?>
                        </div>
                        <?php
                            }
                        ?>
                    </aside><!-- .SECTION 3 SIDEBAR 1 WIDGET  -->
                    <?php endif; ?> 
                </div>
                <div class="col-md-3 col-sm-12 col-xs-4 mr-4 shadow section3rounded text-center s3d section3roundedm" >
                    <?php if ( is_active_sidebar( 'sidebar-14' ) ) : ?>
                        <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Header', 'landingpage' ); ?>">
                            <?php
                            if ( is_active_sidebar( 'sidebar-14' ) ) {
                            ?>
                            <div class="widget-column footer-widget-1 mt-5">
                                <?php dynamic_sidebar( 'sidebar-14' ); ?>
                            </div>
                            <?php
                                }
                            ?>
                        </aside><!-- .SECTION 3 SIDEBAR 2 WIDGET  -->
                    <?php endif; ?> 
                </div>
                <div class="col-md-3 col-sm-12 col-xs-4 mr-4 shadow section3rounded text-center s3d" >
                    <?php if ( is_active_sidebar( 'sidebar-15' ) ) : ?>
                    <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Header', 'landingpage' ); ?>">
                            <?php
                            if ( is_active_sidebar( 'sidebar-15' ) ) {
                            ?>
                            <div class="widget-column footer-widget-1 mt-5">
                                <?php dynamic_sidebar( 'sidebar-15' ); ?>
                            </div>
                            <?php
                                }
                            ?>
                    </aside><!-- .SECTION 3 SIDEBAR 3 WIDGET  -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    </div>  <!-- here ends the content div that we opend in header section -->