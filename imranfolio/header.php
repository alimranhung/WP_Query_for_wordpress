<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <?php 
            wp_head();
        ?>

    </head>

<?php get_template_part( "template-parts/common/preloader"); ?>
 <!-- Header area start -->
 <div class="header-area header-absolute-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 align-self-center">
                <?php if(current_theme_supports("custom-logo")): ?>
                <a href="<?php echo site_url(); ?>">
                    <?php the_custom_logo(); ?>
                </a>
                <?php endif; ?>
            </div>
            <div class="col-lg-8">
                <div class="mainmenu">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            "menu_class"=>"list-inline text-right",
                        ) );
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header area end -->

     