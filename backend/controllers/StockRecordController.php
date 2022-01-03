<?php

namespace backend\controllers;

use backend\models\StockRecord;
use backend\models\StockRecordSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StockRecordController implements the CRUD actions for StockRecord model.
 */
class StockRecordController extends Controller
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
     * Lists all StockRecord models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StockRecordSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StockRecord model.
     * @param int $stock_id Stock ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($stock_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($stock_id),
        ]);
    }

    /**
     * Creates a new StockRecord model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StockRecord();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'stock_id' => $model->stock_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing StockRecord model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $stock_id Stock ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($stock_id)
    {
        $model = $this->findModel($stock_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'stock_id' => $model->stock_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing StockRecord model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $stock_id Stock ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($stock_id)
    {
        $this->findModel($stock_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StockRecord model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $stock_id Stock ID
     * @return StockRecord the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($stock_id)
    {
        if (($model = StockRecord::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
