
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			
			<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//header("Refresh: 60;url='".$_SERVER['REQUEST_URI']."'");
/* @var $this yii\web\View */
////echo $this->render('_slider',['data'=>$data]);
$this->title = 'Merchant Services';
$model = \app\models\UserProfile::findProfileByUserId(Yii::$app->user->id);
$name=$model->first_name." ".$model->last_name;
?>
<div class="container">
	<div class="row">
		<div itemprop="articleBody">
		<h2><strong>Merchant Services</strong></h2><br>
		<h3><strong>Identity Theft Fraud Loss Reduction</strong></h3>
		<p>
			Process the sale including taking payment. <br>
Tell the Buyer: <br>
"We use WebPicID to verify your identity to protect you from ID Theft Losses.<br>
"Please to go to WebPicID.com and verify your identity.<br>
The goods or services are not released until the Buyer responds: <br><br>

<strong>Authorized</strong> &nbsp;&nbsp;The Buyer verified their identity and Authorized the sale.<br>
<strong>Declined</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Buyer verified their identity and Declined the sale.<br>
<strong>Fraud</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Buyer verified their identity and authorized the sale.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The sale is canceled.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WebPicID sends a Fraud Report to the Buyer and the Merchant.<br>
<strong>Ignored</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nothing happens until the buyer verifies their identity.<br><br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>In all theses possible out comes there is no fraud loss to either party. </strong>

		</p>
		<h2><strong>New Markets</strong></h2><br>
		<h3><br><strong>Safe Purchase</strong></h3>
		<p>WebPicID can process charge-back free, cash payments online purchase for Members.</p>
		<h3><strong>Family Protection</strong></h3>
		<p>Members can add their children as Members<br>
The Parent can set a weekly or monthly allowance for children age 5-18.<br>
The child asks WebPicID to make a purchase for them.<br>
WebPicID makes the purchase and ships the goods or services to the Parent.<br>
</p>
<h3><strong>50 million people are afraid</strong></h3><p> to make an online purchase due to a potential ID Theft Loss.</p>

			</div><br><br><br>
		</div>
	</div>
</div>