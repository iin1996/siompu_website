<?php

class KecamatanController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Kecamatan');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
            'desaPicPath' => Yii::app()->baseUrl . '/image/desa.jpg'
        ));
    }

    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
            'desaPicPath' => Yii::app()->baseUrl . '/image/desa.jpg'
        ));
    }
    // Uncomment the following methods and override them if needed
    /*
    public function filters()
    {
        // return the filter configuration for this controller, e.g.:
        return array(
            'inlineFilterName',
            array(
                'class'=>'path.to.FilterClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }

    public function actions()
    {
        // return external action classes, e.g.:
        return array(
            'action1'=>'path.to.ActionClass',
            'action2'=>array(
                'class'=>'path.to.AnotherActionClass',
                'propertyName'=>'propertyValue',
            ),
        );
    }
    */
    public function loadModel($id)
    {
        $model=Kecamatan::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
}