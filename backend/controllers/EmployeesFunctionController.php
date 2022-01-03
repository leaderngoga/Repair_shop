<?php

namespace backend\controllers;

use backend\models\EmployeesFunction;
use backend\models\EmployeesFunctionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EmployeesFunctionController implements the CRUD actions for EmployeesFunction model.
 */
class EmployeesFunctionController extends Controller
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
     * Lists all EmployeesFunction models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmployeesFunctionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EmployeesFunction model.
     * @param int $employees_function_id Employees Function ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($employees_function_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($employees_function_id),
        ]);
    }

    /**
     * Creates a new EmployeesFunction model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EmployeesFunction();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'employees_function_id' => $model->employees_function_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing EmployeesFunction model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $employees_function_id Employees Function ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($employees_function_id)
    {
        $model = $this->findModel($employees_function_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'employees_function_id' => $model->employees_function_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing EmployeesFunction model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $employees_function_id Employees Function ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($employees_function_id)
    {
        $this->findModel($employees_function_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EmployeesFunction model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $employees_function_id Employees Function ID
     * @return EmployeesFunction the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($employees_function_id)
    {
        if (($model = EmployeesFunction::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
