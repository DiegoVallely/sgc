<?php

/**
 * This is the model class for table "auth_item_child".
 *
 * The followings are the available columns in table 'auth_item_child':
 * @property string $parent
 * @property string $child
 *
 * The followings are the available model relations:
 * @property AuthAssignment[] $authAssignments
 * @property AuthItem $parent0
 * @property AuthItem[] $authItemChildren
 * @property AuthItem $child0
 * @property AuthItem[] $authItemChildren1
 */
class AuthItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AuthItem the static model class
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
		return 'auth_item_child';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent, child', 'length', 'max'=>64),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('parent, child', 'safe', 'on'=>'search'),
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
			'authAssignments' => array(self::HAS_MANY, 'AuthAssignment', 'itemname'),
			'parent0' => array(self::BELONGS_TO, 'AuthItem', 'parent'),
			'authItemChildren' => array(self::HAS_MANY, 'AuthItem', 'parent'),
			'child0' => array(self::BELONGS_TO, 'AuthItem', 'child'),
			'authItemChildren1' => array(self::HAS_MANY, 'AuthItem', 'child'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'parent' => 'Parent',
			'child' => 'Child',
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

		$criteria->compare('parent',$this->parent,true);
		$criteria->compare('child',$this->child,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}