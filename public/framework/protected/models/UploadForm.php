<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $uploadFile;
	public function rules()
	{
		return array(
			// username and password are required
			array('uploadFile', 'required'),
			// rememberMe needs to be a boolean
				);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'uploadfile'=>'Upload .csv/excel file',
		);
	}
}
