<?php
//HEADER
get_header();
?>
<section id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container mt-4">
                <?php
                if ( have_posts() ) {

                    // Load posts loop.
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'spartans-templates/content/content' );
                    }

                    // Previous/next page navigation.
                    tech_the_posts_navigation();

                } else { 

                    // If no content, include the "No posts found" template.
                    get_template_part( 'spartans-templates/content/content-else', 'none' );

                }
                ?>
            </div>
		</main><!-- .site-main -->
	</section><!-- .content-area -->
 <?php 
 //SECTION 1 
 get_template_part( 'spartans-templates/section1','none'); 
 ?>

 <?php 
 //SECTION 2 
 get_template_part( 'spartans-templates/section2','none'); 
 ?>

<?php 
 //SECTION 2 
 get_template_part( 'spartans-templates/section3','none'); 
 ?>

<?php
//  get_sidebar();

  get_footer();
 ?>