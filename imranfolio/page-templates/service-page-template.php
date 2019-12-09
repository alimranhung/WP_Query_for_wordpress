<?php
/**
 * Template Name: Service page
 */
    get_header();
?>
<body <?php body_class( )?>>
       
    <?php get_template_part( "preloader"); ?>
    <?php get_template_part( "/template-parts/common/hero"); ?>

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
                    <div class="col-lg-6">
                        <div class="single-service-item services">
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
                    </div>
                    <div class="col-lg-6">
                        <div class="single-service-item services">
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

