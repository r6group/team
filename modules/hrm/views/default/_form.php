<?php

use yii\helpers\Html;
use kartik\widgets\Select2;
use kartik\widgets\ActiveForm;
//use kartik\widgets\DatePicker;
//use vova07\fileapi\Widget;
use kartik\datecontrol\DateControl;
use common\models\Profile;

use yii\helpers\Url;
use kartik\widgets\DepDrop;


/**
 * @var yii\web\View $this
 * @var common\models\Profile $model
 * @var yii\widgets\ActiveForm $form
 */
?>


<?php $form = ActiveForm::begin(); ?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title"><i class="fa fa-user"></i> Personal Information</h4>
            </div>
            <div class="panel-body">

                <div class="row">

                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'pname')->widget(Select2::classname(), [
                            'data' => Profile::getTitlesArray(),
                            'options' => ['placeholder' => '---- ระบุคำนำหน้า ----'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'name') ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'surname') ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'gender')->widget(Select2::classname(), [
                            'data' => Profile::getGenderArray(),
                            'theme' => Select2::THEME_KRAJEE,
                            'hideSearch' => true,
                            'options' => ['placeholder' => '---- ระบุเพศ ----'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'cid') ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'birthday')->widget(DateControl::classname(), ['type' => DateControl::FORMAT_DATE,]); ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'blood_group')->widget(Select2::classname(), [
                            'data' => Profile::getBloodGroupArray(),
                            'theme' => Select2::THEME_KRAJEE,
                            'hideSearch' => true,
                            'options' => ['placeholder' => '---- ระบุหมู่เลือด ----'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                    <div class="col-sm-3 col-md-3">
                        <?= $form->field($model, 'marry_status')->widget(Select2::classname(), [
                            'data' => Profile::getMstatusArray(),
                            'theme' => Select2::THEME_KRAJEE,
                            'hideSearch' => true,
                            'options' => ['placeholder' => '---- ระบุสถานภาพสมรส ----'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>

                    </div>
                </div>


            </div>
        </div>
        <!-- panel -->
    </div>


</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h4 class="panel-title"><i class="fa fa-suitcase"></i> Work Information</h4>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'off_id18')->widget(Select2::classname(), [
                            'data' => Profile::getHosArray('27'),
                            'theme' => Select2::THEME_KRAJEE,
                            'options' => ['placeholder' => '---- ระบุหน่วยงาน ----'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>

                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'off_id')->widget(Select2::classname(), [
                            'data' => Profile::getHosArray('27'),
                            'theme' => Select2::THEME_KRAJEE,
                            'options' => ['placeholder' => '---- ระบุหน่วยงาน ----'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>

                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'stf_type')->widget(Select2::classname(), [
                            'data' => Profile::getStftypeArray(),
                            'theme' => Select2::THEME_KRAJEE,
                            'hideSearch' => true,
                            'options' => ['placeholder' => '---- ระบุประเภทบุคลากร ----'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'main_pst')->widget(Select2::classname(), [
                            'data' => Profile::getPositionArray(),
                            'theme' => Select2::THEME_KRAJEE,
                            'options' => ['placeholder' => '---- ระบุตำแหน่ง ----'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>

                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'plevel')->widget(Select2::classname(), [
                            'data' => Profile::getPostypeArray(),
                            'theme' => Select2::THEME_KRAJEE,
                            'hideSearch' => true,
                            'options' => ['placeholder' => '---- ระบุประเภทตำแหน่ง ----'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'stf_id') ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'dr_special')->widget(Select2::classname(), [
                            'data' => Profile::getSpArray(),
                            'theme' => Select2::THEME_KRAJEE,
                            'options' => ['placeholder' => '---- ระบุสาขาเฉพาะทาง ----'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'licence_no') ?>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'Income') ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="form-group field-profile-workgroup">
                            <label class="control-label" for="profile-workgroup">กลุ่มงาน/งาน/แผนก</label>


                                <?= \kartik\tree\TreeViewInput::widget([
                                    'model' => $model,
                                    'attribute' => 'workgroup',
                                    'value' => 'false', // preselected values
                                    'query' => \common\models\WorkGroup::find()->addOrderBy('root, lft'),
                                    'headingOptions' => ['label' => 'Categories'],
                                    'rootOptions' => ['label' => '<i class="fa fa-tree text-success"></i>'],
                                    'fontAwesome' => true,
                                    'asDropdown' => true,
                                    'multiple' => false,
                                    'options' => ['disabled' => false]
                                ]); ?>


                            <div class="help-block"></div>
                        </div>



                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'Status')->widget(Select2::classname(), [
                            'data' => Profile::getStatusArray(),
                            'theme' => Select2::THEME_KRAJEE,
                            'hideSearch' => true,
                            'options' => ['placeholder' => '---- ระบุสถานะ ----'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]) ?>
                    </div>
                    <div class="col-sm-4 col-md-4">

                    </div>
                </div>


            </div>
        </div>
        <!-- panel -->
    </div>


</div>


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h4 class="panel-title"><i class="fa fa-envelope"></i> Contact Information</h4>
            </div>
            <div class="panel-body">


                <div class="row">


                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'addr_part') ?>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'rd_part') ?>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'moo_part') ?>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'chw_part')->dropDownList(Profile::getProvinceArray(), ['id' => 'ddl-province', 'prompt' => '---- ระบุจังหวัด ----']) ?>
                    </div>
                    <div class="col-sm-4 col-md-4">

                        <?= $form->field($model, 'amp_part')->widget(DepDrop::classname(), [
                            'options' => ['id' => 'ddl-district'],
                            'data' => $district,
                            'pluginOptions' => [
                                'depends' => ['ddl-province'],
                                'placeholder' => '----ระบุอำเภอ----',
                                'url' => Url::to(['/hrm/default/get-district'])
                            ]
                        ]); ?>


                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'tmb_part')->widget(DepDrop::classname(), [
                            'options' => ['id' => 'ddl-subdistrict'],
                            'data' => $subdistrict,
                            'pluginOptions' => [
                                'depends' => ['ddl-province', 'ddl-district'],
                                'placeholder' => '----ระบุตำบล----',
                                'url' => Url::to(['/hrm/default/get-subdistrict'])
                            ]
                        ]); ?>
                    </div>


                </div>

                <div class="row">


                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'home_tel') ?>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'mobile_tel') ?>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <?= $form->field($model, 'email') ?>
                    </div>
                </div>


            </div>
        </div>
        <!-- panel -->
    </div>


</div>


<?= $form->field($model, 'Note') ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>

