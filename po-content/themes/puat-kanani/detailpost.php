<?=$this->layout('index');?>

			<div class="cs-container">                
                <!-- Main content -->
                <div class="cs-main-content cs-sidebar-on-the-right">

                    <!-- Post header -->
                    <header class="cs-post-single-title">
					<!-- Breadcrumb -->
					<ul class="breadcrumb">
						<li><a href="<?=BASE_URL;?>"><?=$this->e($front_home);?></a></li>
						<li><?=$this->e($front_post_title);?></li>
						<li><a href="<?=$this->e($social_url);?>"><?=$this->e($page_title);?></a></li>
					</ul>
                        <div class="cs-post-category-solid cs-clearfix">
                            <?=$this->category()->getCategory($post['id_post'], WEB_LANG_ID);?>
                        </div>
                        <h1><?=$post['title'];?></h1>
                        <div class="cs-post-meta cs-clearfix">
                            <span class="cs-post-meta-author"><i class="icon-user"></i><a href="javascript:void(0)"><?=$this->post()->getAuthorName($post['editor']);?></a></span>
                            <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($post['date']);?></span>
                        </div>
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
                            <div class="cs-single-post-media">
							<?php if ($post['picture_description'] != '') { ?>
                                <div class="cs-media-credits"><?=$post['picture_description'];?></div>
							<?php } ?>
                                <a href="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?>" class="cs-lightbox-image"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$post['picture'];?>" alt="<?=$post['title'];?>" alt="UniqMag"></a>
                            </div>
                            <!-- Content -->
                            <div class="cs-single-post-paragraph">
                            <?=htmlspecialchars_decode(html_entity_decode($post['content']));?>
							</div>
                            <!-- Tags -->
                            <div class="cs-single-post-tags">
                                <span>Tags</span>
                                <?=$this->post()->getPostTag($post['tag'], ' , ');?>
                            </div>
                        </div>
                    </article>

                    <!-- Review -->
                    <h4 class="cs-heading-subtitle">Tentang Penulis</h4>
                    <div class="cs-single-post-review">
						<?php
							$editor = $this->post()->getAuthor($post['editor']);
							if ($editor['picture'] != '') {
								$editor_avatar = BASE_URL.'/'.DIR_CON.'/uploads/'.$editor['picture'];
							} else {
								$editor_avatar = BASE_URL.'/'.DIR_CON.'/uploads/user-editor.jpg';
							}
						?>
                        <div class="cs-final-score">
						<img src="<?=$editor_avatar;?>" alt="">
                        </div>
                        <div class="cs-review-summary">
                            <h5><a href="javscript:void(0)"><?=$editor['nama_lengkap'];?></a></h5>
                            <p><?=htmlspecialchars_decode(html_entity_decode($editor['bio']));?></p>
                        </div>
                    </div>

                    <!-- Controls -->
                    <div class="cs-single-post-controls">
                        <div class="cs-prev-post">
							<?php
								$prevpost = $this->post()->getPrevPost($post['id_post'], WEB_LANG_ID);
								if ($prevpost) {
							?>
							<span><i class="fa fa-angle-double-left"></i> Prev</span>
								<a href="<?=BASE_URL;?>/detailpost/<?=$prevpost['seotitle'];?>"><?=$prevpost['title'];?></a>
							<?php } ?>
                        </div>
                        <div class="cs-next-post">
							<?php
								$nextpost = $this->post()->getNextPost($post['id_post'], WEB_LANG_ID);
								if ($nextpost) {
							?>
							<span>Next <i class="fa fa-angle-double-right"></i></span>
								<a href="<?=BASE_URL;?>/detailpost/<?=$nextpost['seotitle'];?>"><?=$nextpost['title'];?></a>
							<?php } ?>
                        </div>
                    </div>

                    <!-- Related articles -->
                    <div class="cs-single-related-aticles">
                        <h4 class="cs-heading-subtitle"><?=$this->e($front_related_post);?></h4>
                        <div class="cs-row">
						<?php
							$norelated = 1;
							$relateds = $this->post()->getRelated($post['id_post'], $post['tag'], '2', 'DESC', WEB_LANG_ID);
							foreach($relateds as $related){
								$relateds_category = $this->category()->getCategory($related['id_post'], WEB_LANG_ID);
						?>
                            <div class="cs-col cs-col-6-of-12">
                                <!-- Block layout 3 -->
                                <div class="cs-post-block-layout-3">
                                    <!-- Post item -->
                                    <div class="cs-post-item">
                                        <div class="cs-post-thumb">
                                            <div class="cs-post-category-border cs-clearfix">
                                                <?=$relateds_category;?>
                                            </div>
                                            <a href="<?=BASE_URL;?>/detailpost/<?=$related['seotitle'];?>"><img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$related['picture'];?>" alt="<?=$related['title'];?>" alt="UniqMag"></a>
                                        </div>
                                        <div class="cs-post-inner">
                                            <h3><a href="<?=BASE_URL;?>/detailpost/<?=$related['seotitle'];?>"><?=$this->pocore()->call->postring->cuthighlight('title', $related['title'], '40');?>...</a></h3>
                                            <div class="cs-post-meta cs-clearfix">
                                                <span class="cs-post-meta-author"><a href="javscript:void(0)"><?=$this->post()->getAuthorName($related['editor']);?></a></span>
                                                <span class="cs-post-meta-date"><?=$this->pocore()->call->podatetime->tgl_indo($related['date']);?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php } ?>
                        </div>
                    </div>

                    <!-- Comments -->
					<?php if ($post['comment'] == 'Y') { ?>
                    <div class="cs-comments-area">
						<?php if ($this->post()->getCountComment($post['id_post']) > 0) { ?>
                        <h4 class="cs-heading-subtitle"><?=$this->post()->getCountComment($post['id_post']);?> <?=$this->e($front_comment);?></h4>
                        <ol class="cs-comment-list">
                            <!-- Comment -->
							<?php
							$com_parent = $this->post()->getCommentByPost($post['id_post'], '6', 'DESC', $this->e($page));
							$com_template = array(
							'parent_tag_open' => '<li class="cs-comment" id="li-comment-{$comment_id}">',
								'parent_tag_close' => '</li>',
								'child_tag_open' => '<article>',
								'child_tag_close' => '</ul>',
								'comment_list' => '
                                    <div id="comment-{$comment_id}" class="cs-comment-author">
                                        <img class="cs-avatar" src="{$comment_avatar}" alt="">
                                        <b><a href="{$comment_url}">{$comment_name}</a></b>
                                        <a class="cs-comment-metadata" href="javascript:void(0)">
                                            <time datetime="2015-09-14T09:34:28+00:00">{$comment_datetime}</time>
                                        </a>
                                    </div>
                                    <div class="cs-comment-content">
                                        <p>{$comment_content}</p>
                                        <a id="{$comment_id}" class="cs-reply" href="#respond" title="'.$this->e($comment_reply).'">Reply</a>
                                    </div>'
								);
							?>
                        </ol>
						<script type='text/javascript'>  
							$(function(){  
								$("a.comment-reply-link").click(function() {
									var id = $(this).attr("id");
									$("#id_parent").val(id);
								});
								return true;
							});
						</script>
						<?php } ?>
                    </div>

                    <!-- Respond -->
                    <div id="respond" class="comment-respond">
                        <h4 class="cs-heading-subtitle"><?=$this->e($front_leave_comment);?></h4>
						<?=$this->pocore()->call->poflash->display();?>
                        <form class="comment-form" action="<?=BASE_URL;?>/detailpost/<?=$post['seotitle'];?>#comments" method="post" id="commentform">
								<input type="hidden" name="id_parent" id="id_parent" value="0" />
								<input type="hidden" name="id" name="id" value="<?=$post['id_post'];?>" />
								<input type="hidden" name="seotitle" id="seotitle" value="<?=$post['seotitle'];?>" />
                            <p>
                                <label><?=$this->e($comment_name);?> <span class="required">*</span></label>
                                <input type="text" placeholder="Nickname" name="name" id="name" value="<?=(isset($_POST['name']) ? $_POST['name'] : '');?>" required />
                            </p>
                            <p>
                                <label><?=$this->e($comment_email);?> <span class="required">*</span></label>
                                <input type="text" placeholder="E-mail" name="email" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : '');?>" required />
                            </p>
                            <p>
                                <label><?=$this->e($comment_website);?></label>
                                <input type="text" placeholder="Website" name="url" id="url" value="<?=(isset($_POST['url']) ? $_POST['url'] : '');?>" required />
                            </p>
                            <p>
                                <label><?=$this->e($comment_text);?> <span>*</span></label>
                                <textarea name="comment" id="comment" placeholder="Your comment.." required><?=(isset($_POST['comment']) ? $_POST['comment'] : '');?></textarea>
                            </p>
							<p>
							<label><div class="g-recaptcha" data-sitekey="<?=$this->pocore()->call->posetting[21]['value'];?>"></div></label>
							</p>
                            <p class="form-submit">
                                <input name="submit" type="submit" id="submit" class="submit cs-btn cs-btn-black" value="<?=$this->e($comment_submit);?>">
                            </p>
                        </form>
                    </div>
					<?php } ?>
                </div>
                <!-- Main sidebar -->
                <?=$this->insert('sidebar');?>
            </div>

