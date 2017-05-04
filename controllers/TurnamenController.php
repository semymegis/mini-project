<?php

namespace app\controllers;

use Yii;
use app\models\Turnamen;
use app\models\TurnamenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TurnamenController implements the CRUD actions for Turnamen model.
 */
class TurnamenController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Turnamen models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->redirect('create');
    }

    /**
     * Displays a single Turnamen model.
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
     * Creates a new Turnamen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Turnamen();

        if(!Yii::$app->user->isGuest) {
        $userid= Yii::$app->user->identity->id;
        }
        else {
            $userid="0";
        }

     
        $models = Turnamen::find()
        ->where(['user_id' => $userid])
        ->count();

        $models2 = Turnamen::find()
        ->where(['user_id' => $userid])
        ->one();

       
          if(!Yii::$app->user->isGuest) {


                    if($models == 0) {

               
                    $model->user_id = $userid;
                        
                    $model->created_date = date("D-M-Y H:i:s");
                    if ($model->load(Yii::$app->request->post()) && $model->save()) {

                        return $this->redirect(['berhasil', 'id' => $model->team_id]);
                    } else {
                        return $this->render('create', [
                            'model' => $model,
                        ]);
                    }

                }
                else {
                    return $this->redirect(['berhasil', 'id' => $models2->team_id]);
                }

              
                

    }   else {
         throw new NotFoundHttpException('The requested page does not exist.');
    }
    }

    public function actionBerhasil($id)
    {
             if(!Yii::$app->user->isGuest) {

        return $this->render('berhasil', [
            'model' => $this->findModel($id),
        ]);

           } else {
                 throw new NotFoundHttpException('The requested page does not exist.');
           
        }
    }

    /**
     * Updates an existing Turnamen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->team_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Turnamen model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Turnamen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Turnamen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Turnamen::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
