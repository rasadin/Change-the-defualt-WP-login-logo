/**
 * Change the defualt WP login logo
 */
function webalive_login_screen_logo() {
    echo '<style type="text/css">
	.login h1 a {
		background-image: url('.get_bloginfo( 'template_directory' ).'/assets/img/login-screen.png) !important; 
		height: 30px !important;
		background-size: 100%;
		width: 100px;
	}
	</style>';
}
add_action( 'login_head', 'webalive_login_screen_logo' );

function webalive_login_head_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'webalive_login_head_url' );
