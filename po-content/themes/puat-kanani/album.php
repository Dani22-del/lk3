<?=$this->layout('index');?>

			<div class="cs-container">
				<!-- Breadcrumb -->
				<ul class="breadcrumb">
					<li><a href="<?=BASE_URL;?>"><?=$this->e($front_home);?></a></li>
					<li><a href="<?=BASE_URL.'/album';?>"><?=$this->e($front_gallery);?></a></li>
				</ul>
                <!-- Page title -->
                <h1 class="cs-page-title"><?=$this->e($page_title);?></h1>
                <!-- Main content -->
                <div class="cs-main-content">
                
                    <div class="cs-row">
					<?php
						$albums = $this->gallery()->getAlbum('9', 'id_album ASC', $this->e($page));
						foreach($albums as $alb){
					?>
                        <div class="cs-col cs-col-4-of-12">
                            <!-- Block layout 3 -->
                            <div class="cs-post-block-layout-3">
                                <!-- Post item -->
                                <div class="cs-post-item">
                                    <div class="cs-post-thumb">
                                        <div class="cs-post-category-solid cs-clearfix">
                                            <a href="<?=BASE_URL.'/gallery/'.$this->e($alb['seotitle']);?>"><?=$alb['title'];?></a>
                                        </div>
										<a href="<?=BASE_URL.'/gallery/'.$this->e($alb['seotitle']);?>">
										<div class="cs-post-format-icon">
                                            <i class="fa fa-picture-o"></i>
                                        </div>
										</a>
                                        <a href="<?=BASE_URL.'/gallery/'.$this->e($alb['seotitle']);?>"><img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$alb['picture'];?>" alt="<?=$alb['title'];?>"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    
                    <!-- Pagination -->
                    <ul class="page-numbers">
                        <?=$this->gallery()->getAlbumPaging('8', $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
                    </ul>
                </div>
                <!-- Main sidebar -->
                
            </div>
