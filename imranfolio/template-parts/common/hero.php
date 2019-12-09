<?php 
    $button_label = get_post_meta(get_the_ID(), "button label", true);

    $button_text = get_post_meta(get_the_ID(), "button text", true);
?>

<!--Homepage area start-->
 <div class="homepage-slides-area page-header" id="home">
    <div class="homepage-content-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="homepage-content-inner">
                        <h1 class="mb-1"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <div class="homepage-typing-area">
                            <h1><span class="typing"> </span></h1>
                        </div>
                        <div class="indicator-area">
                            <a href="#aboutus"><span></span></a>
                        </div>
                        <a href="#multiplepage" class="btn btn-success"><?php echo esc_html($button_label)?></a>
                        <a href="#singlepage" class="btn btn-primary"><?php echo esc_attr($button_text)?></a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<!--Homepage area end-->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 text-center">
        <?php
            if(is_search()){
                ?>
                    <h3><?php _e("you searched for ", "portfolio");?><?php the_search_query()?></h3>
                <?php
            }
        ?>
            <?php echo get_search_form(); ?>
        </div>
    </div>
</div>