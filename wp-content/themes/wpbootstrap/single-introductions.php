<?php

require 'wpc/wp-content/themes/wpbootstrap/about/includes/config.php';
require 'wpc/wp-content/themes/wpbootstrap/about/includes/aboutPage.class.php';
require 'wpc/wp-content/themes/wpbootstrap/about/includes/vcard.class.php';

//if(have_posts()) $profile = new AboutPage($info);
/*if(array_key_exists('json',$_GET)){
	$profile->generateJSON();
	exit;
}*/
if (have_posts()) {
    $args = get_post_meta(get_the_ID(), 'personalProfile');
    
    if($args[0][0]['redirect'] != "")
        wp_redirect (esc_url($args[0][0]['redirect']));
    
    $profile = array(
        'firstName' => $args[0][0]['firstname'],
        'lastName' => $args[0][0]['lastname'],
        'fullName' => $args[0][0]['firstname'].$args[0][0]['lastname'],
        'tags' => $args[0][0]['tags'],
        'email' => $args[0][0]['email'],
        'cellphone' => $args[0][0]['cellphone'],
        'achievements' => $args[0][0]['achievements'],
        'website' => $args[0][0]['homepage'],
        'researchFields' => $args[0][0]['researchfields'],
        'address' => $args[0][0]['address']
    );
    $page_title = get_the_title();
    
}
else {
    $profile = $info;
    $page_title = "Personal Introduction";
}

if(array_key_exists('vcard',$_GET)){
	$profile->downloadVcard();
	exit;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Online info page of <?php echo $profile['fullName']?>. Learn more about me and download a vCard." />

        <title><?php echo $page_title ?></title>
        
        <!-- Our CSS stylesheet file -->

        <link href="<?php echo get_home_url() ?>/wpc/wp-content/themes/wpbootstrap/bootstrap/css/bootstrap.css" rel="stylesheet" >
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

            <nobr class="subtitle">科研方向:</nobr> 
            <nobr class="data">
                <?php echo $profile['researchFields'] ?>
            </nobr>
            
            <table style="width:100%; margin:5px -1px">
                <tr>
                    <td width="50%"><nobr class="subtitle">电话: </nobr>
                        <nobr class="data"><?php echo $profile['cellphone'] ?></nobr>
                    </td>
                    <td width="50%"><nobr class="subtitle">地址: </nobr>
                        <nobr class="data"><?php echo $profile['address'] ?></nobr>
                    </td>
                </tr>
            </table>
            
            <p class="subtitle">简介</p>
            <p class="description">
                <?php while (have_posts()) : the_post();
                   echo get_the_content(); endwhile;?>
            </p>
            <h3 class="subtitle">科研成果</h3>
            <p class="description">
                <?php echo $profile['achievements'] ?>
            </p>           
            
           <a href="mailto:<?php echo $profile['email'] ?>" class="grayButton facebook">Email me</a>
           <a href="http://<?php echo $profile['website'] ?>" class="grayButton twitter">Visit my homepage.</a>
           
            <ul class="vcard">
                <li class="fn"><?php echo $profile['fullName'] ?></li>
                <li class="org"><?php echo $profile['tags'] ?></li>
                <li class="tel"><?php echo $profile['cellphone'] ?></li>
                <li><a class="url" href="<?php echo 1?>"><?php echo 1 ?></a></li>
            </ul>
        </section>
        <section id="links">
            <center>
                <h2><a href="<?php echo get_home_url() ?>/teachers/"><b>←BACK</b>           
                    </a></h2>
            </center>
            <a href="?vcard" class="vcard">下载电子名片</a>
        </section>
        

<?php get_footer() ?>