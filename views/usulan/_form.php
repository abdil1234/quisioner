<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Usulan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usulan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([
        'laki-laki' => 'Laki-Laki',
        'perempuan' => 'Perempuan',
    ], ['prompt' => '- Jenis Kelamin -']) ?>

    <?= $form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Tanggal lahir'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kritik')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'saran')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'file_id')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
