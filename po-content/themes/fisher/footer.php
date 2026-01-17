<?php 
      $mitra_pelanggan = $this->pocore()->call->podb->from('mitra_pelanggan')->orderBy('id_mitra_pelanggan')->fetchAll();
      $mitra_kerja = $this->pocore()->call->podb->from('mitra_kerja')->orderBy('id_mitra_kerja')->fetchAll();
      $running_text = $this->pocore()->call->podb->from('running_text')->orderBy('id_running_text')->fetchAll();
      
?>

<section id="clients" style="padding: 20px 0;">

    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <h2 style="padding: 20px 0;" class="subtitle text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Mitra Kerja</h2>          

          <div id="clients-logo" class="owl-carousel">

            <?php foreach($mitra_kerja as $mk) { ?>
               <div class="mitra"><img style="height: 100%; width: 100px;" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$mk['gambar'];?>" alt=""></div>
            <?php } ?>

            <!-- <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/mitra-1.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/mitra-0.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/mitra-2.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/mitra-3.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/mitra-4.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/mitra-5.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/mitra-6.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/1.png')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/2.png')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/3.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/4.png')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/5.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/6.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/7.png')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/8.png')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/9.png')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/10.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/11.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/12.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/13.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/14.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/15.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/16.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/17.png')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/18.png')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/19.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/20.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/21.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/22.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/23.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/24.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/25.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px; padding-top: 30px;" src="<?=$this->asset('/images/mitra/26.jpg')?>" alt=""></div>

            <div class="mitra"><img style="height: 100%; width: 120px;" src="<?=$this->asset('/images/mitra/27.jpg')?>" alt=""></div> -->

          </div>

        </div>

      </div>

    </div>

</section>

<section id="pelanggan" style="padding: 20px 0;">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
            
            <h2 style="padding: 20px 0;" class="subtitle text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Mitra Pelanggan</h2>

             <div class="carousel carousel-showmanymoveone slide" id="carousel-tilenav" data-interval="false">
                <div class="carousel-inner">

                  <?php foreach($mitra_pelanggan as $pel) { ?>
                   <div class="item active">
                      <div class="col-xs-3 col-sm-2 col-md-1">
                         <img style="padding: 10px; height: 100%; width: 80px;" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$pel['gambar'];?>" alt="">
                      </div>
                   </div>
                  <?php } ?>

                </div>
                <!-- <a class="left carousel-control" href="#carousel-tilenav" data-slide="prev"><i style="color: #6129C7;" class="glyphicon glyphicon-chevron-left"></i></a> -->
                <!-- <a class="right carousel-control" href="#carousel-tilenav" data-slide="next"><i style="color: #6129C7;" class="glyphicon glyphicon-chevron-right"></i></a> -->
             </div>
          </div>
       </div>
    </div>
</section>

<section id="running-text" style="margin: 20px 0;">
   <div class="content">
      <div class="simple-marquee-container">
         <div class="marquee-sibling" style="background-image: linear-gradient(to bottom left, yellow, green);"><i class="glyphicon glyphicon-chevron-right"></i></div>
         <div class="marquee">
            <ul class="marquee-content-items">
               <?php foreach ($running_text as $value) { ?>
               <li><?=$value['title']?></li>
               <?php } ?>
            </ul>
         </div>
      </div>
   </div>
</section>

<footer id="footer" style="background-color: #013880;">

  <div class="container">

    <div class="col-md-8">

      <p style="color: white;" class="copyright">Copyright <span><?=date('Y');?></span>. All Rights Reserved <a href="http://natusi.co.id/">CV. Natusi</a> <?php //$this->pocore()->call->posetting[0]['value'];?></p>

    </div>

    <div class="col-md-4">

      <ul class="social">

        <li><a href="https://www.facebook.com/perusahaan.eleska.7" class="Facebook"><i class="ion-social-facebook"></i></a></li>

        <li><a href="https://twitter.com/EleskaPt" class="Twitter"><i class="ion-social-twitter"></i></a></li>
        
        <li><a href="https://www.instagram.com/eleska.official" class="Instagram"><i class="ion-social-instagram"></i></a></li>
        
        <li><a href="mailto: lk3training@gmail.com" class="Email"><i class="ion-email"></i></a></li>

      </ul>

    </div>

  </div>


</footer>

<script type="text/javascript">
    // (function(){
    //   $('.carousel-showmanymoveone .item').each(function(){
    //     var itemToClone = $(this);

    //     for (var i=1;i<6;i++) {
    //       itemToClone = itemToClone.next();

    //       // wrap around if at end of item collection
    //       if (!itemToClone.length) {
    //         itemToClone = $(this).siblings(':first');
    //       }

    //       // grab item, clone, add marker class, add to collection
    //       itemToClone.children(':first-child').clone()
    //         .addClass("cloneditem-"+(i))
    //         .appendTo($(this));
    //     }
    //   });
    // }());

   $(function (){

      $('.simple-marquee-container').SimpleMarquee();
      
   });
</script>