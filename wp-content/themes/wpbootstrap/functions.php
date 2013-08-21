<?php 
 include("wp-bootstrap-walker-class.php");

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}

function remove_admin_bar() 
{
    //Remove admin bar except administrator.
    if (!current_user_can('administrator') && !is_admin()) //if you want remove admin bar for all users, please delete this line
    {
        show_admin_bar(false);
    }
}

//让WordPress支持用户名或邮箱登录
function dr_email_login_authenticate( $user, $username, $password ) {
	if ( is_a( $user, 'WP_User' ) )
		return $user;
 
	if ( !empty( $username ) ) {
		$username = str_replace( '&', '&', stripslashes( $username ) );
		$user = get_user_by( 'email', $username );
		if ( isset( $user, $user->user_login, $user->user_status ) && 0 == (int) $user->user_status )
			$username = $user->user_login;
	}
 
	return wp_authenticate_username_password( null, $username, $password );
}
remove_filter( 'authenticate', 'wp_authenticate_username_password', 20, 3 );
add_filter( 'authenticate', 'dr_email_login_authenticate', 20, 3 );
 
//替换“用户名”为“用户名 / 邮箱”
function username_or_email_login() {
	if ( 'wp-login.php' != basename( $_SERVER['SCRIPT_NAME'] ) )
		return;
 
	?><script type="text/javascript">
	// Form Label
	if ( document.getElementById('loginform') )
		document.getElementById('loginform').childNodes[1].childNodes[1].childNodes[0].nodeValue = '<?php echo esc_js( __( '用户名/邮箱', 'email-login' ) ); ?>';
 
	// Error Messages
	if ( document.getElementById('login_error') )
		document.getElementById('login_error').innerHTML = document.getElementById('login_error').innerHTML.replace( '<?php echo esc_js( __( '用户名' ) ); ?>', '<?php echo esc_js( __( '用户名/邮箱' , 'email-login' ) ); ?>' );
	</script><?php
}
function my_login_redirect( $redirect_to, $request, $user ){
    //验证用户
    if( is_array( $user->roles ) ) {
       //验证超级管理员
       if( in_array( "administrator", $user->roles)){
           // 如果的超级管理员则返回后台管理主页
           return home_url( '/wp-admin/' );
       } else {
           //否则跳转以网站首页
//         return home_url();
           //否则跳转返回至之前的页面
           return $_SERVER["HTTP_REFERER"];
       }
    }
}

//Written by wcl.
function echo_collapse( $posts, $accordionID ){
    //显示colllapse
while ( $posts->have_posts()) : $posts->the_post();
    global $more;
    $more = 0;?>
     <div class = "accordion-group">
        <div class = "accordion-heading">
            <a class = "accordion-toggle" data-toggle = "collapse" data-parent = "#<?php echo $accordionID ?>" href = "#<?php echo $accordionID.the_ID() ?>">
                <?php the_title() ?>
            </a>
        </div>
        <div id="<?php echo $accordionID.the_ID() ?>" class="accordion-body collapse">
            <div class="accordion-inner">
                <?php $excerpt = get_the_excerpt();
                      if($excerpt == '') 
                          the_content('[Read more...]');
                      else echo $excerpt.'<a class="read-more pull-right" href="'. get_permalink( get_the_ID() ) . '" target = _blank><br><br>更多</a>';?> 

            </div>
        </div>
    </div>
<?php endwhile; ?><?php
}

//Written by wcl
function echo_pagination($cpage, $cat, $totalPages){
    ?>
        <ul class = "pager" style="text-align: left; margin-left: 200px; margin-top: 100px;">
        <li class = "<?php if($cpage==1) echo "disabled" ?>">
            <a 
                <?php if($cpage>1) {?>
                href = "<?php echo esc_url(get_home_url())?>/news-list/?cpage=<?php echo ($cpage-1) ?>&cat=<?php echo $cat?>"
                <?php } ?>>
                <i class = "icon-hand-left"></i> Previous
            </a>
        </li>
        <span class="badge badge-info"><?php echo $cpage?></span>
        <li class = "<?php if($cpage==$totalPages) echo "disabled" ?>">
            <a 
                <?php if($cpage < $totalPages) {?> 
                    href = "<?php echo esc_url(get_home_url())?>/news-list/?cpage=<?php echo ($cpage+1)?>&cat=<?php echo $cat?>"
                <?php } ?>>
                Next <i class = "icon-hand-right"></i>
            </a></li>
        </ul>
<?php }

function split_content() {
        global $more;
        $more = true;
        echo $post->content;
        $content = preg_split('/<span id="more-\d+"><\/span>/i', get_the_content('more'));
        for($c = 0, $csize = count($content); $c < $csize; $c++) {
                $content[$c] = apply_filters('the_content', $content[$c]);
        }
        return $content;
}


//function new_excerpt_more( $more ) {
//	return ' <a class="read-more pull-right" href="'. get_permalink( get_the_ID() ) . '"><br><br>更多</a>';}

//function custom_excerpt_length( $length ) {
//	return 300;}

//Limit excerpt length.
function improved_trim_excerpt($text) {
        global $post;
        if ( '' == $text ) {
                $text = get_the_content('');
                $text = apply_filters('the_content', $text);
                $text = str_replace('\]\]\>', ']]&gt;', $text);
                $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
          //      $text = strip_tags($text, '<img>');
                $excerpt_length = 100;
                $words = explode(' ', $text, $excerpt_length + 1);
                if (count($words)> $excerpt_length) {
                        array_pop($words);
                        array_push($words, '[...]');
                        $text = implode(' ', $words);
                }
        }
        return $text;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');

add_action( 'login_form', 'username_or_email_login' );
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
add_action( 'after_setup_theme', 'remove_admin_bar');
add_filter( "login_redirect", "my_login_redirect", 10, 3);
//add_filter( 'excerpt_more', 'new_excerpt_more' );
//add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

if(function_exists('register_nav_menus'))
{
    add_theme_support('nav-menus');

    register_nav_menus( array(
        'header-menu' => __( 'topnav' )
    ) );
}
?>