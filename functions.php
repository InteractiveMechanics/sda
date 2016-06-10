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
	$comment .= '<h5 class="comment-author">' . get_comment_author() . '</h5>';
	$comment .= '<h5 class="comment-meta"><span class="blog-byline-divider"> / </span>' . get_comment_date() . '</h5>';
	$comment .= '</header>';
	$comment .= '<div class="comment-body">';
	$comment .= '<p>' . get_comment_text() . '<span class="comment-reply">' . get_comment_reply_link(array('depth' => $depth, 'max_depth' => 5)) .'</span></p>';
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
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'memberimages' ),
            'supports' => array( 'title', 'editor', 'comments', 'author', 'custom-fields', 'post-formats', 'thumbnail', 'custom-fields', 'post-templates'),
        )
    );
    
    register_post_type( 'sda_member_gallery',
        array(
            'labels' => array(
                'name' => __( 'Member Gallery' ),
                'singular_name' => __( 'Member Gallery' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'membergalleries' ),
            'supports' => array( 'title', 'editor', 'comments', 'author', 'custom-fields', 'post-formats', 'thumbnail', 'custom-fields', 'post-templates'),
        )
    );
    
    register_post_type( 'sda_member_service',
        array(
            'labels' => array(
                'name' => __( 'Member Service' ),
                'singular_name' => __( 'Member Service' )
            ),
            'public' => true,
            'taxonomies'  => array( 'category' ),
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'memberservices' ),
            'supports' => array( 'title', 'editor', 'comments', 'author', 'custom-fields', 'post-formats', 'thumbnail', 'custom-fields', 'post-templates'),
        )
    );

	register_post_type( 'sda_member_product',
        array(
            'labels' => array(
                'name' => __( 'Member Product' ),
                'singular_name' => __( 'Member Product' )
            ),
            'public' => true,
            'taxonomies'  => array( 'category' ),
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'memberproducts' ),
            'supports' => array( 'title', 'editor', 'comments', 'author', 'custom-fields', 'post-formats', 'thumbnail', 'custom-fields', 'post-templates'),
        )
    );
    
    

    
}
add_action( 'init', 'create_custom_post_types' );
add_post_type_support( 'sda_member_image', 'post-templates');
add_post_type_support( 'sda_member_gallery', 'post-templates');
add_post_type_support( 'sda_member_service', 'post-templates');
add_post_type_support( 'sda_member_product', 'post-templates');










?>
