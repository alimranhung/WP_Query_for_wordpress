<?php
get_header();
    
?>
    <body <?php body_class( )?>>
    
    <?php get_template_part( "/template-parts/common/hero"); ?>


        <?php 
            while(have_posts()){
            the_post( );
           ?>
            <h2>post under <?php single_tag_title()?></h2>
           <?php
    }
?>
        
    <!--Service Single page area start-->
        <div class="service-area service-single-page section-padding" id="singlepage">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title pb-4">
                            <h2>single page</h2>
                            <h4>single page service following the below</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-service-item ">
                            <a href="https://alimranhung.github.io/text-typing" class="box box101"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-service-item">
                            <a href="https://rsr.netlify.com/" class="box box102"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-service-item">
                            <a href="https://financeco.netlify.com/" class="box box103"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-service-item">
                            <a href="https://irestaurant.netlify.com/" class="box box104"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-service-item">
                            <a href="ThemeForest-site/Finence/index.html" class="box box105"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <div class="single-service-item">
                            <div class="single-service-item-text d-table w-100 h-100">
                                <div class="single-service-item-text-inner d-table-cell align-middle text-center">
                                    <h1 class="text-light">comming soon..</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--Service Single page area end-->
		
        <!--:::::::: Contact us modal box start ::::::::-->
        <div class="modal fade" id="contactform-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="contact-form-area section-padding" id="contactform-modal">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="contact-form-wrapper"> 
                                            <div class="contact-form-inner">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8 text-center">
                                                        <div class="section-title">
                                                            <h2>get in touch.</h2>
                                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, dignissimos?</p>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <form class="mailchimp" action="email-templates/simple.html" method="post">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input type="text" name="name" placeholder="First name" required>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="lastname" placeholder="Last name" required>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="email" name="email" placeholder="Email" required>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="password" name="password" placeholder="Password" required>
                                                        </div>
                                                    </div>
                                                    <button class="inline-btn" type="submit">send message</button>
                                                    <!-- showing success messages -->
                                                    <p class="subscription-success"></p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--model body end-->
                </div>
            </div>
        </div>

<?php
    get_footer(  );
?>

