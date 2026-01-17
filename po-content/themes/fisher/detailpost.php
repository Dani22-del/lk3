<?=$this->layout('index');?>

	<section class="global-page-header" style="background-image: linear-gradient(to bottom left, yellow, green);">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="block">
						<h2><?=$post['title'];?></h2>
						<div class="portfolio-meta">
							<span><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></span>|
							<span> <?=$this->post()->getAuthorName($post['editor']);?></span>|
							<span> Tags: <?=$this->post()->getPostTag($post['tag']);?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="single-post">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="post-img">
						<img class="img-responsive" alt="" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?>" style="margin:0 auto;">
						<?php if ($post['picture_description'] != '') { ?>
						<p class="text-center" style="padding:10px; background:#eee;"><i><?=$post['picture_description'];?></i></p>
						<?php } ?>
					</div>
					<div class="post-content">
						<?=htmlspecialchars_decode(html_entity_decode($post['content']));?>
					</div>
				</div>
			</div>
			<?php if ($post['comment'] == 'Y') { ?>
			<div class="row" style="display: none;">
				<div class="col-md-10 col-md-offset-1">
					<?php if ($this->post()->getCountComment($post['id_post']) > 0) { ?>
					<div class="comments">
						<?php
							$com_parent = $this->post()->getCommentByPost($post['id_post'], '6', 'DESC', $this->e($page));
							$com_template = array(
								'parent_tag_open' => '<div class="media" id="li-comment-{$comment_id}">',
								'parent_tag_close' => '</div>',
								'child_tag_open' => '<div class="media">',
								'child_tag_close' => '</div>',
								'comment_list' => '
									<a href="{$comment_url}" class="pull-left">
										<img alt="" src="{$comment_avatar}" class="media-object" width="80">
									</a>
									<div class="media-body">
										<h4 class="media-heading">{$comment_name}</h4>
										<p class="text-muted">{$comment_datetime}</p>
										<p>{$comment_content}</p>
										<a class="comment-reply-link" id="{$comment_id}" href="#comments">'.$this->e($comment_reply).'</a>
									</div>
								'
							);
						?>
						<?=$this->post()->generateComment($com_parent, 'DESC', $com_template);?>
					</div>
					<div class="row">
						<div class="col-md-12 text-center" style="margin-bottom:40px;">
							<ul class="pagination">
								<?=$this->post()->getCommentPaging('6', $post['id_post'], $post['seotitle'], $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>
							</ul>
						</div>
					</div>
					<?php } ?>
					<div class="post-comment" id="comments">
						<h3><?=$this->e($front_leave_comment);?></h3>
						<?=$this->pocore()->call->poflash->display();?>
						<form role="form" class="form-horizontal" action="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>#comments" method="post" id="commentform">
							<input type="hidden" name="id_parent" id="id_parent" value="0" />
							<input type="hidden" name="id" name="id" value="<?=$post['id_post'];?>" />
							<input type="hidden" name="seotitle" id="seotitle" value="<?=$post['seotitle'];?>" />
							<div class="form-group">
								<div class="col-lg-4">
									<input type="text" name="name" class="col-lg-12 form-control" value="<?=(isset($_POST['name']) ? $_POST['name'] : '');?>" placeholder="<?=$this->e($comment_name);?>">
								</div>
								<div class="col-lg-4">
									<input type="text" name="email" class="col-lg-12 form-control" value="<?=(isset($_POST['email']) ? $_POST['email'] : '');?>" placeholder="<?=$this->e($comment_email);?>">
								</div>
								<div class="col-lg-4">
									<input type="text" name="website" class="col-lg-12 form-control" value="<?=(isset($_POST['url']) ? $_POST['url'] : '');?>" placeholder="<?=$this->e($comment_website);?>">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<textarea name="comment" class="form-control" rows="8" placeholder="<?=$this->e($comment_text);?>"><?=(isset($_POST['comment']) ? $_POST['comment'] : '');?></textarea>
								</div>
							</div>
							<p><div class="g-recaptcha" data-sitekey="<?=$this->pocore()->call->posetting[21]['value'];?>"></div></p>
							<p><button class="btn btn-send" type="submit"><?=$this->e($comment_submit);?></button></p>
						</form>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</section>