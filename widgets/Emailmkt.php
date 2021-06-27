<?php
namespace app\widgets;

use app\models\Email;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class Emailmkt extends Widget
{

    public function run()
    {
        $model = new Email();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->save();
           Yii::$app->session->setFlash('success', 'Email Cadastrado com sucesso');
           return;
        } else {
            return $this->render('emailmkt', ['model' => $model]);
        }
    }    
}
