<?php

require 'wpc/wp-content/themes/wpbootstrap/about/includes/config.php';
require 'wpc/wp-content/themes/wpbootstrap/about/includes/aboutPage.class.php';
require 'wpc/wp-content/themes/wpbootstrap/about/includes/vcard.class.php';

//if(have_posts()) $profile = new AboutPage($info);
/*if(array_key_exists('json',$_GET)){
	$profile->generateJSON();
	exit;
}*/
if(array_key_exists('vcard',$_GET)){
	$profile->downloadVcard();
	exit;
}


if (have_posts()) {
    $args = get_post_meta(get_the_ID(), 'personalProfile');
    $profile = array(
        'firstName' => $args[0][0]['firstname'],
        'lastName' => $args[0][0]['lastname'],
        'fullName' => $args[0][0]['firstname'].$args[0][0]['lastname'],
        'tags' => $args[0][0]['tags'],
        'email' => $args[0][0]['email'],
        'cellphone' => $args[0][0]['cellphone']
    );
    $page_title = get_the_title();
    
}
else {
    $profile = $info;
    $page_title = "Personal Introduction";
}

       
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Online info page of <?php echo $profile['fullName']?>. Learn more about me and download a vCard." />

        <title><?php echo $page_title ?></title>
        
        <!-- Our CSS stylesheet file -->
        <link href="<?php echo get_home_url() ?>/wpc/wp-content/themes/wpbootstrap/about/assets/css/styles.css" rel="stylesheet" >
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>  
        <section id="infoPage">
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>" alt="<?php echo $profile['fullName'] ?>" width="164" />

            <header>
                <h1><?php echo $profile['fullName'] ?></h1>
                <h2><?php echo $profile['tags'] ?></h2>
            </header>

            <h3>简介</h3>
            <p class="description">
                <?php while (have_posts()) : the_post();
                   echo get_the_content(); endwhile;?>
            </p>

            <a href="<?php echo $profile['email'] ?>" class="grayButton facebook">Find me on Facebook</a>
            <a href="<?php echo $profile['cellphone'] ?>" class="grayButton twitter">Follow me on Twitter</a>

            <ul class="vcard">
                <li class="fn"><?php echo $profile['fullName'] ?></li>
                <li class="org"><?php echo $profile['tags'] ?></li>
                <li class="tel"><?php echo $profile['cellphone'] ?></li>
                <li><a class="url" href="<?php echo 1?>"><?php echo 1 ?></a></li>
            </ul>

        </section>

        <section id="links">
            <a href="?vcard" class="vcard">Download as V-Card</a>
        </section>
        
<?php get_footer(); ?>

