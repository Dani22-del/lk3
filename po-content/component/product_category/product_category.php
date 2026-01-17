<?php

$router->match('GET|POST', '/product', function() use ($core, $templates) {
    $lang = $core->setlang('home', WEB_LANG);
    $info = array(
        'page_title' => 'Product',
        'page_desc' => $core->posetting[2]['value'],
        'page_key' => $core->posetting[3]['value'],
        'social_mod' => 'Product',
        'social_name' => $core->posetting[0]['value'],
        'social_url' => $core->posetting[1]['value'].'/product',
        'social_title' => $core->posetting[0]['value'],
        'social_desc' => $core->posetting[2]['value'],
        'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
        'page' => '1'
    );
    $adddata = array_merge($info, $lang);
    $templates->addData(
        $adddata
    );
    echo $templates->render('product', compact('lang'));
});

/**
 * Router untuk menampilkan request halaman video dengan nomor halaman.
 *
 * Router for display request in video page with pagination.
 *
 * $page = integer
*/
$router->match('GET|POST', '/product/page/(\d+)', function($page) use ($core, $templates) {
    $lang = $core->setlang('home', WEB_LANG);
    $info = array(
        'page_title' => 'Product',
        'page_desc' => $core->posetting[2]['value'],
        'page_key' => $core->posetting[3]['value'],
        'social_mod' => 'Product',
        'social_name' => $core->posetting[0]['value'],
        'social_url' => $core->posetting[1]['value'].'/product',
        'social_title' => $core->posetting[0]['value'],
        'social_desc' => $core->posetting[2]['value'],
        'social_img' => $core->posetting[1]['value'].'/'.DIR_INC.'/images/favicon.png',
        'page' => $page
    );
    $adddata = array_merge($info, $lang);
    $templates->addData(
        $adddata
    );
    echo $templates->render('product', compact('lang'));
});