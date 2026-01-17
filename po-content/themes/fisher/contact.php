<?=$this->layout('index');?>

	<section class="global-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block">
						<h2><?=$this->e($front_contact);?></h2>
						<ol class="breadcrumb">
							<li><a href="<?=BASE_URL;?>"><i class="ion-ios-home"></i> <?=$this->e($front_home);?></a></li>
							<li class="active"><?=$this->e($front_contact);?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6" style="display: none;">
					<div class="block">
						<h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Kontak Kami</h2>
						<div class="contact-form">
                          <?=htmlspecialchars_decode($this->e($alertmsg));?>
                          <form id="contact-form" method="post" action="<?=BASE_URL;?>/contact" role="form">                          
                              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                  <input type="text" placeholder="<?=$this->e($contact_name);?>" class="form-control" name="contact_name" id="contact_name" value="<?=(isset($_POST['contact_name']) ? $_POST['contact_name'] : '');?>">
                              </div>
                              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                  <input type="email" placeholder="<?=$this->e($contact_email);?>" class="form-control" name="contact_email" id="contact_email" value="<?=(isset($_POST['contact_email']) ? $_POST['contact_email'] : '');?>" >
                              </div>
                              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                  <input type="text" placeholder="<?=$this->e($contact_subject);?>" class="form-control" name="contact_subject" id="contact_subject" value="<?=(isset($_POST['contact_subject']) ? $_POST['contact_subject'] : '');?>">
                              </div>
                              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                  <textarea rows="6" placeholder="<?=$this->e($contact_message);?>" class="form-control" name="contact_message" id="contact_message"><?=(isset($_POST['contact_message']) ? $_POST['contact_message'] : '');?></textarea>    
                              </div>
                              <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                  <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="<?=$this->e($front_contact_btn);?>">
                              </div>
                          </form>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="map-area">
						<h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Alamat</h2>
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7911.284714004982!2d112.37876729999999!3d-7.504676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78133c1b4fe2e5%3A0x8fc1d92af18aa9d3!2sPT.%20ELESKA%20GLOBALCENTRATAM%20INDONESIA!5e0!3m2!1sid!2sid!4v1592990539087!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="row address-details">
				<div class="col-md-4">
					<div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
						<i class="ion-ios-location-outline"></i>
						<p><?=htmlspecialchars_decode($this->pocore()->call->posetting[8]['value']);?></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
						<i class="ion-ios-email-outline"></i>
						<p><?=$this->pocore()->call->posetting[5]['value'];?></p>
                      	<p><?=$this->pocore()->call->posetting[32]['value'];?><br> <br> </p>
                      	<p>Pendaftaran :</p>
                      	<p><b>LK3 : </b></p>
                      	<p><?=$this->pocore()->call->posetting[33]['value'];?><br><br></p>
                      	
                      	<p><b>Eleska Global : </b></p>
                      	<p><?=$this->pocore()->call->posetting[34]['value'];?><br> <br> </p>
                      
					</div>
				</div>
				<div class="col-md-4">
					<div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
						<i class="ion-ios-telephone-outline"></i>
						<p>LK3 Training Center : <?=$this->pocore()->call->posetting[6]['value'];?><br>
                          PT. Eleska : <?=$this->pocore()->call->posetting[31]['value'];?><br><br>
                          Fax : <?=$this->pocore()->call->posetting[7]['value'];?><br> 
                      	</p>
					</div>
				</div>
			</div>
		</div>
	</section>

<script type="text/javascript">
        $("#template-contactform").validate();
    </script>