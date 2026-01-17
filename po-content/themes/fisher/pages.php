<?=$this->layout('index');?>

	<section class="global-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<h2><?=$this->e($pages['title']);?></h2>
						<ol class="breadcrumb">
							<li><a href="<?=BASE_URL;?>"><i class="ion-ios-home"></i> <?=$this->e($front_home);?></a></li>
							<li><a href="<?=BASE_URL.'/pages/'.$this->e($pages['seotitle']);?>"><?=$this->e($front_pages);?></a></li>
							<li class="active"><?=$this->e($pages['title']);?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="company-description">
		<div class="container">
			<div class="row">
				<?php if ($this->e($pages['picture']) != '') { ?>
				<div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
					<img src="<?=BASE_URL.'/'.DIR_CON.'/uploads/'.$this->e($pages['picture']);?>" alt="" class="img-responsive">
				</div>
				<div class="col-md-6">
					<div class="block">
						<h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><?=$this->e($pages['title']);?></h3>
						<div class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><?=htmlspecialchars_decode(html_entity_decode($this->e($pages['content'])));?></div>						
					</div>
				</div>
				<?php } else { ?>
				<div class="col-md-12">
					<div class="block">
						<h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><?=$this->e($pages['title']);?></h3>
						<div class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><?=htmlspecialchars_decode(html_entity_decode($this->e($pages['content'])));?></div>						
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>