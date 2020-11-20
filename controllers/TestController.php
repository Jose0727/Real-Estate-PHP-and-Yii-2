<?php

namespace app\controllers;

use Dropbox\Exception;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\Test;
use app\models\User;

/**
 * AgentIdentificationController implements the CRUD actions for AgentIdentification model.
 */
class TestController extends Controller
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
     * Lists all AgentIdentification models.
     * @return mixed
     */
    public function actionIndex()
    {
        $testcsv=new Test();
        return $this->render('index',['model' => $testcsv]);
    }
    public function actionImportcsv()
    {  
        $model = new Test();
        $user  = ArrayHelper::map(User::find()->all(), 'id', 'username');

        if ($model->load(Yii::$app->request->post())) {
            $user_id=$_POST['Test']['user_id'];
            $date=date('Y-m-d h:i:s');
            $model->importfile = UploadedFile::getInstance($model, 'importfile');
//            print_r($model->importfile->extension);
//            exit();
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
            return $this->render('index', [
                'model' => $model,
                'user'=>$user,
                'data'=>$test_val
            ]);
            //return $this->redirect(['index','data'=>$test_val]);
            /* if($line_of_text[0]){
             $sql = "INSERT INTO details(name, age, location) VALUES ('$name', '$age', '$location')";
            $query = Yii::$app->db->createCommand($sql)->execute();
             }*/
            //echo "<pre>";print_r($line_of_text); die;

            //$model->save();
            /*if($model->save()){

               return $this->redirect(['add-search-terms','id'=>$model->id]);
            }*/

        } else {
            return $this->render('importproduct', [
                'model' => $model,
                'user'=>$user
            ]);
        }
    }

}
