<?php

/**
 * This is the model class for table "Agenda".
 *
 * The followings are the available columns in table 'Agenda':
 * @property integer $id_agenda
 * @property integer $id_alugar
 * @property integer $id_evento
 * @property string $dia
 * @property string $mes
 * @property string $ano
 * @property string $link
 * @property string $descricao
 *
 * The followings are the available model relations:
 * @property AlugarArea $idAlugar
 * @property Evento $idEvento
 */
class Agenda extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Agenda the static model class
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
		return 'Agenda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_agenda, dia, mes, ano, link, descricao', 'required'),
			array('id_agenda, id_alugar, id_evento', 'numerical', 'integerOnly'=>true),
			array('dia, mes', 'length', 'max'=>2),
			array('ano', 'length', 'max'=>4),
			array('link', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_agenda, id_alugar, id_evento, dia, mes, ano, link, descricao', 'safe', 'on'=>'search'),
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
			'idAlugar' => array(self::BELONGS_TO, 'AlugarArea', 'id_alugar'),
			'idEvento' => array(self::BELONGS_TO, 'Evento', 'id_evento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_agenda' => 'Id Agenda',
			'id_alugar' => 'Id Alugar',
			'id_evento' => 'Id Evento',
			'dia' => 'Dia',
			'mes' => 'Mes',
			'ano' => 'Ano',
			'link' => 'Link',
			'descricao' => 'Descricao',
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

		$criteria->compare('id_agenda',$this->id_agenda);
		$criteria->compare('id_alugar',$this->id_alugar);
		$criteria->compare('id_evento',$this->id_evento);
		$criteria->compare('dia',$this->dia,true);
		$criteria->compare('mes',$this->mes,true);
		$criteria->compare('ano',$this->ano,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('descricao',$this->descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}