<?php get_header(); ?>
 
   <!--==========轮播===========-->
           <ul class="bxslider">
                <?php $recentPosts = new WP_Query( array('category_name' => 'news', 'showposts' => 5 ) ); ?>  
                <?php while ( $recentPosts->have_posts()) : $recentPosts->the_post(); ?>  
                   <li>
                       <a href="<?php the_permalink();?>"><img class="aligncenter" src="<?php echo get_content_first_image(get_the_content()); ?>" title="<?php the_title_attribute(); ?>"></a></li>
                    <?php endwhile;?>  

           </ul>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class ="main-region">
      <div class="container">
        <!-- Three columns of text below the carousel -->
        <div class="layout-column">  
            <div class ="sec-header">
                <h4><font face="微软雅黑">热点新闻</font></h4>              
            </div> 
            <div class ="sec-articles-wrap">
            <?php $recentPosts = new WP_Query( array('category_name' => 'news', 'showposts' => 5 ) ); ?>  
                <ul>  
                    <?php while ( $recentPosts->have_posts()) : $recentPosts->the_post(); ?>  
                    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>  
                    <?php endwhile;?>  
                 </ul>  
                <p style ="position:absolute;bottom:0;right:0"><a class="btn" href="http://news.ecnu.edu.cn/" target = "_blank">更多新闻 &raquo;</a></p>
            </div>          
        </div>
        <div class = "layout-column">  
            <div class = "sec-header">
                <h4><font face="微软雅黑">通知公告</font><a class="more"></a></h4>                 
            </div> 
            <div class ="sec-articles-wrap">
                 <ul>
                     <li><p style ="color:#777"><a href="http://gonggao.ecnu.edu.cn/s/1/t/168/7d/c7/info32199.htm" style ="color:#777">[公告] 上海市磁共振重点实验室主任招聘启事</a></li>
<!--                     <li><p style ="color:#777"><a href=" http://localhost/announcement/" style ="color:#777">[公告] 开放课题基金申请指南</a></li>   -->
                <li><p style ="color:#777"><a href="http://lectures.ecnu.edu.cn/s/168/t/227/f5/2b/info62763.htm" style ="color:#777">[学术报告] 侯雷：Task or Rest State BOLD fMRI in Clinical Applications</p></a></li>
           
                </ul>
                <p style="font-size: 15px; float: right;position:absolute;bottom:0;right:0"><a class="btn" href="http://localhost/news/" target="_blank">更多公告 &raquo;</a></p>
            </div>
         </div>      
         <div class="layout-column">    
            <div class ="sec-header">
                <h4><font face="微软雅黑">资源下载</font></h4>
              </div>
             <div class ="sec-articles-wrap">
            <ul>
                <li><a href="http://localhost/磁共振成像被试须知/"><p style ="color:#777">磁共振成像被试须知</p></a></li>                    
                    <li><a href="/wpc/wp-content/files/外单位3TMRI预约单.doc"><p style ="color:#777">外单位3TMRI仪器预约单</p></a></li>
                    <li><a href="/wpc/wp-content/files/核磁共振常规送样卡.pdf"><p style ="color:#777">核磁共振常规送样卡</p></a></li>
<!--                    <li><a href="/wpc/wp-content/files/开放课题申请书2012版.doc"><p style ="color:#777">开放课题申请书</p></a></li>  -->
                    <li><a href="http://localhost/网站资源/"><p style ="color:#777">网站资源</p></a></li>  
            </ul>
               
                 <p style="font-size: 12px; float: right;position:absolute;bottom:0;right:0"><a class="btn" href="#" target="_blank">更多资源&raquo;</a></p>
         </div><!-- /.row -->
       </div>
      </div>
    
<?php get_footer(); ?>