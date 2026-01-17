<!-- Footer menu -->
            <div id="cs-footer-menu">
                <div class="cs-container">
                    <!-- Footer navigation -->
                    <div class="cs-toggle-footer-navigation"><i class="fa fa-bars"></i></div>
                    <nav id="cs-footer-navigation" class="cs-clearfix">
						<?php
							echo $this->menu()->getFrontMenu('footer', 'class="cs-footer-navigation cs-clearfix"','','',WEB_LANG);
						?>
                    </nav>
                </div>
            </div>
            
            <!-- Footer -->
            <div id="cs-footer">
                <div class="cs-container">
                    <div class="cs-row">
                        <div class="cs-col cs-col-4-of-12">
                            <!-- Widget featured posts -->
                            <aside class="widget">
                                <h2 class="widget-title">Pilihan Redaksi</h2>
                                <div class="cs-widget_featured_post">
                                    <!-- Post item -->
									<?php
										$sliders_post = $this->post()->getPost('1', 'DESC', WEB_LANG_ID);
										foreach($sliders_post as $slider_post){
									?>
                                    <div class="cs-post-item">
                                        <div class="cs-post-category-icon">
                                            <a href="<?=BASE_URL;?>/detailpost/<?=$slider_post['seotitle'];?>" title="Games"></a>
                                        </div>
                                        <div class="cs-post-thumb">
                                            <a href="<?=BASE_URL;?>/detailpost/<?=$slider_post['seotitle'];?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?>" alt="UniqMag"></a>
                                        </div>
                                        <div class="cs-post-inner">
                                            <h3><a href="<?=BASE_URL;?>/detailpost/<?=$slider_post['seotitle'];?>"><?=$slider_post['title'];?></a></h3>
                                            <div class="cs-post-meta cs-clearfix">
                                                <span class="cs-post-meta-author"><?=$this->post()->getAuthorName($slider_post['editor']);?></span>
												<span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($slider_post['date']);?></span>
                                            </div>
                                        </div>
                                    </div>
									<?php } ?>
                                </div>
                            </aside>
                        </div>
                        <div class="cs-col cs-col-4-of-12">
                            <!-- Widget latest posts -->
                            <aside class="widget">
                                <h2 class="widget-title">Latest posts</h2>
                                <div class="cs-widget_latest_posts">
                                    <!-- Post item -->
									<?php
										$recents_side_footer = $this->post()->getRecent('2', 'DESC', WEB_LANG_ID);
										foreach($recents_side_footer as $recent_side_footer){
											$recent_category = $this->category()->getCategory($recent_side_footer['id_post'], WEB_LANG_ID);
									?>
                                    <div class="cs-post-item">
                                        <div class="cs-post-thumb">
                                            <a href="<?=BASE_URL;?>/detailpost/<?=$recent_side_footer['seotitle'];?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$recent_side_footer['picture'];?>" alt="UniqMag"></a>
                                        </div>
                                        <div class="cs-post-inner">
                                            <h3><a href="<?=BASE_URL;?>/detailpost/<?=$recent_side_footer['seotitle'];?>"><?=$recent_side_footer['title'];?></h3>
                                            <div class="cs-post-category-empty cs-clearfix">
                                                <?=$recent_category;?>
                                            </div>
                                            <div class="cs-post-meta cs-clearfix">
                                                <span class="cs-post-meta-author"><?=$this->post()->getAuthorName($recent_side_footer['editor']);?></span>
												<span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($recent_side_footer['date']);?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </aside>
                        </div>
                        <div class="cs-col cs-col-4-of-12">
                            <!-- Widget tags -->
							<aside class="widget widget_tag_cloud">
								<h2 class="widget-title">Tags</h2>
								<div class="tagcloud">
									<?=$this->post()->getAllTag('RAND()', '30', '');?>
								</div>
							</aside>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyirght -->
            <div id="cs-copyright">
                <div class="cs-container">&copy; Copyright 2016. All rights reserved.</div>
            </div>