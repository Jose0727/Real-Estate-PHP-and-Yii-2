<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//header("Refresh: 60;url='".$_SERVER['REQUEST_URI']."'");
/* @var $this yii\web\View */
////echo $this->render('_slider',['data'=>$data]);
$this->title = 'Terms and Conditions';
$model = \app\models\UserProfile::findProfileByUserId(Yii::$app->user->id);
$name=$model->first_name." ".$model->last_name;
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div itemprop="articleBody">
				<h2 class="western">Terms and Conditions</h2>
				<p><br> Web Picture Identification Inc. O/A WebPicID, is herein, referred to as WebPicID in this document.<br> Individuals agree to these Terms and Conditions and Privacy Policy.<br> Organizations agree to these Terms and Conditions and Privacy Policy.<br> An organization is defined as:One or more persons A partnership. An incorporated company A charity A non profit A government.</p>
				<h3 class="western">Members and Merchant Employee Members, MEM’s, agree to these Terms and Conditions and Privacy Policy.</h3>
				<h2 class="western">Membership</h2>
				<p>I agree to:<br> Only have one individual Membership.<br> 1 Provide my name, email address, picture, and date of birth.<br> 2 Provide and keep my home address current. (This is for your protection.)<br> 3 Report any name changes the next time I Log On. (This again is for your protection.)<br> 4 The WebPicID Terms and Conditions and Privacy Policy.<br> 5 To create a log on with a password and a challenge word.<br> 6 To Activate my Web Camera and Microphone.<br> 7 To provide a picture a every time I log on.<br> 8 To provide 3 pieces of identification to WebPicID.<br> &nbsp; &nbsp; &nbsp;8.1 Primary ID Government Issued Picture ID : Driver’s License, Passport, or Other.<br> &nbsp; &nbsp; &nbsp;8.2 Secondary ID Unused Picture ID or a Birth Certificate (A Birth Certificate is required for child Members)<br> &nbsp; &nbsp; &nbsp;8.3 Address ID Any utility statement or Bank or Broker statement dated in the last 30 days.<br> &nbsp; &nbsp; &nbsp;8.4 To provide a witness to look at the ID documents.<br> &nbsp; &nbsp; &nbsp;8.5 To enter the ID information on to the WebPicID Identification Document and Agent affirmation screen.<br> &nbsp; &nbsp; &nbsp;8.6 To allow the witness (anyone 13+ years old) to look at the ID documents and verify that the information on the Identity Document and Agent Affirmation screen matches.</p>
				<h2 class="western">Act of Agency</h2>
				<p>1 The Agency is limited to:</p>
				<p>2 Looking at the identification documents.</p>
				<p>3 Looking at the identification information entered on Identification Document and Agent Affirmation page.</p>
				<p>4 Providing a name and email address.</p>
				<p>5 Agree to the WebPicID Terms and Conditions and the Privacy Policy.</p>
				<p>6 Provide a picture&nbsp;</p>
				<p>7 Affirming that the information on the documents and the Identification Document and Agent Affirmation page match.</p>
				<p>8 Agents under the age of 18 can only become a Member via the Family Protection service.</p>
				<p>9 Agents are paid a fee for each act of Agency when they verify their identity at WebPicID.com and the individual pay for the act of Agency.</p>
				<p><b>Duties</b></p>
				<p>The Agent Agrees to the WebPicID Terms and Conditions and Privacy Policy.</p>
				<p>The Agent looks at the original ID documents and the Identification Document and Agent Affirmation page entries.</p>
				<p>The Agent provides their name and email address and a picture.</p>
				<p>The Agent does not need to to touch the ID document and is not to copy the information.</p>
				<p>The Act of Agency is completed once the Agent Affirms that the information in the ID documents matches the information on the Identification Document and Agent affirmation pages.</p>
				<p>Agents under the age of 18 can only become Members via Family Protection.</p>
				<p>Agents are paid by a credit to their WebPicID account when the Membership is paid.</p>
				<p><b>Memberships</b></p>
				<p>Individuals can only have one WebPicID Membership.</p>
				<p>Merchant Employee Members Memorably have one Merchant Employee Membership MEM for each Merchant employer.</p>
				<p>Individuals may have more than 1 MEM for different employers.</p>
				<p>MEM’s cannot act as an Agent for WebPicID. They must become a Member to act as an Agent.</p>
				<h2 class="western">Family Protection</h2>
				<p>Any parent or guardian can protect their family with WebPicID Memberships. The Member setting up the service is the Administrator/Parent/Guardian herein the APG The APG agrees to Act as the Agent for WebPicID.<br> The Agent agrees to accept only one Agent fee to verify the identity of all of the new Family Members.<br> A Family is defined as at least 1 adult and 1 or more persons living at the same address.<br> <br> The APG authorizes WebPicID to making online purchases for the children age 5+ by setting spending limit for each child from their funds.</p>
				<p>The APG can set a weekly allowance and a purchase maximum for each child. If a purchase exceeds the funds on hand then the purchase is canceled.<br> All items purchased by a child are sent to the APG to give to the child.<br> The APG is notified about the details of all purchases by child Members.<br> The APG authorizes all children age 13+ to work as an Agent for WebPicID. The administrator can designate an alternate APG.</p>
				<p><b><br> Identification documents for children </b></p>
				<p><b>For infant, 1 day to 6 years old</b></p>
				<p>Primary Picture ID if available or a picture with a Parent</p>
				<p>Secondary A birth certificate</p>
				<p>Address A letter from the government or a doctor referring to the child.<br> </p>
				<p>For children 6-18<br> </p>
				<p>Primary Government issued Picture Identification:</p>
				<p>Passport, drivers license, school picture ID, another government issued picture ID</p>
				<p>Secondary Identification Document</p>
				<p>Birth certificate with the parent’s name in mandatory.</p>
				<p>Address identification</p>
				<p>A letter addressed to the child</p>
				<p>A statement, letter, or utility bill in the child’s name or referring to the child.</p>
				<h2 class="western">Secure Message&nbsp;</h2>
				<p>You can send messages that only you and the recipient can read.<br> The message never leaves the WebPicID server.</p>
				<p>The sender is responsible to notify the recipient of the Secure Message that they have a Secure Message by email phone or social media.</p>
				<h2 class="western">Secure Document Storage</h2>
				<p>Your computer may not be secure. Your phone, table, and laptop are less secure.<br> They can be lost.<br> Create a Secure Message and attach the document and then place it in a folder.<br> You are the only person with access the the document.<br> It can be down loaded to your laptop, your phone, or tablet for display.</p>
				<h2 class="western">Safe Purchase</h2>
				<p>Members can have WebPicID make a online purchase for them.<br> Report Abuse<br> if you do not like what someone said or did on WebPicID let use know we will investigate.<br> Identify a predator<br> If someone is your new best friend but now they need your money to do something; let us know.<br> We work anonymously to check them out.</p>
				<h2 class="western">Identity Theft Fraud Loss Reduction</h2>
				<p>Use Secure Message to make on online purchase without provides a bank card online.</p>
				<p>Shop at WebPicID Merchants</p>
				<p>Notification</p>
				<p>The Merchant processes the sale and take payment.</p>
				<p>The Merchant advises the Buyer:</p>
				<p>“We protect you from IDentity Theft Fraud Losses by using WebPicID to verify your identity.”</p>
				<p>Please go to <a href="http://www.WebPicID.com/">www.WebPicID.com</a> and verify your identity.</p>
				<p>We do not release the goods or services for shipping until you have authorized the sale at WebPicID.</p>
				<p>There are only 4 responses to a Notification.</p>
				<p>Authorized The Member verified their identity and authorized the sale. The goods are shipped</p>
				<p>Declined The Member verified their identity and declined the sale. The sale and payment are canceled.</p>
				<p>Ignored The Member ignored the notification or refused to sign up and verify their identity. Nothing happens.</p>
				<p>Fraud The Member verified their identity and declined the sale as a Fraud. The sale is canceled. Payment is canclled.</p>
				<p>A Fraud report is sent to the Member and the Merchant via Secure Message.</p>
				<p><b>In all cases there is no fraud loss to either party.</b></p>
				<p>WebPicID send a Fraud report to both parties via secure Message.</p>
				<p><b>Refer a organization</b></p>
				<p>Members who can refer an organization to sign up with WebPicID will get a 10% referral fee of the ID Theft Fraud Loss Reduction revenue for 5 years.</p>
				<p>The organization must name the Referring Member as the person that referred WebPicID to them.</p>
				<p><b>Share an organization</b></p>
				<p>Members can share any number of organizations once a day. They will be entered into a pool for a percentage of the ID Theft Fraud Loss Reduction Revenue.</p>
				<p>Once the Organization becomes a Member then the pool is closed. All of the Members who shared the organization gets a cut of 10% od the ID Theft Loss Revenue for the Merchant for 5 years.</p>
				<p>Everyone gets portion based on the number of their recorded shares.</p>
				<p>WebPicID only charges a fee for successfully stopping a fraud.<br> </p>
				<p>The Merchant agrees to indemnify WebPicID from any losses associated in using the WebPicID services.<br> We need to comply with KYC regulations and the requirements can be seen under Documents Required for most companies.<br> The Member indemnifies WebPicID from any loss incurred using these services.&nbsp;</p>
				<p>All Members and Merchants agree that all disputes are resolved by the Alberta Arbitration Act and are limited to the amount of the transaction in dispute.</p>
				<p>Copy Right Web Picture identification Inc. O/A WebPicID™ Dated&nbsp; September 16, 2018 rfg</p>	</div>
			</div>
		</div>
	</div>