<?php

class DesaController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Desa');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'desaPicPath'  => Yii::app()->baseUrl . '/image/desa.jpg',
        ));
    }

    public function actionView($id)
    {
        $this->render('view', array(
            'model'       => $this->loadModel($id),
            'desaPicPath' => Yii::app()->baseUrl . '/image/desa.jpg',
        ));
    }

    public function loadModel($id)
    {
        $model = Desa::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }

        return $model;
    }
}
