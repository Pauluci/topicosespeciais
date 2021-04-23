<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Sobre-nos';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCss("h1 {font-size:78px}");
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Essa é uma pagina que fala um pouco sobre nós.
    </p>

    <code><?= __FILE__ ?></code>
</div>
