<?=$this->layout('index');?>

			<div class="cs-container">
			<!-- Breadcrumb -->
					<ul class="breadcrumb">
						<li><a href="<?=BASE_URL;?>"><?=$this->e($front_home);?></a></li>
						<li><?=$this->e($front_tag);?></li>
						<li><a href="<?=$this->e($social_url);?>"><?=$this->e($page_title);?></a></li>
					</ul>
                <!-- Page title -->
                <h1 class="cs-page-title"><?=$this->e($page_title);?></h1>

                <!-- Main content -->
                <div class="cs-main-content cs-sidebar-on-the-right">
                    <!-- Block layout 4 -->
                    <div class="cs-post-block-layout-4">
                        <!-- Post item -->
						<?php
							$tags = $this->post()->getPostFromTag('10', 'post.id_post DESC', $this->e($tag_seo), $this->e($page), WEB_LANG_ID);
							foreach($tags as $post){
								$post_tag = $this->category()->getCategory($post['id_post'], WEB_LANG_ID);
						?>
                        <div class="cs-post-item">
                            <div class="cs-post-thumb">
                                <a href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>">
									<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$post['picture'];?>" alt="<?=$post['title'];?>" alt="UniqMag">
								</a>
                            </div>
                            <div class="cs-post-inner">
                                <div class="cs-post-category-solid cs-clearfix">
                                    <?=$post_tag;?>
                                </div>
                                <h3><a href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>"><?=$post['title'];?></a></h3>
                                <div class="cs-post-meta cs-clearfix">
                                    <span class="cs-post-meta-author"><a href="javscript:void(0)"><?=$this->post()->getAuthorName($post['editor']);?></a></span>
                                    <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></span>
                                </div>
                                <p class="cs-post-excerpt"><?=$this->pocore()->call->postring->cuthighlight('post', $post['content'], '120');?>...</p>
                                <a class="cs-post-read-more" href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>"><?=$this->e($front_readmore);?><i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Pagination -->
                    <ul class="page-numbers">
						<?=$this->post()->getCategoryPaging('6', $category, $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
                    </ul>
                </div>

                <!-- Main sidebar -->
                <?=$this->insert('sidebar');?>
            </div>
