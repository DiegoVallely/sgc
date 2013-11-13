<?php

/**
 * This is the model class for table "Usuario".
 *
 * The followings are the available columns in table 'Usuario':
 * @property integer $id_usuario
 * @property integer $id_m
 * @property integer $id_ac
 * @property string $nome_usuario
 * @property string $senha_hash
 * @property integer $tipo
 * @property integer $ativo
 *
 * The followings are the available model relations:
 * @property Morador $idM
 * @property AgenciaCont $idAc
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'Usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_usuario, nome_usuario, senha_hash', 'required'),
			array('id_usuario, id_m, id_ac, tipo, ativo', 'numerical', 'integerOnly'=>true),
			array('nome_usuario, senha_hash', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_usuario, id_m, id_ac, nome_usuario, senha_hash, tipo, ativo', 'safe', 'on'=>'search'),
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
			'idAc' => array(self::BELONGS_TO, 'AgenciaCont', 'id_ac'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'Id Usuario',
			'id_m' => 'Id M',
			'id_ac' => 'Id Ac',
			'nome_usuario' => 'Nome Usuario',
			'senha_hash' => 'Senha Hash',
			'tipo' => 'Tipo',
			'ativo' => 'Ativo',
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

		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('id_m',$this->id_m);
		$criteria->compare('id_ac',$this->id_ac);
		$criteria->compare('nome_usuario',$this->nome_usuario,true);
		$criteria->compare('senha_hash',$this->senha_hash,true);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('ativo',$this->ativo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}