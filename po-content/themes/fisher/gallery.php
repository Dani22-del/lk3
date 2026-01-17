<?=$this->layout('index');?>

	<section class="global-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<h2><?=$this->e($page_title);?></h2>
						<ol class="breadcrumb">
							<li><a href="<?=BASE_URL;?>"><i class="ion-ios-home"></i> <?=$this->e($front_home);?></a></li>
							<li><a href="<?=BASE_URL.'/album';?>"><?=$this->e($front_gallery);?></a></li>
							<li class="active"><?=$this->e($page_title);?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gallery" class="gallery">
		<div class="container">
			<div class="row">
			<?php
				$gallerys = $this->gallery()->getGallery('12', 'id_gallery DESC', $album, $this->e($page));
				foreach($gallerys as $gal){
			?>
				<div class="col-sm-4 col-xs-12">
					<figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
						<div class="img-wrapper">
							<img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$gal['picture'];?>" class="img-responsive" alt="<?=$gal['title'];?>">
							<div class="overlay">
								<div class="buttons">
									<a rel="gallery" class="fancybox" href="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$gal['picture'];?>"><?=$gal['title'];?></a>
								</div>
							</div>
						</div>
					</figure>
				</div>
			<?php } ?>
			</div>
			<div class="row">
				<div class="col-md-12 text-center" style="margin-top:30px;">
					<ul class="pagination">
						<?=$this->gallery()->getGalleryPaging('12', $album, $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
					</ul>
				</div>
			</div>
		</div>
	</section>