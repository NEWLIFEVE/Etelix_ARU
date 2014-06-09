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
 * @property string $email_personal
 * @property string $email_company
 * @property string $skype
 * @property string $cellphone
 * @property string $home_phone
 * @property string $extension_numeric
 * @property integer $id_gender
 * @property integer $id_nationality
 * @property string $second_name
 * @property string $second_last_name
 * @property string $image_rute
 *
 * The followings are the available model relations:
 * @property EducationEmployee[] $educationEmployees
 * @property EventEmployee[] $eventEmployees
 * @property Users[] $users
 * @property ChildrenEmployee[] $childrenEmployees
 * @property EmergencyEmployee[] $emergencyEmployees
 * @property LanguageEmployee[] $languageEmployees
 * @property Position $idPosition
 * @property Employee $idSupervisor
 * @property Employee[] $employees
 * @property LevelEducation $idEducation
 * @property MaritalStatus $idMaritalStatus
 * @property Gender $idGender
 * @property Nationality $idNationality
 * @property Address[] $addresses
 */
class Employee extends CActiveRecord
{
    public $country;
    public $state;
    public $city;
    public $line1;
    public $line2;
    public $zip;
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
			array('id_position, id_supervisor, id_education, id_marital_status, id_gender, id_nationality', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, date_birth, identity_card, email_personal, email_company, skype, cellphone, home_phone, extension_numeric, second_name, second_last_name', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_position, id_supervisor, id_education, id_marital_status, first_name, last_name, date_birth, identity_card, email_personal, email_company, skype, cellphone, home_phone, extension_numeric, id_gender, id_nationality, second_name, second_last_name, image_rute', 'safe', 'on'=>'search'),
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
			'eventEmployees' => array(self::HAS_MANY, 'EventEmployee', 'id_employee'),
			'users' => array(self::HAS_MANY, 'Users', 'id_employee'),
			'childrenEmployees' => array(self::HAS_MANY, 'ChildrenEmployee', 'id_employee'),
			'emergencyEmployees' => array(self::HAS_MANY, 'EmergencyEmployee', 'id_employee'),
			'languageEmployees' => array(self::HAS_MANY, 'LanguageEmployee', 'id_employee'),
			'idPosition' => array(self::BELONGS_TO, 'Position', 'id_position'),
			'idSupervisor' => array(self::BELONGS_TO, 'Employee', 'id_supervisor'),
			'employees' => array(self::HAS_MANY, 'Employee', 'id_supervisor'),
			'idEducation' => array(self::BELONGS_TO, 'LevelEducation', 'id_education'),
			'idMaritalStatus' => array(self::BELONGS_TO, 'MaritalStatus', 'id_marital_status'),
			'idGender' => array(self::BELONGS_TO, 'Gender', 'id_gender'),
			'idNationality' => array(self::BELONGS_TO, 'Nationality', 'id_nationality'),
			'addresses' => array(self::HAS_MANY, 'Address', 'id_employee'),
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
			'email_personal' => 'Email Personal',
			'email_company' => 'Email Company',
			'skype' => 'Skype',
			'cellphone' => 'Cellphone',
			'home_phone' => 'Home Phone',
			'extension_numeric' => 'Extension Numeric',
			'id_gender' => 'Id Gender',
			'id_nationality' => 'Id Nationality',
			'second_name' => 'Secon Name',
			'second_last_name' => 'Secon Last Name',
			'image_rute' => 'Imagen',
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
		$criteria->compare('email_personal',$this->email_personal,true);
		$criteria->compare('email_company',$this->email_company,true);
		$criteria->compare('skype',$this->skype,true);
		$criteria->compare('cellphone',$this->cellphone,true);
		$criteria->compare('home_phone',$this->home_phone,true);
		$criteria->compare('extension_numeric',$this->extension_numeric,true);
		$criteria->compare('id_gender',$this->id_gender);
		$criteria->compare('id_nationality',$this->id_nationality);
		$criteria->compare('second_name',$this->second_name,true);
		$criteria->compare('second_last_name',$this->second_last_name,true);
		$criteria->compare('image_rute',$this->image_rute,true);

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
        
        public static function getEmployee ($idUser)
        {
              $idEmployee = Users::getIdEmployee($idUser);
              if ($idEmployee!=NULL) return self::model()->findByPk($idEmployee); else return NULL;
        }
        
        public static function getImage($idUser){
            $idEmployee = Users::getIdEmployee($idUser);
            if ($idEmployee!=NULL) return self::model()->findByPk($idEmployee)->image_rute; else return NULL;
        }
        /**
         * 
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
        
        
        public static function getStatusEmployees($type,$limit=null,$offset=null)
        {    
           
            $conditions=null;
            $consulta="select e.*
                        from
                        employee e, users u, event_employee ev, type_event t,
                        (select id_employee, MAX(date) as date
                        from event_employee 
                        group by id_employee ) x,

                        (select id_employee, date, MAX(hour_event) as hour
                        from event_employee
                        group by id_employee, date
                        order by id_employee) y

                        where x.id_employee=y.id_employee and x.date = y.date and
                        x.id_employee = e.id and u.id_employee = e.id and u.id_status = 1 and 
                        ev.id_employee=e.id and ev.date=x.date and ev.hour_event=y.hour and ev.id_type_event = t.id  ";
            switch ($type) {
                case "active":
                    $consulta.=" and t.id IN (1,3) ORDER BY e.first_name";
                    break;
                case "inactive":
                    $consulta.=" and t.id IN (2,4) ORDER BY e.first_name";
                    break;
            }
            if($limit!=null && $offset!=null) $conditions="LIMIT ".$limit." OFFSET ".$offset;
            $employeeall=self::model()->findAllBySql($consulta);
           
            return $employeeall;
        }
        
        public function getDynamicEmployee($idEmployee){
            $dynamicEmployee=self::model()->findByPk($idEmployee);
            return $dynamicEmployee;
        }
        
        
        public function getHourEvent()
            {
              $consulta="select e.* from employee e, users u where u.id_employee = e.id and u.id_status = 1 ORDER BY e.first_name";
              $employeedeclare=self::model()->findAllBySql($consulta);
              return $employeedeclare;
            }
        
        
        public function createOption( $id)
         {
            
           
                $opciones="<tr>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Skype</th>
                                    <th>Teléfono</th>
                                    <th>Correo Corporativo</th>
                                    <th>Extensión de Oficina</th>
                                    <th colspan='2'>Status</th>
                                 </tr>";
                
      
//                switch ($type) {
//                    case "active":
//                          
//                        $activeEmployee = Employee::getStatusEmployees($type);
//                         foreach ($activeEmployee as $value) {
//                                        if (is_null($value->image_rute)){$photoemployee="themes/metronic/img/profile/profile.jpg";} else {$photoemployee=$value->image_rute;}
//                                        
//                                      $opciones.="<tr>
//                                                 <td><img class='sizephotoemployee' src='/".$photoemployee."'/></td>
//                                                 <td style='color:#000;'>".$value->first_name."</td>
//                                                 <td>".$value->last_name."</td>
//                                              </tr>";
//                            }
//                        break;
//                        
//                        case "inactive":
//                          
//                        $inactiveEmployee = Employee::getStatusEmployees($type);
//                         foreach ($inactiveEmployee as $value) {
//                                        if (is_null($value->image_rute)){$photoemployee="themes/metronic/img/profile/profile.jpg";} else {$photoemployee=$value->image_rute;}
//                                        
//                                      $opciones.="<tr>
//                                                 <td><img class='sizephotoemployee' src='/".$photoemployee."'/></td>
//                                                 <td style='color:#000;'>".$value->first_name."</td>
//                                                 <td>".$value->last_name."</td>
//                                              </tr>";
//                            }
//                        break;
//
//                   
//                }
                return $opciones;
         }
         
         
         public function getfiltro($type)
                 
        {
             
            $array = array();
             $consulta=" select e.id
                        from
                        employee e, users u
                        where  u.id_employee = e.id and u.id_status = 1";
             
             $model=self::model()->findAllBySql($consulta);
             foreach ($model as $key=> $value)
                 {
                
                 $event=  EventEmployee::getfiltroHour($value->id, $type); 
                
                 if ($event!=NULL){
                     $array[]=$event;
                     
                 }
                
                 }
                 
                // var_dump($event);
              return $array;
               
       }
       
   
       
}
