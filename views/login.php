<?php
/** @var $model \app\models\User */
?>

<div class="logincontainer">
<main>
    <div class="img">
        <img src="assets/images/logo.png">
    </div>

    <div class="login">
        <h1>LOG IN</h1>
    </div>
<?php $form = \app\core\form\Form::begin('', 'post') ?>
    <div data-mdb-input-init class="form-outline mb-4">
<?php echo $form->field($model, 'email') ?>
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
    <?php echo $form->field($model, 'password')->passwordField() ?>
    </div>
    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
        </div>

        <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
        </div>
    </div>

    <!-- Submit button -->
    <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

    <!-- Register buttons -->
    <div class="text-center">
        <div class="divider d-flex align-items-center my-4">

        </div>

        <p>Not a member? <a href="/register">Register</a></p>
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
</div>