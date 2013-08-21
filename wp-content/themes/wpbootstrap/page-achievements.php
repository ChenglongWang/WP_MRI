<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$params = array('tab1' => "先进材料的结构与功能研究", 'tab2' => "核磁共振波谱方法学与应用研究",
        'tab3' => "生物大分子结构的研究", 'tab4' => "磁共振成像技术研发", 'tab5' => "功能磁共振成像应用研究");
$IDs = array('tab1' => '', 'tab2' =>'', 'tab3' =>'', 'tab4' => '', 'tab5' => '');
foreach($params as $key => $name){
    $url = urlencode($name);
    $p_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$url'");
    $IDs[$key] = $p_id;
};

$exhibition = new WP_Query(array( 'post_type' => 'achievements', 'post__not_in' => array($IDs[$key]) ) );
$exh_list = array('tab1' => array(), 'tab2' => array(), 'tab3' => array(), 'tab4' => array(), 'tab5' => array());
    while ($exhibition->have_posts()) : $exhibition->the_post();{
        $args = get_post_meta(get_the_ID(), 'researchField');
        if ($args[0][0]['field'] == 'material')
            array_push($exh_list['tab1'], get_the_ID());
        else if ($args[0][0]['field'] == 'nmr')
            array_push($exh_list['tab2'], get_the_ID());
        else if ($args[0][0]['field'] == 'molecule')
            array_push($exh_list['tab3'], get_the_ID());
        else if ($args[0][0]['field'] == 'mri')
            array_push($exh_list['tab4'], get_the_ID());
        else if ($args[0][0]['field'] == 'fmri')
            array_push($exh_list['tab5'], get_the_ID());
    }endwhile;

$activeTab = $_GET['tab'];
if($activeTab == '') $activeTab = 'tab1';

get_header();

?>
<link href="/wpc/wp-content/themes/wpbootstrap/grumble/css/grumble.min.css" rel="stylesheet">
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
<div class="container-fluid" style="margin-top: 50px;">
    <div class="row-fluid">
        <div class="span12" >
            <div class="tabbable tabs-left">
                <ul class="nav nav-tabs " style="text-align: right; padding-top: 50px; padding-bottom: 50px;">
                    <?php foreach($params as $key => $arg) { ?>
                    <li <?php if($key == $activeTab) echo "class='active'" ?>>
                        <a href="#<?php echo $key ?>" data-toggle="tab"><i class="icon-align-right"></i><?php echo " ".$arg ?></a>
                    </li>
                    <?php } ?>
                </ul>
                
                <div class="tab-content">
                        <?php foreach($params as $key => $arg) { ?>                          
                                <?php $query = new WP_Query(array( 'post_type' => 'achievements', 'post__in' => array($IDs[$key]) ) );
                                       while ( $query->have_posts() ) : $query->the_post();{
                                        $content = split_content(); ?>
                                    <div class="tab-pane <?php if($key == $activeTab) echo "active" ?>" id="<?php echo $key ?>" style="width: 90%">
                                         <p>
                                            <h2 class = "subtitle">
                                            科研成果
                                            </h2>
                                            <div class = "alert alert-info">
                                            <p>
                                                <?php echo array_shift($content);?>
                                            </p>
                                            </div>
                                            <h2 class = "subtitle">
                                            专利发明
                                            </h2>
                                            <blockquote class = "alert alert-info">
                                            <p>
                                                <?php echo implode($content); ?>
                                            </p>
                                            </blockquote>

                                            <h2 class = "subtitle">
                                            <span id = "gru">科研进展</span>
                                            </h2>
                                                <table class="table table-hover">
                                                    <thead><tr>
                                                        <th>#</th>
                                                        <th>名称</th>
                                                    </tr></thead>
                                                    <tbody>
                                                    <?php
                                                        foreach($exh_list[$key] as $count => $val){ ?>
                                                            <tr><th><?php echo $count ?></th>
                                                            <th><?php echo '<a href="'.get_permalink( $val ).'">'.get_the_title( $val ).'</a>' ?></th></tr>
                                                      <?php  } ?>
                                                    </tbody>
                                                </table>

                                            </p>
                                 <?php   }endwhile;?>


                            </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--                    
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3 bs-docs-sidebar">
                    <ul class="nav nav-list bs-docs-sidenav affix" style="width: 200px; margin-top: 100px;">
                        <li class=""><a href="#overview"><i class="icon-chevron-right"></i> 概览</a></li>
                        <li class=""><a href="#transitions"><i class="icon-chevron-right"></i> 过渡效果</a></li>
                        <li class=""><a href="#modals"><i class="icon-chevron-right"></i> 模态对话框</a></li>
                        <li class=""><a href="#dropdowns"><i class="icon-chevron-right"></i> 下拉菜单</a></li>
                        <li class=""><a href="#scrollspy"><i class="icon-chevron-right"></i> 滚动监听</a></li>
                    </ul>
		</div>
		<div class="span9" style="margin-top: 80px;">
                    <div class="container" style="width: 100%">
                        <iframe name="myframe" src="<?php esc_url(get_home_url()) ?>achievement/" width="100%" height="1000px" 
                                scrolling="yes"></iframe>
                    </div>
		</div>
	</div>
</div>-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/wpc/wp-content/themes/wpbootstrap/grumble/js/jquery.grumble.min.js"></script>
<script>
    $('#gru').grumble({
        text: '这里是我们最新的科研成果!', 
	angle: 270, 
	distance: 50, 
	showAfter: 1000,
        hideAfter: 3000,
    });
        
</script>
<?php get_footer(); ?>