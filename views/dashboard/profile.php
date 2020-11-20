<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
$this->title = 'Edit Profile';
$this->params['breadcrumbs'][] = $this->title;
$id=Yii::$app->getRequest()->getQueryParam('id');
if($model->image){
$pic_image=$model->image;
}
else {
$pic_image='avtar.jpg';
}
 $ans=  \app\models\ProfileQuestionAnswer::find()->where(['user_id'=>Yii::$app->user->id])->all();
 $array=array();
 if(!empty( $ans)){
foreach($ans as $key=>$value){
    if($value['question_id']==1){
        $array['1']=$value['answer'];
    }
    if($value['question_id']==2){
        $array['2']=$value['answer'];
    }
    if($value['question_id']==3){
        $array['3']=$value['answer'];
    }
    if($value['question_id']==4){
        $array['4']=$value['answer'];
    }
    if($value['question_id']==5){
        $array['5']=$value['answer'];
    }
    if($value['question_id']==6){
        $array['6']=$value['answer'];
    }
    if($value['question_id']==7){
        $array['7']=$value['answer'];
    }
    if($value['question_id']==8){
        $array['8']=$value['answer'];
    }
    if($value['question_id']==9){
        $array['9']=$value['answer'];
    }
}
     
//  $question_ans->answer=$array; 
}

?>
<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="product-block">
      <div class="product-box">
        <h2><i class="fa fa-pencil" aria-hidden="true"></i> <?php echo Html::encode($this->title) ?></h2>
        <div class="profile-form clearfix category-zx-section">
          <?php $form = ActiveForm::begin(['id' => 'profile-form','options'=>['enctype' => 'multipart/form-data']]); ?>
          
          
          
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="row-fluid">
                <div class="col-md-6 col-sm-6">
                  <?= $form->field($model, 'first_name')->textInput(['maxlength' => 200]) ?>
                </div>
                <div class="col-md-6 col-sm-6">
                  <?= $form->field($model, 'last_name')->textInput(['maxlength' => 200]) ?>
                </div>
              </div>
              <div class="row-fluid">
                <div class="col-md-6 col-sm-6">
                  <?= $form->field($user, 'username')->textInput(['maxlength' => 200,'readonly' => true]) ?>
                </div>
                <div class="col-md-6 col-sm-6">
                  <?= $form->field($user, 'email')->textInput(['maxlength' => 200,'readonly' => true]) ?>
                </div>
              </div>
              <div class="row-fluid">
                <div class="col-md-6 col-sm-6">
                  <?= $form->field($model, 'phone_no')->textInput(['maxlength' => 200]) ?>
                </div>
                <div class="col-md-6 col-sm-6">
                  <?= $form->field($model, 'city')->textInput(['maxlength' => 200]) ?>
                </div>
              </div>
              <div class="row-fluid">
                <div class="col-md-12 col-sm-12">
                  <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>
                </div>
              </div>
              <div class="row-fluid">
                <div class="col-md-6 col-sm-6">
                  <?= $form->field($model, 'state')->textInput(['maxlength' => 200]) ?>
                </div>
                <div class="col-md-6 col-sm-6">
                  <?= $form->field($model, 'country_id')->dropDownList($countries_list,['prompt'=>'Select your country']) ?>
                </div>
              </div>
             <div class="row-fluid">
                 <div class="col-md-6 col-sm-6">
                      <?= $form->field($question_ans, 'answer['.$question[0]['id'].']')->textInput()->label($question[0]['question']) ?>
                 </div>
                 <div class="col-md-6 col-sm-6">
                      <?= $form->field($question_ans, 'answer['.$question[1]['id'].']')->textInput()->label($question[1]['question']) ?>
                </div>
             </div>
              <div class="row-fluid">
                 <div class="col-md-6 col-sm-6">
                      <?= $form->field($question_ans, 'answer['.$question[2]['id'].']')->textInput()->label($question[2]['question']) ?>
                 </div>
                 <div class="col-md-6 col-sm-6">
                      <?= $form->field($question_ans, 'answer['.$question[3]['id'].']')->textInput()->label($question[3]['question']) ?>
                </div>
             </div>
              <div class="row-fluid">
                 <div class="col-md-6 col-sm-6">
                      <?= $form->field($question_ans, 'answer['.$question[4]['id'].']')->textInput()->label($question[4]['question']) ?>
                 </div>
                 <div class="col-md-6 col-sm-6">
                      <?= $form->field($question_ans, 'answer['.$question[5]['id'].']')->textInput()->label($question[5]['question']) ?>
                </div>
             </div>
              <div class="row-fluid">
                 <div class="col-md-6 col-sm-6">
                      <?= $form->field($question_ans, 'answer['.$question[6]['id'].']')->textInput()->label($question[6]['question']) ?>
                 </div>
                 <div class="col-md-6 col-sm-6">
                      <?= $form->field($question_ans, 'answer['.$question[7]['id'].']')->textInput()->label($question[7]['question']) ?>
                </div>
             </div>
             <div class="row-fluid">
                 <div class="col-md-6 col-sm-6">
                      <?= $form->field($question_ans, 'answer['.$question[8]['id'].']')->textInput()->label($question[8]['question']) ?>
                 </div>
               
             </div>
             <div class="desktop-show"> 
              <div class="row-fluid">
                <div class="col-md-12 col-sm-12 ">
                  <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
                  <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-primary']) ?>
                </div>
              </div>
              </div> 

            </div>


            <div class="col-md-6 col-sm-6 img-file">
             <!-- <div class="row-fluid width-center">
                <div class="col-md-12 col-sm-12">
                  <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/profile/<?php echo $pic_image;?>" alt="profile picture">
                </div>
                <div class="col-md-12 col-sm-12 text-center">
                  <?= $form->field($model, 'image')->fileInput(['maxlength' => 200]) ?>
                </div>
              </div>-->
            
            <div class="mobile-show"> 
             <div class="row-fluid text-center">
               <div class="col-md-12 col-sm-12 ">
                 <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
                 <?= Html::a('Cancel', ['index'], ['class' => 'btn btn-primary']) ?>
               </div>
             </div>
            </div>


            </div>


          </div>
          
          <div class="nor-space"></div>
          <?php ActiveForm::end(); ?>
        </div>
      </div>
    </div>
  </div>
 
</div>
