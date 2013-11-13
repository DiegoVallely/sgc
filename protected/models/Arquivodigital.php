<?php

/**
 * This is the model class for table "arquivodigital".
 *
 * The followings are the available columns in table 'arquivodigital':
 * @property integer $id_ad
 * @property string $nome_img
 * @property string $imagem
 */
class Arquivodigital extends CActiveRecord
{
    
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'arquivodigital';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_img', 'required'),
			array('nome_img', 'length', 'max'=>20),
			array('imagem', 'safe'),
                        array('imagem', 'file', 'types'=>'jpg, gif, png', 'maxSize'=>1024 * 1024 * 50),
                      	// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
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
			'nome_img' => 'Nome da Imagem',
			'imagem' => 'Imagem',
                        'tipo' => 'Tipo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_ad',$this->id_ad);
		$criteria->compare('nome_img',$this->nome_img,true);
		$criteria->compare('imagem',$this->imagem,true);
                $criteria->compare('tipo',$this->tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

         
     
        
        
        
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Arquivodigital the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
