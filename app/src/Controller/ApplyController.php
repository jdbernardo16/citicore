<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use SilverStripe\Control\Controller;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\View\ArrayData;
use SilverStripe\Assets\File;

require '../vendor/autoload.php';

class ApplyController extends Controller {

	private $jobtitle;
	private $firstname;
	private $lastname;
	private $email;
	private $contact;
	private $education;
	private $messagedetails;

	private $resume;
	private $file;

	private $receipient;

	private $errors;

	public function init() {
		parent::init();
		// print_r('Init...');
		if(isset($_POST['postFlag']) && is_numeric($_POST['postFlag'])) {

    		$postFlag = $_POST['postFlag'];
    		// print_r('PostFlag : '$_POST['postFlag']);
    		switch ($postFlag) {
    		
	    		// Sending
	    		case 1:
	    				
					if($this->setPostVars() && $this->checkPostVars()) {
						// print_r('Sending...');
						$this->setReceipients();
						$this->sendEmail();
						$this->sendConfirmationEmail();
						$this->writeRecord();
						$this->returnEcho(1, 'Sending successful!');
					}

				break;
			}
    	}

    	exit();
	}

	private function setPostVars() {
		// print_r('Set post...');

		if(isset($_POST['jobtitle'])) {
			$this->jobtitle = $_POST['jobtitle'];
		}

		if(isset($_POST['messagedetails'])) {
			$this->messagedetails = $_POST['messagedetails'];
		}


		if(isset($_POST['firstname'])) {
			$this->firstname = $_POST['firstname'];
		}

		if(isset($_POST['lastname'])) {
			$this->lastname = $_POST['lastname'];
		}

		if(isset($_POST['email'])) {
			$this->email = $_POST['email'];
		}

		if(isset($_POST['contact'])) {
			$this->contact = $_POST['contact'];
		}
		
		if(isset($_POST['resume'])) {
			$this->resume = $_POST['resume'];
		}

		if(isset($_POST['file'])) {
			$this->file = $_POST['file'];
		}

		return true;

	}

	private function checKPostVars() {
		// print_r('Check post...');


		if(empty($_POST['jobtitle'])) {
			$this->errors['jobtitle'] = array(
				'error' => 'Please input your job title'
			);
		}

		if(empty($_POST['firstname'])) {
			$this->errors['firstname'] = array(
				'error' => 'Please input your firstname'
			);
		}

		if(empty($_POST['lastname'])) {
			$this->errors['lastname'] = array(
				'error' => 'Please input your lastname'
			);
		}

		if(empty($_POST['email'])) {
			$this->errors['email'] = array(
				'error' => 'Please input your email'
			);
		}

		if(empty($_POST['contact'])) {
			$this->errors['contact'] = array(
				'error' => 'Please input your contact'
			);
		}

		if(empty($_POST['education'])) {
			$this->errors['education'] = array(
				'error' => 'Please select your highest educational attainment'
			);
		}


		if(empty($_POST['resume'])) {
			$this->errors['resume'] = array(
				'error' => 'Please upload your resume'
			);
		}

		switch ($this->postFlag) {
    		// Sending
    		case 1: break;
    	}		

		if(!empty($this->errors > 0)) {
			$this->returnEcho(0, 'Please enter all required fields');

			return false;
		}
 
		return true;

	}

	private function setReceipients() {
		$email = CareerPage::get()->First()->EmailRecipient;
		$this->receipient = $email;
	}

	private function writeRecord() {
    	$duplicate = new Application();

    	$duplicate->JobTitle = $this->jobtitle;
    	$duplicate->Message = $this->messagedetails;
    	$duplicate->FirstName = $this->firstname;
    	$duplicate->LastName = $this->lastname;
    	$duplicate->EmailAddress = $this->email;
    	$duplicate->ContactNumber = $this->contact;
    	$duplicate->Education = $this->education;
    
    	$this->file = File::get()->ByID($this->resume);

    	$duplicate->FileID = $this->file->ID;

    	// $duplicate->File = $this->file;

	    	// print_r($this->$resume);
	    	// print_r($this->file->ID); exit();

    	$duplicate->write(); 
    }

    /*
	* ADMIN 
	* send email
    */
	private function sendEmail() {
		// print_r('Email...');

		$to = explode(',', $this->receipient);
		// Enables HTML Text
		// $headers .= "\r\n" . "MIME-Version: 1.0" . "\r\n";
		// $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		$subject = $this->subject .'Citicore-CESI: New Applicant!';

		$message = $this->getAdminEmailTemplate();

		$this->sendPHPMailer($to, $subject, $message);

	}

	private function getAdminEmailTemplate() {

		$file = File::get()->ByID($this->resume);
		$this->file = $file;


		$arrayData = new ArrayData(array(
			'jobtitle' => $this->jobtitle,
			'message' => $this->messagedetails,
		    'firstname' => $this->firstname,
		    'lastname' => $this->lastname,
		    'email' => $this->email,
		    'contact' => $this->contact,
		    'file' => $this->file->AbsoluteLink(),
		    'education' => $this->education,
		));

		return $arrayData->renderWith('ApplyAdminEmailTemplate');
	}

    /*
	* USER
	* send confirmation email
    */

	private function sendConfirmationEmail() {
		// print_r('Email confirmation...');
		
		$recipients = explode(',', $this->email);
		$subject = $this->subject .'Citicore-CESI: This is to notify you that we have succesfully received your message on ultimatefreight.com';
		
		// Enables HTML Text
		// $headers .= "\r\n" . "MIME-Version: 1.0" . "\r\n";
		// $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		$message = $this->getUserEmailTemplate();

		$this->sendPHPMailer($recipients, $subject, $message);
	}

	private function getUserEmailTemplate() {

		$arrayData = new ArrayData(array(
		    'name' => $this->name,
		));

		return $arrayData->renderWith('ApplyUserEmailTemplate');
	}

	private function sendPHPMailer($recipients, $subject, $body) {
		// print_r('Emailing...' . $recipients);
		try {

			$mail = new PHPMailer(true);  

			$mail->SMTPDebug = 0;
			$mail->SMTPAuth = true;
			$mail->Host = 'email.praxxys.ph';
		    $mail->Username = 'mark.praxxys';
		    $mail->Password = '5xRaJCyQ6ddWRTeR';
		    $mail->Port = 587;

			$mail->setFrom('no-reply@praxxys.ph', 'www.citicore-cesi.com');

			// Add in each recipient to the "TO"
			foreach ($recipients as $recipient) {
				$mail->addAddress($recipient, $recipient);
			}

			$mail->isSMTP();
			$mail->isHTML(true);
			$mail->Subject = $subject;
			$mail->Body = $body;
			// $mail->addAttachment( $file, 'curriculum vitae');

			$mail->send();

			// print_r('Emailing done...');

		} catch (phpmailerException $e) {
			// print_r($e->errorMessage());
		} catch (Exception $e) {
			// print_r($e->getMessage());
		}
	}

	private function returnEcho($status, $message = 'Sent') {

		echo json_encode(array(
			'status' => $status,
			'message' => $message
		));
	}
}