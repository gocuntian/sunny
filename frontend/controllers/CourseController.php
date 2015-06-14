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
    public function actionIndex($root)
    {

        $posts = Yii::$app->db->createCommand('select id,lvl,case when lvl = 0 then 0 else root end as root,name from tbl_product where root = '.$root.'  order by lft')
            ->queryAll();


        $content = Yii::$app->db->createCommand('select name,content from tbl_product where root = '.$root.' and lvl =0 order by lft')
            ->queryAll();

        $count = 0;
        $arr = array();
        $arr_new = array();
        foreach ($posts as $value) {
            $arr[$value['lvl']] = $value['id'];
            $arr_new[$count] = $value;
            if ($count != 0) {
                $arr_new[$count]['parent_id'] = $arr[$value['lvl'] - 1];
            }else{
                $arr_new[$count]['parent_id'] = '0';
            }
            $count++;
        }
        $arr_new = $this->tree($arr_new, $p_id = '0');
        $this->layout = '/index.php';
        return $this->render('index', [
            'model' => $arr_new, 'content' => array(array('content' => $content[0]['content'],'name' => $content[0]['name'])),
            'current_id'=>-1,
            'parent_id'=>-1,
        ]);
    }

    function tree($arr, $p_id = '0')
    {
        $tree = array();
        foreach ($arr as $row) {
            if ($row['parent_id'] == $p_id) {
                $tmp = $this->tree($arr, $row['id']);
                if ($tmp) {
                    $row['children'] = $tmp;
                }
                $tree[] = $row;
            }
        }
        return $tree;
    }

    public function actionView($id)
    {

        $posts = Yii::$app->db->createCommand('select id,lvl,name,case when lvl = 0 then 0 else root end as root,name from tbl_product where root = 1  order by lft')
            ->queryAll();

        $content = Yii::$app->db->createCommand('select name,content from tbl_product where id = '.$id.'  order by lft')
            ->queryAll();

//        print_r($content);

        $count = 0;
        $arr = array();
        $arr_new = array();

        $parent_id = -1;
        foreach ($posts as $value) {
            $arr[$value['lvl']] = $value['id'];
            $arr_new[$count] = $value;
            if ($count != 0) {
                $arr_new[$count]['parent_id'] = $arr[$value['lvl'] - 1];
            }else{
                $arr_new[$count]['parent_id'] = '0';
            }

            if($value['id'] == $id){
                $parent_id =$arr[$value['lvl'] - 1];
            }
            $count++;
        }
        $arr_new = $this->tree($arr_new, $p_id = '0');
        $this->layout = '/index.php';
        return $this->render('index', [
            'model' => $arr_new,
            'content' => array(array('content' => $content[0]['content'],'name' => $content[0]['name'])),
            'current_id'=>$id,
            'parent_id'=>$parent_id,
        ]);
    }


//    public function actionViewBackUp($id)
//    {
//        $this->layout = '/index.php';
//
//        $posts = Yii::$app->db->createCommand('select content from tbl_product where id = ' . $id)
////        $posts = Yii::$app->db->createCommand('select content from tbl_product where id = 1')
//            ->queryAll();
//
//
//        $posts1 = Yii::$app->db->createCommand('select id,lvl,case when lvl = 0 then 0 else root end as root,name from tbl_product order by lvl,lft')
//            ->queryAll();
//
////        print_r($posts);
//
//        function tree($arr, $p_id = '0')
//        {
//            $tree = array();
//            foreach ($arr as $row) {
//                if ($row['root'] == $p_id) {
//                    $tmp = tree($arr, $row['id']);
//                    if ($tmp) {
//                        $row['children'] = $tmp;
//                    }
//                    $tree[] = $row;
//                }
//            }
//            return $tree;
//        }
//
//        $arr1 = tree($posts1, 0);
//
//        return $this->render('index', [
//            'content' => $posts, 'model' => $arr1,
//        ]);
//
//    }

    /**
     * Displays a single TblProduct model.
     * @param integer $id
     * @return mixed
     */

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
