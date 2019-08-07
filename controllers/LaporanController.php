<?php

namespace app\controllers;
use kartik\mpdf\Pdf;
use app\models\Usulan;
use app\models\RefLingkungan;
use yii\helpers\ArrayHelper;
use Yii;

class LaporanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Usulan();
        $lingkungan = ArrayHelper::map(RefLingkungan::find()->all(), 'id', 'lingkungan');
        return $this->render('_form', [
            'model' => $model,
            'lingkungan' => $lingkungan,
        ]);
    }

    public function actionCetak()
    {
        $model = Usulan::find()->all();

        $pdf = new Pdf([
            'mode' => Pdf::MODE_UTF8, // leaner size using standard fonts
            'format' => Pdf::FORMAT_FOLIO,
            'content' => $this->renderPartial('cetak',['model' => $model]),
            'options' => [
                'title' => 'Laporan KELURAHAN TB II',
            //'subject' => 'Generating PDF files via yii2-mpdf extension has never been easy'
            ],
            'orientation' => Pdf::ORIENT_LANDSCAPE,
            'methods' => [
                'SetHeader' => ['Dicetak dari: Sistem e-quisioner '],
                'SetFooter' => ['|Halaman {PAGENO} dari {nb}|'],
            ]
        ]);
        return $pdf->render();
    }

    public function actionCetakLingkungan()
    {
        $lingkungan = Yii::$app->request->post()['Usulan']['kd_lingkungan'];

        $model = Usulan::find()->where(['kd_lingkungan' => $lingkungan])->all();

        $pdf = new Pdf([
            'mode' => Pdf::MODE_UTF8, // leaner size using standard fonts
            'format' => Pdf::FORMAT_FOLIO,
            'content' => $this->renderPartial('cetak',['model' => $model]),
            'options' => [
                'title' => 'Laporan KELURAHAN TB II',
            //'subject' => 'Generating PDF files via yii2-mpdf extension has never been easy'
            ],
            'orientation' => Pdf::ORIENT_LANDSCAPE,
            'methods' => [
                'SetHeader' => ['Dicetak dari: Sistem e-quisioner '],
                'SetFooter' => ['|Halaman {PAGENO} dari {nb}|'],
            ]
        ]);
        return $pdf->render();
    }

}
