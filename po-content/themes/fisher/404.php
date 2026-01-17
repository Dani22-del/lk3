<?=$this->layout('index');?>

	<section class="moduler wrapper_404">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >404</h1>
						<h2 class="wow fadeInUp animated" data-wow-delay=".6s">NOT FOUND</h2>
						<p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="300ms"><?=$this->e($front_404_text);?></p>
						<a href="<?=BASE_URL;?>" class="btn btn-dafault btn-home wow fadeInUp animated" data-wow-delay="1.1s">Go Home</a>
					</div>
				</div>
			</div>
		</div>
	</section>