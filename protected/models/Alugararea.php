<?php

/**
 * This is the model class for table "alugararea".
 *
 * The followings are the available columns in table 'alugararea':
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
 * @property Morador $idM
 * @property Evento[] $eventos
 */
class Alugararea extends CActiveRecord
{
        const STATUS_PENDENTE=1;
        const STATUS_APROVADO=2;
        
        
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alugararea';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data_aluguel, hora_ini, hora_fin, motivo', 'required'),
			array('id_m, status', 'numerical', 'integerOnly'=>true),
                        array('status', 'in', 'range'=>array(1,2,3)),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_alugar, id_m, data_aluguel, hora_ini, hora_fin, motivo, status,solicitado_em', 'safe', 'on'=>'search'),
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
			'data_aluguel' => 'Data',
			'hora_ini' => 'Hora Inicial',
			'hora_fin' => 'Hora Final',
			'motivo' => 'Motivo',
			'status' => 'Status',
      			'solcitado_em' => 'Solicitado em',

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

        
        public function beforeSave() {
            if ($this->isNewRecord) {
                $this->solicitado_em=time();
                $this->id_m=Yii::app()->usuario->id_m;
                $this->data_aluguel = date('Y-m-d', CDateTimeParser::parse($this->data_aluguel, Yii::app()->locale->dateFormat)); //Caso deseje que o usuário insira a data manualmente
             
                
            }
          return parent::beforeSave();
        }

       public function afterFind() {
             $this->data_aluguel = Yii::app()->dateFormatter->formatDateTime(
               CDateTimeParser::parse($this->data_aluguel, 'yyyy-MM-dd'), 'medium', null);
             
          return true;
       }
        public function approve()
        {
            $this->status=  Alugararea::STATUS_APROVADO;
            $this->update(array('status'));
        }
        
        
        
        
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alugararea the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
