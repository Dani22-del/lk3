<?php


if (!defined('CONF_STRUCTURE')) {
	header('location:index.html');
	exit;
}


if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser']) AND $_SESSION['login'] == 0) {
	header('location:index.php');
	exit;
}


class Product extends PoCore

{

	function __construct()
	{
		parent::__construct();
	}

	public function index()

	{

		if (!$this->auth($_SESSION['leveluser'], 'product', 'read')) {
			echo $this->pohtml->error();
			exit;
		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->headTitle('Product', '

						<div class="btn-title pull-right">

							<a href="admin.php?mod=product&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>

						</div>

					');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(
                        array(
                            'method' => 'post', 
                            'action' => 'route.php?mod=product&act=multidelete', 
                            'autocomplete' => 'off')
                        );?>

						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>

						<?php

							$columns = array(

								array('title' => 'Id', 'options' => 'style="width:30px;"'),

								array('title' => 'Kategori', 'options' => ''),

								array('title' => 'Judul', 'options' => ''),

								array('title' => 'Tanggal', 'options' => ''),

								array('title' => 'Status', 'options' => 'style="width:50px;"'),

								array('title' => 'Tindakan', 'options' => 'class="no-sort" style="width:50px;"')

							);

						?>

						<?=$this->pohtml->createTable(array('id' => 'table-product', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>

					<?=$this->pohtml->formEnd();?>

				</div>

			</div>

		</div>

		<?=$this->pohtml->dialogDelete('product');?>

		<?php

	}


	public function datatable()

	{

		if (!$this->auth($_SESSION['leveluser'], 'product', 'read')) {

			echo $this->pohtml->error();

			exit;

		}

		$table = 'product';

		$primarykey = 'id_product';

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

			array('db' => 'id_product_category', 'dt' => '2', 'field' => 'id_product_category', 

				'formatter' => function($d, $row, $i){
					$post_cats = $this->podb->from('product_category')
						->where('id_product_category', $d)
						->fetch();

					return $post_cats['judul'];
				}
			),

			array('db' => 'title', 'dt' => '3', 'field' => 'title'),

			array('db' => $primarykey, 'dt' => '4', 'field' => $primarykey ,

				'formatter' => function($d, $row, $i){
					$post = $this->podb->from('product')
						->where('id_product', $d)
						->fetch();

					return date('d M y', strtotime($post['tgl_awal'])).' - '.date('d M y', strtotime($post['tgl_akhir']));
				}
			),

			array('db' => 'headline', 'dt' => '5', 'field' => 'headline',

				'formatter' => function($d, $row, $i){

					return "<div class='text-center'>".$d."</div>\n";

				}

			),

			array('db' => $primarykey, 'dt' => '6', 'field' => $primarykey,

				'formatter' => function($d, $row, $i){

					return "<div class='text-center'>\n

						<div class='btn-group btn-group-xs'>\n

							<a href='admin.php?mod=product&act=edit&id=".$row['id_product']."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>\n

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

		if (!$this->auth($_SESSION['leveluser'], 'product', 'create')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			foreach ($_POST['post'] as $id_language => $value) {
				$deskripsi = stripslashes(htmlspecialchars($value['content'],ENT_QUOTES));
			}

			$product = array(

				'title' 	=> $this->postring->valid($_POST['title'], 'xss'),

				'tgl_awal' 	=> $_POST['tgl_awal'],

				'tgl_akhir' => $_POST['tgl_akhir'],

				'deskripsi' => $deskripsi,

				'gambar' => $_POST['picture'],

				'id_product_category' =>  $_POST['id_kat'],

				'headline' => $this->postring->valid($_POST['status'], 'xss'),

			);


			$query_product = $this->podb->insertInto('product')->values($product);
			$query_product->execute();

			$this->poflash->success('Product has been successfully added', 'admin.php?mod=product');

		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->headTitle('Tambah Produk');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=product&act=addnew', 'autocomplete' => 'off'));?>

						<div class="row">

							<div class="col-md-8" id="left-post">
								<div class="pull-right">
									<a href="javascript:void(0)" class="btn btn-xs btn-default" id="hide-right">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</a>
								</div>
								
								<?php
									$notab = 1;
									$noctab = 1;
									$langs = $this->podb->from('language')->where('active', 'Y')->orderBy('id_language ASC')->fetchAll();
								?>

								<ul class="nav nav-tabs">
									<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Judul', 'name' => 'title', 'id' => 'title', 'mandatory' => true, 'options' => 'required'));?>
								</ul>

								<div class="tab-content">
									<?php foreach($langs as $lang) { ?>
									<div class="tab-pane <?php echo ($noctab == '1' ? 'active' : ''); ?>" id="tab-content-<?=$lang['id_language'];?>">
										<div class="form-group">
											<label>Deskripsi <span class="text-danger">*</span></label>
											<div class="row" style="margin-top:-30px;">
												<div class="col-md-12">
													<div class="pull-right">
														<div class="input-group">
															<span class="btn-group">
																<a class="btn btn-sm btn-default tiny-visual" data-lang="<?=$lang['id_language'];?>">Visual</a>
																<a class="btn btn-sm btn-success tiny-text" data-lang="<?=$lang['id_language'];?>">Text</a>
															</span>
														</div>
													</div>
												</div>
											</div>
											<textarea class="form-control" id="po-wysiwyg-<?=$lang['id_language'];?>" name="post[<?=$lang['id_language'];?>][content]" style="height:600px;"></textarea>
										</div>
									</div>
									<?php $noctab++;} ?>
								</div>
								
							</div>

							<div class="col-md-4" id="right-post">
								
								<div class="row">
									<div class="col-md-12">
									<?php
										$cats = $this->podb->from('product_category')->fetchAll();

										echo $this->pohtml->inputSelectNoOpt(array('id' => 'id_kat', 'label' => 'Kategori', 'name' => 'id_kat', 'mandatory' => true));
									?>
									
									<?php
										foreach($cats as $cat){
											echo $this->generate_select($cat['id_product_category'], $cat['judul']);
										}
											echo $this->pohtml->inputSelectNoOptEnd();
									?>

									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Tanggal Awal', 'name' => 'tgl_awal', 'id' => 'tgl_awal', 'value' => date('Y-m-d'), 'mandatory' => true, 'options' => 'required'));?>
									</div>
									<div class="col-md-6">
										<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Tanggal Berakhir', 'name' => 'tgl_akhir', 'id' => 'tgl_akhir', 'value' => date('Y-m-d'), 'mandatory' => true, 'options' => 'required'));?>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Gambar', 'name' => 'picture', 'id' => 'picture'), $inputgroup = true, $inputgroupopt = array('href' => '../'.DIR_INC.'/js/filemanager/dialog.php?type=1&field_id=picture', 'id' => 'browse-file', 'class' => 'btn-success', 'options' => '', 'title' => $GLOBALS['_']['action_7'].' '.$GLOBALS['_']['post_picture']));?>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<?php
											$radioitem = array(
												array('name' => 'status', 'id' => 'status', 'value' => 'Y', 'options' => 'checked', 'title' => 'Y'),
												array('name' => 'status', 'id' => 'status', 'value' => 'N', 'options' => '', 'title' => 'N')
											);
											echo $this->pohtml->inputRadio(array('label' => 'Status', 'mandatory' => true), $radioitem, $inline = true);
										?>
									</div>
								</div>
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

		if (!$this->auth($_SESSION['leveluser'], 'product', 'update')) {

			echo $this->pohtml->error();

			exit;

		}

		foreach ($_POST['post'] as $id_language => $value) {
			$deskripsi = stripslashes(htmlspecialchars($value['content'],ENT_QUOTES));
		}

		if (!empty($_POST)) {

			$product = array(

				'title' 	=> $this->postring->valid($_POST['title'], 'xss'),

				'tgl_awal' 	=> $_POST['tgl_awal'],

				'tgl_akhir' => $_POST['tgl_akhir'],

				'deskripsi' => $deskripsi,

				'gambar' => $_POST['picture'],

				'id_product_category' =>  $_POST['id_kat'],

				'headline' => $this->postring->valid($_POST['status'], 'xss'),

			);

			$query_product = $this->podb->update('product')
										->set($product)
										->where('id_product', $this->postring->valid($_POST['id'], 'sql'));

			$query_product->execute();

			$this->poflash->success('Product has been successfully updated', 'admin.php?mod=product');

		}

		$id = $this->postring->valid($_GET['id'], 'sql');

		$current_product = $this->podb->from('product')
									->where('id_product', $id)
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

					<?=$this->pohtml->headTitle('Update Product');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=product&act=edit', 'autocomplete' => 'off'));?>

						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_product['id_product']));?>

						<div class="row">

							<div class="col-md-8" id="left-post">
								<div class="pull-right">
									<a href="javascript:void(0)" class="btn btn-xs btn-default" id="hide-right">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</a>
								</div>

								<?php
									$notab = 1;
									$noctab = 1;
									$langs = $this->podb->from('language')->where('active', 'Y')->orderBy('id_language ASC')->fetchAll();
								?>

								<ul class="nav nav-tabs">
									<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Judul', 'name' => 'title', 'id' => 'title', 'value' => $current_product['title'], 'mandatory' => true, 'options' => 'required'));?>
								</ul>

								<div class="tab-content">
									<?php foreach($langs as $lang) { ?>
									<div class="tab-pane <?php echo ($noctab == '1' ? 'active' : ''); ?>" id="tab-content-<?=$lang['id_language'];?>">
										<?php
											$paglang = $this->podb->from('product')
																->where('id_product', $current_product['id_product'])
																->fetch();

												$content_before = html_entity_decode($paglang['deskripsi']);
												$content_after = preg_replace_callback(
													'/(?:\<code*\>([^\<]*)\<\/code\>)/',
													create_function(
													   '$matches',
														'return \'<code>\'.stripslashes(htmlspecialchars($matches[1],ENT_QUOTES)).\'</code>\';'
													),
													$content_before
												);
										?>

										<div class="form-group">
											<label>Deskripsi <span class="text-danger">*</span></label>
											<div class="row" style="margin-top:-30px;">
												<div class="col-md-12">
													<div class="pull-right">
														<div class="input-group">
															<span class="btn-group">
																<a class="btn btn-sm btn-default tiny-visual" data-lang="<?=$lang['id_language'];?>">Visual</a>
																<a class="btn btn-sm btn-success tiny-text" data-lang="<?=$lang['id_language'];?>">Text</a>
															</span>
														</div>
													</div>
												</div>
											</div>
											<textarea class="form-control" id="po-wysiwyg-<?=$lang['id_language'];?>" name="post[<?=$lang['id_language'];?>][content]" style="height:600px;"><?=$content_after;?></textarea>
										</div>
									</div>
									<?php $noctab++;} ?>
								</div>

							</div>

							<div class="col-md-4" id="right-post">

								<div class="row">
									<div class="col-md-12">
										<?php

										$selcats = $this->podb->from('product_category')
													->where('id_product_category', $current_product['id_product_category'])
													->fetch();

										$cats = $this->podb->from('product_category')->fetchAll();

											echo $this->pohtml->inputSelectNoOpt(array('id' => 'id_kat', 'label' => 'Kategori', 'name' => 'id_kat', 'mandatory' => true));
										?>

										<?php if (!empty($selcats)) { ?>
										<option value="<?=$selcats['id_product_category'];?>"><?=$selcats['judul'];?></option>
										<?php } ?>
										<?php
											foreach($cats as $cat){
												echo $this->generate_select($cat['id_product_category'], $cat['judul']);
											}
												echo $this->pohtml->inputSelectNoOptEnd();
										?>

									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Tanggal Awal', 'name' => 'tgl_awal', 'id' => 'tgl_awal', 'value' => $current_product['tgl_awal'], 'mandatory' => true, 'options' => 'required'));?>
									</div>
									<div class="col-md-6">
										<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Tanggal Berakhir', 'name' => 'tgl_akhir', 'id' => 'tgl_akhir', 'value' => $current_product['tgl_akhir'], 'mandatory' => true, 'options' => 'required'));?>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Gambar', 'name' => 'picture', 'id' => 'picture', 'value' => $current_product['gambar']), $inputgroup = true, $inputgroupopt = array('href' => '../'.DIR_INC.'/js/filemanager/dialog.php?type=1&field_id=picture', 'id' => 'browse-file', 'class' => 'btn-success', 'options' => '', 'title' => $GLOBALS['_']['action_7'].' '.$GLOBALS['_']['post_picture']));?>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">

										<?php

											if ($current_product['headline'] == 'N') {

												$radioitem = array(

													array('name' => 'status', 'id' => 'headline1', 'value' => 'Y', 'options' => '', 'title' => 'Y'),

													array('name' => 'status', 'id' => 'headline2', 'value' => 'N', 'options' => 'checked', 'title' => 'N')

												);

												echo $this->pohtml->inputRadio(array('label' => 'Headline', 'mandatory' => true), $radioitem, $inline = true);

											} else {

												$radioitem = array(

													array('name' => 'status', 'id' => 'headline1', 'value' => 'Y', 'options' => 'checked', 'title' => 'Y'),

													array('name' => 'status', 'id' => 'headline2', 'value' => 'N', 'options' => '', 'title' => 'N')

												);

												echo $this->pohtml->inputRadio(array('label' => 'Headline', 'mandatory' => true), $radioitem, $inline = true);

											}
										?>
									</div>
								</div>

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

		if (!$this->auth($_SESSION['leveluser'], 'product', 'delete')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$query = $this->podb->deleteFrom('product')->where('id_product', $this->postring->valid($_POST['id'], 'sql'));

			$query->execute();

			$this->poflash->success('Product has been successfully deleted', 'admin.php?mod=product');

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

		if (!$this->auth($_SESSION['leveluser'], 'product', 'delete')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');

			if ($totaldata != "0") {

				$items = $_POST['item'];

				foreach($items as $item){

					$query = $this->podb->deleteFrom('product')->where('id_product', $this->postring->valid($item['deldata'], 'sql'));

					$query->execute();

				}

				$this->poflash->success('Product has been successfully deleted', 'admin.php?mod=product');

			} else {

				$this->poflash->error('Error deleted product data', 'admin.php?mod=product');

			}

		}

	}

	public function generate_select($id, $label)
	{
		$html = "<option value=\"{$id}\" style=\"font-weight:bold;\">{$label}</option>";
		$html .= $this->generate_option($id, $label, "20px");
		return ($html);
	}

	public function generate_option($id, $label, $exp)
	{
		$html = "";
		$catfuns = $this->podb->from('product_category')
			->orderBy('id_product_category ASC')
			->fetchAll();

		return ($html);
	}



}