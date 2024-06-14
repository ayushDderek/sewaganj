<?php

/** @var $model \app\models\Service */

use app\core\form\TextareaField;

?>

<h1>Add New Service</h1>

<?php $form = \app\core\form\Form::begin('', 'post') ?>
<?php echo $form->field($model, 'name') ?>
<?php echo new TextareaField($model, 'body') ?>
<?php echo $form->field($model, 'price')->numberField() ?>
<?php echo $form->field($model, 'category') ?>
<div class="mb-3">
    <?php echo $form->field($model, 'image')->fileField() ?>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end() ?>
