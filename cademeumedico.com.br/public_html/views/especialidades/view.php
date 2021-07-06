<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = "Card Dr. {$especialidades->Titulo}";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-9">
        <div class="col-md-4">
            <img src="<?php echo $especialidades->Imagem?>" class="img-responsive img-circle" alt="<?php echo $especialidades->Titulo?>">
        </div>
        <div class="col-md-8">
            <h1><?php echo $especialidade->Titulo ?></h1>
            <p>Mussum Ipsum, cacilds vidis litro abertis. Viva Forevis aptent taciti sociosqu ad litora torquent. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Quem num gosta di mim que vai caçá sua turmis! Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. </p>
            <div class="col-md-6">
                <div class="row">
                    <h2>Dados</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $especialidades->Titulo ?></li>
                        <li class="list-group-item"><?php echo $especialidades->SubTitulo ?></li>
                        <li class="list-group-item"><?php echo $especialidades->texto ?></li>
                    </ul>    
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
<hr>
<div class="row">
</div>