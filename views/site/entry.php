<?php 
    ## 生成表单
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<?php $form=ActiveForm::begin(); ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'age') ?>
    <?= $form->field($model, 'sex') ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>