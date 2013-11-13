<?php

/**
 * This is the model class for table "AlugarArea".
 *
 * The followings are the available columns in table 'AlugarArea':
 * @property integer $id_alugar
 * @property integer $id_m
 * @property string $data_aluguel
 * @property string $hora_ini
 * @property string $hora_fin
 * @property string $motivo
 * @property integer $status
 * @property integer $solicitado_em
 *
 * The followings are the available model relations:
 * @property Agenda[] $agendas
 * @property Morador $idM
 * @property Evento[] $eventos
 */
class AlugarArea extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AlugarArea the static model class
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
		return 'AlugarArea';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_alugar, data_aluguel, hora_ini, hora_fin, motivo, status', 'required'),
			array('id_alugar, id_m, status, solicitado_em', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_alugar, id_m, data_aluguel, hora_ini, hora_fin, motivo, status, solicitado_em', 'safe', 'on'=>'search'),
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
			'agendas' => array(self::HAS_MANY, 'Agenda', 'id_alugar'),
			'idM' => array(self::BELONGS_TO, 'Morador', 'id_m'),
			'eventos' => array(self::HAS_MANY, 'Evento', 'id_alugar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_alugar' => 'Id Alugar',
			'id_m' => 'Id M',
			'data_aluguel' => 'Data Aluguel',
			'hora_ini' => 'Hora Ini',
			'hora_fin' => 'Hora Fin',
			'motivo' => 'Motivo',
			'status' => 'Status',
			'solicitado_em' => 'Solicitado Em',
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

		$criteria->compare('id_alugar',$this->id_alugar);
		$criteria->compare('id_m',$this->id_m);
		$criteria->compare('data_aluguel',$this->data_aluguel,true);
		$criteria->compare('hora_ini',$this->hora_ini,true);
		$criteria->compare('hora_fin',$this->hora_fin,true);
		$criteria->compare('motivo',$this->motivo,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('solicitado_em',$this->solicitado_em);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}