<?php 
$a=$_GET["id"];
get_header();?>      
    <div class="container-fluid">
          <div class="row-fluid">
                <div class="span3 bs-docs-sidebar" style="margin-top: 20px">                   
                    <ul class="nav nav-list bs-docs-sidenav">
                        <li id="introduce"><a href="<?php esc_url(get_home_url())?>/introduce" target="labframe"><i class="icon-chevron-right"></i><font color="#6a6a6b" face="微软雅黑">实验室简介</font></a></li>
                        <li id="teachers"><a href="<?php  esc_url(get_home_url())?>/teachers" target="labframe"><i class="icon-chevron-right"></i><font color="#6a6a6b" face="微软雅黑">师资队伍</font></a></li>
                        <li id="committee"><a href="<?php   esc_url(get_home_url())?>/committee" target="labframe"><i class="icon-chevron-right"></i><font color="#6a6a6b" face="微软雅黑">学术委员会</font></a></li>
                      </ul>
                    </div>
               <div class="span9" style="margin-top: 60px">
              <div class="container" style="width: 100%">
                 
                      
                  <iframe src="<?php get_home_url()?>/<?php if($a == '1')                       
                             echo 'introduce';
                          elseif($a == '2')  
                          echo 'teachers';
                          else
                         echo 'committee';
                        ?>/" name="labframe" width="100%" height="1000px" marginwidth="0"  marginheight="0" align="center" scrolling="no" frameborder="0" id="labframe">                   
                      
                </iframe>
           </div>                        
        </div>
              </div>
<?php get_footer(); ?>