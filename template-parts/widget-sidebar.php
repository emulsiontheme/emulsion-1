<?php
if ( is_page() ) {
	
	$emulsion_sidebar_condition		 = get_theme_mod( 'emulsion_condition_display_page_sidebar', emulsion_get_var( 'emulsion_condition_display_page_sidebar' ) );
	$emulsion_logged_in				 = 'logged_in_user' == $emulsion_sidebar_condition && ! is_user_logged_in() ? false : true;
	$emulsion_metabox_page_control	 = emulsion_metabox_display_control( 'page_sidebar' );

	if ( is_active_sidebar( 'sidebar-3' ) && emulsion_get_supports( 'sidebar_page' ) && $emulsion_logged_in && $emulsion_metabox_page_control ) {
		?><aside class="sidebar-widget-area page-sidebar <?php echo esc_attr( emulsion_element_classes( 'sidebar-widget-area' ) ); ?>  <?php emulsion_template_identification_class( __FILE__ ) ?>"><ul class="sidebar-widget-area-lists"><?php
		if ( ! dynamic_sidebar( 'sidebar-3' ) ) {
			do_action( 'emulsion_sidebar_widget_fallback', '' );
			do_action( 'emulsion_sidebar_page_widget_fallback', '' );
		}
		?></ul></aside></div>	
		<?php
	}
} else {
	
	$emulsion_sidebar_condition		 = get_theme_mod( 'emulsion_condition_display_posts_sidebar', emulsion_get_var( 'emulsion_condition_display_posts_sidebar' ) );
	$emulsion_logged_in				 = 'logged_in_user' == $emulsion_sidebar_condition && ! is_user_logged_in() ? false : true;
	$emulsion_metabox_post_control	 = emulsion_metabox_display_control( 'sidebar' );

	if ( is_active_sidebar( 'sidebar-1' ) && emulsion_get_supports( 'sidebar' ) && $emulsion_logged_in && $emulsion_metabox_post_control ) {
		?><aside class="sidebar-widget-area post-sidebar  <?php echo esc_attr( emulsion_element_classes( 'sidebar-widget-area' ) ); ?> <?php emulsion_template_identification_class( __FILE__ ) ?>"><ul class="sidebar-widget-area-lists"><?php
			if ( ! dynamic_sidebar( 'sidebar-1' ) ) {
				do_action( 'emulsion_sidebar_widget_fallback', '' );
				do_action( 'emulsion_sidebar_post_widget_fallback', '' );
			}
			?></ul>	</aside></div>	
		<?php
	}
}
?>		
