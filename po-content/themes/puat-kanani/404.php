<?=$this->layout('index');?>

			<div class="cs-container">
                <!-- Main content -->
                <div class="cs-main-content">
                    <!-- Page 404 -->
                    <div class="cs-404-page">
                        <h3>404</h3>
                        <h4><?=$this->e($front_404_text);?></h4>
                        <form action="<?=BASE_URL;?>/search" method="post">
                            <input name="search" type="search" placeholder="<?=$this->e($front_search);?>...">
                        </form>
                        <a href="<?=BASE_URL;?>" class="cs-404-page-back-link">Back to home page</a>
                    </div>
                </div>
            </div>

