<div class="comments">
    <h2 class="comments-title">
        <?php
        $portfolio_cn = get_comments_number();
        if ( 1 == $portfolio_cn ) {
            _e( "1 Comment", "portfolio" );
        } else {
            echo $portfolio_cn . " " . __( "Comments", "portfolio" );
        }
        ?>
    </h2>
    <div class="comments-list">
        <?php
        wp_list_comments();
        ?>
        <div class="comments-pagination">
            <?php
            the_comments_pagination( array(
                'screen_reader_text' => __( 'Pagination', 'alpha' ),
                'prev_text'          => '<' . __( 'Previous Comments', 'portfolio' ),
                'next_text'          => '>' . __( 'Next Comments', 'portfolio' ),
            ) );
            ?>
        </div>
        <?php
        if ( ! comments_open() ) {
            _e( "Comments are closed.", "portfolio" );
        }
        ?>
    </div>

    <div class="comments-form">
        <?php
        comment_form();
        ?>
    </div>
</div>

