<?php
/* Theme Widget sidebars. */
/* Register site widgets */
if ( ! function_exists( 'newses_widgets' ) ) :
    /**
     * Load widgets.
     *
     * @since 1.0.0
     */
    function newses_widgets() {
        register_widget( 'Newses_Posts_Carousel' );
        register_widget( 'Newses_Dbl_Col_Cat_Posts' );
        register_widget( 'Newses_Latest_Post' );
        register_widget( 'Newses_Posts_List' );
        register_widget( 'Newses_Tab_Posts' );
        register_widget( 'Newses_Posts_Slider' );
        register_widget( 'Newses_horizontal_vertical_posts');
        register_widget( 'Newses_Design_Slider');
    }
endif;
add_action( 'widgets_init', 'newses_widgets' );
