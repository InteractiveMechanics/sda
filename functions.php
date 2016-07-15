<?php 

function printThemePath() {
   echo get_site_url() . '/wp-content/themes/' . get_template();
}


register_nav_menus( array(
    'primary' => __( 'Primary Menu' ),
    'secondary' => __( 'Secondary Menu' ),   
) );

//removes ellipses from end of the_excerpt
function trim_excerpt($text) {
	return rtrim($text,'[&hellip;]');
}
add_filter('get_the_excerpt', 'trim_excerpt');


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');


add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'image', 'gallery', 'aside' ) );  

function sda_comments($comment, $args, $depth) {
	$comment  = '<li class="comment">';
	$comment .=	'<header class="comment-head">';
	$comment .= '<p class="comment-author"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '">' . get_comment_author() . '</a> says </p>';
	$comment .= '<p class="comment-meta">' . get_comment_date() . ' at ' . get_comment_time() . '</p>';
	$comment .= '</header>';
	$comment .= '<div class="comment-body">';
	$comment .= '<p>' . get_comment_text() . '</p><div class="comment-reply">' . get_comment_reply_link(array('depth' => $depth, 'max_depth' => 5)) .'</span></div>';
	$comment .= '</div>';
	$comment .= '</li>';
 
	echo $comment;
}

/**
 * Remove empty paragraphs created by wpautop()
 * @author Ryan Hamilton
 * @link https://gist.github.com/Fantikerz/5557617
 */
function remove_empty_p( $content ) {
    $content = force_balance_tags( $content );
    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
    return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);




function create_custom_post_types() {
    register_post_type( 'sda_member_image',
        array(
            'labels' => array(
                'name' => __( 'Member Image' ),
                'singular_name' => __( 'Member Image' )
            ),
            'public' => true,
            'map_meta_cap'=> true,
            'capability_type' => array('memberimage', 'memberimages'),
            'capabilities' => array(
                'publish_posts' => 'publish_memberimages',
                'edit_posts' => 'edit_memberimages',
                'edit_post' => 'edit_memberimage',
                'edit_others_posts' => 'edit_others_memberimages',
                'delete_posts' => 'delete_memberimages',
                'delete_post' => 'delete_memberimage',
                'delete_others_posts' => 'delete_others_memberimages',
                'manage_posts' => 'manage_memberimages',
                'read_private_posts' => 'read_private_memberimages',
                'read_post' => 'read_memberimage',
            ),
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'memberimages' ),
            'supports' => array( 'title', 'editor', 'comments', 'author', 'custom-fields', 'thumbnail', 'custom-fields', 'post-templates'),
        )
    );
    
    
    register_post_type( 'sda_member_gallery',
        array(
            'labels' => array(
                'name' => __( 'Member Gallery' ),
                'singular_name' => __( 'Member Gallery' )
            ),
            'public' => true,
            'map_meta_cap'=> true,
            'capability_type' => array('membergallery', 'membergalleries'),
            'capabilities' => array(
                'publish_posts' => 'publish_membergalleries',
                'edit_posts' => 'edit_membergalleries',
                'edit_post' => 'edit_membergallery',
                'edit_others_posts' => 'edit_others_membergalleries',
                'delete_posts' => 'delete_membergalleries',
                'delete_post' => 'delete_membergallery',
                'delete_others_posts' => 'delete_others_membergalleries',
                'manage_posts' => 'manage_membergalleries',
                'read_private_posts' => 'read_private_membergalleries',
                'read_post' => 'read_membergallery',
            ),

            'has_archive' => true,
            'rewrite' => array( 'slug' => 'membergalleries' ),
            'supports' => array( 'title', 'editor', 'comments', 'author', 'custom-fields', 'thumbnail', 'custom-fields', 'post-templates'),
        )
    );
    
    register_post_type( 'sda_member_service',
        array(
            'labels' => array(
                'name' => __( 'Member Service' ),
                'singular_name' => __( 'Member Service' )
            ),
            'public' => true,
            'map_meta_cap'=> true,
            'capability_type' => array('memberservice', 'memberservices'),
            'capabilities' => array(
                'publish_posts' => 'publish_memberservices',
                'edit_posts' => 'edit_memberservices',
                'edit_post' => 'edit_memberservice',
                'edit_others_posts' => 'edit_others_memberservices',
                'delete_posts' => 'delete_memberservices',
                'delete_post' => 'delete_memberservice',
                'delete_others_posts' => 'delete_others_memberservices',
                'manage_posts' => 'manage_memberservices',
                'read_private_posts' => 'read_private_memberservices',
                'read_post' => 'read_memberservice',
            ),

            'taxonomies'  => array( 'category' ),
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'memberservices' ),
            'supports' => array( 'title', 'editor', 'comments', 'author', 'custom-fields', 'thumbnail', 'custom-fields', 'post-templates'),
        )
    );

	register_post_type( 'sda_member_product',
        array(
            'labels' => array(
                'name' => __( 'Member Product' ),
                'singular_name' => __( 'Member Product' )
            ),
            'public' => true,
            'map_meta_cap'=> true,
            'capability_type' => array('memberproduct', 'memberproducts'),
            'capabilities' => array(
                'publish_posts' => 'publish_memberproducts',
                'edit_posts' => 'edit_memberproducts',
                'edit_post' => 'edit_memberproduct',
                'edit_others_posts' => 'edit_others_memberproducts',
                'delete_posts' => 'delete_memberproducts',
                'delete_post' => 'delete_membersproduct',
                'delete_others_posts' => 'delete_others_memberproducts',
                'manage_posts' => 'manage_memberproducts',
                'read_private_posts' => 'read_private_memberproducts',
                'read_post' => 'read_memberproduct',
            ),

            'taxonomies'  => array( 'category' ),
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'memberproducts' ),
            'supports' => array( 'title', 'editor', 'comments', 'author', 'custom-fields', 'thumbnail', 'custom-fields', 'post-templates'),
        )
    );
    
    register_post_type( 'sda_premium_image',
        array(
            'labels' => array(
                'name' => __( 'Premium Image' ),
                'singular_name' => __( 'Premium Image' )
            ),
            'public' => true,
            'map_meta_cap'=> true,
            'capability_type' => array('premiumimage', 'premiumimages'),
            'capabilities' => array(
                'publish_posts' => 'publish_premiumimages',
                'edit_posts' => 'edit_premiumimages',
                'edit_post' => 'edit_premiumimage',
                'edit_others_posts' => 'edit_others_premiumimages',
                'delete_posts' => 'delete_premiumimages',
                'delete_post' => 'delete_premiumimage',
                'delete_others_posts' => 'delete_others_premiumimages',
                'manage_posts' => 'manage_premiumimages',
                'read_private_posts' => 'read_private_premiumimages',
                'read_post' => 'read_premiumimage',
            ),
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'premiumimages' ),
            'supports' => array( 'title', 'editor', 'comments', 'author', 'custom-fields', 'thumbnail', 'custom-fields', 'post-templates'),
        )
    );

    
    

    
}
add_action( 'init', 'create_custom_post_types' );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
		
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' => 'Theme Search Results Settings',
		'menu_title' => 'Search Results',
		'parent_slug' => 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' => 'Theme Calendar Heading Settings',
		'menu_title' => 'Calendar Heading',
		'parent_slug' => 'theme-general-settings',
	));
	
	
	
	
}


function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );


add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field', 20);
	function add_default_value_to_image_field($field) {
		acf_render_field_setting( $field, array(
			'label'			=> __('Default Image ID','acf'),
			'instructions'	=> __('Appears when creating a new post','acf'),
			'type'			=> 'image',
			'name'			=> 'default_value',
		));
}




function update_filter_caption($filters) {
	$filters['tribe-bar-search'] = array(
		'name'    => 'tribe-bar-search',
		'caption' => esc_html__( 'Keyword', 'the-events-calendar' ),
		'html'    => '<input type="text" name="tribe-bar-search" id="tribe-bar-search" value="' .  $value  . '" placeholder="'.  __('Search', 'tribe-events-calendar') .'">' 

		);
	return $filters;
}

add_filter('tribe-events-bar-filters', 'update_filter_caption');


function update_geoloc_caption($filters) {
	$filters['tribe-bar-geoloc'] = array(
					'name'    => 'tribe-bar-geoloc',
					'caption' => __( 'Location', 'tribe-events-calendar-pro' ),
					'html'    => '<input type="hidden" name="tribe-bar-geoloc-lat" id="tribe-bar-geoloc-lat" value="' . esc_attr( $lat ) . '" /><input type="hidden" name="tribe-bar-geoloc-lng" id="tribe-bar-geoloc-lng" value="' . esc_attr( $lng ) . '" /><input type="text" name="tribe-bar-geoloc" id="tribe-bar-geoloc" value="' . esc_attr( $value ) . '" placeholder="' . __( 'i.e. Philadelphia', 'tribe-events-calendar-pro' ) . '">',
				);
	
	return $filters;
}

add_filter('tribe-events-bar-filters', 'update_geoloc_caption');


add_filter( 'wp_nav_menu_items', 'add_search_to_nav', 10, 2 );

function add_search_to_nav ( $items, $args ) {

    if ($args->theme_location == 'secondary') {
        $items .= 	'<li class="subnav-item"><a class="subnav-link" href="' . site_url('search')  . '">  
			  		<svg version="1.1" id="search-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 24.9 24.9" enable-background="new 0 0 24.9 24.9" xml:space="preserve">
                <path fill="" d="M19.5,9.9c0-5.3-4.6-9.9-9.9-9.9S0,4.3,0,9.6s4.6,9.9,9.9,9.9c1.7,0,3.4-0.5,4.8-1.3l0.5-0.3l6.8,6.8
                c0.3,0.3,0.9,0.3,1.2,0l1.6-1.6c0.2-0.2,0.2-0.3,0.1-0.4c0-0.2-0.2-0.4-0.4-0.6l-6.7-6.7l0.3-0.5C19,13.4,19.5,11.7,19.5,9.9z
                M9.9,17.8c-4.4,0-8.2-3.8-8.2-8.2s3.5-7.9,7.9-7.9s8.2,3.8,8.2,8.2S14.3,17.8,9.9,17.8z"/>
                	</svg> 
					</a>
					</li>';

    }
    return $items;

}

function remove_mediatab() {
	if (!current_user_can( 'administrator') ) {
		 remove_menu_page('upload.php');
	}
}

add_action( 'admin_menu', 'remove_mediatab' );





function customize_tribe_events_breakpoint() {
    return 1026;
}
add_filter( 'tribe_events_mobile_breakpoint', 'customize_tribe_events_breakpoint' );

function posts_for_current_author($query) {

    global $pagenow;
    
    if( 'edit.php' != $pagenow || !$query->is_admin )

        return $query;

 

    if( !current_user_can( 'edit_others_posts' ) ) {

        global $user_ID;

        $query->set('author', $user_ID );

    }

    return $query;

}

add_filter('pre_get_posts', 'posts_for_current_author');

function remove_website_row_wpse_94963_css()
{
    echo '<style>tr.user-url-wrap{ display: none; }</style>';
}
add_action( 'admin_head-user-edit.php', 'remove_website_row_wpse_94963_css' );
add_action( 'admin_head-profile.php',   'remove_website_row_wpse_94963_css' );


function remove_email_row_css() {
	echo '<style>tr.user-email-wrap{ display: none; }</style>';
}
add_action( 'admin_head-user-edit.php', 'remove_email_row_css' );
add_action( 'admin_head-profile.php',   'remove_email_row_css' );


function modify_gettext( $translation, $original )
{
    if ( 'Contact Info' == $original ) {
        return '';
    }
       return $translation;
}
add_filter( 'gettext', 'modify_gettext', 10, 2 );





function remove_medialibrary($tabs) {
    if ( !current_user_can( 'administrator' ) ) {
        unset($tabs["mediaLibraryTitle"]);
        
    }
    return $tabs;
}

add_filter('media_view_strings', 'remove_medialibrary');


?>

