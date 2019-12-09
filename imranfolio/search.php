<?php

/**
 *  Template name: home template
 */
    get_header();
    
?>
    <body <?php body_class( )?>>
    
    <?php get_template_part( "/template-parts/common/hero"); ?>
    <?php 
        if(!have_posts(  )){
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                    <h4><?php _e('Not Result Found', 'portfolio')?></h4>
                    </div>
                </div>
            </div>
                
            <?php
        }
    ?>
        <?php
            
            while(have_posts()){
            the_post( );
           get_template_part("post-formats/content", get_post_format());
    }
?>

    

<?php
    get_footer(  );
?>