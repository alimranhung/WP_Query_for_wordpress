<?php 
/**
 * Template Name:Custom WP Query 
 */
?>
<?php get_header();  ?>
    <body <?php body_class( )?>>
    <?php get_template_part( "/template-parts/common/hero"); ?>
    <div class="custom text-center">
        <?php
        $paged = get_query_var("paged")? get_query_var("paged"): 1; 
        $posts_per_page = 2;
        $post_ids = array(39,34,55,58,1,5);
        $_p = new WP_Query( array( 
            'category_name' => 'default',
            'posts_per_page'=>$posts_per_page,
            'post__in'=> $post_ids,
            'paged'=>$paged,
        ));
            while($_p->have_posts() ){
            $_p->the_post();
           ?>
            <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
           <?php
            }
            wp_reset_query( );
        ?>
        <div class="container post-pagination">
            <div class="row">
                <div class="col-lg-12">
                       <?php 
                        echo paginate_links(array(
                            'total' => $_p->max_num_pages,
                            'current' =>$paged,
                            'prev_next'=>false,
                            )
                        );
                       ?> 
                </div>
            </div>
        </div>
    </div>
<?php get_footer(  );?>

