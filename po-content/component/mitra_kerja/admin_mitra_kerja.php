<?php


if (!defined('CONF_STRUCTURE')) {
	header('location:index.html');
	exit;
}


if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser']) AND $_SESSION['login'] == 0) {
	header('location:index.php');
	exit;
}


class Mitra_kerja extends PoCore

{

	function __construct()
	{
		parent::__construct();
	}

	public function index()

	{

		if (!$this->auth($_SESSION['leveluser'], 'mitra_kerja', 'read')) {
			echo $this->pohtml->error();
			exit;
		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->headTitle('Mitra Kerja', '

						<div class="btn-title pull-right">

							<a href="admin.php?mod=mitra_kerja&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>

						</div>

					');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(
                        array(
                            'method' => 'post', 
                            'action' => 'route.php?mod=mitra_kerja&act=multidelete', 
                            'autocomplete' => 'off')
                        );?>

						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>

						<?php

							$columns = array(

								array('title' => 'Id', 'options' => 'style="width:30px;"'),

								array('title' => 'Gambar', 'options' => ''),

								array('title' => 'Tindakan', 'options' => 'class="no-sort" style="width:50px;"')

							);

						?>

						<?=$this->pohtml->createTable(array('id' => 'table-mitrakerja', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>

					<?=$this->pohtml->formEnd();?>

				</div>

			</div>

		</div>

		<?=$this->pohtml->dialogDelete('mitra_kerja');?>

		<?php

	}


	public function datatable()

	{

		if (!$this->auth($_SESSION['leveluser'], 'mitra_kerja', 'read')) {

			echo $this->pohtml->error();

			exit;

		}

		$table = 'mitra_kerja';

		$primarykey = 'id_mitra_kerja';

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

			array('db' => 'gambar', 'dt' => '2', 'field' => 'gambar'),

			array('db' => $primarykey, 'dt' => '3', 'field' => $primarykey,

				'formatter' => function($d, $row, $i){

					return "<div class='text-center'>\n

						<div class='btn-group btn-group-xs'>\n

							<a href='admin.php?mod=mitra_kerja&act=edit&id=".$row['id_mitra_kerja']."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>\n

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

		if (!$this->auth($_SESSION['leveluser'], 'mitra_kerja', 'create')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$mitra_kerja = array(

				'gambar' 	=> $_POST['gambar'],

			);


			$query_mitra_kerja = $this->podb->insertInto('mitra_kerja')->values($mitra_kerja);
			$query_mitra_kerja->execute();

			$this->poflash->success('mitra kerja has been successfully added', 'admin.php?mod=mitra_kerja');

		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->headTitle('Tambah Mitra Kerja');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=mitra_kerja&act=addnew', 'autocomplete' => 'off'));?>

						<div class="row">

							<div class="col-md-6">

								<div class="row">
									<div class="col-md-12">
										<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Gambar', 'name' => 'gambar', 'id' => 'gambar'), $inputgroup = true, $inputgroupopt = array('href' => '../'.DIR_INC.'/js/filemanager/dialog.php?type=1&field_id=gambar', 'id' => 'browse-file', 'class' => 'btn-success', 'options' => '', 'title' => $GLOBALS['_']['action_7'].' '.$GLOBALS['_']['post_picture']));?>
									</div>
								</div>

							</div>

							<div class="col-md-6">

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

		if (!$this->auth($_SESSION['leveluser'], 'mitra_kerja', 'update')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$mitra_kerja = array(
				
				'gambar' 	=> $_POST['gambar'],

			);

			$query_mitra_kerja = $this->podb->update('mitra_kerja')
										->set($mitra_kerja)
										->where('id_mitra_kerja', $this->postring->valid($_POST['id'], 'sql'));

			$query_mitra_kerja->execute();

			$this->poflash->success('mitra kerja has been successfully updated', 'admin.php?mod=mitra_kerja');

		}

		$id = $this->postring->valid($_GET['id'], 'sql');

		$current_mitra_kerja = $this->podb->from('mitra_kerja')
									->where('id_mitra_kerja', $id)
									->limit(1)
									->fetch();

		if (empty($current_mitra_kerja)) {

			echo $this->pohtml->error();

			exit;

		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->headTitle('Update Mitra Kerja');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=mitra_kerja&act=edit', 'autocomplete' => 'off'));?>

						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_mitra_kerja['id_mitra_kerja']));?>

						<div class="row">

							<div class="col-md-6">

								<div class="row">
									<div class="col-md-12">
										<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Gambar', 'name' => 'gambar', 'id' => 'gambar', 'value'=> $current_mitra_kerja['gambar']), $inputgroup = true, $inputgroupopt = array('href' => '../'.DIR_INC.'/js/filemanager/dialog.php?type=1&field_id=gambar', 'id' => 'browse-file', 'class' => 'btn-success', 'options' => '', 'title' => $GLOBALS['_']['action_7'].' '.$GLOBALS['_']['post_picture']));?>
									</div>
								</div>

							</div>

							<div class="col-md-6">
								

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

		if (!$this->auth($_SESSION['leveluser'], 'mitra_kerja', 'delete')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$query = $this->podb->deleteFrom('mitra_kerja')->where('id_mitra_kerja', $this->postring->valid($_POST['id'], 'sql'));

			$query->execute();

			$this->poflash->success('mitra kerja has been successfully deleted', 'admin.php?mod=mitra_kerja');

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

		if (!$this->auth($_SESSION['leveluser'], 'mitra_kerja', 'delete')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');

			if ($totaldata != "0") {

				$items = $_POST['item'];

				foreach($items as $item){

					$query = $this->podb->deleteFrom('mitra_kerja')->where('id_mitra_kerja', $this->postring->valid($item['deldata'], 'sql'));

					$query->execute();

				}

				$this->poflash->success('mitra kerja has been successfully deleted', 'admin.php?mod=mitra_kerja');

			} else {

				$this->poflash->error('Error deleted mitra kerja data', 'admin.php?mod=mitra_kerja');

			}

		}

	}

}