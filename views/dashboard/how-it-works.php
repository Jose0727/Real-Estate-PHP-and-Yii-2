
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			
			<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//header("Refresh: 60;url='".$_SERVER['REQUEST_URI']."'");
/* @var $this yii\web\View */
////echo $this->render('_slider',['data'=>$data]);
$this->title = 'How does it Works ';
$model = \app\models\UserProfile::findProfileByUserId(Yii::$app->user->id);
$name=$model->first_name." ".$model->last_name;
?>
<div class="container">
	<div class="row">
		<div itemprop="articleBody">
			<h2>How does it Works</h2>
			<div></div>
			<h2>Act of Agency&nbsp;</h2>
			<div></div>
			<div>The Act of Agency is limited to the Agent:</div>
			<div>Providing their name and email address.</div>
			<div>Agreeing to the WebPicID Terms and Conditions and the Privacy Policy.</div>
			<div>Looking at the individual’s three pieces of identification and the information entered in the Identification Document and Agent Affirmation Page.</div>
			<div>Verifying a New Member's identity by pressing the I AFFIRM button.</div>
			<p>Closing the page without pressing the I AFFIRM button ends the Act of Agency incomplete.</p>
			<div>The pressing of the I AFFIRM button concludes the Act of Agency.</div>
			<div>&nbsp;&nbsp;</div>
			<div>Agents are sent an email asking them to verify their email address.</div>
			<div>The email advises the Agent to Log On to WebPicID to verify their identity.</div>
			<div>Agents are paid a fee for Acting as an Agent once they verify their identity.</div>
			<div>Anyone 13+ years old can act as an Agent for WebPicID.</div>
			<div>Individuals under 18 years old can only become a Member via the Family Protection service.</div>
			<div>An adult Member must activate the Family Protection and agree to act as the AGP for all family members.
				<p>The AGP Administrator/Parent/Guardian must select Family Protection and add the child as a Member.</p>
				<p><span style="color: inherit; font-family: inherit; font-size: 22px;">Administrator Guardian Parent herein AGP&nbsp;</span></p>
			</div>
			<div>Members using the Family Protection Section act as the Administrator Parent Guardian, APG, for the family.&nbsp;</div>
			<div>The AGP can add a second AGP.
				<p>Any AGP can authorise a spending limit for any child over age 5 by transferring funcs to the child's account.</p>
				<h2>Deposit Code&nbsp;</h2>
			</div>
			<div>Every Member is given a Deposit Code when they Sign Up.&nbsp;</div>
			<div>WebPicID only accepts cash deposits starting at a minimum of $30.00.
				<p>Payment are made in cash at any bank branch that WebPicID has an account.&nbsp;</p>
			</div>
			<div>Member use the Deposit Code to identify their deposits when they report them to&nbsp; WebPicID .&nbsp;</div>
			<h2>Family Protection&nbsp;</h2>
			<div>A family is defined as at least one adult and one other individual living at the same residence.&nbsp;</div>
			<div>Members can add everyone in the family regardless of their age from 1 day plus.&nbsp;</div>
			<p>AGP's can add an additional AGP.</p>
			<p>Children age 13+ can Act as Agents for WebPicID with APG approval.</p>
			<p>Children age 5+ can use Safe Purchase to ask WebPicID.</p>
			<p>All items purchased by a child via WebPicID are shipped to the AGP.</p>
			<div><span style="color: inherit; font-family: inherit; font-size: 22px;">How to make a deposit</span></div>
			<div>WebPicID has an account at the following bank branches</div>
			<div>&nbsp;</div>
			<div><span style="color: inherit; font-family: inherit; font-size: 18px;">United States of America</span></div>
			<div></div>
			<p>Bank of America&nbsp; &nbsp; &nbsp;Cash Only</p>
			<p>TDBank&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Cash Only</p>
			<div>Wells Fargo&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Cash Only</div>
			<p>&nbsp;</p>
			<h3>Canada</h3>
			<p>TD Canada Trust&nbsp; &nbsp; &nbsp;Cash Only</p>
			<p>Bank of Montreal&nbsp; &nbsp; Cash Only</p>
			<p>EMT</p>
			<p>From all Canadian Banks</p>
			<p>Bill Payment</p>
			<p>Bank of Montreal&nbsp;</p>
			<h2>Identity Theft Fraud Loss Reduction&nbsp;</h2>
			<div>Individuals are sent a Notification 24/7 by email from WebPicID every time their identity is used at a WebPicID Merchant.</div>
			<div>WebPicID Merchants advise individuals that they protect them from Identity Theft Fraud Losses by having WebPicID.com verify their identity.</div>
			<div>The individual is asked to log on to WebPicID, verify their identity, and respond to the the Notification.</div>
			<div></div>
			<div>The second way Members can protect against Identity theft fraud losses is to have WebPicID make online purchases for them using Safe Purchase.</div>
			<div></div>
			<p><span style="color: inherit; font-family: inherit; font-size: 22px;">Member Sign Up process</span></p>
			<p>Any individual regardless of age can become a Member and use the WebPicID services.</p>
			<p>Individuals sign up to become a Member and pay $25.00 annually to use the services.</p>
			<h3>Process</h3>
			<h3>Register Page</h3>
			<p>&nbsp; &nbsp; &nbsp;First name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Last name</p>
			<p>&nbsp; &nbsp; &nbsp;Email address&nbsp; &nbsp; &nbsp; &nbsp;Country</p>
			<p>&nbsp; &nbsp; &nbsp;Street address&nbsp; &nbsp; &nbsp;CIty</p>
			<p>&nbsp; &nbsp; &nbsp;State/Provicne&nbsp; &nbsp; &nbsp;ZIP/PostalCode&nbsp;</p>
			<p>&nbsp; &nbsp; &nbsp;Home Number&nbsp; &nbsp;&nbsp;Cell Phone Number</p>
			<p>&nbsp; &nbsp; &nbsp;Age&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sex</p>
			<p>&nbsp; &nbsp; &nbsp;_ I Agree to the WebPicID Terms and Conditions and Privacy Policy</p>
			<p>&nbsp; &nbsp; &nbsp;Please activate you Web Camera and Microphone</p>
			<h3>Picture Page</h3>
			<p>&nbsp; &nbsp; &nbsp;Take a picture</p>
			<h3>Identification Document and Agent Affirmation page</h3>
			<p>&nbsp; &nbsp; &nbsp;Individuals who want to become Members need to provide 4 things;&nbsp;</p>
			<p>&nbsp; &nbsp; &nbsp;Three piceces of identification</p>
			<p>&nbsp; &nbsp; &nbsp;1 Primary government issued Picture Idenitfication I.E. Drivers license, passport, or other picture ID.&nbsp;</p>
			<p>&nbsp; &nbsp; &nbsp;2 Secondary government issued Idenitfication I.E. Birth certificate or unused Primary ID</p>
			<p>&nbsp; &nbsp; &nbsp;3 Address Identification&nbsp; I.E any Utility bill or staement of account dates in the last 20 days.</p>
			<p>&nbsp; &nbsp; &nbsp;4 A&nbsp;witness who is at least 13 years old. The witness is paid a fee to Act as an Agent for WebPicID.</p>
			<h2 style="margin-bottom: 0cm; line-height: 100%;">Member Sign Up process</h2>
			<p>&nbsp;</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;Any individual regardless of age can become a Member and use the WebPicID services.</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;Individuals sign up to become a Member and pay $25.00 annually to use the services.</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;individuals who want to become Members need to provide 4 things;&nbsp; &nbsp; &nbsp; &nbsp;</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;Three pieces of identification</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;1 Primary government issued Picture Identification I.E. Drivers license, passport, or other.</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;2 Secondary government issued Identification I.E. Birth certificate or unused Primary ID</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;3 Address Identification&nbsp; I.E any Utility bill or statement of account dates in the last 20 days.</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;4 A&nbsp;witness who is at least 13 years old. The witness is paid a fee to Act as an Agent for WebPicID.</p>
			<p>&nbsp;</p>
			<h3 style="margin-bottom: 0cm; line-height: 100%;">Process</h3>
			<p>&nbsp;</p>
			<h3 style="margin-bottom: 0cm; line-height: 100%;">Register Page</h3>
			<p>&nbsp;</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp; First name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Last name</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;Email address&nbsp; &nbsp; &nbsp;Country</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;Street address</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; City&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; State/Provicne ZIP/PostalCode</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; Home Number&nbsp; &nbsp;Cell Phone Number</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp;Age&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sex</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">_</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">I Agree to the WebPicID Terms and Conditions and Privacy Policy</p>
			<p>&nbsp;</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">Please activate you Web Camera and Microphone</p>
			<p>&nbsp;</p>
			<h3 style="margin-bottom: 0cm; line-height: 100%;">Picture Page</h3>
			<p>&nbsp;</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;Take a picture</p>
			<p>&nbsp;</p>
			<h3 style="margin-bottom: 0cm; line-height: 100%;">Identification Document and Agent Affirmation page</h3>
			<p>&nbsp;</p>
			<h3 style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;Primary Identification Document</h3>
			<p>&nbsp;</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;Date Issued&nbsp; &nbsp; &nbsp; &nbsp;Date Expired</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;Serial Number&nbsp; Type Type</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; Issuing Body</p>
			<h3 style="margin-bottom: 0cm; line-height: 100%;">Secondary Identification Document</h3>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp;</p>
			<p>&nbsp;</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;Unused Primary ID</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;or a Birth Certificate (Required for children)</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; Date Issued&nbsp; &nbsp; &nbsp; &nbsp;Date Expired</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; Serial Number Type</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; Issuing Body</p>
			<p>&nbsp;</p>
			<h3 style="margin-bottom: 0cm; line-height: 100%;">Address Identification Document&nbsp; &nbsp; &nbsp;Utility bill or Statement of account dated in the last 30 days,</h3>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp;</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;Name of Issuing Body&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Serial/Account number</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; Address of issuing body&nbsp; &nbsp; &nbsp; &nbsp;Phone number of issuing body</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; Name of Member Matches Address of Member matches</p>
			<p>&nbsp;</p>
			<h3 style="margin-bottom: 0cm; line-height: 100%;">Agent Section</h3>
			<p>&nbsp;</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp; Agent First Name&nbsp; &nbsp; &nbsp; Agent Last Name&nbsp; &nbsp; &nbsp; Agent Email address</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp; _ I Agree to the WebPicID Terms and Conditions and Privacy Policy</p>
			<p>&nbsp;</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;I, First Name Last Name, email address, hereby Affirm that</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;the information on the original identification documents</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;and the information entered into the Identification Document and Agent Affirmation page match,</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;I AFFIRM</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;This completes your Act of Agency.</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;An email has been sent to you to verify your email address</p>
			<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp; &nbsp; &nbsp;and with instruction on how to continue.</p>
			<p>&nbsp;</p>
			<h2>Merchant Sign Up&nbsp;</h2>
			<div>Any authorized employee can sign up their organization by:
				<p>The employee agrees to Act as the Administrator and contact person for WebPicID.</p>
				<p>A&nbsp; &nbsp; &nbsp;Completing the Merchant Sign Up form</p>
				<p>B&nbsp; &nbsp; &nbsp;Signing Up with WebPicID</p>
				<p>C&nbsp; &nbsp; &nbsp;Verifying their identity</p>
				<p>Please review the Documents and Information required for most organizations.</p>
				<div>
					<p>The Board of Directors must ratify the&nbsp;Administrator's&nbsp;position and ability to act for the organization.</p>
					<p>The Board of Directors, Officers of the organizaton, and employees using WebPicID services must beceome MEM's.</p>
					<p>MEM's Sign Up and verify their identity The Administrator sets their access level.</p>
				</div>
			</div>
			<h2>Notification&nbsp;</h2>
			<div>A "Notification" is sent 24/7 to individuals when their identity has been used at a WebPicID Merchant for a sale or transaction.&nbsp;</div>
			<div></div>
			<div>The recipient of a Notification has four choices:&nbsp;</div>
			<div></div>
			<div>Authorize&nbsp; &nbsp; &nbsp;&nbsp;<span style="white-space: pre;"> </span>The individual verifies their identity with WebPicID and Authorizes the sale or Transaction.&nbsp;</div>
			<div><span style="white-space: pre;"></span></div>
			<div>Decline&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="white-space: pre;"> </span>The individual verifies their identity with WebPicID and Declined the sale.&nbsp;</div>
			<div><span style="white-space: pre;"> </span>Ignore&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;The individual missed or ignored the Notification.&nbsp;</div>
			<div><span style="white-space: pre;"> </span>Fraud&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;The individual verifies their identity with WebPicID and declares a Fraud.&nbsp;</div>
			<div><span style="white-space: pre;"> </span>
			<div>
				<p>The goods, services, or transaction is not released by the Merchant until WebPicID sends the Authorise code to the Merchant.</p>
				<p>In all cases there is no fraud loss to either party.</p>
				<h2>Payment Options&nbsp;</h2>
			</div>
		</div>
		<div>Deposit cash only</div>
		<div>
			<p>The minimum deposit is $30.00 any of the bank branches that WebPicID deals with.</p>
		</div>
		<div>USA&nbsp; &nbsp; &nbsp;Bank of America&nbsp;</div>
		<div>USA&nbsp; &nbsp; &nbsp;TDBank&nbsp;</div>
		<div>USA&nbsp; &nbsp; &nbsp;Wells Fargo&nbsp;</div>
		<div>&nbsp;</div>
		<div>Canada&nbsp; Bank of Montreal</div>
		<div>Canada&nbsp; TD Canada Trust</div>
		<div>&nbsp;</div>
		<p>Canada&nbsp; EMT from any Canadian bank</p>
		<p>Canada&nbsp; Bank of Montreal Bill Payment</p>
		<h2>Pre-Register</h2>
		<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sign Up and provide everything including ID except a witness or payment.</div>
		<h2>Refer an organization</h2>
		<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Register and organization.</div>
		<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Sell them on WebPicID.</div>
		<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Have them name you as their contact person.&nbsp; &nbsp;&nbsp;</div>
		<h2>Report a Deposit</h2>
		<div>Members need to report deposits as soon as they are made to ensure prompt credit.</div>
		<p>Once you have a Receipt of a Deposit from a bank.</p>
		<p>Take a picture with your phone</p>
		<p>Write your deposit code on the receipt in a blank spot.</p>
		<p>Take a picture of the receipt that shows the all of the details printed on the receipt.&nbsp;</p>
		<p>Log on to WebPicID va the phone</p>
		<p>Select Report a Payment</p>
		<p>Enter the amount&nbsp; &nbsp; &nbsp;Select the bank&nbsp; &nbsp; &nbsp;&nbsp;Attach the picture of the receipt file.</p>
		<p>Look at everything on the screen.&nbsp;</p>
		<p>If the picture is blurry, take another clear picture that is readable.</p>
		<p>Replace the blurry picture with the new Picture.</p>
		<p>Look at everything on the screen.</p>
		<p>If it is all clear press SUBMIT</p>
		<h2>Safe Purchase&nbsp;</h2>
		<p>This is a non bank card way to have WebPicID make online purchases for Members and their families</p>
		<p>Find an item or items that you want to buy.</p>
		<p>Take a screen shot of each item and save the pictures where you get them later.</p>
		<h4>TIP Use a new directory for each purchase</h4>
		<p>Go through the sale process to the shopping cart where the totals including tax and shipping are displayed.</p>
		<p>Take a screen shot of shopping card page.</p>
		<p>Go to the top of the page and copy the URL of the site selling the items.</p>
		<p>Paste the information into Site URL</p>
		<p>Paste each item into a box by pressing the + sign for another box until every item is listed.</p>
		<p>Enter the total amont of the sale. These funds must be on deposit before WebPicID can make the purchase.</p>
		<p>The APG can set an amount for a child to spend. WebPicID will make the purchase and debit the APG account.</p>
		<p>The Amount can by set to reoocur from time to time for each child.</p>
		<p>* AGP can look at suggested plans for allowance spending and amounts and frequency. Teach you children to save, donate ,and spend.</p>
		<p><span style="color: inherit; font-family: inherit; font-size: 22px;">Secure Message&nbsp;</span></p>
		<p>A Secure Message can be sent to anyone.</p>
		<p>Only a Member can send a Secure Message</p>
		<p>Secure message ae only sent to one Recipient.</p>
		<p>Only the Sender and the Recipient can read the Secure Message.</p>
		<p>The Process:</p>
		<p>Go to Secure Message</p>
		<p>Select create a Message</p>
		<p>Enter the name and email address of the Recipient.</p>
		<p>Then Subject, body, and attachment(s).</p>
		<p>Press send</p>
		<p>The message contents are sent to an In Box for the Recipient on the&nbsp;WebPicID&nbsp;site.</p>
		<p>They never leave the secure WebPicID Server.</p>
		<p>The onus is on the sender to notify the recipient that they have a Secure Message.</p>
		<p>Call, text, email, social media, let them know that they have a secure Message at www.WebPicID.com&nbsp;</p>
		<p>The Recipient must Log on to WebPicID and verify their identity before they can read the Secure Message.</p>
		<p>This universal service can be used by individuals and organizations.</p>
		<p><span style="color: inherit; font-family: inherit; font-size: 22px;">Share an organization&nbsp;</span></p>
		<p>We use social media to generate Merchant Members.</p>
		<p>Share the WebPicID service any number of organizations daily.</p>
		<p>Members receive one poll entry per day until the organization becomes a Merchant Member.&nbsp;</p>
		<p>The pool is closed, the members with pool entries receive a share of 10% of the ID Theft Fraud Loss Reduction Revenue for 5 years.</p>
	<h2>&nbsp;</h2>	</div><br><br><br>
		</div>
	</div>
</div>
		</div>
	</div>
</div>
		</div>
	</div>
</div>