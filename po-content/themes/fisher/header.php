<style>
  ul.nav.navbar-nav.navbar-right li div{
    color: white;
  }
  ul.nav.navbar-nav.navbar-right  li ul li a.ulSub div{
  	color: yellow;
  }
  
  ul.nav.navbar-nav.navbar-right  li ul li a.ulSub2 div{
  	color: grey;
    font-size: 12px;
  }
</style>
	<header id="top-bar" class="navbar-fixed-top animated-header" style="background-color: #013880; padding: 10px;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-brand">
					<a href="<?=BASE_URL;?>">
						<img src="<?=BASE_URL.'/'.DIR_INC;?>/images/logo.png" alt="" height="40">
					</a>
                  	
                    <a href="<?=BASE_URL;?>">
                        <img style="margin-left: 24px;" src="<?=BASE_URL.'/'.DIR_INC;?>/images/logo-2.png" alt="" height="40">
                    </a>
				</div>
			</div>
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				<div class="main-menu">
					<?php
						echo $this->menu()->getFrontMenu(WEB_LANG, 'class="nav navbar-nav navbar-right"', 'class="dropdown"', 'class="dropdown-menu"');
					?>
				</div>
			</nav>
		</div>
	</header>