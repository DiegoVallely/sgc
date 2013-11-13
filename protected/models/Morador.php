<?php

/**
 * This is the model class for table "Morador".
 *
 * The followings are the available columns in table 'Morador':
 * @property integer $id_m
 * @property string $nome
 * @property string $cpf
 * @property string $telefone
 * @property integer $num_casa
 * @property integer $num_moradores
 * @property string $email
 *
 * The followings are the available model relations:
 * @property AlugarArea[] $alugarAreas
 * @property Comentario[] $comentarios
 * @property Evento[] $eventos
 * @property Mural[] $murals
 * @property Usuario[] $usuarios
 */
class Morador extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Morador the static model class
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
		return 'Morador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_m, nome, cpf, telefone, num_casa, num_moradores, email', 'required'),
			array('id_m, num_casa, num_moradores', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>70),
			array('cpf, telefone', 'length', 'max'=>14),
			array('email', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_m, nome, cpf, telefone, num_casa, num_moradores, email', 'safe', 'on'=>'search'),
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
			'alugarAreas' => array(self::HAS_MANY, 'AlugarArea', 'id_m'),
			'comentarios' => array(self::HAS_MANY, 'Comentario', 'id_m'),
			'eventos' => array(self::HAS_MANY, 'Evento', 'id_m'),
			'murals' => array(self::HAS_MANY, 'Mural', 'id_m'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'id_m'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_m' => 'Id M',
			'nome' => 'Nome',
			'cpf' => 'Cpf',
			'telefone' => 'Telefone',
			'num_casa' => 'Num Casa',
			'num_moradores' => 'Num Moradores',
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

		$criteria->compare('id_m',$this->id_m);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('num_casa',$this->num_casa);
		$criteria->compare('num_moradores',$this->num_moradores);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}