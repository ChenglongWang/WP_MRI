<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap for MRI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


	<!-- Le styles -->
        <?php wp_reset_query(); if(is_home() || is_front_page()){ ?>
        <link href="/wpc/wp-content/themes/wpbootstrap/style-index.css" rel="stylesheet">
        <?php }else {?>
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <?php } ?>
        <link href="/wpc/wp-content/themes/wpbootstrap/bootstrap/bxslider/jquery.bxslider.css" rel="stylesheet">
        
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
            <a class="brand hint--bottom hint--success" data-hint="欢迎来到我们的实验室!" href="<?php echo get_home_url() ?>"><?php bloginfo('name') ?></a>
         <div class="nav-collapse collapse">
 <!--   <ul class="nav">-->
              <?php 
             //    wp_list_pages(array('title_li' => '')); 
                wp_nav_menu( array( 'theme_location' => 'header-menu',
                    'container_class' => 'nav-collapse collapse',
                    'menu_class' => 'nav',
                    'items_wrap' => '<ul class="nav">%3$s</ul>',
                    'walker' => new Bootstrap_Walker_Nav_Menu()));
              ?> 
 <!--        </ul>-->
              <?php if(!( is_user_logged_in())){?>
                  <form name="LoginForm" class="navbar-form pull-right" action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
                    <input class="span2" type="text" name="log" id="log" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" placeholder="Email/Name">
                    <input class="span2" type="password" name="pwd" id="pwd" placeholder="Password"> 
                    <button type="submit" class="btn btn-primary hint--bottom hint--info" data-hint="点这里登录哟!">Sign in</button>
               <!--     <input type="submit" value="Sign in" class="btn btn-primary"> onclick="return emailCheck()"-->
                  </form>
              <?php }else { ?>
                  <a href="<?php echo wp_logout_url($_SERVER['REQUEST_URI']); ?>" class="btn btn-primary pull-right hint--error hint--bottom" data-hint="再见咯!">Logout</a>
                  <li><a class="pull-right" href="<?php echo get_option('home'); ?>/wp-admin"><?php global $current_user; get_currentuserinfo(); echo get_avatar( $current_user->ID, 32);?>
                  </a></li>    
              <?php }?>
         </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
      
   <div class="container">