<?php

/**
 * This is the model class for table "Endereco".
 *
 * The followings are the available columns in table 'Endereco':
 * @property integer $id_end
 * @property string $rua
 * @property integer $num
 * @property string $bairro
 * @property string $complemento
 * @property string $cidade
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property AgenciaCont[] $agenciaConts
 * @property DadosCondominio[] $dadosCondominios
 * @property Funcionario[] $funcionarios
 */
class Endereco extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Endereco the static model class
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
		return 'Endereco';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_end, rua, num, bairro, cidade, estado', 'required'),
			array('id_end, num', 'numerical', 'integerOnly'=>true),
			array('rua', 'length', 'max'=>50),
			array('bairro, cidade', 'length', 'max'=>30),
			array('complemento', 'length', 'max'=>20),
			array('estado', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_end, rua, num, bairro, complemento, cidade, estado', 'safe', 'on'=>'search'),
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
			'agenciaConts' => array(self::HAS_MANY, 'AgenciaCont', 'id_end'),
			'dadosCondominios' => array(self::HAS_MANY, 'DadosCondominio', 'id_end'),
			'funcionarios' => array(self::HAS_MANY, 'Funcionario', 'id_end'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_end' => 'Id End',
			'rua' => 'Rua',
			'num' => 'Num',
			'bairro' => 'Bairro',
			'complemento' => 'Complemento',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
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

		$criteria->compare('id_end',$this->id_end);
		$criteria->compare('rua',$this->rua,true);
		$criteria->compare('num',$this->num);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('complemento',$this->complemento,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}