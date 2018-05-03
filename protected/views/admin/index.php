<div class="admin-page">
    <div class="login-box">
        <h1 class="title is-3 has-text-centered">
            <?php echo !$isRegister ? 'Login' : 'Register'; ?>
        </h1>
        <div class="login-content">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'login-form',
                'enableAjaxValidation' => false
            ));
            ?>
            <?php echo $form->textField($model, 'username', array('class' => 'input sec',
                'placeholder' => 'Masukkan username', 'type' => 'text')); ?>
            <?php echo $form->textField($model, 'password', array('class' => 'input sec',
                'placeholder' => 'Masukkan password', 'type' => 'password')); ?>
            <?php if ($isRegister) { ?>
                <div class="select sec">
                    <select id="User_type" name="User[type]">
                        <option value="ADMIN">ADMIN</option>
                        <option value="KEPDES">KEPDES</option>
                    </select>
                </div>
            <? } ?>
            <?php echo CHtml::submitButton(!$isRegister ? 'Login' : 'Register', array('class' => 'button is-info sec')); ?>
            <?php $this->endWidget(); ?>
        </div>
        <p class="detail-no-acount">
            <?php
            if ($isRegister) {
                echo "Sudah punya akun ?, <a href='$currentPath'>login</a>";
            } else {
                echo "Belum punya akun ?, <a href='$currentPathReg'>Register</a>";
            }
            ?>
    </div>
</div>