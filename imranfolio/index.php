<?php

/**
 *  Template name: home template
 */
    get_header();
    
?>
    <body <?php body_class( )?>>
    
    <?php get_template_part( "/template-parts/common/hero"); ?>
    <?php get_template_part( "about-page-template"); ?>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
        <?php
        $attachments = new Attachments("testimonials");
             if(class_exists("Attachments") && $attachments->exist()){
                 ?>
               <h2 class="text-center"> 
                    <?php _e("Testimonials", "portfolio"); ?>
               </h2>
                <?php
            }
        ?>
            <div class="testimonials slider text-center">
                <?php 
                    if(class_exists('Attachments')){
                        
                        if($attachments -> exist()){
                            while($attachment = $attachments->get()){?>
                            <div>
                                <?php echo $attachments->image('large'); ?>
                                <h4><?php echo esc_html($attachments->field('name')); ?></h4>
                                <p><?php echo esc_html($attachments->field('position')); ?></p>
                                <p><?php echo esc_html($attachments->field('company')); ?></p>
                            </div>
                                <?php
                            }
                        }
                    }
                    ?>
                    
                </div>
            </div>
        </div>

        <?php
            while(have_posts()){
            the_post( );
           get_template_part("post-formats/content", get_post_format());
    }
?>

    

<?php
    get_footer(  );
?>