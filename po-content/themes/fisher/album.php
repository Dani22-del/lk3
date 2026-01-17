<?=$this->layout('index');?>

	<section class="global-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<h2><?=$this->e($front_gallery);?></h2>
						<ol class="breadcrumb">
							<li><a href="<?=BASE_URL;?>"><i class="ion-ios-home"></i> <?=$this->e($front_home);?></a></li>
							<li class="active"><?=$this->e($front_gallery);?></li>
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
				$albums = $this->gallery()->getAlbum('6', 'id_album ASC', $this->e($page));
				foreach($albums as $alb){
			?>
				<div class="col-sm-4 col-xs-12">
					<figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
						<div class="img-wrapper">
							<img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/medium/medium_'.$alb['picture'];?>" class="img-responsive" alt="<?=$alb['title'];?>">
							<div class="overlay">
								<div class="buttons">
									<a rel="gallery" class="nofancybox" href="<?=BASE_URL.'/gallery/'.$this->e($alb['seotitle']);?>"><?=$alb['title'];?></a>
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
						<?=$this->gallery()->getAlbumPaging('6', $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
					</ul>
				</div>
			</div>
		</div>
	</section>