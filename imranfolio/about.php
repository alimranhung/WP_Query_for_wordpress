
<!--about page area start-->
    <div class="about-area section-padding" >
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
                    <div class="about-content")">
                        <h3 class="mb-4">
                        <?php the_title(); ?>
                        </h3>
                        
                        <?php   
                            the_content();
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-thumbnail")">
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
<!--about page area end-->
