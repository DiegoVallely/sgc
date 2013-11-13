<?php

/**
 * This is the model class for table "Mes".
 *
 * The followings are the available columns in table 'Mes':
 * @property integer $id_mes
 * @property string $mes
 * @property string $mes_abrev
 *
 * The followings are the available model relations:
 * @property FinanceiroInicial[] $financeiroInicials
 */
class Mes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Mes the static model class
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
		return 'Mes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_mes, mes, mes_abrev', 'required'),
			array('id_mes', 'numerical', 'integerOnly'=>true),
			array('mes', 'length', 'max'=>9),
			array('mes_abrev', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_mes, mes, mes_abrev', 'safe', 'on'=>'search'),
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
			'financeiroInicials' => array(self::HAS_MANY, 'FinanceiroInicial', 'id_mes'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mes' => 'Id Mes',
			'mes' => 'Mes',
			'mes_abrev' => 'Mes Abrev',
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

		$criteria->compare('id_mes',$this->id_mes);
		$criteria->compare('mes',$this->mes,true);
		$criteria->compare('mes_abrev',$this->mes_abrev,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}