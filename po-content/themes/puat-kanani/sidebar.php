				<div class="cs-main-sidebar cs-sticky-sidebar">
                    <!-- Widget social icons -->
                    <aside class="widget">
                        <h2 class="widget-title">Social icons</h2>
                        <div class="cs-widget_social_icons">
                            <!-- Facebook icon -->
                            <div class="social-button facebook">
                                <a href="#">
                                    <div class="social-icon"><i class="fa fa-facebook"></i></div>
                                    <div class="social-wrap">
                                        <div class="social-title">Facebook</div>
                                        <div class="social-subtitle">458,320</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Twitter icon -->
                            <div class="social-button twitter">
                                <a href="#">
                                    <div class="social-icon"><i class="fa fa-twitter"></i></div>
                                    <div class="social-wrap">
                                        <div class="social-title">Twitter</div>
                                        <div class="social-subtitle">16,074</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Google icon -->
                            <div class="social-button google">
                                <a href="#">
                                    <div class="social-icon"><i class="fa fa-google-plus"></i></div>
                                    <div class="social-wrap">
                                        <div class="social-title">Google+</div>
                                        <div class="social-subtitle">458,320</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Dribbble icon -->
                            <div class="social-button dribbble">
                                <a href="#">
                                    <div class="social-icon"><i class="fa fa-dribbble"></i></div>
                                    <div class="social-wrap">
                                        <div class="social-title">Dribbble</div>
                                        <div class="social-subtitle">16,074</div>
                                    </div>
                                </a>
                            </div>
                            <!--  icon -->
                            <div class="social-button youtube">
                                <a href="#">
                                    <div class="social-icon"><i class="fa fa-youtube-play"></i></div>
                                    <div class="social-wrap">
                                        <div class="social-title">Youtube</div>
                                        <div class="social-subtitle">458,320</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Linkedin icon -->
                            <div class="social-button linkedin">
                                <a href="#">
                                    <div class="social-icon"><i class="fa fa-linkedin"></i></div>
                                    <div class="social-wrap">
                                        <div class="social-title">Linkedin</div>
                                        <div class="social-subtitle">16,074</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </aside>
                    <!-- Widget latest posts -->
                    <aside class="widget">
                        <h2 class="widget-title">Latest posts</h2>
                        <div class="cs-widget_latest_posts">
                            <!-- Post item -->
							<?php
								$recents_side = $this->post()->getRecent('3', 'DESC', WEB_LANG_ID);
								foreach($recents_side as $recent_side){
									$recent_category = $this->category()->getCategory($recent_side['id_post'], WEB_LANG_ID);
							?>
                            <div class="cs-post-item">
                                <div class="cs-post-thumb">
                                    <a href="<?=BASE_URL;?>/detailpost/<?=$recent_side['seotitle'];?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$recent_side['picture'];?>" alt="UniqMag"></a>
                                </div>
                                <div class="cs-post-inner">
                                    <h3><a href="<?=BASE_URL;?>/detailpost/<?=$recent_side['seotitle'];?>"><?=$recent_side['title'];?></a></h3>
                                    <div class="cs-post-category-empty cs-clearfix">
                                        <?=$recent_category;?>
                                    </div>
                                    <div class="cs-post-meta cs-clearfix">
                                        <span class="cs-post-meta-author"><a href="javascript:void(0)"><?=$this->post()->getAuthorName($recent_side['editor']);?></a></span>
                                        <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($recent_side['date']);?></span>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </aside>
                    <!-- Widget grid posts -->
                    <aside class="widget">
                        <h2 class="widget-title">Populer</h2>
                        <div class="cs-widget_grid_posts">
                            <!-- Post item -->
							<?php
								$populars_side = $this->post()->getPopular('4', 'DESC', WEB_LANG_ID);
								foreach($populars_side as $popular_side){
							?>
                            <div class="cs-post-item">
                                <div class="cs-post-thumb">
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$popular_side['seotitle'];?>" title=""></a>
                                    <a href="<?=BASE_URL;?>/detailpost/<?=$popular_side['seotitle'];?>"><img class="img-circle" src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$popular_side['picture'];?>" alt="UniqMag"></a>
                                </div>
                                <div class="cs-post-inner">
                                    <h3><a href="<?=BASE_URL;?>/detailpost/<?=$popular_side['seotitle'];?>"><?=$popular_side['title'];?></a></h3>
                                    <div class="cs-post-meta cs-clearfix">
                                        <span class="cs-post-meta-author"><a href="javascript:void(0)"><?=$this->post()->getAuthorName($popular_side['editor']);?></a></span>
                                        <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($popular_side['date']);?></span>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </aside>
                </div>