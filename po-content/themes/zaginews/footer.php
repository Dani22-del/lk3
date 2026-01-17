<div class="footer-columns">
        <div class="row">
            <div class="four columns">
                <div class="widget">
                    <div class="jellywp_about_us_widget_wrapper">
                        <div style="background: url('<?=$this->asset('/images/world-map.png', false)?>') no-repeat center center; background-size: 100%;">
							<address>
								<?=htmlspecialchars_decode($this->pocore()->call->posetting[8]['value']);?>
							</address>
                            <br />
							<abbr title="Phone Number"><strong style="color: #fff; text-decoration: none;">Phone:</strong></abbr> <?=$this->pocore()->call->posetting[6]['value'];?><br>
							<abbr title="Fax"><strong style="color: #fff; text-decoration: none;">Fax:</strong></abbr> <?=$this->pocore()->call->posetting[7]['value'];?><br>
							<abbr title="Email Address"><strong style="color: #fff; text-decoration: none;">Email:</strong></abbr> <?=$this->pocore()->call->posetting[5]['value'];?>
						</div>
                        <br />
                        <div class="social_icons_widget">
                                    <ul class="social-icons-list-widget">
                                        <li>
                                            <a href="#" target="_blank"><img alt="Facebook" src="<?=$this->asset('/images/icons/facebook.png');?>"></a>
                                        </li>
            
            
                                        <li>
                                            <a href="#" target="_blank"><img alt="Google Plus" src="<?=$this->asset('/images/icons/google-plus.png');?>"></a>
                                        </li>
            
            
                                        <li>
                                            <a href="#" target="_blank"><img alt="Behance" src="<?=$this->asset('/images/icons/behance.png');?>"></a>
                                        </li>
            
            
                                        <li>
                                            <a href="#" target="_blank"><img alt="Vimeo" src="<?=$this->asset('/images/icons/vimeo.png');?>"></a>
                                        </li>
            
            
                                        <li>
                                            <a href="#" target="_blank"><img alt="Youtube" src="<?=$this->asset('/images/icons/youtube.png');?>"></a>
                                        </li>
            
            
                                        <li>
                                            <a href="#" target="_blank"><img alt="Instagram" src="<?=$this->asset('/images/icons/instagram.png');?>"></a>
                                        </li>
            
            
                                        <li>
                                            <a href="#" target="_blank"><img alt="flickr" src="<?= $this->asset('/images/icons/flickr.png');?>"></a>
                                        </li>
                                    </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="four columns">
                <div class="widget post_list_widget" id="popular_widget-6">
                    <div class="widget-title">
                        <h2><?=$this->e($front_popular);?></h2>
                    </div>
                    <div class="widget_container">
                        <ul class="feature-post-list popular-post-widget">
                        <?php
							$populars = $this->post()->getPopular('2', 'DESC', WEB_LANG_ID);
							foreach($populars as $popular){
						?>
                            <li class="appear_animation">
                                <a class="feature-image-link image_post" href="<?=BASE_URL;?>/detailpost/<?=$popular['seotitle'];?>" title="<?=$popular['title'];?>">
                                    <img alt="images" class="attachment-small-feature" height="75" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$popular['picture'];?>" width="100">
                                    <span class="overlay_icon fa fa-play-circle-o"></span>
                                </a>
                                <div class="item-details">
                                    <h3 class="feature-post-title"><a href="<?=BASE_URL;?>/detailpost/<?=$popular['seotitle'];?>"><?=$popular['title'];?></a></h3>
                                    <p class="post-meta meta-main-img">
                                        <span class="post-date"><i class="fa fa-clock-o"></i><?=$this->pocore()->call->podatetime->tgl_indo($popular['date']);?></span>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        <?php } ?>    
                        </ul>
                    </div>
                </div>
            </div>
            <div class="four columns">
            <div class="widget-title"><h2>Statistik Pengunjung</h2></div>				
                <!-- Histats.com  START (html only)-->
<a href="/" alt="page hit counter" target="_blank" >
<embed src="http://s10.histats.com/408.swf"  flashvars="jver=1&acsid=3876946&domi=4"  quality="high"  width="270" height="55" name="408.swf"  align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent" /></a>
<img  src="//sstatic1.histats.com/0.gif?3876946&101" alt="counter" border="0">
<!-- Histats.com  END  -->

              
                    <div class="widget-title">
                        <h2><?=$this->e($front_subscribe);?></h2>
                    </div>
                    <div class="jellywp_about_us_widget_wrapper">
    					<p><strong><?=$this->e($front_subscribe);?></strong> <?=$this->e($front_txt_subscribe);?>:</p>
    					
                        <div class="widget_search" id="search-3" style="margin-top: 10px;">
                            <form action="<?=BASE_URL;?>/subscribe" class="searchform" method="post" role="form">
                				<div>
                					<input type="email" name="email" id="s" placeholder="<?=$this->e($front_email);?>" required="">
                					<input type="submit" value="<?=$this->e($front_subscribe);?>" id="searchsubmit">
                				</div>
                			</form>
                        </div>
                        
    				</div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="row">
            <div class="twelve columns footer-left">
                Copyright © <?=date('Y');?> All rights reserved by <strong style="color: #fff;"><?=$this->pocore()->call->posetting[0]['value'];?></strong>
            </div>
        </div>
    </div>