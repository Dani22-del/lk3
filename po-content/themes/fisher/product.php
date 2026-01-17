<?=$this->layout('index');?>



	<section class="global-page-header">

		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="block">

						<h2>Produk</h2>

						<ol class="breadcrumb">

							<li><a href="<?=BASE_URL;?>"><i class="ion-ios-home"></i> <?=$this->e($front_home);?></a></li>

							<li class="active">Produk</li>

						</ol>

					</div>

				</div>

			</div>

		</div>

	</section>



<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

          <div class="col-md-8">

			<div id="portfolio" class="portfolio-masonry clearfix">

              

              <h3>Produk Kami</h3>

			<?php

				$products = $this->pocore()->call->podb->from('product_category')

					->orderBy('id_product_category')

					->fetchAll();

				foreach($products as $product){

                $cek = $this->pocore()->call->podb->from('product')->where('id_product_category', $product['id_product_category'])->count();
			?>

              	<h2 class="blogpost-title">

                      <a href="<?=BASE_URL.'/product/'.$product['link'];?>">-<?=$product['judul'];?> (<?=$cek?>)</a>

                </h2>

			<?php } ?>

			</div>

			<div class="col-md-12 text-center" style="margin-top:30px;">

				<ul class="pagination nobottommargin">

					<?php

						$totaldata = $this->pocore()->call->podb->from('product')->count();

						$totalpage = $this->pocore()->call->popaging->totalPage($totaldata, '8');

						echo $this->pocore()->call->popaging->navPage($this->e($page), $totalpage, BASE_URL, 'product', 'page', '1', $this->e($front_paging_prev), $this->e($front_paging_next));

					?>

				</ul>

			</div>

			</div>

          

            <div class="col-md-4">

              <!-- Insert Sidebar -->

              <?=$this->insert('sidebar');?>

            </div>

		</div>

	</div>

</section>