
<?php get_header(); ?>
 
   <!--==========轮播===========-->
   <div class = "myCarousel" >
     <div class="container">
	  <div class="row-fluid">
		<div class="span12">
			<div class="slide"  id = "carousel-833022">
                <!-- 分成三部分 -->
				<ol class="carousel-indicators" style = "top:160px; right:260px">
					<li data-slide-to="0" data-target="#carousel-833022">
					</li>
					<li data-slide-to="1" data-target="#carousel-833022">
					</li>
					<li data-slide-to="2" data-target="#carousel-833022">
					</li>
				</ol>
				<div class="carousel-inner">
                   <!--  每一部分的图片与说明 -->
					<div class="item active">
                         <!-- item next left item active -->
						<img alt=""  class="aligncenter" src="/wpc/wp-content/uploads/img/slide-01.jpg" />
						<div class="carousel-caption">
							<h4>
								棒球
							</h4>
							<p>
								棒球运动是一种以棒打球为主要特点，集体性、对抗性很强的球类运动项目，在美国、日本尤为盛行。
							</p>
						</div>
					</div>
					<div class="item">
                        <!-- item  -->
						<img alt="" class="aligncenter" src="/wpc/wp-content/uploads/img/slide-02.jpg" />
						<div class="carousel-caption">
							<h4>
								冲浪
							</h4>
							<p>
								冲浪是以海浪为动力，利用自身的高超技巧和平衡能力，搏击海浪的一项运动。运动员站立在冲浪板上，或利用腹板、跪板、充气的橡皮垫、划艇、皮艇等驾驭海浪的一项水上运动。
							</p>
						</div>
					</div>
					<div class="item">
                         <!-- item next left -->
						<img alt="" class="aligncenter" src="/wpc/wp-content/uploads/img/slide-03.jpg" />
						<div class="carousel-caption">
							<h4>
								自行车
							</h4>
							<p>
								以自行车为工具比赛骑行速度的体育运动。1896年第一届奥林匹克运动会上被列为正式比赛项目。环法赛为最著名的世界自行车锦标赛。
							</p>
						</div>
					</div>
				</div> 
                <a data-slide="prev" href="#carousel-833022" class="left carousel-control" >&lsaquo;</a>
                <a data-slide="next" href="#carousel-833022" class="right carousel-control">&rsaquo;</a>
			</div>
		</div>
	</div>
    </div>
   </div>


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