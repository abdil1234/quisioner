<?php
use yii\helpers\Url;
use yii\helpers\Html;

return [
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nama',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'jenis_kelamin',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'tgl_lahir',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'alamat',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'kritik',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'kd_lingkungan',
        'value'=>'lingkungan.lingkungan',
        'label' => 'Lingkungan',
        'filter' => $lingkungan
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'file',
        'format' => 'raw',
        'value' => function($m){
            return Html::a("Dokumen", ['/file', 'id' => $m->file_id],['data-pjax' => '0', 'target' => '_blank']);
        }
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'saran',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'waktu',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'file_id',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'], 
    ],

];   