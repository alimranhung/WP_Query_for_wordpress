<!--Service Multiple page area start-->
<div  <?php post_class(); ?> id="multiplepage">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title pb-4">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <p> <strong><?php the_author(); ?></strong></br>
                <?php echo get_the_date(); ?></p>
                <?php echo get_the_tag_list("<ul class=\"list-unstyled\"><li>", "</li><li>", "</li></ul>"); ?>

                <span class="dashicons dashicons-format-image"></span>
            </div>
            <div class="col-lg-8 mb-4">
                <div class="single-service-item">
                    <h3 class="mb-4">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

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
                    // if(!post_password_required(  )){
                    //     the_excerpt(  );
                    // }else{
                    //     echo get_the_password_form();
                    // }
                    the_excerpt(  );
                ?>
            </div>
            <div class="container post-pagination">
                <div class="row">
                    <div class="col-lg-4"></div>
                        <div class="col-lg-8">
                            <?php
                                the_posts_pagination( 
                                    array(
                                        "screen_reader_text"=>"",
                                        "prev_text"=>"New Post",
                                        "next_text"=>"Old Post"
                                    )
                                );
                            ?>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
<!--Service Multiple page area end-->