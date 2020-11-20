<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'csv Test';
$this->params['breadcrumbs'][] = $this->title;
//var_dump(Yii::$app->request->get('data[1][in1]'));
if(isset($data)){
    var_dump($data);
    //exit();
}
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
<link rel="stylesheet" href="<?php echo Yii::$app->request->baseUrl; ?>/themes/admin/files/css/bootstrap-datetimepicker.min.css">
<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/themes/admin/files/js/bootstrap-datetimepicker.min.js"></script>

<div class="product-index admin-garph-block">
    <h1><i class="fa fa-bars" aria-hidden="true"></i> <?= Html::encode($this->title) ?></h1>
    <div class="category-zx-section">
        <div class="vendorbtn-box">
            <?= Html::a('Create Product', ['create'], ['class' => 'btn  yellow-btn-box']) ?>
        </div>
        <div class="product-form">
            <?php $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
            ]);
            if(isset($data)){
                for($i=0; $i<count($data);$i++){?>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true,'value' => $data[$i+1]['in1']]) ?>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true, 'value'=>$data[$i+1]['in2']]) ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?= $form->field($model, 'company_name')->textInput(['maxlength' => true, 'value'=>$data[$i+1]['in4']]) ?>
                        </div>
                    </div>
                <?php } ?>

            <?php } else{?>
                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <?= $form->field($model, 'first_name')->textInput(['maxlength' => true,'value' =>'']) ?>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <?= $form->field($model, 'date_of_birth'); ?>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <?= $form->field($model, 'time_line')->textInput(['type'=>'time','value'=>'01:55:05']); ?>
                    </div>
                </div>
           <?php }?>
            <div class="row">
            <div class="form-group">
                <div class="btn btn-warning" id="new_create">Test Window</div>
                <?= Html::a('Import csv file', ['test/importcsv'], ['class' => 'btn btn-primary btn-uniform']);  ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


    <script>
        var j = jQuery.noConflict();
        j( function() {
            j("#test-date_of_birth").datepicker({

            });
        } );
        j(document).on('ready',function () {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            h = checkTime(h);
            m = checkTime(m);
            s = checkTime(s);
            var today_time= h + ":" + m + ":" + s;
            j('#test-time_line').val(today_time);

            //document.getElementById("demo").innerHTML = d.toLocaleTimeString();

        });
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
    </script>