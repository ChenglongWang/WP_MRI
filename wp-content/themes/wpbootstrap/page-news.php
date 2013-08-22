<?php
    $tab = $_GET["tab"];
    if($tab == '') $tab = "news";
    
get_header();
?>

<div class="container-fluid" style="margin-top: 50px;">
	<div class="row-fluid">
		<div class="span12" >
			<div class="tabbable tabs-left">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tabnews" data-toggle="tab"><i class="icon-th-list"></i> 新闻</a>
					</li>
					<li>
						<a href="#tabannounce" data-toggle="tab"><i class="icon-th-list"></i> 公告</a>
					</li>
                                        <!--<li>-->
						<a href="#tabindustry" data-toggle="tab"><i class="icon-th-list"></i> 动态</a>
					</li>
				</ul>
                            
				<div class="tab-content">
                                   <!--     <div class="tab-pane active" id="tabnews">
                                            <div class="container" style="width: 900px">
                                            <iframe id="news_list" name="myframe" src="<?php esc_url(get_home_url()) ?>news-list/?cat=news&cpage=1" width="100%" height="1500px" 
                                                    scrolling="no"></iframe>
                                            </div>
                                        </div>
                                    
                                        <div class="tab-pane" id="tabannounce">
                                            ....
                                        </div>
                                    
                                        <div class="tab-pane" id="tabindustry">
                                            <div class="container" style="width: 900px">
                                            <iframe id="news_list" name="myframe" src="<?php esc_url(get_home_url()) ?>news-list/?cpage=1&cat=news" width="100%" height="1500px" 
                                                    scrolling="no"></iframe>
                                            </div>
                                       </div>-->
                                       <?php $tabs = array('news', 'announce', 'industry');
                                             foreach ($tabs as $cat) {?>
                                                <div class="tab-pane <?php if($tab == $cat) echo "active"?>" id="tab<?php echo $cat ?>">
                                                    <div class="container" style="width: 900px">
                                                    <iframe id="news_list" name="myframe" src="<?php esc_url(get_home_url()) ?>news-list/?cat=<?php echo $cat ?>&cpage=1" width="100%" height="1500px" 
                                                            scrolling="no"></iframe>
                                                    </div>
                                                </div>
                                             <?php }?>
                                </div>
		</div>
	</div>
</div>
    
<script>
    function dyniframesize(iframename) {

  var pTar = null;  
  if (document.getElementById){     
    pTar = document.getElementById(iframename);   
  }else{   
    eval('pTar = ' + iframename + ';');   
  }   
  if (pTar && !window.opera){   
    //begin resizing iframe     
    pTar.style.display="block"  
    if (pTar.contentDocument && pTar.contentDocument.documentElement.scrollHeight){   
 
	      pTar.height =0;
		pTar.height=pTar.contentDocument.documentElement.scrollHeight;
		divbg = document.getElementById('divbg'); 
		hei = pTar.height - 300;
		divbg.style.height=hei;
     

    }else if (pTar.Document && pTar.Document.body.scrollHeight){   
      //ie5+ syntax   
      pTar.height = pTar.Document.body.scrollHeight;
		hei = pTar.height - 300;
		document.getElementById('divbg').style.height=String(hei);
      
    }   
  }   
 }
</script>


<?php get_footer(); ?>