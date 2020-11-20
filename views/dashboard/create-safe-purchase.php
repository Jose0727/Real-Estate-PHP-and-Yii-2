<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Safe Purchase';
/* @var $this yii\web\View */
/* @var $model app\models\SafePurchase */
/* @var $form yii\widgets\ActiveForm */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><a href="javascript:void(0);" class="remove_button"><img src="http://demos.codexworld.com/add-remove-input-fields-dynamically-using-jquery/remove-icon.png" style="display: inline-block;"/></a><input type="file" name="SafePurchase[image][]" value="" class="form-control" style="width:46%;display: inline-block;"/><input type="text" name="SafePurchase[more_items][]" value="" class="form-control" style="width:46%;display: inline-block;"/></div><br>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
<section class="product-block">
     <div class="container">
          <h2>Safe Purchase</h2>
<div class="safe-purchase-form">
    <p>
        
        This is a non bank card online cash payment service.<br>


Members can find items that they want to buy online and ask WebPicID to pay for them.<br>


<h3>How does it work?</h3>


A Member finds an item(s) that they want to purchase online.<br>


The Member goes through the process including completing the shopping cart.<br>


The Member does not pay for the items.<br>


<h3>The Member logs off the merchant website logs on to WebPicID.</h3>


The Member selects Secure Message<br>

Sends a message to SafePurchse@WebPicID.com<br>


In the subject line the member enters:<br>


First Name, Last Name, Deposit code, Merchant website, The Member Merchant site Account UserID, and password, and the total amount of the sale.<br>

In the body cannot be blank so put in a comment or at least 1 character.<br>

The Member presses Send.<br>


<h3>What Happens now?</h3>


WebPicID logs on to the Merchant website using the Members account.<br>

Goes to the cart<br>

Enters the payment information<br>

Pays for the item(s).<br>

The Merchant ships the goods to the Member.<br>

The order confirmation, delivery date, and tracking information is sent to the Member by the Merchant.<br>



The Member must have deposited enough funds to pay for the purchase before WebPicID will make the purchase.<br>

The member can make the purchase and go into a WebPicID the bank branch make and report the payment on the next banking day.<br>



Member financial information is NOT sent over the net to the Merchant or WebPicID.<br>
    </p>
    </div>
</div>
</section>

 <section class="product-block">
     <div class="container">
          <h2>Safe Purchase</h2>
<div class="safe-purchase-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    
    
    <?= $form->field($model, 'vendor_name')->textInput() ?>
    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'total_amount')->textInput() ?>
    <?= $form->field($model, 'cart_user_id')->textInput() ?>
    <?= $form->field($model, 'cart_password')->textInput() ?>
    

    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</section> 