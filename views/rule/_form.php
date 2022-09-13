<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var $this  \yii\web\View
 * @var $model \dektrium\rbac\models\Rule
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php $form = ActiveForm::begin([
    'enableClientValidation' => false,
    'enableAjaxValidation'   => true,
]) ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'class') ?>

<div class="d-grid mt-2">
    <?= Html::submitButton(Yii::t('rbac', 'Save'), ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end() ?>
