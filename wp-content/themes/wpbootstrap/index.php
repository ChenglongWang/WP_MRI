<?php get_header(); ?>
 
       <!-- Main hero unit for a primary marketing message or call to action -->
      <!--==========轮播===========
            -->
  <div id="myCarousel">
   <div class="container">
	<div class="row-fluid">
		<div class="span12">
			<div class="carousel slide" id="carousel-833022">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-833022">
					</li>
					<li data-slide-to="1" data-target="#carousel-833022">
					</li>
					<li data-slide-to="2" data-target="#carousel-833022">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
                         <!-- item next left -->
						<img alt=""  class="aligncenter" src="wp-content/uploads/img/slide-01.jpg" />
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
						<img alt="" class="aligncenter" src="wp-content/uploads/img/slide-03.jpg" />
						<div class="carousel-caption">
							<h4>
								冲浪
							</h4>
							<p>
								冲浪是以海浪为动力，利用自身的高超技巧和平衡能力，搏击海浪的一项运动。运动员站立在冲浪板上，或利用腹板、跪板、充气的橡皮垫、划艇、皮艇等驾驭海浪的一项水上运动。
							</p>
						</div>
					</div>
					<div class="item t">
                         <!-- item next left -->
						<img alt="" class="aligncenter" src="wp-content/uploads/img/slide-02.jpg" />
						<div class="carousel-caption">
							<h4>
								自行车
							</h4>
							<p>
								以自行车为工具比赛骑行速度的体育运动。1896年第一届奥林匹克运动会上被列为正式比赛项目。环法赛为最著名的世界自行车锦标赛。
							</p>
						</div>
					</div>
				</div> <a data-slide="prev" href="#carousel-833022" class="left carousel-control">&lsaquo;</a> <a data-slide="next" href="#carousel-833022" class="right carousel-control">&rsaquo;</a>
			</div>
		</div>
	</div>
    </div>
   </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
       <div class="span4">
          
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->

        <div class="span4"> 
         
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
        
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

     

      <div class="featurette">
        <img class="featurette-image pull-right" src="wp-content/uploads/img/browser-icon-chrome.png">
        <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <!-- /END THE FEATURETTES -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="http://www.ecnu.edu.cn" target="_blank">ECNU</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">华东师范大学</a> </p>
      </footer>

    </div><!-- /.container -->
    
    <script language="javascript">
        function emailCheck()
        {
            var emailStr = document.all.LoginForm.email.value;
            var emailPat = /^(.+)@(.+)$/;
            var matchArray = emailStr.match(emailPat);
            if (matchArray == null)
            {
                alert(emailStr + "电子邮件地址错误!")
                $(".alert").alert('close')
                return false;
            }
            else
                return true;
        }
    </script>
 
<?php get_footer(); ?>