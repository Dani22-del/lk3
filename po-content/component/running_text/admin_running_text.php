<?php


if (!defined('CONF_STRUCTURE')) {
	header('location:index.html');
	exit;
}


if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser']) AND $_SESSION['login'] == 0) {
	header('location:index.php');
	exit;
}


class Running_text extends PoCore

{

	function __construct()
	{
		parent::__construct();
	}

	public function index()

	{

		if (!$this->auth($_SESSION['leveluser'], 'running_text', 'read')) {
			echo $this->pohtml->error();
			exit;
		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->headTitle('Running Text', '

						<div class="btn-title pull-right">

							<a href="admin.php?mod=running_text&act=addnew" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> '.$GLOBALS['_']['addnew'].'</a>

						</div>

					');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(
                        array(
                            'method' => 'post', 
                            'action' => 'route.php?mod=running_text&act=multidelete', 
                            'autocomplete' => 'off')
                        );?>

						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>

						<?php

							$columns = array(

								array('title' => 'Id', 'options' => 'style="width:30px;"'),

								array('title' => 'Title', 'options' => ''),

								array('title' => 'Tindakan', 'options' => 'class="no-sort" style="width:50px;"')

							);

						?>

						<?=$this->pohtml->createTable(array('id' => 'table-runningtext', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>

					<?=$this->pohtml->formEnd();?>

				</div>

			</div>

		</div>

		<?=$this->pohtml->dialogDelete('running_text');?>

		<?php

	}


	public function datatable()

	{

		if (!$this->auth($_SESSION['leveluser'], 'running_text', 'read')) {

			echo $this->pohtml->error();

			exit;

		}

		$table = 'running_text';

		$primarykey = 'id_running_text';

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

			array('db' => 'title', 'dt' => '2', 'field' => 'title'),

			array('db' => $primarykey, 'dt' => '3', 'field' => $primarykey,

				'formatter' => function($d, $row, $i){

					return "<div class='text-center'>\n

						<div class='btn-group btn-group-xs'>\n

							<a href='admin.php?mod=running_text&act=edit&id=".$row['id_running_text']."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='{$GLOBALS['_']['action_1']}'><i class='fa fa-pencil'></i></a>\n

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

		if (!$this->auth($_SESSION['leveluser'], 'running_text', 'create')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$running_text = array(

				'title' 	=> $this->postring->valid($_POST['title'], 'xss'),

			);


			$query_running_text = $this->podb->insertInto('running_text')->values($running_text);
			$query_running_text->execute();

			$this->poflash->success('running text has been successfully added', 'admin.php?mod=running_text');

		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->headTitle('Tambah Running Text');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=running_text&act=addnew', 'autocomplete' => 'off'));?>

						<div class="row">

							<div class="col-md-12">

								<div class="row">
									<div class="col-md-12">

									<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Title', 'name' => 'title', 'id' => 'title', 'mandatory' => true, 'options' => 'required'));?>

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

		if (!$this->auth($_SESSION['leveluser'], 'running_text', 'update')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$running_text = array(
				
				'title' 	=> $this->postring->valid($_POST['title'], 'xss'),

			);

			$query_running_text = $this->podb->update('running_text')
										->set($running_text)
										->where('id_running_text', $this->postring->valid($_POST['id'], 'sql'));

			$query_running_text->execute();

			$this->poflash->success('running text has been successfully updated', 'admin.php?mod=running_text');

		}

		$id = $this->postring->valid($_GET['id'], 'sql');

		$current_running_text = $this->podb->from('running_text')
									->where('id_running_text', $id)
									->limit(1)
									->fetch();

		if (empty($current_running_text)) {

			echo $this->pohtml->error();

			exit;

		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->headTitle('Update Running Text');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(array('method' => 'post', 'action' => 'route.php?mod=running_text&act=edit', 'autocomplete' => 'off'));?>

						<?=$this->pohtml->inputHidden(array('name' => 'id', 'value' => $current_running_text['id_running_text']));?>

						<div class="row">

							<div class="col-md-12">

								<div class="row">
									<div class="col-md-12">

									<?=$this->pohtml->inputText(array('type' => 'text', 'label' => 'Nama', 'name' => 'title', 'id' => 'title', 'mandatory' => true, 'value'=> $current_running_text['title'], 'options' => 'required'));?>

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

		if (!$this->auth($_SESSION['leveluser'], 'running_text', 'delete')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$query = $this->podb->deleteFrom('running_text')->where('id_running_text', $this->postring->valid($_POST['id'], 'sql'));

			$query->execute();

			$this->poflash->success('running text has been successfully deleted', 'admin.php?mod=running_text');

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

		if (!$this->auth($_SESSION['leveluser'], 'running_text', 'delete')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');

			if ($totaldata != "0") {

				$items = $_POST['item'];

				foreach($items as $item){

					$query = $this->podb->deleteFrom('running_text')->where('id_running_text', $this->postring->valid($item['deldata'], 'sql'));

					$query->execute();

				}

				$this->poflash->success('running text has been successfully deleted', 'admin.php?mod=running_text');

			} else {

				$this->poflash->error('Error deleted running text data', 'admin.php?mod=running_text');

			}

		}

	}

}