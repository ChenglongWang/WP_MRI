<?php get_header(); ?>
 
   <!--==========轮播===========-->
           <ul class="bxslider">
                <?php $recentPosts = new WP_Query( array('category_name' => 'news', 'showposts' => 5 ) ); ?>  
                <?php while ( $recentPosts->have_posts()) : $recentPosts->the_post(); ?>  
                   <li><img class="aligncenter" src="<?php echo get_content_first_image(get_the_content()); ?>" title="<?php the_title_attribute(); ?>" /></li>
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
                <h3>热点新闻</h3>              
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
                <h3>学术报告</h3>
            </div> 
            <div class ="sec-articles-wrap">
                <ul>
                	<li>Structural Analysis of Biological Supramolecular Systems by CP/MAS Solid-State NMR</li>
                    <li>核磁共振谱仪的数字化研究</li>
                    <li>高级核磁共振技术在功能材料中的应用</li>
                    <li>Task or Rest State BOLD fMRI in Clinical Applications</li>
                </ul>
                <p style="font-size: 20px; float: right;position:absolute;bottom:0;right:0"><a class="btn" href="http://lectures.ecnu.edu.cn/" target="_blank">更多讲座报告 &raquo;</a></p>
            </div>
         </div>      
         <div class="layout-column">    
            <div class ="sec-header">
                <h3>快速通道</h3>
            </div>
            <ul>
            	<li><a href="http://news.ecnu.edu.cn/" target = "_blank"><p style ="font-size:20px; color:#666">固体实验预约</p></a></li>
                <li><a href="http://news.ecnu.edu.cn/" target = "_blank"><p style ="font-size:20px; color:#666">液体实验预约</p></a></li>
                <li><a href="http://news.ecnu.edu.cn/" target = "_blank"><p style ="font-size:20px; color:#666">动物实验预约</p></a></li>
                <li><a href="http://news.ecnu.edu.cn/" target = "_blank"><p style ="font-size:20px; color:#666">人体实验预约</p></a></li>
            </ul>
         </div><!-- /.row -->
       </div>
      </div>
    
<?php get_footer(); ?>