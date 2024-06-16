<?php
/** @var $model \app\models\User */
?>


<main>
    <div class="img">
        <img src="../assets/images/logo.png">
    </div>

    <div class="login">
        <h1>SIGN UP</h1>
    </div>
<?php $form = \app\core\form\Form::begin('', 'post') ?>
    <div data-mdb-input-init class="form-outline mb-4">
        <?php echo $form->field($model, 'firstname') ?>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <?php echo $form->field($model, 'lastname') ?>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <?php echo $form->field($model, 'email') ?>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <?php echo $form->field($model, 'password')->passwordField() ?>
    </div>
    <div data-mdb-input-init class="form-outline mb-5">
        <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <select name="usertype" id="usertype">
            <option value="customer">Customer</option>
            <option value="customer">Vendor</option>
        </select>
    </div>
    <div class="new">
        <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign Up</button>
    </div>
    <div class="text-center">
        <div class="divider d-flex align-items-center my-4"></div>

        <p>Already Have an Account? <a href="/login">signin</a></p>
        <p>or sign up with:</p>
        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
        </button>

        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
        </button>

        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
        </button>

        <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
        </button>
    </div>
</main>

<?php \app\core\form\Form::end() ?>
