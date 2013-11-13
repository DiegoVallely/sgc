<?php

/**
 * This is the model class for table "Funcionario".
 *
 * The followings are the available columns in table 'Funcionario':
 * @property integer $id_f
 * @property string $nome
 * @property string $cpf
 * @property integer $id_end
 * @property string $telefone
 * @property string $funcao
 * @property string $data_admissao
 * @property string $data_desligamento
 * @property string $hora_ini
 * @property string $hora_fin
 *
 * The followings are the available model relations:
 * @property Folhapagamento[] $folhapagamentos
 * @property Endereco $idEnd
 */
class Funcionario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Funcionario the static model class
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
		return 'Funcionario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_f, nome, cpf, telefone, funcao, hora_ini, hora_fin', 'required'),
			array('id_f, id_end', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>70),
			array('cpf, telefone', 'length', 'max'=>14),
			array('funcao', 'length', 'max'=>20),
			array('data_admissao, data_desligamento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_f, nome, cpf, id_end, telefone, funcao, data_admissao, data_desligamento, hora_ini, hora_fin', 'safe', 'on'=>'search'),
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
			'folhapagamentos' => array(self::HAS_MANY, 'Folhapagamento', 'id_f'),
			'idEnd' => array(self::BELONGS_TO, 'Endereco', 'id_end'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_f' => 'Id F',
			'nome' => 'Nome',
			'cpf' => 'Cpf',
			'id_end' => 'Id End',
			'telefone' => 'Telefone',
			'funcao' => 'Funcao',
			'data_admissao' => 'Data Admissao',
			'data_desligamento' => 'Data Desligamento',
			'hora_ini' => 'Hora Ini',
			'hora_fin' => 'Hora Fin',
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

		$criteria->compare('id_f',$this->id_f);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cpf',$this->cpf,true);
		$criteria->compare('id_end',$this->id_end);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('funcao',$this->funcao,true);
		$criteria->compare('data_admissao',$this->data_admissao,true);
		$criteria->compare('data_desligamento',$this->data_desligamento,true);
		$criteria->compare('hora_ini',$this->hora_ini,true);
		$criteria->compare('hora_fin',$this->hora_fin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}