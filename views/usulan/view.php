<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usulan */
?>
<div class="usulan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama',
            'jenis_kelamin',
            'tgl_lahir:date',
            'alamat:ntext',
            'kritik:ntext',
            'saran:ntext',
            'waktu',
        ],
    ]) ?>

</div>
