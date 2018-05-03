<?php

class AdminController extends Controller
{
    /**
     * handle login
     */
    public function actionIndex()
    {
        $model = new User;

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            $username = $model->attributes['username'];
            $password = $model->attributes['password'];

            $user = Yii::app()->db->createCommand()
                ->select('*')->from('user')
                ->where('username=:username and password=:password',
                    array(':username' => $username, ':password' => hash('sha256', $password)))
                ->queryRow();
        }

        $currentPath = Yii::app()->baseUrl . '/admin';
        $this->render('index', array(
            'model' => $model,
            'currentPath' => $currentPath,
            'currentPathReg' => $currentPath . '?path=register',
            'isRegister' => !empty($_GET['path']) && $_GET['path'] == 'register'
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
}