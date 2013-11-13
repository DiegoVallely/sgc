<?php

/**
 * This is the model class for table "Comentario".
 *
 * The followings are the available columns in table 'Comentario':
 * @property integer $id_come
 * @property integer $id_m
 * @property integer $id_mu
 * @property integer $criado_em
 * @property string $comentario
 *
 * The followings are the available model relations:
 * @property Morador $idM
 * @property Mural $idMu
 */
class Comentario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comentario the static model class
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
		return 'Comentario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_come, comentario', 'required'),
			array('id_come, id_m, id_mu, criado_em', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_come, id_m, id_mu, criado_em, comentario', 'safe', 'on'=>'search'),
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
			'idM' => array(self::BELONGS_TO, 'Morador', 'id_m'),
			'idMu' => array(self::BELONGS_TO, 'Mural', 'id_mu'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_come' => 'Id Come',
			'id_m' => 'Id M',
			'id_mu' => 'Id Mu',
			'criado_em' => 'Criado Em',
			'comentario' => 'Comentario',
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

		$criteria->compare('id_come',$this->id_come);
		$criteria->compare('id_m',$this->id_m);
		$criteria->compare('id_mu',$this->id_mu);
		$criteria->compare('criado_em',$this->criado_em);
		$criteria->compare('comentario',$this->comentario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}