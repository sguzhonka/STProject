<?php
use common\models\Partners;
/* @var $this yii\web\View */
$this->title = Yii::$app->name;
use frontend\assets\FrontendAsset;
\frontend\assets\FrontendAsset::register($this);

?>
<div class="site-index">

    <?php echo \common\widgets\DbCarousel::widget([
        'key'=>'index',
        'options' => [
            'class' => 'slide', // enables slide effect
        ],
    ]) ?>

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <?php echo common\widgets\DbMenu::widget([
            'key'=>'frontend-index',
            'options'=>[
                'tag'=>'p'
            ]
        ]) ?>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Солнце! Солнце над всеми нами!.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Солнце излучает в окружающее пространство тепло, свет и жизненные силы. Как источник тепла, оно дарит нам
				страсть, храбрость и вечную ...</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
		 <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="slick-1.6.0/slick/slick.min.js"></script>
	<hr/>
	<h2 > Наши партнеры: 
</H2> 
<div class="partner-class">
<?php 
		foreach(Partners::find()->all() as $partner){
			?> <div> <a href="<?= $partner->href?>" class="img-responsive"> <?= $partner->img?> </a> </div>
		<?php }

?>
  </div>
	
	
	
	
</div>
 	  <script type="text/javascript">
    $(document).ready(function(){
      $('.partner-class').slick({
        infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1
      });
    });
  </script>