<?php

/**
 * This is the model class for table "arquivoDigital".
 *
 * The followings are the available columns in table 'arquivoDigital':
 * @property integer $id_ad
 * @property string $nome_img
 * @property string $imagem
 * @property string $tipo
 */
class arquivoDigital extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return arquivoDigital the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'arquivoDigital';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ad, nome_img', 'required'),
			array('id_ad', 'numerical', 'integerOnly'=>true),
			array('nome_img', 'length', 'max'=>20),
			array('tipo', 'length', 'max'=>10),
			array('imagem', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_ad, nome_img, imagem, tipo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ad' => 'Id Ad',
			'nome_img' => 'Nome Img',
			'imagem' => 'Imagem',
			'tipo' => 'Tipo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_ad',$this->id_ad);
		$criteria->compare('nome_img',$this->nome_img,true);
		$criteria->compare('imagem',$this->imagem,true);
		$criteria->compare('tipo',$this->tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}