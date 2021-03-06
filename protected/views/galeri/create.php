<div class="form">
    <?php
        $form=$this->beginWidget(
                'CActiveForm', array(
                    'id'=>'galeri-form','htmlOptions'=>array(
                        'enctype'=>'multipart/form-data'),'enableAjaxValidation'=>false
                    )
                );
    ?>
</div>
<p class="note">Field dengan <span class="required">*</span> wajib di isi.
</p>
<?php
    echo $form->errorSummary($model);
?>
 
<div class="row">
    <?php
        echo $form->labelEx($model,'nama');
        echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>45));
        echo $form->error($model, 'nama');
    ?>
</div>
<div class="row">
    <?php
        echo $form->labelEx($model,'image');
        echo $form->fileField($model, 'image', array('size'=>60,'maxlength'=>555));
        echo $form->error($model, 'image');
    ?>
</div>
<div class="row buttons">
    <?php
        echo CHtml::submitButton($model->isNewRecord ? 'Upload':'Simpan');
        $this->endWidget();
    ?>
</div>