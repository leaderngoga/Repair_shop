<?php

namespace backend\controllers;

use backend\models\UserLevel;
use backend\models\UserLevelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserLevelController implements the CRUD actions for UserLevel model.
 */
class UserLevelController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all UserLevel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserLevelSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserLevel model.
     * @param int $user_level_id User Level ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($user_level_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($user_level_id),
        ]);
    }

    /**
     * Creates a new UserLevel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserLevel();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'user_level_id' => $model->user_level_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UserLevel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $user_level_id User Level ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($user_level_id)
    {
        $model = $this->findModel($user_level_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'user_level_id' => $model->user_level_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UserLevel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $user_level_id User Level ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($user_level_id)
    {
        $this->findModel($user_level_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UserLevel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $user_level_id User Level ID
     * @return UserLevel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($user_level_id)
    {
        if (($model = UserLevel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
