<?php

/**
 * This is the model class for table "evento".
 *
 * The followings are the available columns in table 'evento':
 * @property integer $id_evento
 * @property integer $id_m
 * @property integer $id_alugar
 * @property string $data_evento
 * @property string $hora_ini
 * @property string $hora_fin
 * @property string $titulo
 * @property string $descricao
 *
 * The followings are the available model relations:
 * @property Morador $idM
 * @property Alugararea $idAlugar
 */
class Evento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'evento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data_evento, hora_ini, hora_fin, descricao', 'required'),
			array('id_m, id_alugar', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_evento, id_m, id_alugar, data_evento, hora_ini, hora_fin, titulo, descricao', 'safe', 'on'=>'search'),
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
			'idAlugar' => array(self::BELONGS_TO, 'Alugararea', 'id_alugar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_evento' => 'Id Evento',
			'id_m' => 'Id M',
			'id_alugar' => 'Id Alugar',
			'data_evento' => 'Data Evento',
			'hora_ini' => 'Hora Ini',
			'hora_fin' => 'Hora Fin',
			'titulo' => 'Titulo',
			'descricao' => 'Descricao',
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

		$criteria->compare('id_evento',$this->id_evento);
		$criteria->compare('id_m',$this->id_m);
		$criteria->compare('id_alugar',$this->id_alugar);
		$criteria->compare('data_evento',$this->data_evento,true);
		$criteria->compare('hora_ini',$this->hora_ini,true);
		$criteria->compare('hora_fin',$this->hora_fin,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('descricao',$this->descricao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Evento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
