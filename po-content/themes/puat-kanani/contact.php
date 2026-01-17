<?=$this->layout('index');?>

			<div class="cs-container">
                <!-- Breadcrumb -->
                <ul class="breadcrumb">
                    <li><a href="<?=BASE_URL;?>"><?=$this->e($front_home);?></a></li>
					<li><a href="<?=BASE_URL.'/contact';?>"><?=$this->e($front_contact);?></a></li>
                </ul>
                <!-- Page title -->
                <h1 class="cs-page-title">Contact us</h1>
                <!-- Main content -->
                <div class="cs-main-content cs-sidebar-on-the-right">

                    <p>Aenean quam eros, faucibus non quam in, viverra cursus metus. Phasellus vulputate felis a mauris lacinia rhoncus quis sit amet diam. Praesent vel metus in leo malesuada dignissim.</p>
                    <h4>HTML documents are divided into paragraphs.</h4>
                    <ul>
                        <li>You cannot be sure how HTML will be displayed.</li>
                        <li>Large or small screens, and resized windows will create different results.</li>
                        <li>The browser will remove extra spaces and extra lines when the page is displayed.</li>
                        <li>Any number of spaces, and any number of new lines, count as only one space.</li>
                    </ul>
                    <p>Mauris eget arcu id nibh ultricies vestibulum. Nulla faucibus malesuada ipsum, vitae consectetur ipsum tempor eu. Vivamus auctor malesuada suscipit. Donec pharetra leo posuere molestie imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                    <div class="cs-row">
                        <div class="cs-col cs-col-6-of-12">
                            <address>
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div>
                        <div class="cs-col cs-col-6-of-12">
                            <address>
                                <strong>Facebook, Inc.</strong><br>
                                16 Los Angleles, Suite 114<br>
                                Hollywood, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div>
                    </div>
                    <hr>

                    <!-- Contact form -->
                    <h4>Send us a message</h4>
					<?=htmlspecialchars_decode($this->e($alertmsg));?>
                    <form class="cs-contact-form" id="template-contactform" name="template-contactform" action="<?=BASE_URL;?>/contact" method="post">
                        <p>
                            <label><?=$this->e($contact_name);?>  *</label>
                            <input type="text" placeholder="Nama" title="Name" id="template-contactform-name" name="contact_name" value="<?=(isset($_POST['contact_name']) ? $_POST['contact_name'] : '');?>">
                        </p>
                        <p>
                            <label><?=$this->e($contact_email);?> *</label>
                            <input type="text" placeholder="E-mail" title="E-mail" id="template-contactform-email" name="contact_email" value="<?=(isset($_POST['contact_email']) ? $_POST['contact_email'] : '');?>">
                        </p>
                        <p>
                            <label><?=$this->e($contact_subject);?> *</label>
                            <input type="text" placeholder="Subjek" title="Subjek" id="template-contactform-subject" name="contact_subject" value="<?=(isset($_POST['contact_subject']) ? $_POST['contact_subject'] : '');?>">
                        </p>
                        <p>
                            <label><?=$this->e($contact_message);?> *</label>
                            <textarea placeholder="Pesan" id="template-contactform-message" name="contact_message"><?=(isset($_POST['contact_message']) ? $_POST['contact_message'] : '');?></textarea>
                        </p>
                        <p>
                            <input name="submit" type="submit" class="cs-btn cs-btn-black" id="contact-submit" value="<?=$this->e($front_contact_btn);?>">
                        </p>
                    </form>                    
					<script type="text/javascript">
						$("#template-contactform").validate();
					</script>
                </div>
                <!-- Main sidebar -->
                <?=$this->insert('sidebar');?>
            </div>

