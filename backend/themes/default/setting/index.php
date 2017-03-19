<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use hongyukeji\imperavi\Widget;

/* @var $this yii\web\View */
/* @var $model backend\models\SystemSetting */
/* @var $form ActiveForm */

$this->title = Yii::t('common', 'Shopping Mall').Yii::t('common', 'Setting');

$this->params['breadcrumbs'][] = Yii::t('common', 'System').Yii::t('common', 'Setting');
$this->params['breadcrumbs'][] = $this->title;
$fieldOptions = [
    'options' => ['class' => 'form-group has-feedback'],
    'labelOptions' => ['class' => 'control-label col-sm-1'],
    'template' => "{label}<div class=\"col-sm-11\">{input}</div>\n<div class=\"col-sm-1\"></div><div class=\"col-sm-11\">{hint}\n{error}</div>",
];
?>
<div class="setting-index">
    <div class="body-content">
        <div class="row">
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true"><?= Yii::t('common', 'Basic').Yii::t('common', 'Setting') ?></a></li>
                        <li><a href="#tab_2" data-toggle="tab" aria-expanded="false">联系方式</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="box-body">

                                <?php $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal']]); ?>

                                <?= $form->field($model, 'name', $fieldOptions) ?>

                                <?= $form->field($model, 'title', $fieldOptions) ?>

                                <?= $form->field($model, 'keywords', $fieldOptions) ?>

                                <?= $form->field($model, 'description', $fieldOptions)->textarea() ?>

                                <?= $form->field($model, 'copyright', $fieldOptions)->widget(Widget::className(), [
                                    'settings' => [
                                        'lang' => 'zh_cn',
                                        'minHeight' => 200,
                                        'plugins' => [
                                            'clips',
                                            'fullscreen'
                                        ]
                                    ]
                                ]) ?>

                                <div class="form-group">
                                    <label class="control-label col-sm-1"></label>

                                    <div class="col-sm-11">
                                        <?= Html::submitButton(Yii::t('common', 'Submit'), ['class' => 'btn btn-primary']) ?>
                                    </div>
                                </div>

                                <?php ActiveForm::end(); ?>
                            </div>

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <div class="box-body">联系方式</div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>
        </div>
    </div>
</div><!-- setting-index -->