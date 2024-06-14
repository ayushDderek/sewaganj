<?php
/** @var $model \app\models\Category */
/** @var $all */
?>


<h1>Add New Category</h1>

<?php $form = \app\core\form\Form::begin('', 'post') ?>
    <?php echo $form->field($model, 'category') ?>
    <div class="mb-3">
        <?php echo $form->field($model, 'image')->fileField() ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end() ?>


<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Category</th>
        <th scope="col">Icon</th>
        <th scope="col">Created At</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <?php foreach ($all as $keys ){
        $data = get_object_vars($keys);
    ?>
    <tbody>
    <tr>
        <th scope="row"><?= $data['id'] ?></th>
        <td><?= $data['category'] ?></td>
        <td><img src="<?= \app\core\Application::$ROOT_DIR. "/public/upload/{$data['image']}" ?>" alt=""></td>
        <td><?= $data['created_at'] ?></td>
        <td><button type="button" class="btn btn-primary">Edit</button></td>
        <td><button type="button" class="btn btn-danger">Delete</button></td>
    </tr>
    </tbody>
    <?php } ?>
</table>
