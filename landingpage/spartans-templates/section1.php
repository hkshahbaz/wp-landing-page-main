
  <!-- Below the fold page section 1 -->
  <section id="primary" class="content-area section">
      <div class="sectionbluediv"></div>
      <div class="container section">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12 sectionheading">
                    <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>

                    <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Header', 'landingpage' ); ?>">
                        <?php
                        if ( is_active_sidebar( 'sidebar-3' ) ) {
                            ?>
                                    <div class="widget-column footer-widget-1">
                                    <?php dynamic_sidebar( 'sidebar-3' ); ?>
                                    </div>
                                <?php
                                }
                                ?>
                    </aside><!-- .SECTION 1 SIDEBAR 1 WIDGET  -->
                    <?php endif; ?>
              </div>
          </div>
          <div class="row mx-md-n5 d-flex justify-content-center">
              <div class="col-md-3 col-sm-12 col-xs-12 sectiondiv1 shadow p-2 mb-5 bg-white mr-4 p-4 text-center" >
                    <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                    <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Header', 'landingpage' ); ?>">
                        <?php
                        if ( is_active_sidebar( 'sidebar-4' ) ) {
                        ?>
                                <div class="widget-column footer-widget-1">
                                <?php dynamic_sidebar( 'sidebar-4' ); ?>
                                </div>
                            <?php
                            }
                            ?>
                    </aside><!-- .SECTION 1 SIDEBAR 2 WIDGET  -->
                    <?php endif; ?> 
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12 sectiondiv1 shadow p-2 mb-5 bg-white mr-4 p-4 gradientdiv text-center" >
                    <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
                    <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Header', 'landingpage' ); ?>">
                        <?php
                        if ( is_active_sidebar( 'sidebar-5' ) ) {
                        ?>
                                <div class="widget-column footer-widget-1">
                                <?php dynamic_sidebar( 'sidebar-5' ); ?>
                                </div>
                            <?php
                            }
                            ?>
                    </aside><!-- .SECTION 1 SIDEBAR 3 WIDGET  -->
                    <?php endif; ?>  
              </div>
              <div class="col-md-3 col-sm-12 col-xs-12 sectiondiv1 shadow p-2 mb-5 bg-white mr-4 p-4 text-center">
                    <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
                    <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Header', 'landingpage' ); ?>">
                        <?php
                        if ( is_active_sidebar( 'sidebar-6' ) ) {
                        ?>
                            <div class="widget-column footer-widget-1">
                                <?php dynamic_sidebar( 'sidebar-6' ); ?>
                            </div>
                            <?php
                            }
                            ?>
                    </aside><!-- .SECTION 1 SIDEBAR 4 WIDGET  -->
                    <?php endif; ?> 
              </div>
          </div>
      </div>
  </section><!-- .content-area -->