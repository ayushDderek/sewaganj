<?php

/** @var $model \app\models\Service */
/** @var $data  */
/** @var $cat */

use app\core\form\TextareaField;
?>

<h1>Add New Service</h1>

<?php $form = \app\core\form\Form::begin('', 'post') ?>
<?php echo $form->field($model, 'name') ?>
<?php echo new TextareaField($model, 'body') ?>
<?php echo $form->field($model, 'price')->numberField() ?>
<label for="category">Select Category:</label>
<select class="form-select" name="category" id="category">
    <?php foreach ($cat as $value ) {
        $category = get_object_vars($value); ?>
        <option value="<?= $category['id'] ?>"><?= $category['category'] ?></option>
    <?php } ?>
</select>
<?php //echo $form->field($model, 'category') ?>
<div class="mb-3">
    <?php echo $form->field($model, 'image')->fileField() ?>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end() ?>


<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>
        <th scope="col">Image</th>
        <th scope="col">Created At</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <?php foreach ($data as $keys ){
        $data = get_object_vars($keys);
        ?>
        <tbody>
        <tr>
            <th scope="row"><?= $data['id'] ?></th>
            <td><?= $data['name'] ?></td>
            <td><?= $data['body'] ?></td>
            <td><?= $data['price'] ?></td>
            <td><?= $data['category'] ?></td>
            <td><img width="50px" height="50px" src="<?= "../upload/services/{$data['image']}" ?>" alt=""></td>
            <td><?= $data['created_at'] ?></td>
            <td><button type="button" class="btn btn-primary">Edit</button></td>
            <td><button type="button" class="btn btn-danger">Delete</button></td>
        </tr>
        </tbody>
    <?php } ?>
</table>
