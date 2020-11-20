<?php

namespace app\modules\backend\controllers;

use Yii;
use app\models\AccountStatement;
use app\models\User;
use app\models\AccountStatementSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

/**
 * AccountStatementController implements the CRUD actions for AccountStatement model.
 */
class AccountStatementController extends Controller
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
     * Lists all AccountStatement models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AccountStatementSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AccountStatement model.
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
     * Creates a new AccountStatement model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AccountStatement();
        $detail_link= AccountStatement::find()->select(['detail_link'=>'( MAX(`detail_link`)+ 1) '])->one()->detail_link;  
            $model->date=date('Y-m-d');
            $model->time=date('H:i:s');
            $model->detail_link=$detail_link;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    public function actionImportcsv()
    {
        $model = new AccountStatement();
        $user  = ArrayHelper::map(User::find()->all(), 'id', 'username');

        if ($model->load(Yii::$app->request->post())) {
            $date=date('Y-m-d h:i:s');
            $model->importfile = UploadedFile::getInstance($model, 'importfile');
            if($model->importfile->extension !='csv')
            {
                $model->addError('importfile', 'The file formate should be csv');
                return $this->render('importproduct', [
                    'model' => $model,
                    'user'=>$user
                ]);
            }
            $time = time();
            $model->importfile->saveAs('csv/' .$time. '.' . $model->importfile->extension);
            $importfile = 'csv/' .$time. '.' . $model->importfile->extension;
            $file_handle = fopen($importfile, 'r');
            while (!feof($file_handle) ) {
                $line_of_text[] = fgetcsv($file_handle, 1000, ",");
            }
            fclose($file_handle);

            $i=1; foreach ($line_of_text as $key => $value) {
                if($i!=1 && !empty($value)){

                    $test_val[$i-1]=array('in1'=>$value[0],
                        'in2'=>$value[1],
                        'in3'=>$value[2],
                        'in4'=>$value[3],
                        'in5'=>$value[4],);
                }

                $i++;}
            $data=array();
            $data=$test_val;
            Yii::$app->getSession()->setFlash('success','sucessfully import your file');
            return $this->render('create', [
                'model' => $model,
                'data'=>$test_val
            ]);
        } else {
            return $this->render('importproduct', [
                'model' => $model,
                'user'=>$user
            ]);
        }
    }
    /**
     * Updates an existing AccountStatement model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
            $model->date=date('Y-m-d');
            $model->time=date('H:i:s');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AccountStatement model.
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
     * Finds the AccountStatement model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AccountStatement the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AccountStatement::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
