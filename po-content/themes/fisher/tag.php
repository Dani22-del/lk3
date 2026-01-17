<?=$this->layout('index');?>

	<section class="global-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<h2><?=$this->e($page_title);?></h2>
						<ol class="breadcrumb">
							<li><a href="<?=BASE_URL;?>"><i class="ion-ios-home"></i> <?=$this->e($front_home);?></a></li>
							<li><a href="<?=BASE_URL;?>/category/all"><?=$this->e($front_tag);?></a></li>
							<li class="active"><a href="<?=$this->e($social_url);?>"><?=$this->e($page_title);?></a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="blog-full-width">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php
						$tags = $this->post()->getPostFromTag('3', 'post.id_post DESC', $this->e($tag_seo), $this->e($page), WEB_LANG_ID);
						foreach($tags as $post){
					?>
					<article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
						<div class="blog-post-image">
							<a href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>"><img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?>" alt="" /></a>
						</div>
						<div class="blog-content">
							<h2 class="blogpost-title"><a href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>"><?=$post['title'];?></a></h2>
							<div class="blog-meta">
								<span><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></span>
								<span><a href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>"><?=$this->post()->getAuthorName($post['editor']);?></a></span>
								<span><?=$this->post()->getPostTag($post['tag']);?></span>
							</div>
							<p><?=$this->pocore()->call->postring->cuthighlight('post', $post['content'], '200');?>...</p>
							<a href="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>" class="btn btn-dafault btn-details"><?=$this->e($front_readmore);?></a>
						</div>
					</article>
					<?php } ?>
					<div class="row">
						<div class="col-md-12 text-center" style="margin-top:30px;">
							<ul class="pagination">
								<?=$this->post()->getTagPaging('3', $this->e($tag_seo), $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<!-- Insert Sidebar -->
					<?=$this->insert('sidebar');?>
				</div>
			</div>
		</div>
	</section>