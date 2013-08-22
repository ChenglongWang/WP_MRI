<?php   
    $tab = $_GET["tab"];
    if($tab == '') $tab = "introduce";
    get_header();?>  

    <div class="container-fluid" style="margin-top: 50px;">
          <div class="row-fluid">
              <div class="span12">
                  <div class="tabbable tabs-left">
                      <ul class="nav nav-tabs" style="padding-top: 30px; padding-bottom:  30px">
                        <li class="active"><a href="#tabintroduce" data-toggle="tab"><i class="icon-chevron-right"></i><font color="#6a6a6b" face="微软雅黑">&nbsp;&nbsp;实验室简介</font></a></li>                        
                        <li ><a href="#tabcommittee" data-toggle="tab"><i class="icon-chevron-right"></i><font color="#6a6a6b" face="微软雅黑">&nbsp;&nbsp;学术委员会</font></a></li>
                      </ul>                                     
                    <div class="tab-content" style="padding-left: 35px;">   
                        <?php $tabs = array( 'introduce','committee');                        
                         foreach ($tabs as $tab_index) {?>
                          <div class="tab-pane <?php if($tab == $tab_index) echo "active"?>" id="tab<?php echo $tab_index ?>">
                            <div class="container" style="width: 100%">                                                                                          
                              <?php  
                                    global $wpdb;
                                    $post_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name= '$tab_index'");
                                        echo get_post($post_id)->post_content; ?>                                           
                                                    </div>
                                                </div>
                      <?php }?>

                        
                  
                 
                      

               
              </div>
              </div>
        </div>
              <br/>
              <br/>
<?php get_footer(); ?>