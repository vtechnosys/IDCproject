<?php

/**
 * This is the model class for table "careers".
 *
 * The followings are the available columns in table 'careers':
 * @property integer $id
 * @property string $name
 * @property string $qualification
 * @property string $address
 * @property string $email_id
 * @property integer $mobile
 */
class Careers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'careers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, qualification, address, email_id, mobile', 'required'),
			array('mobile', 'numerical', 'integerOnly'=>true),
			array('name, qualification, email_id', 'length', 'max'=>100),
			array('address', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, qualification, address, email_id, mobile', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'qualification' => 'Qualification',
			'address' => 'Address',
			'email_id' => 'Email',
			'mobile' => 'Mobile',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('qualification',$this->qualification,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('email_id',$this->email_id,true);
		$criteria->compare('mobile',$this->mobile);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Careers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
