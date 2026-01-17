<?php
/*
 *
 * - PopojiCMS Front End File
 *
 * - File : video.php
 * - Version : 1.0
 * - Author : Jenuar Dalapang
 * - License : MIT License
 *
 *
 * Ini adalah file php yang di gunakan untuk menangani proses di bagian depan untuk halaman video.
 * This is a php file for handling front end process for video page.
 *
*/

/**
 * Router untuk menampilkan request halaman video.
 *
 * Router for display request in video page.
*/

$router->match('GET|POST', '/product/([a-z0-9_-]+)', function($alb) use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);

	$kategori = $core->podb->from('product_category')
		->where('link', $core->postring->valid($alb, 'xss'))
		->limit(1)
		->fetch();
	if ($kategori) {
		$info = array(
			'page_title' => 'Product '.$kategori['judul'],
			'kategori' => $kategori['link'],
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'Product '.$kategori['judul'],
			'social_name' => $core->posetting[0]['value'],
			'social_url' => $core->posetting[1]['value'].'/product/'.$kategori['link'],
			'social_title' => $core->posetting[0]['value'],
			'social_desc' => $core->posetting[2]['value'],
			'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
			'page' => '1'
		);
		$adddata = array_merge($info, $lang);
		$templates->addData(
			$adddata
		);
		echo $templates->render('listProduct', compact('lang'));
	} else {
		$info = array(
			'page_title' => '',
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'Product '.$kategori['judul'],
			'social_name' => $core->posetting[0]['value'],
			'social_url' => $core->posetting[1]['value'],
			'social_title' => $core->posetting[0]['value'],
			'social_desc' => $core->posetting[2]['value'],
			'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png'
		);
		$adddata = array_merge($info, $lang);
		$templates->addData(
			$adddata
		);
		echo $templates->render('404', compact('lang'));
	}
});


$router->match('GET|POST', '/detailProduct/([a-z0-9_-]+)', function($alb) use ($core, $templates) {
	$lang = $core->setlang('home', WEB_LANG);

	$product = $core->podb->from('product')
		->where('id_product', $core->postring->valid($alb, 'xss'))
		->limit(1)
		->fetch();
	if ($product) {
		$info = array(
			'page_title' => $product['title'],
			'product' => $product['id_product'],
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => 'Product '.$product['title'],
			'social_name' => $core->posetting[0]['value'],
			'social_url' => $core->posetting[1]['value'].'/detailProduct/'.$product['id_product'],
			'social_title' => $core->posetting[0]['value'],
			'social_desc' => $core->posetting[2]['value'],
			'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
			'page' => '1'
		);
		$adddata = array_merge($info, $lang);
		$templates->addData(
			$adddata
		);
		echo $templates->render('detailProduct', compact('lang'));
	} else {
		$info = array(
			'page_title' => '',
			'page_desc' => $core->posetting[2]['value'],
			'page_key' => $core->posetting[3]['value'],
			'social_mod' => $product['title'],
			'social_name' => $core->posetting[0]['value'],
			'social_url' => $core->posetting[1]['value'],
			'social_title' => $core->posetting[0]['value'],
			'social_desc' => $core->posetting[2]['value'],
			'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png'
		);
		$adddata = array_merge($info, $lang);
		$templates->addData(
			$adddata
		);
		echo $templates->render('404', compact('lang'));
	}
});