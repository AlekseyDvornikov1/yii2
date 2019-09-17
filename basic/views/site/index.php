<?php

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

?>

<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
    </div>
</div>

<?php $form = ActiveForm::begin([
    'id' => 'StepForm'
]); ?>
<div class="row setup-content" id="step-1">
    <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
            <h3> Step 1</h3>
            <?= $form->field($model, 'firstname')->textInput([
                    'class' => 'SaveForms form-control'
            ]) ?>
            <?= $form->field($model, 'lastname')->textInput([
                'class' => 'SaveForms form-control'
            ]) ?>
            <?= $form->field($model, 'phone')->textInput([
                'class' => 'SaveForms form-control'
            ]) ?>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
    </div>
</div>
<div class="row setup-content" id="step-2">
    <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
            <h3> Step 2</h3>
            <?= $form->field($model, 'address')->textInput([
                'class' => 'SaveForms form-control'
            ]) ?>
            <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
    </div>
</div>
<div class="row setup-content" id="step-3">
    <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
            <h3> Step 3</h3>
            <?= $form->field($model, 'comment')->textInput([
                'class' => 'SaveForms form-control'
            ]) ?>
            <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
            <?= Html::submitButton('Submit', ['class' => 'SaveFormSubmit btn btn-success btn-lg pull-right', 'id' => 'submit']) ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
