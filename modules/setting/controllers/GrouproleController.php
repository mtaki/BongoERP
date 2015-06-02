<?php

namespace app\modules\setting\controllers;

use Yii;
use app\modules\setting\Models\GroupRole;
use app\modules\setting\Models\GroupRoleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GrouproleController implements the CRUD actions for GroupRole model.
 */
class GrouproleController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all GroupRole models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GroupRoleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GroupRole model.
     * @param string $group_id
     * @param string $role_id
     * @return mixed
     */
    public function actionView($group_id, $role_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($group_id, $role_id),
        ]);
    }

    /**
     * Creates a new GroupRole model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GroupRole();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'group_id' => $model->group_id, 'role_id' => $model->role_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing GroupRole model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $group_id
     * @param string $role_id
     * @return mixed
     */
    public function actionUpdate($group_id, $role_id)
    {
        $model = $this->findModel($group_id, $role_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'group_id' => $model->group_id, 'role_id' => $model->role_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing GroupRole model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $group_id
     * @param string $role_id
     * @return mixed
     */
    public function actionDelete($group_id, $role_id)
    {
        $this->findModel($group_id, $role_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GroupRole model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $group_id
     * @param string $role_id
     * @return GroupRole the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($group_id, $role_id)
    {
        if (($model = GroupRole::findOne(['group_id' => $group_id, 'role_id' => $role_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
