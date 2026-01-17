<?php


if (!defined('CONF_STRUCTURE')) {
	header('location:index.html');
	exit;
}


if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser']) AND $_SESSION['login'] == 0) {
	header('location:index.php');
	exit;
}


class Pendaftaran extends PoCore

{

	function __construct()
	{
		parent::__construct();
	}

	public function index()

	{

		if (!$this->auth($_SESSION['leveluser'], 'pendaftaran', 'read')) {
			echo $this->pohtml->error();
			exit;
		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<!-- tombol daftar-->

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->formStart(
                        array(
                            'method' => 'post', 
                            'action' => 'route.php?mod=pendaftaran&act=multidelete', 
                            'autocomplete' => 'off')
                        );?>

						<?=$this->pohtml->inputHidden(array('name' => 'totaldata', 'value' => '0', 'options' => 'id="totaldata"'));?>

						<?php

							$columns = array(

								array('title' => 'Id', 'options' => 'style="width:30px;"'),

								array('title' => 'Nama', 'options' => ''),

								array('title' => 'Nama Perusahaan', 'options' => ''),

								array('title' => 'Jenis', 'options' => ''),

								// array('title' => 'Pilihan Training', 'options' => ''),

								// array('title' => 'Jumlah Peserta', 'options' => ''),

								array('title' => 'Email', 'options' => ''),

								array('title' => 'No. HP', 'options' => ''),

								array('title' => 'Tindakan', 'options' => 'class="no-sort" style="width:50px;"')

							);

						?>

						<?=$this->pohtml->createTable(array('id' => 'table-pendaftaran', 'class' => 'table table-striped table-bordered'), $columns, $tfoot = true);?>

					<?=$this->pohtml->formEnd();?>

				</div>

			</div>

		</div>

		<?=$this->pohtml->dialogDelete('pendaftaran');?>

		<?php

	}


	public function datatable()

	{

		if (!$this->auth($_SESSION['leveluser'], 'pendaftaran', 'read')) {

			echo $this->pohtml->error();

			exit;

		}

		$table = 'pendaftaran';

		$primarykey = 'id_pendaftaran';

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

			array('db' => 'nama', 'dt' => '2', 'field' => 'nama'),

			array('db' => 'nama_perusahaan', 'dt' => '3', 'field' => 'nama_perusahaan'),

			array('db' => 'jenis', 'dt' => '4', 'field' => 'jenis'),

			// array('db' => 'jenis_training', 'dt' => '5', 'field' => 'jenis_training'),

			// array('db' => 'jumlah_peserta', 'dt' => '6 ', 'field' => 'jumlah_peserta'),

			array('db' => 'email', 'dt' => '5', 'field' => 'email'),

			array('db' => 'no_hp', 'dt' => '6', 'field' => 'no_hp'),

			array('db' => $primarykey, 'dt' => '7', 'field' => $primarykey,

				'formatter' => function($d, $row, $i){

					return "<div class='text-center'>\n

						<div class='btn-group btn-group-xs'>\n

							<a href='admin.php?mod=pendaftaran&act=detail&id=".$row['id_pendaftaran']."' class='btn btn-xs btn-default' id='".$d."' data-toggle='tooltip' title='Detail'><i class='fa fa-eye'></i></a>\n

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


	public function detail()

	{

		if (!$this->auth($_SESSION['leveluser'], 'pendaftaran', 'read')) {

			echo $this->pohtml->error();

			exit;

		}

		$id = $this->postring->valid($_GET['id'], 'sql');

		$current_pendaftaran = $this->podb->from('pendaftaran')
									->where('id_pendaftaran', $id)
									->limit(1)
									->fetch();

		if (empty($current_pendaftaran)) {

			echo $this->pohtml->error();

			exit;

		}

		?>

		<div class="block-content">

			<div class="row">

				<div class="col-md-12">

					<?=$this->pohtml->headTitle('Detail Pendaftaran');?>

				</div>

			</div>

			<div class="row">

				<div class="col-md-12">

						<div class="row">

							<div class="col-md-6">

								<div class="row" style="margin-bottom: 10px;">
									<div class="col-md-4">Nama</div>	
									<div class="col-md-1">:</div>	
									<div class="col-md-7"><b><?=$current_pendaftaran['nama']?></b></div>	
								</div>

								<div class="row" style="margin-bottom: 10px;">
									<div class="col-md-4">Nama Perusahaan</div>	
									<div class="col-md-1">:</div>	
									<div class="col-md-7"><b><?=$current_pendaftaran['nama_perusahaan']?></b></div>	
								</div>

								<div class="row" style="margin-bottom: 10px;">
									<div class="col-md-4">Jenis</div>	
									<div class="col-md-1">:</div>	
									<div class="col-md-7"><b><?=$current_pendaftaran['jenis']?></b></div>	
								</div>

								<div class="row" style="margin-bottom: 10px;">
									<div class="col-md-4">Pilihan Training</div>	
									<div class="col-md-1">:</div>	
									<div class="col-md-7"><b><?=$current_pendaftaran['jenis_training']?></b></div>	
								</div>

							</div>

							<div class="col-md-6">
								<div class="row" style="margin-bottom: 10px;">
									<div class="col-md-4">Jumlah Peserta</div>	
									<div class="col-md-1">:</div>	
									<div class="col-md-7"><b><?=$current_pendaftaran['jumlah_peserta']?></b></div>	
								</div>
								
								<div class="row" style="margin-bottom: 10px;">
									<div class="col-md-4">Email</div>	
									<div class="col-md-1">:</div>	
									<div class="col-md-7"><b><?=$current_pendaftaran['email']?></b></div>	
								</div>

								<div class="row" style="margin-bottom: 10px;">
									<div class="col-md-4">Nomor HP</div>	
									<div class="col-md-1">:</div>	
									<div class="col-md-7"><b><?=$current_pendaftaran['no_hp']?></b></div>	
								</div>

								<div class="row" style="margin-bottom: 10px;">
									<div class="col-md-4">Sertifikat Dikeluarkan Oleh</div>	
									<div class="col-md-1">:</div>	
									<div class="col-md-7"><b><?=$current_pendaftaran['penerbit']?></b></div>	
								</div>


							</div>

						</div>


						<div class="row">

							<div class="col-md-12">
								<a style="margin: 20px 0; float: right;" href="admin.php?mod=pendaftaran" class="btn btn-success btn-sm"> kembali</a>
							</div>

						</div>

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

		if (!$this->auth($_SESSION['leveluser'], 'pendaftaran', 'delete')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$query = $this->podb->deleteFrom('pendaftaran')->where('id_pendaftaran', $this->postring->valid($_POST['id'], 'sql'));

			$query->execute();

			$this->poflash->success('Pendaftaran has been successfully deleted', 'admin.php?mod=pendaftaran');

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

		if (!$this->auth($_SESSION['leveluser'], 'pendaftaran', 'delete')) {

			echo $this->pohtml->error();

			exit;

		}

		if (!empty($_POST)) {

			$totaldata = $this->postring->valid($_POST['totaldata'], 'xss');

			if ($totaldata != "0") {

				$items = $_POST['item'];

				foreach($items as $item){

					$query = $this->podb->deleteFrom('pendaftaran')->where('id_pendaftaran', $this->postring->valid($item['deldata'], 'sql'));

					$query->execute();

				}

				$this->poflash->success('pendaftaran has been successfully deleted', 'admin.php?mod=pendaftaran');

			} else {

				$this->poflash->error('Error deleted pendaftaran data', 'admin.php?mod=pendaftaran');

			}

		}

	}

}