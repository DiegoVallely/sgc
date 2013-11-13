<?php

/**
 * This is the model class for table "Folhapagamento".
 *
 * The followings are the available columns in table 'Folhapagamento':
 * @property integer $id_fp
 * @property integer $id_f
 * @property string $salario
 * @property string $adiant_sala
 * @property string $decimo_terc
 * @property string $inss
 * @property string $fgts
 * @property string $pis
 * @property string $honorarios
 * @property string $cesta_basica
 * @property string $ferias
 * @property string $rescisao
 * @property string $vale_trasp
 * @property string $vale_alim
 *
 * The followings are the available model relations:
 * @property Funcionario $idF
 */
class Folhapagamento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Folhapagamento the static model class
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
		return 'Folhapagamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_fp, id_f', 'required'),
			array('id_fp, id_f', 'numerical', 'integerOnly'=>true),
			array('salario, adiant_sala, decimo_terc, inss, fgts, pis, honorarios, cesta_basica, ferias, rescisao, vale_trasp, vale_alim', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_fp, id_f, salario, adiant_sala, decimo_terc, inss, fgts, pis, honorarios, cesta_basica, ferias, rescisao, vale_trasp, vale_alim', 'safe', 'on'=>'search'),
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
			'idF' => array(self::BELONGS_TO, 'Funcionario', 'id_f'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_fp' => 'Id Fp',
			'id_f' => 'Id F',
			'salario' => 'Salario',
			'adiant_sala' => 'Adiant Sala',
			'decimo_terc' => 'Decimo Terc',
			'inss' => 'Inss',
			'fgts' => 'Fgts',
			'pis' => 'Pis',
			'honorarios' => 'Honorarios',
			'cesta_basica' => 'Cesta Basica',
			'ferias' => 'Ferias',
			'rescisao' => 'Rescisao',
			'vale_trasp' => 'Vale Trasp',
			'vale_alim' => 'Vale Alim',
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

		$criteria->compare('id_fp',$this->id_fp);
		$criteria->compare('id_f',$this->id_f);
		$criteria->compare('salario',$this->salario,true);
		$criteria->compare('adiant_sala',$this->adiant_sala,true);
		$criteria->compare('decimo_terc',$this->decimo_terc,true);
		$criteria->compare('inss',$this->inss,true);
		$criteria->compare('fgts',$this->fgts,true);
		$criteria->compare('pis',$this->pis,true);
		$criteria->compare('honorarios',$this->honorarios,true);
		$criteria->compare('cesta_basica',$this->cesta_basica,true);
		$criteria->compare('ferias',$this->ferias,true);
		$criteria->compare('rescisao',$this->rescisao,true);
		$criteria->compare('vale_trasp',$this->vale_trasp,true);
		$criteria->compare('vale_alim',$this->vale_alim,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}