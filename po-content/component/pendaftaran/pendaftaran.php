<?php
/*
 *
 * - PopojiCMS Front End File
 *
 * - File : contact.php
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses di bagian depan untuk halaman kontak.
 * This is a php file for handling front end process for contact page.
 *
*/

/**
 * Router untuk memproses request $_POST[] komentar.
 *
 * Router for process request $_POST[] comment.
 *
*/
$router->match('GET|POST', '/pendaftaran', function() use ($core, $templates) {
	$alertmsg = '';
	$lang = $core->setlang('home', WEB_LANG);

	// var_dump($_POST);

	if (!empty($_POST)) {
		$core->poval->validation_rules(array(
			'nama' 				=> 'required|max_len,100|min_len,3',
			'email' 			=> 'required|valid_email',
			'nama_perusahaan' 	=> 'required|max_len,255|min_len,1',
			'jenis' 			=> 'required|min_len,4',
			'jenis_training' 	=> 'required|min_len,4',
			'penerbit' 			=> 'required|min_len,4',
			'jumlah_peserta' 	=> 'required|min_len,1',
			'no_hp' 			=> 'required|min_len,6',
		));
		$core->poval->filter_rules(array(
			'nama' 				=> 'trim|sanitize_string',
			'email' 			=> 'trim|sanitize_string',
			'nama_perusahaan' 	=> 'trim|sanitize_email',
			'jenis' 			=> 'trim|sanitize_string',
			'jenis_training' 	=> 'trim|sanitize_string',
			'penerbit' 			=> 'trim|sanitize_string',
			'jumlah_peserta' 	=> 'trim|sanitize_string',
			'no_hp' 			=> 'trim|sanitize_string',
		));
		$validated_data = $core->poval->run($_POST);
		if ($validated_data === false) {
			$alertmsg = '<div id="contact-form-result">
				<div class="alert alert-warning" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					'.$lang['front_contact_error'].'
				</div>
			</div>';
		} else {
			$data = array(
				'nama' 				=> $_POST['nama'],
				'email' 			=> $_POST['email'],
				'nama_perusahaan' 	=> $_POST['nama_perusahaan'],
				'jenis' 			=> $_POST['jenis'],
				'jenis_training' 	=> $_POST['jenis_training'],
				'penerbit' 			=> $_POST['penerbit'],
				'jumlah_peserta' 	=> $_POST['jumlah_peserta'],
				'no_hp' 			=> $_POST['no_hp']
			);
			$query = $core->podb->insertInto('pendaftaran')->values($data);
			$query->execute();

			unset($_POST);
			$alertmsg = '<div id="contact-form-result">
				<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					'.$lang['front_contact_success'].'
				</div>
			</div>';
		}
	}
	$info = array(
		'page_title' => 'Formulir Pendaftaran',
		'page_desc' => $core->posetting[2]['value'],
		'page_key' => $core->posetting[3]['value'],
		'social_mod' => 'Formulir Pendaftaran',
		'social_name' => $core->posetting[0]['value'],
		'social_url' => $core->posetting[1]['value'],
		'social_title' => $core->posetting[0]['value'],
		'social_desc' => $core->posetting[2]['value'],
		'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
		'alertmsg' => $alertmsg
	);
	$adddata = array_merge($info, $lang);
	$templates->addData(
		$adddata
	);
	echo $templates->render('pendaftaran', compact('lang'));
});