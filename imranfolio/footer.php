     
    <!--Footer area start-->
    <div class="footer-area bg-dark py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 align-self-center">
                        <div class="footer-left-area">
                            <?php 
                                if(is_active_sidebar( "portfolio_footer_left_site" )){
                                    dynamic_sidebar( "portfolio_footer_left_site" );
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="footer-right-area">
                            <div class="navigation">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-2',
                                    'menu_id'        => 'footer-menu',
                                    "menu_class"=>"list-inline text-right",
                                ) );
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--Footer area end-->
        <!-- Scroll up start -->
        <a href="" id="scrollUp"></a>
        <!-- Scroll up end -->

        <!--Mouse Trial start-->
           <div class="mouse-trial">
                <div class="mouse-pointer mouse-pointer-one"></div>
                <div class="mouse-pointer mouse-pointer-two"></div>
                <div class="mouse-pointer mouse-pointer-three"></div>
                <div class="mouse-pointer mouse-pointer-four"></div>
            </div> 
        <!--Mouse Trial end-->

        <?php
            wp_footer();
        ?>
    </body>
</html>