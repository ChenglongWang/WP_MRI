<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<head>
    <link href="/wpc/wp-content/themes/wpbootstrap/portfolio/style.css" rel="stylesheet">    
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <style>
        .subtitle {
        color: #0088cc;
	font-size: 23px;
	font-weight: bold;
	text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
        border-bottom:1px solid #333;
	padding: 5px 0;
        margin-top: 5px;
        }
        .da-thumbs img { max-width: 300px; height:150px;}
    </style>
</head>


<body style="padding-top: 0px;">
    
<h2 class="subtitle">
        科研成果
</h2>
<div class="alert alert-info">
        <p>
                github是一个全球化的开源社区.
        </p> <small>关键词 <cite>开源</cite></small>
</div>
<h2 class="subtitle">
        专利发明
</h2>
<blockquote class="alert alert-info">
        <p>
                github是一个全球化的开源社区.
        </p> <small>关键词 <cite>开源</cite></small>
</blockquote>

<h2 class="subtitle">
        科研成果
</h2>
    <div class="image_grid portfolio_4col">
    <ul style="height: 495px; margin-left: 0px" class="da-thumbs">
        <li><img src="/wpc/wp-content/themes/wpbootstrap/portfolio/images/portfolio2.jpg" alt="img">
            <article class="da-animate da-slideFromRight" style="display: block;">
                <h4>New Year</h4>
                <em>HappyHappyHappyHappyHappyHappy</em>
                <span class="link_post"><a href="#"></a></span>
            </article>
    </li>
    <li>
            <img src="\wpc\wp-content\uploads\2013\08\DSC00082-300x168.jpg" alt="img">
            <article class="da-animate da-slideFromTop" style="display: block;">
                lifestyle
                <em>auctor</em>
                <span class="link_post"><a href="#"></a></span>
            </article>
        </li>
    
    
    </ul></div>
    
    <script src="/wpc/wp-content/themes/wpbootstrap/bootstrap/js/jquery.js"></script>
    <script src="/wpc/wp-content/themes/wpbootstrap/portfolio/js/jquery-hover-effect.js"></script>
    <script type="text/javascript">

$(document).ready(function(){
    $(function(){
        //Image Hover
	$('ul.da-thumbs > li').hoverdir();
    });

});
</script>
</body>