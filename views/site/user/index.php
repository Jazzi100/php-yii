<!-- <?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'Yii CRUD';
?>
<div class="site-index">

    <h1>Create User</h1>
    <div class="body-content">
        <?php 
            $form = ActiveForm::begin()
        ?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($user, 'username'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($user, 'email'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($user, 'password')->passwordInput(); ?>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= Html::submitButton('Sign Up', ['class'=> 'btn btn-primary']); ?>
                </div>
            </div>
        </div>

        <?php ActiveForm::end() ?>

    </div>
</div> -->
