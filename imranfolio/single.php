<?php
    $portfolio_layout_class = "col-lg-8";
    $portfolio_text_class ="";
    if(!is_active_sidebar( "sidebar-1" )){
        $portfolio_layout_class = "col-lg-10 offset-lg-1";
        $portfolio_text_class = "text-center";
    }
?>

<?php
    get_header();
?>
    <body <?php body_class()?>>
        
    <?php get_template_part( "template-parts/common/hero"); ?>
    
        <div class="container">
        <div class="row">
            <div class="<?php echo $portfolio_layout_class; ?>">
               
                <!--Service Multiple page area start-->
                <div <?php post_class(); ?> id="multiplepage">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 ">
                                <div class="section-title pb-4">
                                    <h2 class="<?php echo $portfolio_text_class; ?>"><?php the_title(); ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php 
                                while(have_posts()){
                                    the_post( );
                                    ?>
                                    <div class="col-lg-12">
                                    <p> <strong><?php the_author_posts_link(); ?></strong></br>
                                        <?php echo get_the_date(); ?></p>
                                        <?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>", "</li><li>", "</li></ul>"); ?>

                                    </div>
                                    <div class="col-lg-12">
                                    <div class="slider">
                                        <?php 
                                        if(class_exists('Attachments')){
                                            $attachments = new Attachments("slider");
                                            if($attachments -> exist()){
                                                while($attachment = $attachments->get()){?>
                                                <div>
                                                    <?php echo $attachments->image('large'); ?>
                                                </div>
                                                    <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                        <div class="single-service-item">
                                        <h3 class="mb-4">
                                        <?php the_title(); ?>
                                        </h3>

                                            <?php 
                                            if(!class_exists('attachments')){
                                                echo '<a href="#" class="popup" data-featherlight="image">';
                                                if(has_post_thumbnail()){
                                                    the_post_thumbnail("large", array("class" => "box img-fluid"));
                                                }
                                                echo '</a>';
                                            }
                                            the_post_thumbnail("portfolio-square-new1");
                                            the_post_thumbnail("portfolio-square-new2");
                                            the_post_thumbnail("portfolio-square-new3");
                                            the_post_thumbnail("portfolio-square-new4");
                                            ?>

                                        </div>
                                        
                                        <?php   
                                        the_content();

                                        wp_link_pages();

                                        // next_post_link();
                                        // echo"";
                                        // previous_post_link();

                                        ?>
                                    </div>
                                    <div class="authorsection ">
                                        <div class="row">
                                            <div class="col-lg-3 authorimg">
                                                <?php
                                                    echo get_avatar(get_the_author_meta("id"));
                                                ?>
                                            </div>
                                            <div class="col-lg-9">
                                                <h4>
                                                    <?php echo get_the_author_meta("display_name");?>
                                                </h4>
                                                <p>
                                                    <?php 
                                                        echo get_the_author_meta("description");
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if(comments_open()):?>
                                        <div class="col-lg-12">
                                            <?php comments_template(); ?>
                                                <h2>Open Comments</h2>
                                        </div>
                                    <?php else:?>
                                    <h2>Comments are colsed take some rest</h2>
                                    
                                        <?php endif; ?>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            <!--Service Multiple page area end-->
            </div>
            <?php if(is_active_sidebar("sidebar-1")): ?>
            <div class="col-lg-4">
            <?php 
                if(is_active_sidebar( "sidebar-1" )){
                    dynamic_sidebar( "sidebar-1" );
                }
            ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

<?php
    get_footer(  );
?>

