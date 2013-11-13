<?php

/**
 * This is the model class for table "dadoscondominio".
 *
 * The followings are the available columns in table 'dadoscondominio':
 * @property integer $id_cond
 * @property integer $id_end
 * @property string $nome_fantasia
 * @property string $razao_social
 * @property string $cnpj
 * @property string $num_unidades
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Endereco $idEnd
 */
class Dadoscondominio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dadoscondominio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome_fantasia, razao_social, cnpj, email,num_unidades', 'required'),
			array('id_end', 'numerical', 'integerOnly'=>true),
			array('nome_fantasia, razao_social', 'length', 'max'=>70),
			array('cnpj', 'length', 'max'=>18),
			array('email', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cond, id_end, nome_fantasia, razao_social, cnpj,num_unidades, email', 'safe', 'on'=>'search'),
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
			'endereco' => array(self::BELONGS_TO, 'Endereco', 'id_end'),
                        'financeiroinicial' => array(self::HAS_MANY, 'Financeiroinicial', 'id_cond'),
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
			'razao_social' => 'Razão Social',
			'cnpj' => 'CNPJ',
                        'num_unidades' => 'Número de Unidades',
			'email' => 'Email',
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

		$criteria->compare('id_cond',$this->id_cond);
		$criteria->compare('id_end',$this->id_end);
		$criteria->compare('nome_fantasia',$this->nome_fantasia,true);
		$criteria->compare('razao_social',$this->razao_social,true);
		$criteria->compare('cnpj',$this->cnpj,true);
                $criteria->compare('num_unidades',$this->num_unidades,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dadoscondominio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
