<?=$this->layout('index');?>
<div class="twelve columns page_with_sidebar" id="content">
	<div class="widget_container content_page page type-page status-publish hentry">
		<div class="breadcrumbs_options">
			<a href="<?=BASE_URL;?>"><?=$this->e($front_home);?> </a><i class="fa fa-angle-right"></i>
            <span class="current"><?=$this->e($front_contact);?></span>
		</div>
      <br />
      <p>

<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d15821.974444872121!2d112.3775306!3d-7.5210132!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e781328e27cbd31%3A0x521f794a8e1ffc04!2sCounsultan+Dan+Training+Lembaga+K3%2C+Pakem+Kulon%2C+Panggih%2C+Trowulan%2C+Mojokerto%2C+Jawa+Timur%2C+Indonesia!3m2!1d-7.5210132!2d112.3775306!5e0!3m2!1sid!2s!4v1503041179885" width="1100" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>			<div class="screen-reader-response"></div>
            <?=htmlspecialchars_decode($this->e($alertmsg));?>
      
        <br />
			<form action="<?=BASE_URL;?>/contact" method="post" class="wpcf7-form" novalidate="novalidate">
				<p>
					<?=$this->e($contact_name);?> <span>*</span><br/>
					<span class="wpcf7-form-control-wrap your-name"><input type="text" name="contact_name" value="<?=(isset($_POST['contact_name']) ? $_POST['contact_name'] : '');?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"  aria-required="true" aria-invalid="false"/></span>
				</p>
				<p>
				 <?=$this->e($contact_email);?> <span>*</span><br/>
					<span class="wpcf7-form-control-wrap your-email"><input type="email" name="contact_email" value="<?=(isset($_POST['contact_email']) ? $_POST['contact_email'] : '');?>" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"/></span>
				</p>
				<p>
					<?=$this->e($contact_subject);?> <span>*</span><br/>
					<span class="wpcf7-form-control-wrap your-subject"><input type="text" name="contact_subject" value="<?=(isset($_POST['contact_subject']) ? $_POST['contact_subject'] : '');?>" size="40" class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false"/></span>
				</p>
				<p>
					<?=$this->e($contact_message);?> <span>*</span><br/>
					<span class="wpcf7-form-control-wrap your-message"><textarea name="contact_message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-required="true" aria-invalid="false"><?=(isset($_POST['contact_message']) ? $_POST['contact_message'] : '');?></textarea></span>
				</p>
				<p>
					<input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit"/>
				</p>
				<div class="wpcf7-response-output wpcf7-display-none"></div>
			</form>
		</div>
        
        <div class="four columns content_display_col3" id="sidebar">
		      <address>
		          <?=htmlspecialchars_decode($this->pocore()->call->posetting[8]['value']);?>
		      </address>
              <br />
		      <abbr title="Phone Number"><strong style="text-decoration: none;">Phone:</strong></abbr> <?=$this->pocore()->call->posetting[6]['value'];?><br>
		      <abbr title="Fax"><strong style="text-decoration: none;">Fax:</strong></abbr> <?=$this->pocore()->call->posetting[7]['value'];?><br>
		      <abbr title="Email Address"><strong style="text-decoration: none;">Email:</strong></abbr> <?=$this->pocore()->call->posetting[5]['value'];?>
        </div>
        
		<div class="brack_space"></div>
	</div>
</div>