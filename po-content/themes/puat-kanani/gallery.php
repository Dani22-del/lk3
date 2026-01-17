<?=$this->layout('index');?>

			<div class="cs-container">
				<ul class="breadcrumb">
					<li><a href="<?=BASE_URL;?>"><?=$this->e($front_home);?></a></li>
					<li><a href="<?=BASE_URL.'/album';?>"><?=$this->e($front_gallery);?></a></li>
					<li><?=$this->e($page_title);?></li>
				</ul>
                <!-- Page title -->
                <h1 class="cs-page-title"><?=$this->e($page_title);?></h1>
                <!-- Main content -->
                <div class="cs-main-content">
                
                    <div class="cs-row">
					<?php
						$gallerys = $this->gallery()->getGallery('12', 'id_gallery DESC', $album, $this->e($page));
						foreach($gallerys as $gal){
					?>
                        <div class="cs-col cs-col-3-of-12">
                            <!-- Block layout 3 -->
                            <div class="cs-post-block-layout-3">
                                <!-- Post item -->
                                <div class="cs-post-item">
                                    <div class="cs-post-thumb">
                                        <a href="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$gal['picture'];?>" class="cs-lightbox-image">
											<img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$gal['picture'];?>" alt="<?=$gal['title'];?>">
										</a>
                                    </div>
                                    <div class="cs-post-inner">
                                        <h3><a href="post_standard.html"><?=$gal['title'];?></a></h3>
									</div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    
                    <!-- Pagination -->
                    <ul class="page-numbers">
                        <?=$this->gallery()->getGalleryPaging('12', $album, $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
                    </ul>
                </div>
                <!-- Main sidebar -->
                
            </div>
