<?php

namespace app\controllers;
use Yii;
use app\models\Especialidades;
class EspecialidadesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Especialidades();

        if($model->load(Yii::$app-> request-> post()) and $model ->validate()){
            $model->save();
            Yii::$app-> session-> setFlash('success','Gravado com sucesso!!');
        }else{
            Yii::$app-> session-> setFlash('errors',$model-> errors);

        }

        return $this->render('index',[
         'Vmodel' => $model,
        ]);
    }

}
