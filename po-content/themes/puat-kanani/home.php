<?=$this->layout('index');?>
			<div class="cs-container">
                <!-- Main content -->
                <div class="cs-main-content cs-sidebar-on-the-right">
                    
                    <!-- Post slider -->
                    <div class="cs-post-slider-layout swiper-container">
							<div class="swiper-wrapper">
							<?php
								$headlines = $this->post()->getHeadline('5', 'DESC', WEB_LANG_ID);
								foreach($headlines as $headline){
									$headline_category = $this->category()->getCategory($headline['id_post'], WEB_LANG_ID);
							?>
                            <!-- Post item -->
                            <div class="swiper-slide">
                                <div class="cs-post-item">
                                    <div class="cs-post-thumb" style="width:687px; height:376px;">
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$headline['seotitle'];?>">
                                            <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$headline['picture'];?>" alt="" >
                                        </a>
                                    </div>
                                    <div class="cs-post-inner">
                                        <div class="cs-post-category-border cs-clearfix">
                                            <?=$headline_category;?>
                                        </div>
                                        <h3><a href="<?=BASE_URL;?>/detailpost/<?=$headline['seotitle'];?>"><?=$headline['title'];?></a></h3>
                                        <div class="cs-post-meta cs-clearfix">
                                            <span class="cs-post-meta-author"><a href="javascript:void(0)"><?=$this->post()->getAuthorName($headline['editor']);?></a></span>
                                            <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($headline['date']);?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- Post slider controls -->
                        <div class="cs-post-slider-controls">
                            <div class="cpsl-swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                            <div class="cpsl-swiper-button-next"><i class="fa fa-angle-right"></i></div>
                        </div>
                    </div>

                    <div class="cs-row">
                        <div class="cs-col cs-col-12-of-12">
                            <!-- Post block title -->
                            <div class="cs-post-block-title">
							<?php $category_title = $this->category()->getOneCategory('1', WEB_LANG_ID); ?>
                                <h4><?=$category_title['title'];?></h4>
                            </div>
                        </div>
						<?php
							$post_by_categorys = $this->post()->getPostByCategory('1', '1', 'DESC', WEB_LANG_ID);
							foreach($post_by_categorys as $list_post){
								$list_category = $this->category()->getCategory($list_post['id_post'], WEB_LANG_ID);
						?>
                        <div class="cs-col cs-col-6-of-12">
                            <!-- Block layout 3 -->
                            <div class="cs-post-block-layout-3">
                                <!-- Post item -->
                                <div class="cs-post-item">
                                    <div class="cs-post-thumb">
                                        <div class="cs-post-category-solid cs-clearfix">
                                            <?=$list_category;?>
                                        </div>
										<a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>">
										<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post['picture'];?>" alt="">
										</a>
                                    </div>
                                    <div class="cs-post-inner">
                                        <h3><a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>"><?=$list_post['title'];?></a></h3>
                                        <div class="cs-post-meta cs-clearfix">
                                            <span class="cs-post-meta-author"><a href="javascript:void(0)"><?=$this->post()->getAuthorName($list_post['editor']);?></a></span>
                                            <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($list_post['date']);?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php } ?>
                        <div class="cs-col cs-col-6-of-12">
                            <!-- Block layout 2 -->
                            <div class="cs-post-block-layout-2">
                                <!-- Post item -->
								<?php
									$post_by_categorys2 = $this->post()->getPostByCategory('1', '1,3', 'DESC', WEB_LANG_ID);
									foreach($post_by_categorys2 as $list_post2){
										$list_category = $this->category()->getCategory($list_post2['id_post'], WEB_LANG_ID);
								?>
                                <div class="cs-post-item">
                                    <div class="cs-post-thumb">
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post2['seotitle'];?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/thumbs/<?=$list_post2['picture'];?>" alt=""></a>
                                    </div>
                                    <div class="cs-post-inner">
                                        <h3><a href="<?=BASE_URL;?>/detailpost/<?=$list_post2['seotitle'];?>"><?=$list_post2['title'];?></a></h3>
                                        <div class="cs-post-category-empty cs-clearfix">
                                            <?=$list_category;?>
                                        </div>
                                        <div class="cs-post-meta cs-clearfix">
                                            <span class="cs-post-meta-author"><a href="javascript:void(0)"><?=$this->post()->getAuthorName($list_post2['editor']);?></a></span>
                                            <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($list_post2['date']);?></span>
                                        </div>
                                    </div>
                                </div>
								<?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="cs-row">
                        <div class="cs-col cs-col-12-of-12">
                            <!-- Banner container 
                            <div class="cs-banner-container">
                                <a href="http://themeforest.net/user/different-themes/portfolio?ref=CodeoStudio">
                                    <img src="demo/banners/4.jpg" alt="UniqMag">
                                </a>
                            </div>-->
                        </div>
                    </div>

                    <div class="cs-row">
                        <div class="cs-col cs-col-12-of-12">
                            <!-- Post block title -->
                            <div class="cs-post-block-title">
							<?php $category_title2 = $this->category()->getOneCategory('2', WEB_LANG_ID); ?>
                                <h4><?=$category_title2['title'];?></h4>
                            </div>
                        </div>
						<?php
							$post_by_categorys4 = $this->post()->getPostByCategory('2', '2', 'DESC', WEB_LANG_ID);
							foreach($post_by_categorys4 as $list_post4){
						?>
                        <div class="cs-col cs-col-6-of-12">
                            <!-- Block layout 5 -->
                            <div class="cs-post-block-layout-5">
                                <!-- Post item -->
                                <div class="cs-post-item">
                                    <div class="cs-post-category-icon" style="border-right-color: #9a8ac0">
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post4['seotitle'];?>" title=""></a>
                                    </div>
                                    <div class="cs-post-thumb">
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post4['seotitle'];?>">
											<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post4['picture'];?>" alt="">
										</a>
                                    </div>
                                    <div class="cs-post-inner">
                                        <h3><a href="<?=BASE_URL;?>/detailpost/<?=$list_post4['seotitle'];?>"><?=$list_post4['title'];?></a></h3>
                                        <div class="cs-post-meta cs-clearfix">
                                            <span class="cs-post-meta-author"><a href="javascript:void(0)"><?=$this->post()->getAuthorName($list_post4['editor']);?></a></span>
                                            <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($list_post4['date']);?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <div class="cs-row">
                        <div class="cs-col cs-col-12-of-12">
                            <!-- Post block title -->
                            <div class="cs-post-block-title" style="border-left-color: #ef9fa3">
							<?php $category_title3 = $this->category()->getOneCategory('3', WEB_LANG_ID); ?>
                                <h4><?=$category_title3['title'];?></h4>
                            </div>
                        </div>
                        <div class="cs-col cs-col-6-of-12">
                            <!-- Block layout 6 -->
							<?php
								$post_by_categorys7 = $this->post()->getPostByCategory('3', '1', 'DESC', WEB_LANG_ID);
								foreach($post_by_categorys7 as $list_post7){
							?>
                            <div class="cs-post-block-layout-6">
                                <div class="cs-post-item">
                                    <div class="cs-post-category-icon">
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post7['seotitle'];?>" title="Games"></a>
                                    </div>
                                    <div class="cs-post-thumb">
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post7['seotitle'];?>"><img class="image_fade" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post7['picture'];?>" alt="UniqMag"></a>
                                    </div>
                                    <div class="cs-post-inner">
                                        <h3><a href="<?=BASE_URL;?>/detailpost/<?=$list_post7['seotitle'];?>"><?=$list_post7['title'];?></h3>
                                        <div class="cs-post-meta cs-clearfix">
                                            <span class="cs-post-meta-author"><a href="javascript:void(0)"><?=$this->post()->getAuthorName($list_post7['editor']);?></a></span>
                                            <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($list_post7['date']);?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
                            <!-- Block layout 2 -->
                            <div class="cs-post-block-layout-2">
                                <!-- Post item -->
								<?php
									$post_by_categorys8 = $this->post()->getPostByCategory('3', '1,4', 'DESC', WEB_LANG_ID);
									foreach($post_by_categorys8 as $list_post8){
										$category8 = $this->category()->getCategory($list_post8['id_post'], WEB_LANG_ID);
								?>
                                <div class="cs-post-item">
                                    <div class="cs-post-thumb">
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post8['seotitle'];?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post8['picture'];?>" alt="UniqMag"></a>
                                    </div>
                                    <div class="cs-post-inner">
                                        <h3><a href="<?=BASE_URL;?>/detailpost/<?=$list_post8['seotitle'];?>"><?=$list_post8['title'];?></a></h3>
                                        <div class="cs-post-category-empty cs-clearfix">
                                            <?=$category8;?>
                                        </div>
                                        <div class="cs-post-meta cs-clearfix">
                                            <span class="cs-post-meta-author"><a href="javscript:void(0)"><?=$this->post()->getAuthorName($list_post8['editor']);?></a></span>
                                            <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($list_post8['date']);?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="cs-col cs-col-6-of-12">
                            <!-- Block layout 6 -->
							<?php
								$post_by_categorys7 = $this->post()->getPostByCategory('4', '1', 'DESC', WEB_LANG_ID);
								foreach($post_by_categorys7 as $list_post7){
							?>
                            <div class="cs-post-block-layout-6">
                                <div class="cs-post-item">
                                    <div class="cs-post-category-icon">
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post7['seotitle'];?>" title="Games"></a>
                                    </div>
                                    <div class="cs-post-thumb">
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post7['seotitle'];?>"><img class="image_fade" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post7['picture'];?>" alt="UniqMag"></a>
                                    </div>
                                    <div class="cs-post-inner">
                                        <h3><a href="<?=BASE_URL;?>/detailpost/<?=$list_post7['seotitle'];?>"><?=$list_post7['title'];?></h3>
                                        <div class="cs-post-meta cs-clearfix">
                                            <span class="cs-post-meta-author"><a href="javascript:void(0)"><?=$this->post()->getAuthorName($list_post7['editor']);?></a></span>
                                            <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($list_post7['date']);?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
                            <!-- Block layout 2 -->
                            <div class="cs-post-block-layout-2">
                                <!-- Post item -->
								<?php
									$post_by_categorys8 = $this->post()->getPostByCategory('4', '1,4', 'DESC', WEB_LANG_ID);
									foreach($post_by_categorys8 as $list_post8){
										$category8 = $this->category()->getCategory($list_post8['id_post'], WEB_LANG_ID);
								?>
                                <div class="cs-post-item">
                                    <div class="cs-post-thumb">
                                        <a href="<?=BASE_URL;?>/detailpost/<?=$list_post8['seotitle'];?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post8['picture'];?>" alt="UniqMag"></a>
                                    </div>
                                    <div class="cs-post-inner">
                                        <h3><a href="<?=BASE_URL;?>/detailpost/<?=$list_post8['seotitle'];?>"><?=$list_post8['title'];?></a></h3>
                                        <div class="cs-post-category-empty cs-clearfix">
                                            <?=$category8;?>
                                        </div>
                                        <div class="cs-post-meta cs-clearfix">
                                            <span class="cs-post-meta-author"><a href="javscript:void(0)"><?=$this->post()->getAuthorName($list_post8['editor']);?></a></span>
                                            <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($list_post8['date']);?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main sidebar -->
                <?=$this->insert('sidebar');?>
            </div>

