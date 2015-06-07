<?php

namespace frontend\controllers;

use Yii;
use backend\models\TblProduct;
use backend\models\TblProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CourseController implements the CRUD actions for TblProduct model.
 */
class CourseController extends Controller
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
     * Lists all TblProduct models.
     * @return mixed
     */
    public function actionIndex()
    {

// return a set of rows. each row is an associative array of column names and values.
// an empty array is returned if no results
        $posts = Yii::$app->db->createCommand('select id,root,lvl from tbl_product order by lvl,lft')
            ->queryAll();

        foreach ($posts as $value) {
            foreach ($value as $k => $v) {
                echo ' ------  ' . $k . ' : ' . $v;
            }
            echo '<br>';
        }

        $this->layout = '/index.php';
//
//        $searchModel = new TblProductSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
        return $this->render('index', [
            'model' => $posts
        ]);
    }

    /**
     * Displays a single TblProduct model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TblProduct model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
//    public function actionCreate()
//    {
//        $model = new TblProduct();
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->render('create', [
//                'model' => $model,
//            ]);
//        }
//    }

    /**
     * Updates an existing TblProduct model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
//    public function actionUpdate($id)
//    {
//        $model = $this->findModel($id);
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->render('update', [
//                'model' => $model,
//            ]);
//        }
//    }

    /**
     * Deletes an existing TblProduct model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
//    public function actionDelete($id)
//    {
//        $this->findModel($id)->delete();
//
//        return $this->redirect(['index']);
//    }

    /**
     * Finds the TblProduct model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TblProduct the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TblProduct::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
