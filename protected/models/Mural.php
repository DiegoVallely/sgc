<?php

/**
 * This is the model class for table "Mural".
 *
 * The followings are the available columns in table 'Mural':
 * @property integer $id_mu
 * @property integer $id_m
 * @property string $titulo
 * @property string $texto
 * @property integer $criado_em
 * @property integer $atualizado_em
 *
 * The followings are the available model relations:
 * @property Comentario[] $comentarios
 * @property Morador $idM
 */
class Mural extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Mural the static model class
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
		return 'Mural';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_mu, id_m, titulo, texto', 'required'),
			array('id_mu, id_m, criado_em, atualizado_em', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_mu, id_m, titulo, texto, criado_em, atualizado_em', 'safe', 'on'=>'search'),
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
			'comentarios' => array(self::HAS_MANY, 'Comentario', 'id_mu'),
			'idM' => array(self::BELONGS_TO, 'Morador', 'id_m'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mu' => 'Id Mu',
			'id_m' => 'Id M',
			'titulo' => 'Titulo',
			'texto' => 'Texto',
			'criado_em' => 'Criado Em',
			'atualizado_em' => 'Atualizado Em',
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

		$criteria->compare('id_mu',$this->id_mu);
		$criteria->compare('id_m',$this->id_m);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('criado_em',$this->criado_em);
		$criteria->compare('atualizado_em',$this->atualizado_em);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}