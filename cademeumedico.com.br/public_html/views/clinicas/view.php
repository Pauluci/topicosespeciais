<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = "Card Dr. {$clinicas->Nome}";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-9">
        <div class="col-md-4">
            <img src="<?php echo $clinicas->Imagem?>" class="img-responsive img-circle" alt="<?php echo $clinicas->Nome?>">
        </div>
        <div class="col-md-8">
            <h1><?php echo $clinicas->Nome ?></h1>
            <p><?php echo $clinicas->Sobre ?></p>
            <div class="col-md-6">
                <div class="row">
                    <h2>Dados</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $clinicas->Nome ?></li>
                        <li class="list-group-item"><?php echo $clinicas->Email ?></li>
                        <li class="list-group-item"><?php echo $clinicas->Telefone ?></li>
                        <li class="list-group-item"><?php echo $clinicas->CEP ?></li>
                        <li class="list-group-item"><?php echo $clinicas->Endereco ?></li>
                        <li class="list-group-item"><?php echo $clinicas->Bairro ?></li>
                        <li class="list-group-item"><?php echo $clinicas->UF ?></li>
                    </ul>    
                </div>
            </div>
            <div class="col-md-6">
                <h2>Medicos da Clinica</h2>
                <ul class="list-group list-group-flush">
                <?php foreach($clinicas->medicoHasEspecialidades as $key => $medico): ?>
                    <?php $auxMedicos[$medico->medico->Medico_id]['Nome'] = $medico->medico->Nome ?>
                    <?php $auxMedicos[$medico->medico->Medico_id]['id'] = $medico->medico->Medico_id ?>
                <?php endforeach; ?>
                
                <?php foreach($auxMedicos as $key => $medicos): ?>
                    <li class="list-group-item"><?=$medicos['Nome']?></li>
                <?php endforeach; ?>
                </ul>
            </div>
            <hr>
        </div>
    </div>
    <div class="col-md-3">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <h2>Especialidades</h2>
    </div>
    <?php foreach($clinicas->clinicaHasEspecialidades as $key => $especialidade): ?>
        <div class="col-lg-3">
        <img src="<?php echo $especialidade->especialidades->Imagem?>" class="img-responsive" alt="<?php echo $especialidade->especialidades->Titulo?>">
        
        
        <h2><?php echo $especialidade->especialidades->Titulo?></h2>
        <?php echo $especialidade->especialidades->SubTitulo?>
        <p><a class="btn btn-primary" href="/<?php echo Url::to('especialidades/view')?>/<?php echo $especialidade->especialidades->Especialidades_id?>-<?php echo $especialidade->especialidades->Titulo?>" role="button">Ver Detalhes »</a></p>
        </div>
        <?php if((++$key > 0)  and ($key % 4 == 0)):?>
        </div>
        <hr>  
        <div class="row">
        <?php endif;?>
    <?php endforeach; ?>
</div>