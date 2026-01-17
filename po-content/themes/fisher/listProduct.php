<style type="text/css">
    .wa-1{
        background: #414141; border: none; text-decoration: none; color: #fff; padding: 5px 25px; margin-top: 30px; font-weight: bold; font-size: 13px; line-height: 1em; text-transform: uppercase; letter-spacing: normal; border-radius: 0;}
    .wa-2{
        background: #9D973E; border: none; text-decoration: none; color: #fff; padding: 5px 25px; margin-top: 30px; font-weight: bold; font-size: 13px; line-height: 1em; text-transform: uppercase; letter-spacing: normal; border-radius: 0;}
	td.wa a:hover {
      color: white;
      background-color: grey;
    } 		
  
</style>

<?=$this->layout('index');?>

    <section class="global-page-header" style="background-image: linear-gradient(to bottom left, yellow, green);">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="block">

                        <h2><?=$this->e($page_title);?></h2>

                        <ol class="breadcrumb">

                            <li><a href="<?=BASE_URL;?>"><i class="ion-ios-home"></i> <?=$this->e($front_home);?></a></li>

                            <li><a href="<?=BASE_URL;?>/category/all"><?=$this->e($front_category);?></a></li>

                            <li class="active"><a href="<?=$this->e($social_url);?>"><?=$this->e($page_title);?></a></li>

                        </ol>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section id="blog-full-width">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <?php

                        $categorys = $this->pocore()->call->podb->from('product_category')
                                                ->where('link', $this->e($kategori))
                                                ->limit(1)
                                                ->fetch();

                        $wa1 = $this->pocore()->call->podb->from('setting')->where('options', 'whatsapp_1')->fetch();
                        $wa2 = $this->pocore()->call->podb->from('setting')->where('options', 'whatsapp_2')->fetch();

                        if (!empty($wa1)) {
                            $whatsapp1 = (int)$wa1['value'];
                        }

                        if (!empty($wa2)) {
                            $whatsapp2 = (int)$wa2['value'];
                        }

                        if (!empty($categorys)) {
                            $idKategori = $categorys['id_product_category'];
                        }                     

                    ?>

                    <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">

                        <div class="blog-content">
                        
                        <table class="table table-responsive table-inverse">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Check Out/ Daftar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                    $no = 1; 

                                    $produk = $this->pocore()->call->podb->from('product')
                                                        ->where('id_product_category', $idKategori)
                                                        ->fetchAll();
                                                            
                                if (!empty($produk)) {


                                        foreach($produk as $post){
                                    ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td>
                                            <a href="<?=BASE_URL.'/detailProduct/'.$post['id_product'];?>"><b><?=$post['title'];?></b></a>
                                        </td>
                                        <td class="text-center">
                                            <?=$this->pocore()->call->podatetime->tgl_indo($post['tgl_awal']);?> - 
                                            <?=$this->pocore()->call->podatetime->tgl_indo($post['tgl_akhir']);?>
                                        </td>
                                        <td class="text-center wa">
                                            <?php 

                                                $judul = "Jenis Training : ".$post['title'];
                                                $tgl = "Tanggal : ".$this->pocore()->call->podatetime->tgl_indo($post['tgl_awal']).' - '.$this->pocore()->call->podatetime->tgl_indo($post['tgl_akhir']);

                                                $pesan = str_replace(" ", "%20", "*Lembar Konfirmasi Dan Biodata Peserta*")."%0A%0A";
                                                $pesan .= str_replace(" ", "%20", "Nama Pendaftar :")."%0A";
                                                $pesan .= str_replace(" ", "%20", "Nama Perusahaan :")."%0A";
                                                $pesan .= str_replace(" ", "%20", $judul)."%0A";
                                                $pesan .= str_replace(" ", "%20", "Jumlah Peserta yang akan diikutkan :")."%0A";
                                                $pesan .= str_replace(" ", "%20", "Email :")."%0A";
                                                $pesan .= str_replace(" ", "%20", "No. HP :")."%0A";
                                                $pesan .= str_replace(" ", "%20", $tgl)."%0A";
                                             ?>

                                            <a href="https://api.whatsapp.com/send?phone=62<?=$whatsapp1?>&text=<?=$pesan?>" class="wa-1 btn" style="margin: 5px;"><i class="fa fa-whatsapp" aria-hidden="true"></i> Via LK3</a>

                                            <a href="https://api.whatsapp.com/send?phone=62<?=$whatsapp2?>&text=<?=$pesan?>" class="wa-2 btn" style="margin: 5px;"><i class="fa fa-whatsapp" aria-hidden="true"></i> Via Eleska</a>

                                        </td>
                                    </tr>
                                    <?php } ?>

                                <?php } else { ?>
                                    <tr>
                                        <td colspan="4" align="center" style="background-color: #F5DDDD;">.:: Data Tidak Ditemukan ::. </td>                                        
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                           <!--  <h2 class="blogpost-title"><a href="<?=BASE_URL;?>/detailpost/<?=$post['id_product'];?>"><?=$post['title'];?></a></h2>


                            <a href="<?=BASE_URL;?>/detailpost/<?=$post['id_product'];?>" class="btn btn-dafault btn-details"><?=$this->e($front_readmore);?></a> -->

                        </div>

                    </article>


                   <!--  <div class="row">

                        <div class="col-md-12 text-center" style="margin-top:30px;">

                            <ul class="pagination">

                                <?=$this->post()->getCategoryPaging('3', $category, $this->e($page), '1', $this->e($front_paging_prev), $this->e($front_paging_next));?>

                            </ul>

                        </div>

                    </div> -->

                </div>

                <!-- end col 12 -->

            </div>

        </div>

    </section>