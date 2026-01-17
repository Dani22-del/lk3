			<div id="cs-header-style-one">
                <!-- Header main -->
                <div id="cs-header-main">
                    <div class="cs-container">
                        <div class="cs-header-body-table">
                            <div class="cs-header-body-row">
                                <!-- Logo brand image -->
                                <div id="cs-logo-brand">
                                    <a href="<?=BASE_URL;?>"><img src="<?=BASE_URL.'/'.DIR_INC;?>/images/logo.png" alt="Logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header menu -->
                <div id="cs-header-menu">
                    <div class="cs-container">
                        <!-- Main navigation -->
                        <div class="cs-toggle-main-navigation"><i class="fa fa-bars"></i></div>
							<nav id="cs-main-navigation" class="cs-clearfix">
								<?php
									echo $this->menu()->getFrontMenu(WEB_LANG, 'class="cs-main-navigation cs-clearfix"','','class="sub-menu"');
								?>
							</nav>
                        <!-- Search icon show -->
                        <div id="cs-header-menu-search-button-show"><i class="fa fa-search"></i></div>
                        <!-- Search icon -->
                        <div id="cs-header-menu-search-form">
                            <div id="cs-header-menu-search-button-hide"><i class="fa fa-close"></i></div>
                            <form action="<?=BASE_URL;?>/search" method="post">
                                <input type="text" name="search" value="" placeholder="<?=$this->e($front_search);?>...">
                            </form>
                        </div>
                    </div>
                </div>
            </div>