<!-- Display Blog Description -->
<div class="site-branding">

    <?php
        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) :
            ?>
                <p class="site-description">
                    <?php echo $description; ?>
                </p>
        <?php endif; ?>

</div>