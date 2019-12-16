<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\ModelStatus;
use Cocur\Slugify\Slugify;
use Yii;
use app\models\Coordinator;
use app\modules\admin\models\CoordinatorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CoordinatorController implements the CRUD actions for Coordinator model.
 */
class CoordinatorController extends Controller
{
   /**
    * {@inheritdoc}
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
    * Lists all Coordinator models.
    * @return mixed
    */
   public function actionIndex()
   {
      $searchModel = new CoordinatorSearch();
      $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

      return $this->render('index', [
          'searchModel' => $searchModel,
          'dataProvider' => $dataProvider,
      ]);
   }

   /**
    * Displays a single Coordinator model.
    * @param integer $id
    * @return mixed
    * @throws NotFoundHttpException if the model cannot be found
    */
   public function actionView($id)
   {
      return $this->render('view', [
          'model' => $this->findModel($id),
      ]);
   }

   /**
    * Creates a new Coordinator model.
    * If creation is successful, the browser will be redirected to the 'view' page.
    * @return mixed
    */
   public function actionCreate()
   {
      $model = new Coordinator();

      if ($model->load(Yii::$app->request->post())) {
         $slug = new Slugify();
         $logo = UploadedFile::getInstance($model, 'logo');
         if (!empty($logo)){
            $path = Yii::getAlias('@uploadsroot');
            $fileName = $slug->slugify($model->unversity) . '.' . $logo->extension;
            $logo->saveAs($path . '/logo/' . $fileName);
            $model->logo = $fileName;
         }
         ModelStatus::setTimeStampCreate($model);
         if ($model->save()) {
            ModelStatus::setNotifySuccesSaved();
            return $this->redirect(['index']);
         } else {
            ModelStatus::setNotifyErrorSaved();
         }


      }

      return $this->render('create', [
          'model' => $model,
      ]);
   }

   /**
    * Updates an existing Coordinator model.
    * If update is successful, the browser will be redirected to the 'view' page.
    * @param integer $id
    * @return mixed
    * @throws NotFoundHttpException if the model cannot be found
    */
   public function actionUpdate($id)
   {
      $model = $this->findModel($id);
      $oldLogo = $model->logo;

      if ($model->load(Yii::$app->request->post())) {
         $slug = new Slugify();
         $logo = UploadedFile::getInstance($model, 'logo');
         if(!empty($logo)){
            $path = Yii::getAlias('@uploadsroot');
            $fileName = $slug->slugify($model->unversity) . '.' . $logo->extension;
            $logo->saveAs($path . '/logo/' . $fileName);
            $model->logo = $fileName;
         }else{
            $model->logo = $oldLogo;
         }
         ModelStatus::setTimeStampUpdate($model);
         if ($model->save()) {
            ModelStatus::setNotifySuccesSaved();
            return $this->redirect(['index']);
         } else {
            ModelStatus::setNotifyErrorSaved();
         }
      }

      return $this->render('update', [
          'model' => $model,
      ]);
   }

   /**
    * Deletes an existing Coordinator model.
    * If deletion is successful, the browser will be redirected to the 'index' page.
    * @param integer $id
    * @return mixed
    * @throws NotFoundHttpException if the model cannot be found
    */
   public function actionDelete($id)
   {
      $this->findModel($id)->delete();

      return $this->redirect(['index']);
   }

   /**
    * Finds the Coordinator model based on its primary key value.
    * If the model is not found, a 404 HTTP exception will be thrown.
    * @param integer $id
    * @return Coordinator the loaded model
    * @throws NotFoundHttpException if the model cannot be found
    */
   protected function findModel($id)
   {
      if (($model = Coordinator::findOne($id)) !== null) {
         return $model;
      }

      throw new NotFoundHttpException('The requested page does not exist.');
   }
}
