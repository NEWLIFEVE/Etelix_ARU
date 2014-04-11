<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id
 * @property integer $id_position
 * @property integer $id_supervisor
 * @property integer $id_education
 * @property integer $id_marital_status
 * @property string $first_name
 * @property string $last_name
 * @property string $sex
 * @property string $date_birth
 * @property string $nationality
 * @property string $identity_card
 * @property string $address_room
 * @property string $email_personal
 * @property string $email_company
 * @property string $skype
 * @property string $cellphone
 * @property string $home_phone
 * @property string $extension_numeric
 * @property string $country
 * @property string $state
 * @property string $town
 *
 * The followings are the available model relations:
 * @property User[] $users
 * @property Position $idPosition
 * @property Employee $idSupervisor
 * @property Employee[] $employees
 * @property LevelEducation $idEducation
 * @property MaritalStatus $idMaritalStatus
 * @property ChildrenEmployee[] $childrenEmployees
 * @property EmergencyReference[] $emergencyReferences
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_position, id_supervisor, id_education, id_marital_status', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, sex, date_birth, nationality, identity_card, address_room, email_personal, email_company, skype, cellphone, home_phone, extension_numeric, country, state, town', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_position, id_supervisor, id_education, id_marital_status, first_name, last_name, sex, date_birth, nationality, identity_card, address_room, email_personal, email_company, skype, cellphone, home_phone, extension_numeric, country, state, town', 'safe', 'on'=>'search'),
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
			'users' => array(self::HAS_MANY, 'User', 'id_employee'),
			'idPosition' => array(self::BELONGS_TO, 'Position', 'id_position'),
			'idSupervisor' => array(self::BELONGS_TO, 'Employee', 'id_supervisor'),
			'employees' => array(self::HAS_MANY, 'Employee', 'id_supervisor'),
			'idEducation' => array(self::BELONGS_TO, 'LevelEducation', 'id_education'),
			'idMaritalStatus' => array(self::BELONGS_TO, 'MaritalStatus', 'id_marital_status'),
			'childrenEmployees' => array(self::HAS_MANY, 'ChildrenEmployee', 'id_employee'),
			'emergencyReferences' => array(self::HAS_MANY, 'EmergencyReference', 'id_employee'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_position' => 'Id Position',
			'id_supervisor' => 'Id Supervisor',
			'id_education' => 'Id Education',
			'id_marital_status' => 'Id Marital Status',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'sex' => 'Sex',
			'date_birth' => 'Date Birth',
			'nationality' => 'Nationality',
			'identity_card' => 'Identity Card',
			'address_room' => 'Address Room',
			'email_personal' => 'Email Personal',
			'email_company' => 'Email Company',
			'skype' => 'Skype',
			'cellphone' => 'Cellphone',
			'home_phone' => 'Home Phone',
			'extension_numeric' => 'Extension Numeric',
			'country' => 'Country',
			'state' => 'State',
			'town' => 'Town',
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
		$criteria->compare('id_position',$this->id_position);
		$criteria->compare('id_supervisor',$this->id_supervisor);
		$criteria->compare('id_education',$this->id_education);
		$criteria->compare('id_marital_status',$this->id_marital_status);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('date_birth',$this->date_birth,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('identity_card',$this->identity_card,true);
		$criteria->compare('address_room',$this->address_room,true);
		$criteria->compare('email_personal',$this->email_personal,true);
		$criteria->compare('email_company',$this->email_company,true);
		$criteria->compare('skype',$this->skype,true);
		$criteria->compare('cellphone',$this->cellphone,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('extension_numeric',$this->extension_numeric,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('town',$this->town,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
