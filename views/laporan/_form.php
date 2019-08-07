<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\widgets\FileInput;
/* @var $this yii\web\View */
/* @var $model app\models\Usulan */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'Laporan Kritik/Saran';

?>

<div class="usulan-form">

    <?php $form = ActiveForm::begin(['action' => ['cetak-lingkungan']]); ?>

    <?= $form->field($model, 'kd_lingkungan')->dropDownList($lingkungan, ['prompt' => '- Pilih Lingkungan -'])->label('Lingkungan') ?>

	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Cetak' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	        <?= Html::a('Cetak Semua Lingkungan', ['cetak'], ['class' => 'btn btn-info'])?>

	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
