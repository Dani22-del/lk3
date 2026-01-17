<?=$this->layout('index');?>

			<div class="cs-container">                
                <!-- Main content -->
                <div class="cs-main-content cs-sidebar-on-the-right">

                    <!-- Post header -->
                    <header class="cs-post-single-title">
                        <h1><?=$this->e($pages['title']);?></h1>
                    </header>

                    <!-- Single post -->
                    <article class="cs-single-post">
                        <!-- Post share -->
                        <div class="cs-single-post-share">
                            <div>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        <!-- Post content -->
                        <div class="cs-single-post-content">
                            <!-- Media -->
							<?php if ($this->e($pages['picture']) != '') { ?>
                            <div class="cs-single-post-media">
                                <a href="demo/slider/2.jpg" class="cs-lightbox-image"><img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($pages['picture']);?>" alt="UniqMag"></a>
                            </div>
							<?php } ?>
                            <!-- Content -->
                            <div class="cs-single-post-paragraph">
								<?=htmlspecialchars_decode(html_entity_decode($this->e($pages['content'])));?>
                            </div>
                        </div>
                    </article>
                </div>
				<!-- Main sidebar -->
                <?=$this->insert('sidebar');?>
            </div>

