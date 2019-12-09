<?php
get_header();
    
?>
    <body <?php body_class( )?>>
      
    <?php get_template_part( "/template-parts/common/hero"); ?>

        <?php 
            while(have_posts()){
            the_post( );
           ?>
            <h2>post under <?php the_title()?></h2>
           <?php
    }
?>
   <div class="container post-pagination">
       <div class="row">
           <div class="col-lg-4"></div>
           <div class="col-lg-8">
                <?php
                    the_post_pagination(array(
                        'screen_reader_text'=>'',
                        'prev_text'=>'New Post',
                        'next_text'=>'Old Post',
                    ))
                ?>
           </div>
       </div>
   </div>

<?php
    get_footer(  );
?>

