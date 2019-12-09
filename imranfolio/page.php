<?php
/**
 * Template Name: page template
 */
    get_header();
?>
<body <?php body_class( )?>>
       
    <?php get_template_part( "template-parts/common/hero"); ?>

    <div class="container">
       <?php
        if(is_front_page(  )){
            ?>
            <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <?php
                            $attachments = new Attachments("testimonials", 73);
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
                            if(class_exists("Attachments")){
                                $attachments = new Attachments('testimonials');
                                if($attachments->exist()){
                                    while($attachment = $attachments->get()){?>
                                    <div>
                                        <?php echo $attachments->image('thumbnail');?>
                                        <h4><?php echo esc_html($attachments->field('name')); ?></h4> 
                                        <p><?php echo esc_html($attachments->field('testimonials'));?></p>
                                        <p><?php echo esc_html($attachments->field('position'));?>,
                                            <strong>
                                                <?php echo esc_html($attachments->field('company'));?>
                                            </strong>
                                        </p>
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
        }
       ?>
    </div>
    <?php 
   
        while(have_posts()){
        the_post( );
        ?>
            
        <!--Service Multiple page area start-->
        <div class="service-area section-padding" <?php post_class(); ?> id="multiplepage">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title pb-4">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <p> <strong><?php the_author(); ?></strong></br>
                            <?php echo get_the_date(); ?></p>
                            <?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>", "</li><li>", "</li></ul>"); ?>
                        </div>
                        <div class="col-lg-10 offset-lg-1">
                            <div class="single-service-item">
                            <h3 class="mb-4">
                            <?php the_title(); ?>
                            </h3>
                                <?php 
                                    if(has_post_thumbnail()){
                                    //$thumbnail_url = get_the_post_thumbnail_url(null, "large");
                                    //echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
                                    //printf( '<a href="%s" data-featherlight="image">', $thumbnail_url);
                                    echo( '<a href="#" class="popup" data-featherlight="image">');
                                    the_post_thumbnail("large", array("class" => "box img-fluid"));
                                    echo "</a>";
                                }
                                ?>
                            </div>
                            <?php   
                            the_content();
                            

                            // next_post_link();
                            // echo"";
                            // previous_post_link();

                            ?>
                        </div>
                </div>
            </div>
        </div>
    <!--Service Multiple page area end-->

        <?php
        }
    ?>
        
<?php
    get_footer(  );
?>

