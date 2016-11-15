<?php

namespace app\controllers;

use app\models\Employee;
use app\models\FilterForm;
use app\models\GroupToEmployee;
use app\models\SkillToEmployee;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Employee::find()->joinWith(['groups', 'skills']);
        $filter = new FilterForm();
        $filter->load(Yii::$app->request->post());

        if ($filter->name) {
            $query->andFilterWhere(['like', 'name', '%' . $filter->name . '%', false]);
        }

        if ($filter->group_id) {
            $query->andFilterWhere([GroupToEmployee::tableName() . '.group_id' => $filter->group_id]);
        }

        if ($filter->skill_id) {
            $query->andFilterWhere([SkillToEmployee::tableName() . '.skill_id' => $filter->skill_id]);
        }

        if ($filter->at_work !== '') {
            $query->andFilterWhere(['at_work' => $filter->at_work]);
        }

        $dataprovider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', compact('dataprovider', 'filter'));
    }
}
