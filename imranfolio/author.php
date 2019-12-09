

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
                                    <div class="authorsection ">
                                        <div class="row">
                                            <div class="col-lg-3 authorimg">
                                                <?php
                                                    echo get_avatar(get_the_author_meta("ID"));
                                                ?>
                                            </div>
                                            <div class="col-lg-9">
                                                <h4>
                                                    <?php echo strtoupper(get_the_author_meta("display_name"));?>
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
                                        </div>
                                        <?php endif; ?>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            <!--Service Multiple page area end-->
            </div>
            <div class="col-lg-4">
            <?php 
                if(is_active_sidebar( "sidebar-1" )){
                    dynamic_sidebar( "sidebar-1" );
                }
            ?>
            </div>
        </div>
    </div>

<?php
    get_footer(  );
?>

