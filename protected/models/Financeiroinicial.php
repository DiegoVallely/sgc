<?php

/**
 * This is the model class for table "financeiroinicial".
 *
 * The followings are the available columns in table 'financeiroinicial':
 * @property integer $id_finan_ini
 * @property integer $id_cond
 * @property integer $id_mes
 * @property string $ano
 * @property string $saldo_ini
 * @property string $fundo_caixa_ini
 * @property string $fundo_reserva_ini
 *
 * The followings are the available model relations:
 * @property Mes $idMes
 */
class Financeiroinicial extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'financeiroinicial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ano', 'required'),
			array('id_mes', 'numerical', 'integerOnly'=>true),
                        array('id_cond', 'numerical', 'integerOnly'=>true),
			array('ano', 'length', 'max'=>4),
			array('saldo_ini, fundo_caixa_ini, fundo_reserva_ini', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_finan_ini, id_mes, id_cond,ano, saldo_ini, fundo_caixa_ini, fundo_reserva_ini', 'safe', 'on'=>'search'),
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
			'mes' => array(self::BELONGS_TO, 'Mes', 'id_mes'),
                        'dadoscondominio'=>array(self::BELONGS_TO,'Dadoscondominio','id_cond'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_finan_ini' => 'Id Finan Ini',
			'id_cond' => 'Id Cond',
                        'id_mes' => 'Id Mes',
                       	'ano' => 'Ano',
			'saldo_ini' => 'Saldo Ini',
			'fundo_caixa_ini' => 'Fundo Caixa Ini',
			'fundo_reserva_ini' => 'Fundo Reserva Ini',
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

		$criteria->compare('id_finan_ini',$this->id_finan_ini);
		$criteria->compare('id_cond',$this->id_cond);
                $criteria->compare('id_mes',$this->id_mes);
                $criteria->compare('ano',$this->ano,true);
		$criteria->compare('saldo_ini',$this->saldo_ini,true);
		$criteria->compare('fundo_caixa_ini',$this->fundo_caixa_ini,true);
		$criteria->compare('fundo_reserva_ini',$this->fundo_reserva_ini,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Financeiroinicial the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
