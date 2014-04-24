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
 * @property string $date_birth
 * @property string $identity_card
 * @property string $address_room
 * @property string $email_personal
 * @property string $email_company
 * @property string $skype
 * @property string $cellphone
 * @property string $home_phone
 * @property string $extension_numeric
 * @property integer $id_country
 * @property integer $id_gender
 * @property integer $id_states
 * @property integer $id_nationality
 *
 * The followings are the available model relations:
 * @property EducationEmployee[] $educationEmployees
 * @property User[] $users
 * @property ChildrenEmployee[] $childrenEmployees
 * @property EmergencyReference[] $emergencyReferences
 * @property Position $idPosition
 * @property Employee $idSupervisor
 * @property Employee[] $employees
 * @property LevelEducation $idEducation
 * @property MaritalStatus $idMaritalStatus
 * @property Gender $idGender
 * @property Country $idCountry
 * @property States $idStates
 * @property Nationality $idNationality
 * @property LanguageEmployee[] $languageEmployees
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
			array('id_position, id_supervisor, id_education, id_marital_status, id_country, id_gender, id_states, id_nationality', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, date_birth, identity_card, address_room, email_personal, email_company, skype, cellphone, home_phone, extension_numeric', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_position, id_supervisor, id_education, id_marital_status, first_name, last_name, date_birth, identity_card, address_room, email_personal, email_company, skype, cellphone, home_phone, extension_numeric, id_country, id_gender, id_states, id_nationality', 'safe', 'on'=>'search'),
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
			'educationEmployees' => array(self::HAS_MANY, 'EducationEmployee', 'id_employee'),
			'users' => array(self::HAS_MANY, 'User', 'id_employee'),
			'childrenEmployees' => array(self::HAS_MANY, 'ChildrenEmployee', 'id_employee'),
			'emergencyReferences' => array(self::HAS_MANY, 'EmergencyReference', 'id_employee'),
			'idPosition' => array(self::BELONGS_TO, 'Position', 'id_position'),
			'idSupervisor' => array(self::BELONGS_TO, 'Employee', 'id_supervisor'),
			'employees' => array(self::HAS_MANY, 'Employee', 'id_supervisor'),
			'idEducation' => array(self::BELONGS_TO, 'LevelEducation', 'id_education'),
			'idMaritalStatus' => array(self::BELONGS_TO, 'MaritalStatus', 'id_marital_status'),
			'idGender' => array(self::BELONGS_TO, 'Gender', 'id_gender'),
			'idCountry' => array(self::BELONGS_TO, 'Country', 'id_country'),
			'idStates' => array(self::BELONGS_TO, 'States', 'id_states'),
			'idNationality' => array(self::BELONGS_TO, 'Nationality', 'id_nationality'),
			'languageEmployees' => array(self::HAS_MANY, 'LanguageEmployee', 'id_employee'),
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
			'date_birth' => 'Date Birth',
			'identity_card' => 'Identity Card',
			'address_room' => 'Address Room',
			'email_personal' => 'Email Personal',
			'email_company' => 'Email Company',
			'skype' => 'Skype',
			'cellphone' => 'Cellphone',
			'home_phone' => 'Home Phone',
			'extension_numeric' => 'Extension Numeric',
			'id_country' => 'Id Country',
			'id_gender' => 'Id Gender',
			'id_states' => 'Id States',
			'id_nationality' => 'Id Nationality',
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
		$criteria->compare('date_birth',$this->date_birth,true);
		$criteria->compare('identity_card',$this->identity_card,true);
		$criteria->compare('address_room',$this->address_room,true);
		$criteria->compare('email_personal',$this->email_personal,true);
		$criteria->compare('email_company',$this->email_company,true);
		$criteria->compare('skype',$this->skype,true);
		$criteria->compare('cellphone',$this->cellphone,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('extension_numeric',$this->extension_numeric,true);
		$criteria->compare('id_country',$this->id_country);
		$criteria->compare('id_gender',$this->id_gender);
		$criteria->compare('id_states',$this->id_states);
		$criteria->compare('id_nationality',$this->id_nationality);

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
        
        
        /**
         * 
         */
        
        
         public function getMaritalStatus() {
            return  CHtml::ListData(MaritalStatus::model()->findAll(),"id","name");
        }
       
        public function getCurrency() {
            return  CHtml::ListData(Currency::model()->findAll(),"id","name"); 
        }
        
        public function getLanguaje() {
            return  CHtml::ListData(Language::model()->findAll(),"id","name"); 
        }
        
        public function getNationality() {
            return  CHtml::ListData(Nationality::model()->findAll(),"id","name"); 
        }
        public function getCountry() {
            return  CHtml::ListData(Country::model()->findAll(),"id","name"); 
        }
         public function getState() {
            return  CHtml::ListData(States::model()->findAll(),"id","name"); 
        }
}
