<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Garena Tournament 3 VS 3';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box">
<div class="caption-white" style="padding: 20px;">
<p>Lorem ipsum dolor sit amet, modo movet in vix, odio instructior sed ex. No vix temporibus dissentiet, ad diam theophrastus vis. Et nusquam volutpat has. Nihil recusabo necessitatibus pri at, at eum eius minim tibique, quodsi nominavi pertinacia cum ei. At per principes rationibus. Sea utamur argumentum no.
  </p>
  <p>
Ne quo dicam possit offendit, falli gloriatur vim ne. Usu modo purto nibh et. Eum ut dico exerci molestiae, lorem oporteat cum ad. Sit at aperiri omittantur.
  </p>
  <p>
Consetetur vituperata ex nam, ne mei meis eirmod epicurei. His eu verterem pericula, putent detraxit vel an, no pri nisl viderer. Tantas nominavi reprimique duo ei, ne cibo falli has. Et his oporteat lobortis suavitate.
  </p>
  <p>
In ius iuvaret luptatum phaedrum, ius repudiare intellegam id. Eos at prima dolorem, cu his percipit vivendum praesent. 
  </p>

</div>
</div>

<div class="pull-left">

<?php echo  Yii::$app->user->isGuest ? (
                                    '<span class="reg"><a style="color: #fff" href="user/login">REGISTRASI  </a> <i class="fa fa-play" aria-hidden="true"></i> <i class="fa fa-play" aria-hidden="true"></i> <i class="fa fa-play" aria-hidden="true"></i></span>'
                                    ) : ( '
<span class="reg"><a style="color: #fff" href="turnamen/create">REGISTRASI  </a> <i class="fa fa-play" aria-hidden="true"></i> <i class="fa fa-play" aria-hidden="true"></i> <i class="fa fa-play" aria-hidden="true"></i></span>');
?>



</div>

<div class="pull-right">
<a href="user/login"><button class="buttons">LOGIN</button></a>
</div>
