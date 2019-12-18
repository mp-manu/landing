<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\ModelStatus;
use Cocur\Slugify\Slugify;
use Yii;
use app\models\News;
use app\modules\admin\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
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
    * Lists all News models.
    * @return mixed
    */
   public function actionIndex()
   {
      $searchModel = new NewsSearch();
      $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

      return $this->render('index', [
          'searchModel' => $searchModel,
          'dataProvider' => $dataProvider,
      ]);
   }

   /**
    * Displays a single News model.
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
    * Creates a new News model.
    * If creation is successful, the browser will be redirected to the 'view' page.
    * @return mixed
    */
   public function actionCreate()
   {
      $model = new News();

      if ($model->load(Yii::$app->request->post())) {
         $date = $_POST['publish_date'];

         $d = explode('/', $date);
         $model->publish_date = $d[2].'-'.$d[0].'-'.$d[1];
         $slug = new Slugify();
         $photo = UploadedFile::getInstance($model, 'photo');
         if (!empty($photo)) {
            $path = Yii::getAlias('@uploadsroot');
            $fileName = $slug->slugify($model->title) . '.' . $photo->extension;
            $photo->saveAs($path . '/news/' . $fileName);
            $model->photo = $fileName;
         }
         ModelStatus::setTimeStampCreate($model);
         ModelStatus::setTimeStampUpdate($model);
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
    * Updates an existing News model.
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
         $date = $_POST['publish_date'];

         $d = explode('/', $date);
         $model->publish_date = $d[2].'-'.$d[0].'-'.$d[1];
         $slug = new Slugify();
         $photo = UploadedFile::getInstance($model, 'photo');
         if (!empty($photo)) {
            $path = Yii::getAlias('@uploadsroot');
            $fileName = $slug->slugify($model->title) . '.' . $photo->extension;
            $photo->saveAs($path . '/news/' . $fileName);
            $model->photo = $fileName;
         } else {
            $model->photo = $oldPhoto;
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
    * Deletes an existing News model.
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
    * Finds the News model based on its primary key value.
    * If the model is not found, a 404 HTTP exception will be thrown.
    * @param integer $id
    * @return News the loaded model
    * @throws NotFoundHttpException if the model cannot be found
    */
   protected function findModel($id)
   {
      if (($model = News::findOne($id)) !== null) {
         return $model;
      }

      throw new NotFoundHttpException('The requested page does not exist.');
   }
}
