<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use common\models\Category;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class='form-group field-attribute-parentId'>
    <?= Html::label('Parent', 'parent', ['class' => 'control-label']);?>
    <?= Html::dropdownList(
        'Category[parentId]',
        $model->parentId,
        Category::getTree($model->id),
        ['prompt' => 'No Parent (saved as root)', 'class' => 'form-control']
    );?>

    </div>

    <?= $form->field($model, 'position')->textInput(['type' => 'number']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
