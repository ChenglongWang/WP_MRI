<?php get_header(); ?>

<div class="container-fluid" style="margin-top: 50px">
	<div class="row-fluid">
		<div class="span12">
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tab1" data-toggle="tab"><i class="icon-th-list"></i> 新闻</a>
					</li>
					<li>
						<a href="#tab2" data-toggle="tab"><i class="icon-th-list"></i> 公告</a>
					</li>
                                        <li>
						<a href="#tab3" data-toggle="tab"><i class="icon-th-list"></i> 动态</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
                                        <?php $news_posts = new WP_Query( array('category_name' => 'news', 'showposts' => 10 ) ); ?>
					<p>
                                                <div class="accordion" id="accordion1">
                                                    <?php echo_collapse($news_posts, 'accordion1'); ?>
                                                </div>
					 </p>
					</div>
                                    
					<div class="tab-pane" id="tab2">
                                            <?php $announc_posts = new WP_Query( array('category_name' => 'news', 'showposts' => 3 ) ); ?>
						<p>
                                                <div class="accordion" id="accordion2">
                                                    <?php echo_collapse($announc_posts, 'accordion2'); ?>
                                                </div>
						</p>
					</div>
                                        <div class="tab-pane" id="tab3">
                                            <?php $mri_posts = new WP_Query( array('category_name' => 'news', 'showposts' => 4 ) ); ?>
                                            <p>
                                                <div class="accordion" id="accordion3">
                                                    <?php echo_collapse($mri_posts, 'accordion3'); ?>
                                                </div>
                                            </p>
                                        </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>