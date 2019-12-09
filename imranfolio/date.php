<?php
get_header();
    
?>
    <body <?php body_class( )?>>
    <?php get_template_part( "/template-parts/common/hero"); ?>
   <div class="posts text-center">
        <h1>
            Post In 

           <?php
                if(is_month()){
                    $month = get_query_var("monthnum");
                    $dateobj = DateTime::createFromFormat("!m", $month);
                    echo $dateobj->format("F");
                }else if(is_year()){
                    echo esc_html(get_query_var("year"));
                }else if(is_day()){
                    $day = esc_html(get_query_var("day"));
                    $month = esc_html(get_query_var("monthnum"));
                    $year = esc_html(get_query_var("year"));
                    printf("%s/%s/%s",$day , $month, $year);
                }
            ?>
        </h1>
        <?php 
            while(have_posts()){
            the_post( );
           ?>
            <h2>post under <?php single_tag_title()?></h2>
           <?php
    }
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
    </div> 
<?php
    get_footer(  );
?>

