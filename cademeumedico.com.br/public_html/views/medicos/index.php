<?php
/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = "Medicos";
$this->params['breadcrunbs'] [] = $this->title;

?>
<div class="container">
<h1>Medicos</h1>

<div class="row">
      <?php foreach ($medicos as $key => $linha):?>
          <div class="col-lg-3 text-center">
            <img src="<?php echo $linha->Imagem?>" class="img-responsive img-circle" alt="<?php echo $linha->Nome?>">
            <h2><?php echo $linha->Nome?></h2>
             <p>
                CRM: <?php echo $linha->CRM?><br>
                Email: <?php echo $linha->Email?><br>
                Telefone: <?php echo $linha->Telefone?> <br>
                  
             </p>
             
             <p><a class="btn btn-default" href="<?php echo yii\helpers\Url::toRoute(['medicos/view', 'id' => $linha->Medico_id]);?>" role="button">View details »</a></p>
          </div>
          <?php if((++$key > 0)  and ($key % 3 == 0)):?>
            </div>
            <hr>  
            <div class="row">
          <?php endif;?>
      <?php endforeach; ?>
    </div>
</div>