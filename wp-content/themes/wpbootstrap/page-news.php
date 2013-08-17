<?php get_header(); ?>

<div class="container-fluid" style="margin-top: 50px">
	<div class="row-fluid">
		<div class="span12">
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tab1" data-toggle="tab">新闻</a>
					</li>
					<li>
						<a href="#tab2" data-toggle="tab">公告</a>
					</li>
                                        <li>
						<a href="#tab3" data-toggle="tab">动态</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
                                        <?php $recentPosts = new WP_Query( array('category_name' => 'news', 'showposts' => 10 ) ); ?>
					<p>
                                            <div class="accordion" id="accordion2">
                                                 <?php while ( $recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                                                    <div class="accordion-group">
                                                        <div class="accordion-heading">
                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#<?php the_ID() ?>">
                                                            <?php the_title() ?>
                                                            </a>
                                                        </div>
                                                        <div id="<?php the_ID() ?>" class="accordion-body collapse">
                                                            <div class="accordion-inner">
                                                                <?php global $more;
                                                                    $more = 0;
                                                                    the_content('[Read more...]')
                                                                    ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   <?php endwhile; ?>
                                                  </div>
					 </p>
					</div>
                                    
					<div class="tab-pane" id="tab2">
                                            <?php $recentposts = new WP_Query( array('category_name' => 'news', 'showposts' => 3 ) ); ?>
						<p>
                                                <div class="accordion" id="accordion1">
                                                    <?php echo_collapse($recentposts, 'accordion1'); ?>
                                                </div>
						</p>
					</div>
                                        <div class="tab-pane" id="tab3">
                                            <p>
          
                                            </p>
                                        </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>