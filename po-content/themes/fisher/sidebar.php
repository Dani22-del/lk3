<div class="sidebar">
	<div class="search widget">
		<form action="<?=BASE_URL;?>/search" method="post" class="searchform" role="search">
			<div class="input-group">
				<input type="text" name="search" class="form-control" placeholder="<?=$this->e($front_search);?>...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"> <i class="ion-search"></i> </button>
				</span>
			</div>
		</form>
	</div>
	<div class="author widget">
		<img class="img-responsive" src="<?=$this->asset('/images/author-bg.jpg')?>">
		<div class="author-body text-center">
			<div class="author-img">
				<img src="<?=BASE_URL.'/'.DIR_INC;?>/images/logo.png">
			</div>
			<div class="author-bio">
				<h3><?=$this->pocore()->call->posetting[0]['value'];?></h3>
				<p><?php //$this->pocore()->call->posetting[2]['value'];?></p>
			</div>
		</div>
	</div>
	<div class="categories widget">
		<h3 class="widget-head"><?=$this->e($front_categories);?></h3>
		<ul>
		<?php
			$categorys_side = $this->category()->getAllCategory(WEB_LANG_ID);
			foreach($categorys_side as $category_side){
		?>
			<li><a href="<?=BASE_URL;?>/category/<?=$category_side['seotitle'];?>"><?=$category_side['title'];?></a></li>
		<?php } ?>
		</ul>
	</div>
	<div class="recent-post widget">
		<h3><?=$this->e($front_recent);?></h3>
		<ul>
		<?php
			$recents_side = $this->post()->getRecent('5', 'DESC', WEB_LANG_ID);
			foreach($recents_side as $recent_side){
		?>
			<li>
				<a href="<?=BASE_URL;?>/detailpost/<?=$recent_side['seotitle'];?>"><?=$recent_side['title'];?></a><br>
				<time><?=$this->pocore()->call->podatetime->tgl_indo($recent_side['date']);?></time>
			</li>
		<?php } ?>
		</ul>
	</div>
</div>