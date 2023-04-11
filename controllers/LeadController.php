<?php

namespace app\controllers;

use app\models\Lead;
use app\models\LeadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LeadController implements the CRUD actions for Lead model.
 */
class LeadController extends Controller
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
     * Lists all Lead models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LeadSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Lead model.
     * @param int $id_lead Id Lead
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_lead)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_lead),
        ]);
    }

    /**
     * Creates a new Lead model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Lead();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_lead' => $model->id_lead]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Lead model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_lead Id Lead
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_lead)
    {
        $model = $this->findModel($id_lead);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_lead' => $model->id_lead]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Lead model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_lead Id Lead
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_lead)
    {
        $this->findModel($id_lead)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Lead model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_lead Id Lead
     * @return Lead the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_lead)
    {
        if (($model = Lead::findOne(['id_lead' => $id_lead])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
