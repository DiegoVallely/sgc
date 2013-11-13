<?php

/**
 * This is the model class for table "DadosCondominio".
 *
 * The followings are the available columns in table 'DadosCondominio':
 * @property integer $id_cond
 * @property integer $id_end
 * @property string $nome_fantasia
 * @property string $razao_social
 * @property string $cnpj
 * @property integer $num_unidades
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Endereco $idEnd
 * @property FinanceiroInicial[] $financeiroInicials
 */
class DadosCondominio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DadosCondominio the static model class
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
		return 'DadosCondominio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cond, nome_fantasia, razao_social, cnpj, num_unidades, email', 'required'),
			array('id_cond, id_end, num_unidades', 'numerical', 'integerOnly'=>true),
			array('nome_fantasia, razao_social', 'length', 'max'=>70),
			array('cnpj', 'length', 'max'=>18),
			array('email', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_cond, id_end, nome_fantasia, razao_social, cnpj, num_unidades, email', 'safe', 'on'=>'search'),
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
			'idEnd' => array(self::BELONGS_TO, 'Endereco', 'id_end'),
			'financeiroInicials' => array(self::HAS_MANY, 'FinanceiroInicial', 'id_cond'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cond' => 'Id Cond',
			'id_end' => 'Id End',
			'nome_fantasia' => 'Nome Fantasia',
			'razao_social' => 'Razao Social',
			'cnpj' => 'Cnpj',
			'num_unidades' => 'Num Unidades',
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

		$criteria->compare('id_cond',$this->id_cond);
		$criteria->compare('id_end',$this->id_end);
		$criteria->compare('nome_fantasia',$this->nome_fantasia,true);
		$criteria->compare('razao_social',$this->razao_social,true);
		$criteria->compare('cnpj',$this->cnpj,true);
		$criteria->compare('num_unidades',$this->num_unidades);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}