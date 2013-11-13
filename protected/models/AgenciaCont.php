<?php

/**
 * This is the model class for table "AgenciaCont".
 *
 * The followings are the available columns in table 'AgenciaCont':
 * @property integer $id_ac
 * @property integer $id_end
 * @property string $razao_social
 * @property string $cnpj
 * @property string $telefone
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Endereco $idEnd
 * @property Usuario[] $usuarios
 */
class AgenciaCont extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AgenciaCont the static model class
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
		return 'AgenciaCont';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_ac, razao_social, cnpj, telefone, email', 'required'),
			array('id_ac, id_end', 'numerical', 'integerOnly'=>true),
			array('razao_social, email', 'length', 'max'=>50),
			array('cnpj, telefone', 'length', 'max'=>14),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_ac, id_end, razao_social, cnpj, telefone, email', 'safe', 'on'=>'search'),
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
			'idEnd' => array(self::BELONGS_TO, 'Endereco', 'id_end'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'id_ac'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_ac' => 'Id Ac',
			'id_end' => 'Id End',
			'razao_social' => 'Razao Social',
			'cnpj' => 'Cnpj',
			'telefone' => 'Telefone',
			'email' => 'Email',
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

		$criteria->compare('id_ac',$this->id_ac);
		$criteria->compare('id_end',$this->id_end);
		$criteria->compare('razao_social',$this->razao_social,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}