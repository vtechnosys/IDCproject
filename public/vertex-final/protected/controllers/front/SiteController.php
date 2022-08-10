<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	 public $rslt;
	 public $latest;
	 
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{		//$rslt=LatestProject::model()->findAll();
			$data=OurTechnology::model()->findAll(); 
			 //$rslt=LatestProject::model()->findAll();
			//print_r ($rslt);
			//echo $rslt;
			//echo $rslt[0]['latest'];
		//exit;
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index',array('data'=>$data));
	}
    
    public function actionAbout()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('about');
	}
	public function actionPortfolio()
	{  
	 
	    //  $this->rslt=Portfolio::model()->findAll();
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		
		$this->render('portfolio');
	}
	public function actionServicesinfo()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('servicesinfo');
	}
	public function actionMaher_hospital()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('maher_hospital');
	}
	
	public function actionKhandelwal()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('khandelwal');
	}
	
	public function actionWeb_development()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('web_development');
	}
	
	public function actionGraphic_design()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('graphic_design');
	}
	
	public function actionSeo()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('seo');
	}
	
	public function actionBhakti_tours()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('bhakti_tours');
	}
	
	 public function actionCareers()
	{
	     $model=new Careers;
		 	if(isset($_POST['Careers']))
		{
			$model->attributes=$_POST['Careers'];
			if($model->validate())
			{
			$model->save();
				 
				Yii::app()->user->setFlash('Careers','Thank you for contacting us. We will respond to you as soon as possible.');
				 $this->refresh();
			}
		}
		 
		
		$this->render('careers',array('model'=>$model));
	}
	
	
	
	
	
	public function actionServices()
	{
	//$rslt=services::model()->findAll();
	
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('services',array('rslt'=>$rslt));
	}
	
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactUs;
		
		if(isset($_POST['ContactUs']))
		{
			$model->attributes=$_POST['ContactUs'];
			
			if($model->validate())
			{ 
				$recipientEmail1="suhask2107@gmail.com";
			$recipientName1="vertex";
			$emailSubject1='Inquiry on Report';
			$emailBody1='Inquiry on Report, <br> Name:'.$_POST['ContactUs']['name'].'<br>email.'.$_POST['ContactUs']['email'].'<br>phone:'.$_POST['ContactUs']['phone'].'<br>Message:'.$_POST['ContactUs']['body'];
			$mailer = Yii::app()->MultiMailer->to($recipientEmail1, $recipientName1);
			$mailer->subject($emailSubject1);
			$mailer->body($emailBody1);
			
					
					
					if ($mailer->send()) 
					{
						 if($model->save())
						{
						Yii::app()->user->setFlash('contact',"Thank you for contacting us. We will respond to you as soon as possible.");
			//$this->redirect(Yii::app()->returnUrl);
				        $this->refresh();
						
						}
				
						Yii::app()->user->setFlash('success','You are registered successfully' );
						$this->redirect(array('contact'));
					
					
						 ///Yii::app()->user->setFlash('success', "<div id='basic' class='well' style='max-width:44em;'>You are now registered for workshop successfully,check your email for further details. Thank you!</div>");
						//$this->refresh(); 
					}
					
					else
					{
					  
						Yii::app()->user->setFlash('success', "Failed email".$mailer->getMultiError());
						$this->refresh();
					}
				   	
			
				
			}
			if($model->validate())
			{ 
				
				
			$to =$_POST['ContactUs']['email'] ;//Email id, which you want to send an email
			$from= '' ; //Email id, provide your email id

			$mail=Yii::app()->Smtpmail;
			$mail->SetFrom($from, 'Vertex Technosys');
			//$mail->Subject = 'Subject:'.$_POST['ContactUs']['subject'];
			//$mail->MsgHTML('Testing...');
			//$msg='Name : '.$_POST['ContactUs']['name'].'<br>'.'Email : '.$_POST['ContactUs']['email'].'<br>'.'Subject : '.$_POST['ContactUs']['subject'].'<br>'.'Feedback:'.$_POST['ContactUs']['body'];
			$msg="Thank You for your feedback, we will contact you soon.<p>We hope you enjoy receiving our news<p>";
			$mail->MsgHTML($msg);
			$mail->AddAddress($to, "");
			$mail->IsHTML(true);			
			//$mail->send();
			if($mail->send())
				{
					Yii::app()->user->setFlash('contact',"Thank you for contacting us. We will respond to you as soon as possible.");
				//echo '<script>alert("Thank you for contacting us. We will respond to you as soon as possible.")</script>';
			
				}
				else
				{
					Yii::app()->user->setFlash('contact',"Error in sending..");
					//echo '<script>alert("error in sending .")</script>';	
				}
		    $this->redirect(array('contact'));
						
			}
				
		}
		$this->render('contact',array('model'=>$model));

	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}