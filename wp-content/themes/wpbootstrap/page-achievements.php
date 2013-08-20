<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
get_header();

?>

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
</div>
