<?php
 
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 
/**
 * Description of ImageController
 *
 * @author Jin Toples
 */
class GaleriController extends Controller {
    public $layout="column1";
     
    const URLUPLOAD="/../images/";
     
    function actionCreate(){
        $model=new Galeri();
        $dir = Yii::getPathOfAlias('application.uploads'); 

        if(isset($_POST['Galeri'])){
            $cekFile=$model->image=  CUploadedFile::getInstance($model, 'image');
             
            if(empty($cekFile)){
                $model->attributes=$_POST['Galeri'];
                $model->save();
            }else{
                $model->attributes=$_POST['Galeri'];
                $model->image=  CUploadedFile::getInstance($model, 'image');
                 
                if($model->save()){
                    $model->image->saveAs($dir.'/'.$model->image);
                     
                    $this->redirect(array('galeri/'));
                }
            }
        }

        $this->render('create',array('model'=>$model));
    }
     
    function actionIndex(){
        $model=new Galeri();
        $data=$model->findAll();
         
        $this->render('index',array('data'=>$data));
    }
}
 
?>