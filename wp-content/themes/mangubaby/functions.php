<?php

/**
 *	Register Navigation Menus
 **/
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'mobile-menu' => __( 'Mobile Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/**
 *	Create Menus
 **/
function get_menu($menu) {
	wp_nav_menu( 
		array( 
			'theme_location'  => $menu,
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'items_wrap'      => '%3$s',
			'walker'		  => new Mangubaby_Walker_Nav_Menu
		) 
	);
}

/**
 *	Custom Walker that only shows the menuitem's ID's 
 *	(and active items get active classes), delevering 
 *	clean menu code (in WordPress > 3.0)
 **/
 
class Mangubaby_Walker_Nav_Menu extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		    $current_indicators = array('current-menu-item', 'current-menu-parent', 'current_page_item', 'current_page_parent');

		            $newClasses = array();
		           
		            foreach($classes as $el){
		                    //check if it's indicating the current page, otherwise we don't need the class
		                    if (in_array($el, $current_indicators)){
		                            array_push($newClasses, $el);
		                    }
		            }

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $newClasses), $item ) );
		if($class_names!='') $class_names = ' class="'. esc_attr( $class_names ) . '"';


		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

		if($depth != 0)
		{
		         //children stuff, maybe you'd like to store the submenu's somewhere?
		}

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
 *	Replace "current-menu-item" with "active"
 **/
function current_to_active($text){
        $replace = array(
                //List of menu item classes that should be changed to "active"
                'current-menu-item' => 'active',
                'current-menu-parent' => 'active',
                'current_page_item' => 'active',
                'current_page_parent' => 'active'
        );
        $text = str_replace(array_keys($replace), $replace, $text);
                return $text;
        }
add_filter ('wp_nav_menu','current_to_active');

/**
 * Override img caption shortcode to remove the inline width so things can be responsive friendly.
 **/
add_filter('img_caption_shortcode', 'mangubaby_img_caption_shortcode', 10, 3);

function mangubaby_img_caption_shortcode($val, $attr, $content = null) {
    extract(shortcode_atts(array(
        'id'    => '',
        'align' => '',
        'width' => '',
        'caption' => ''
    ), $attr));

    if ( 1 > (int) $width || empty($caption) ) return $val;

    return '<div id="' . $id . '" class="wp-caption ' . esc_attr($align) . '">' . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}

/**
 *	Custom Pagination
 **/
function paginate() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	
	$pagination = array(
		'base' => @add_query_arg('page','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'show_all' => true,
		'type' => 'list',
		'next_text' => '&raquo;',
		'prev_text' => '&laquo;'
	);
	
	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	
	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
	
	echo paginate_links( $pagination );
}

/**
 *	Add extra image sizes
 **/
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

/**
 *	Debug Thingie
 **/
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

?>