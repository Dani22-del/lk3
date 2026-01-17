<style type="text/css">
    .wa-1{
        background: #414141; border: none; color: #fff; padding: 15px 35px; margin-top: 30px; text-decoration: none; font-size: 16px; font-weight: bold; line-height: 1em; text-transform: uppercase; letter-spacing: normal; border-radius: 0;}
    .wa-2{
        background: #9D973E; border: none; color: #fff; padding: 15px 35px; margin-top: 30px; text-decoration: none; font-size: 16px; font-weight: bold; line-height: 1em; text-transform: uppercase; letter-spacing: normal; border-radius: 0;}
  span.wa a:hover{
    color: white;
    background-color: grey;
  }
</style>

<?=$this->layout('index');?>

     <?php

        $product = $this->pocore()->call->podb->from('product')
                                ->where('id_product', $this->e($product))
                                ->fetch();
    ?>

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
                        
                        <div class="portfolio-meta">
                            <span>
                                Tanggal Traning : 
                                <?=$this->pocore()->call->podatetime->tgl_indo($product['tgl_awal']);?> - 
                                <?=$this->pocore()->call->podatetime->tgl_indo($product['tgl_akhir']);?>
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section id="blog-full-width">

        <div class="container">

            <div class="row">

                <div class="col-md-10 col-md-offset-1">
                    <div class="post-img" style="margin: 30px 0;">
                        <img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$product['gambar'];?>" style="margin:0 auto;">
                    </div>

                    <p>
                        <?=htmlspecialchars_decode(html_entity_decode($product['deskripsi']));?>
                    </p> 

                     <?php
                        $wa1 = $this->pocore()->call->podb->from('setting')->where('options', 'whatsapp_1')->fetch();
                        $wa2 = $this->pocore()->call->podb->from('setting')->where('options', 'whatsapp_2')->fetch();

                        if (!empty($wa1)) {
                            $whatsapp1 = (int)$wa1['value'];
                        }

                        if (!empty($wa2)) {
                            $whatsapp2 = (int)$wa2['value'];
                        }

                        $judul = "Jenis Training : ".$product['title'];
                        $tgl = "Tanggal : ".$this->pocore()->call->podatetime->tgl_indo($product['tgl_awal']).' - '.$this->pocore()->call->podatetime->tgl_indo($product['tgl_akhir']);

                        $pesan = str_replace(" ", "%20", "*Lembar Konfirmasi Dan Biodata Peserta*")."%0A%0A";
                        $pesan .= str_replace(" ", "%20", "Nama Pendaftar :")."%0A";
                        $pesan .= str_replace(" ", "%20", "Nama Perusahaan :")."%0A";
                        $pesan .= str_replace(" ", "%20", $judul)."%0A";
                        $pesan .= str_replace(" ", "%20", "Jumlah Peserta yang akan diikutkan :")."%0A";
                        $pesan .= str_replace(" ", "%20", "Email :")."%0A";
                        $pesan .= str_replace(" ", "%20", "No. HP :")."%0A";
                        $pesan .= str_replace(" ", "%20", $tgl)."%0A";
                     ?>

                    <p class="text-center" style="margin: 40px 0;">
                       <span class="wa"><a href="https://api.whatsapp.com/send?phone=62<?=$whatsapp1?>&text=<?=$pesan?>" class="wa-1" style="margin: 5px;"><i class="fa fa-whatsapp" aria-hidden="true"></i> Via LK3</a></span>

                       <span class="wa"> <a href="https://api.whatsapp.com/send?phone=62<?=$whatsapp2?>&text=<?=$pesan?>" class="wa-2" style="margin: 5px;"><i class="fa fa-whatsapp" aria-hidden="true"></i> Via Eleska</a></span>
                    </p>
                   
                </div>

                <!-- end col 12 -->

            </div>

        </div>

    </section>