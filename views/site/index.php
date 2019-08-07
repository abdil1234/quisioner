<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Dashboard';
$this->registerJsFile(
    '//maps.googleapis.com/maps/api/js?key=AIzaSyC0w6PGjF4BIYc999YEWGoiC5OSnrM12QU&callback=initMap',
    ['depends' => [\yii\web\JqueryAsset::className()]]
  );
?>
<style>
    /* Always set the map height explicitly to define the size of the div
    * element that contains the map. */
    #map {
    height: 100%;
    background: red;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    }
</style>

<h3>TOTAL KRITIK/SARAN</h3>
<div class="row">
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-sticky-note"></i></span>
            <div class="info-box-content">
                <span class="info-box-text"> Lingkungan 1</span>
                <span class="info-box-number"><?= $lingkungan1?> </span>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-sticky-note"></i></span>
            <div class="info-box-content">
                <span class="info-box-text"> Lingkungan 2</span>
                <span class="info-box-number"><?= $lingkungan2?> </span>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-sticky-note"></i></span>
            <div class="info-box-content">
                <span class="info-box-text"> Lingkungan 3</span>
                <span class="info-box-number"> <?= $lingkungan3?> </span>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-sticky-note"></i></span>
            <div class="info-box-content">
                <span class="info-box-text"> Lingkungan 4</span>
                <span class="info-box-number"><?= $lingkungan4?> </span>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-sticky-note"></i></span>
            <div class="info-box-content">
                <span class="info-box-text"> Lingkungan 5</span>
                <span class="info-box-number"><?= $lingkungan5?> </span>
            </div>
        </div>
    </div>
</div>
