<?php
    use yii\helpers\Html;
?>
<p>You have entered the following information:</p>
<ul>
    <li><label for="">Name</label><?= Html::encode($model->name) ?></li>
    <li><label for="">Email</label><?= Html::encode($model->email) ?></li>
    <li><label for="">Age</label><?= Html::encode($model->age) ?></li>
    <li><label for="">Sex</label><?= Html::encode($model->sex) ?></li>
</ul>
