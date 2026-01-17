<?=$this->layout('index');?>

<section id="hero-area" >

	<div class="container">

		<div class="row">

			<div class="col-md-12 text-center">

				<div class="block wow fadeInUp" data-wow-delay=".3s">

					<section class="cd-intro">

						<h1 style="font-size: 26px;" class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >

							<span>LEMBAGA KESELAMATAN DAN KESEHATAN KERJA</span><br>

						</h1>

					</section>

					<h1 style="font-size: 26px;" class="wow fadeInUp animated" data-wow-delay=".6s" >

						PT. ELESKA GLOBAL CENTRATAMA INDONESIA

					</h1>

					<a class="btn btn-default btn-green" href="<?=BASE_URL;?>/pendaftaran" data-section="#works" >Formulir Pendaftaran</a>

				</div>

			</div>

		</div>

	</div>

</section>



<section id="works" class="works">

	<div class="container">

		<div class="section-heading">

			<h1 class="title wow fadeInDown" data-wow-delay=".3s">Event Terbaru</h1>

		</div>

		<div class="row">

			<?php

                $post_by_categorys = $this->post()->getPostByCategory('1', '6', 'DESC', WEB_LANG_ID);

				foreach($post_by_categorys as $list_post){

			?>

			<div class="col-sm-4 col-xs-12">

				<figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">

					<div class="img-wrapper">

						<img style="width: 100%; height: 200px; object-fit: cover;" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/medium/medium_<?=$list_post['picture'];?>" class="img-responsive" alt="<?=$list_post['title'];?>">

						<div class="overlay"></div>

					</div>

					<figcaption>

						<h4><a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>"><?=$this->pocore()->call->postring->cuthighlight('title', $list_post['title'], '30');?>...</a></h4>

						<p><?=$this->pocore()->call->postring->cuthighlight('post', $list_post['content'], '60');?>...</p>

					</figcaption>

				</figure>

			</div>

			<?php } ?>

		</div>

	</div>

</section>

<section id="feature" style="padding: 20px 0;">

	<div class="container">

		<div class="section-heading">

			<h1 class="title wow fadeInDown" data-wow-delay=".3s">Koordinator</h1>

		</div>

		<div class="row">

          <?php

                $koordinator = $this->pocore()->call->podb->from('koordinator')->orderBy('id_koordinator')->fetchAll();

				foreach($koordinator as $koor){

			?>

			<div class="col-md-4 col-lg-4 col-xs-12">

				<div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">

					<div class="media-left">

						<div>

                          <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$koor['foto'];?>" style="object-fit: cover; width: 70px; height: 70px; border-radius: 50%;">

                      </div>

					</div>

					<div class="media-body">

						<h4 class="media-heading"><?=$koor['nama'];?></h4>

						<p><?=$koor['no_hp'];?></p>

					</div>

				</div>

			</div>

			<?php } ?>

		</div>

	</div>

</section>

