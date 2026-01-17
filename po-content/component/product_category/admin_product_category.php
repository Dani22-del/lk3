<?php


if (!defined('CONF_STRUCTURE')) {
	header('location:index.html');
	exit;
}


if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser']) AND $_SESSION['login'] == 0) {
	header('location:index.php');
	exit;
}


class Product_category extends PoCore

{

	function __construct()
	{
		parent::__construct();
	}

	public function index()

	{

		if (!$this->auth($_SESSION['leveluser'], 'product_category', 'read')) {
			echo $this->pohtml->error();
			exit;
		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->headTitle('Kategori Produk', '

						<div class="btn-title pull-right">

							<a href="admin.php?mod=product_category&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>

						</div>

					');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(
                        array(
                            'method' => 'post', 
                            'action' => 'route.php?mod=product_category&act=multidelete', 
                            'autocomplete' => 'off')
                        );?>

						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>

						<?php

							$columns = array(

								array('title' => 'Id', 'options' => 'style="width:30px;"'),

								array('title' => 'Nama Kategori', 'options' => ''),

								array('title' => 'Link', 'options' => ''),

								array('title' => 'Action', 'options' => 'class="no-sort" style="width:50px;"')

							);

						?>

						<?=$this->pohtml->createTable(array('id' => 'table-product-category', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>

					<?=$this->pohtml->formEnd();?>

				</div>

			</div>

		</div>

		<?=$this->pohtml->dialogDelete('product_category');?>

		<?php

	}


	public function datatable()

	{

		if (!$this->auth($_SESSION['leveluser'], 'product_category', 'read')) {

			echo $this->pohtml->error();

			exit;

		}

		$table = 'product_category';

		$primarykey = 'id_product_category';

		$columns = array(

			array('db' => $primarykey, 'dt' => '0', 'field' => $primarykey,

				'formatter' => function($d, $row, $i){

					return "<div class='text-center'>\n

						<input type='checkbox' id='titleCheckdel' />\n

						<input type='hidden' class='deldata' name='item[".$i."][deldata]' value='".$d."' disabled />\n

					</div>\n";

				}

			),

			array('db' => $primarykey, 'dt' => '1', 'field' => $primarykey),

			array('db' => 'judul', 'dt' => '2', 'field' => 'judul'),

			array('db' => 'link', 'dt' => '3', 'field' => 'link',
				'formatter' => function($d, $row, $i){
					return "<i><a href='".WEB_URL."product/".$this->postring->seo_title($row['judul'])."' target='_blank'>".WEB_URL."product/".$this->postring->seo_title($row['judul'])."</a></i>";
				}
			),

			array('db' => $primarykey, 'dt' => '4', 'field' => $primarykey,

				'formatter' => function($d, $row, $i){

					return "<div class='text-center'>\n

						<div class='btn-group btn-group-xs'>\n

							<a href='admin.php?mod=product_category&act=edit&id=".$row['id_product_category']."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>\n

							<a class='btn btn-xs btn-danger alertdel' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_2']}'><i class='fa fa-times'></i></a>

						</div>\n

					</div>\n";

				}

			)

		);

		echo json_encode(SSP::simple($_POST, $this->poconnect, $table, $primarykey, $columns));

	}



	/**

	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman tambah product.

	 *

	 * This function is used to display and process add product page.

	 *

	*/

	public function addnew()

	{

		if (!$this->auth($_SESSION['leveluser'], 'product_category', 'create')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$product_category = array(

				'judul' => $this->postring->valid($_POST['judul'], 'xss'),
				'link' 	=> $this->postring->seo_title($this->postring->valid($_POST['judul'], 'xss')),
			);

			$query_product = $this->podb->insertInto('product_category')->values($product_category);

			$query_product->execute();

			$this->poflash->success('Product Category has been successfully added', 'admin.php?mod=product_category');

		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->headTitle('Tambah Kategori Produk');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=product_category&act=addnew', 'autocomplete' => 'off'));?>

						<div class="row">
							
							<?php
								$noctab = 1;
								$langs = $this->podb->from('language')->where('active', 'Y')->orderBy('id_language ASC')->fetchAll();
							?>

							<div class="col-md-6">

								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Nama Kategori', 'name' => 'judul', 'id' => 'judul', 'mandatory' => true, 'options' => 'required', 'help' => '<small>&nbsp;</small>'));?>

							</div>

						</div>

						<div class="row">

							<div class="col-md-12">

								<?=$this->pohtml->formAction();?>

							</div>

						</div>

					<?=$this->pohtml->formEnd();?>

				</div>

			</div>

		</div>

		<?php

	}



	/**

	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman edit product.

	 *

	 * This function is used to display and process edit product.

	 *

	*/

	public function edit()

	{

		if (!$this->auth($_SESSION['leveluser'], 'product_category', 'update')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$product_category = array(

				'judul' => $this->postring->valid($_POST['judul'], 'xss'),
				'link' 	=> $this->postring->seo_title($this->postring->valid($_POST['judul'], 'xss')),
			);

			$query_product = $this->podb->update('product_category')

				->set($product_category)

				->where('id_product_category', $this->postring->valid($_POST['id'], 'sql'));

			$query_product->execute();

			$this->poflash->success('Product Category has been successfully updated', 'admin.php?mod=product_category');

		}

		$id = $this->postring->valid($_GET['id'], 'sql');

		$current_product = $this->podb->from('product_category')

			->where('id_product_category', $id)

			->limit(1)

			->fetch();

		if (empty($current_product)) {

			echo $this->pohtml->error();

			exit;

		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->headTitle('Update Product Category');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=product_category&act=edit', 'autocomplete' => 'off'));?>

						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_product['id_product_category']));?>

						<div class="row">

							<div class="col-md-6">

								<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Nama Kategori', 'name' => 'judul', 'id' => 'judul', 'value' => $current_product['judul'], 'mandatory' => true, 'options' => 'required', 'help' => '<small>&nbsp;</small>'));?>

							</div>

						</div>

						<div class="row">

							<div class="col-md-12">

								<?=$this->pohtml->formAction();?>

							</div>

						</div>

					<?=$this->pohtml->formEnd();?>

				</div>

			</div>

		</div>

		<?php

	}



	/**

	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus product.

	 *

	 * This function is used to display and process delete product page.

	 *

	*/

	public function delete()

	{

		if (!$this->auth($_SESSION['leveluser'], 'product_category', 'delete')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$query = $this->podb->deleteFrom('product_category')->where('id_product_category', $this->postring->valid($_POST['id'], 'sql'));

			$query->execute();

			$this->poflash->success('Product Category has been successfully deleted', 'admin.php?mod=product_category');

		}

	}



	/**

	 * Fungsi ini digunakan untuk menampilkan dan memproses halaman hapus multi product.

	 *

	 * This function is used to display and process multi delete product page.

	 *

	*/

	public function multidelete()

	{

		if (!$this->auth($_SESSION['leveluser'], 'product_category', 'delete')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');

			if ($totaldata != "0") {

				$items = $_POST['item'];

				foreach($items as $item){

					$query = $this->podb->deleteFrom('product_category')->where('id_product_category', $this->postring->valid($item['deldata'], 'sql'));

					$query->execute();

				}

				$this->poflash->success('Product Category has been successfully deleted', 'admin.php?mod=product_category');

			} else {

				$this->poflash->error('Error deleted product category data', 'admin.php?mod=product_category');

			}

		}

	}



}