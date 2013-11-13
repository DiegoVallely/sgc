<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
	public $nome;
	public $email;
	public $assunto;
	public $mensagem;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('nome, email, assunto, mensagem', 'required'),
			// email has to be a valid email address
			array('nome', 'match', 'pattern'=>'/^[a-zA-Z\s]+$/', 'message'=>'O campo nome só pode conter letras.'),
                        array('email', 'email'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	
	public function attributeLabels()
	{
		return array(
			'verifyCode'=>'Código de Verificação',
		);
	}
}