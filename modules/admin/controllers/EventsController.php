<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\ModelStatus;
use Cocur\Slugify\Slugify;
use Yii;
use app\models\Events;
use app\modules\admin\models\EventsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * EventsController implements the CRUD actions for Events model.
 */
class EventsController extends Controller
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
    * Lists all Events models.
    * @return mixed
    */
   public function actionIndex()
   {
      $searchModel = new EventsSearch();
      $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

      return $this->render('index', [
          'searchModel' => $searchModel,
          'dataProvider' => $dataProvider,
      ]);
   }

   /**
    * Displays a single Events model.
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
    * Creates a new Events model.
    * If creation is successful, the browser will be redirected to the 'view' page.
    * @return mixed
    */
   public function actionCreate()
   {
      $model = new Events();

      if ($model->load(Yii::$app->request->post())) {
         $date_from = $_POST['start'];
         $date_end = $_POST['end'];
         $s = explode('/', $date_from);
         $e = explode('/', $date_end);
         $model->date_from = $s[2].'-'.$s[0].'-'.$s[1];
         $model->date_to = $e[2].'-'.$e[0].'-'.$e[1];
         $slug = new Slugify();
         $photo = UploadedFile::getInstance($model, 'photo');
         if (!empty($photo)) {
            $path = Yii::getAlias('@uploadsroot');
            $fileName = $slug->slugify($model->title) . '.' . $photo->extension;
            $photo->saveAs($path . '/events/' . $fileName);
            $model->photo = $fileName;
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
    * Updates an existing Events model.
    * If update is successful, the browser will be redirected to the 'view' page.
    * @param integer $id
    * @return mixed
    * @throws NotFoundHttpException if the model cannot be found
    */
   public function actionUpdate($id)
   {
      $model = $this->findModel($id);
      $oldPhoto = $model->photo;
      if ($model->load(Yii::$app->request->post())) {
         $date_from = $_POST['start'];
         $date_end = $_POST['end'];
         $s = explode('/', $date_from);
         $e = explode('/', $date_end);
         $model->date_from = $s[2].'-'.$s[0].'-'.$s[1];
         $model->date_to = $e[2].'-'.$e[0].'-'.$e[1];
         $slug = new Slugify();
         $photo = UploadedFile::getInstance($model, 'photo');
         if(!empty($photo)){
            $path = Yii::getAlias('@uploadsroot');
            $fileName = $slug->slugify($model->title) . '.' . $photo->extension;
            $photo->saveAs($path . '/events/' . $fileName);
            $model->photo = $fileName;
         }else{
            $model->photo = $oldPhoto;
         }
         ModelStatus::setTimeStampUpdate($model);
         if($model->save()){
            ModelStatus::setNotifySuccesSaved();
            return $this->redirect(['index']);
         }else {
            ModelStatus::setNotifyErrorSaved();
         }
      }

      return $this->render('update', [
          'model' => $model,
      ]);
   }

   /**
    * Deletes an existing Events model.
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
    * Finds the Events model based on its primary key value.
    * If the model is not found, a 404 HTTP exception will be thrown.
    * @param integer $id
    * @return Events the loaded model
    * @throws NotFoundHttpException if the model cannot be found
    */
   protected function findModel($id)
   {
      if (($model = Events::findOne($id)) !== null) {
         return $model;
      }

      throw new NotFoundHttpException('The requested page does not exist.');
   }
}
