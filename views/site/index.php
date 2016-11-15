<?php

use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;
use yii\bootstrap\ActiveForm;
use app\models\Employee;
use app\models\Group;
use app\models\Skill;
use yii\bootstrap\Html;
use app\models\FilterForm;

/**
 * @var $this yii\web\View
 * @var $dataprovider \yii\data\ActiveDataProvider
 * @var $filter FilterForm
 */

$this->title = 'Demo list';

Pjax::begin();
?>
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <?php
                $form = ActiveForm::begin([
                    'method' => 'POST',
                    'options' => [
                        'data-pjax' => true
                    ]
                ]);
                ?>
                <div class="panel panel-default">
                    <div class="panel-heading">Filter</div>
                    <div class="panel-body">
                        <?php

                        echo $form->field($filter, 'name')->textInput(['placeholder' => 'Employee name', ''])->label(false);
                        echo $form->field($filter, 'at_work')->dropDownList(['' => '-- Work --', '0' => 'Out work', '1' => 'In work'])->label(false);
                        echo $form->field($filter, 'group_id')->dropDownList(
                            ['' => '-- Group --'] + ArrayHelper::map(Group::find()->all(), 'id', 'name')
                        )->label(false);
                        echo $form->field($filter, 'skill_id')->dropDownList(
                            ['' => '-- Skill --'] + ArrayHelper::map(Skill::find()->all(), 'id', 'name')
                        )->label(false);

                        ?>

                    </div>
                    <div class="panel-footer text-center">
                        <div class="btn-group">
                            <?php
                            echo Html::submitButton('Submit', ['class' => 'btn btn-primary']);
                            echo Html::a('Reset', ['site/index'], ['class' => 'btn btn-default']);
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                ActiveForm::end();
                ?>
            </div>


            <div class="col-lg-9">

                <?= GridView::widget([
                    'dataProvider' => $dataprovider,
                    'columns' => [
                        'id',
                        'name',
                        'at_work:boolean',
                        [
                            'attribute' => 'groups',
                            'value' => function ($model) {
                                return join(', ', ArrayHelper::getColumn($model->groups, 'group.name'));
                            }
                        ],
                        [
                            'attribute' => 'skills',
                            'value' => function ($model) {
                                return join(', ', ArrayHelper::getColumn($model->skills, 'skill.name'));
                            }
                        ]
//                    'created_at:datetime',
//                    'updated_at:datetime',
                    ]
                ]) ?>


            </div>
        </div>

    </div>
<?php Pjax::end() ?>