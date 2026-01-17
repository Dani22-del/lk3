<?=$this->layout('index');?>

	<section class="global-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<h2><?=$this->e($page_title);?></h2>
						<ol class="breadcrumb">
							<li><a href="<?=BASE_URL;?>"><i class="ion-ios-home"></i> <?=$this->e($front_home);?></a></li>
							<li class="active"><?=$this->e($page_title);?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="block">
						<h2 class="subtitle wow fadeInDown text-center" data-wow-duration="500ms" data-wow-delay=".3s">Formulir Pendaftaran</h2>

						<div class="contact-form">
                          <?=htmlspecialchars_decode($this->e($alertmsg));?>
                          <form id="contact-form" method="post" action="<?=BASE_URL;?>/pendaftaran" role="form">    

                              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                  <input type="text" placeholder="Nama Pendaftar" class="form-control" name="nama" id="nama">
                              </div>

                              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                  <input type="email" placeholder="Email" class="form-control" name="email" id="email">
                              </div>
                              
                              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                  <input type="text" placeholder="Nama Perusahaan" class="form-control" name="nama_perusahaan" id="nama_perusahaan">
                              </div>

                              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                 <select class="form-control" name="jenis" id="jenis">
                                 <option selected hidden style="display:none"> -- Jenis -- </option>
                                 	<option value="" disabled=""> -- Jenis --</option>
                                 	<option value="Absensi Online">Absensi Online</option>
                                 	<option value="Sertifikasi">Sertifikasi</option>
                                 	<option value="Training">Training</option>
                                 </select> 
                              </div>
                              <br>

                              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                 <select class="form-control" name="penerbit" id="penerbit">
                                 <option selected hidden style="display:none"> -- Sertifikat Dikeluarkan Oleh -- </option>
                                 	<option value="" disabled=""> -- Sertifikat Dikeluarkan Oleh -- </option>
                                 	<option value="Kementriaan ESDM">Kementriaan ESDM</option>
                                 	<option value="Kementriaan Ketenagakerjaan RI">Kementriaan Ketenagakerjaan RI</option>
                                 	<option value="BNSP">BNSP</option>
                                 	<option value="Kementrian PU">Kementrian PU</option>
                                 	<option value="LPK">LPK</option>
                                 </select> 
                              </div>
                              <br>

                              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                  <input type="text" placeholder="Jenis Training" class="form-control" name="jenis_training" id="jenis_training">
                              </div>

                              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                  <input type="number" placeholder="Jumlah Peserta" class="form-control" name="jumlah_peserta" id="jumlah_peserta">
                              </div>

                              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                  <input type="text" placeholder="Nomor HP" class="form-control" name="no_hp" id="no_hp">
                              </div>

                              <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                  <input style="padding: 0 25px;" type="submit" id="contact-submit" class="btn btn-default btn-send text-center" value="Submit">
                              </div>
                          </form>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>

<script type="text/javascript">
    $("#template-contactform").validate();
    $("#contact-form").validate();
</script>