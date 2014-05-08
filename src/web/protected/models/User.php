<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property integer $id_employee
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $activeKey
 * @property boolean $superuser
 * @property boolean $status
 * @property integer $id_rol
 * @property string $create_at
 * @property string $lastvist_at
 *
 * The followings are the available model relations:
 * @property Rol $idRol
 * @property Employee $idEmployee
 * @property ConnectingTrace[] $connectingTraces
 */
class User extends CActiveRecord
{
    
    public $confir_pass;
    public $confir_pass1;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_employee, id_rol', 'numerical', 'integerOnly'=>true),
			array('username, password, email, activeKey, superuser, status, create_at, lastvist_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_employee, username, password, email, activeKey, superuser, status, id_rol, create_at, lastvist_at', 'safe', 'on'=>'search'),
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
			'idRol' => array(self::BELONGS_TO, 'Rol', 'id_rol'),
			'idEmployee' => array(self::BELONGS_TO, 'Employee', 'id_employee'),
			'connectingTraces' => array(self::HAS_MANY, 'ConnectingTrace', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_employee' => 'Id Employee',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'activeKey' => 'Active Key',
			'superuser' => 'Superuser',
			'status' => 'Status',
			'id_rol' => 'Id Rol',
			'create_at' => 'Create At',
			'lastvist_at' => 'Lastvist At',
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
		$criteria->compare('id_employee',$this->id_employee);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('activeKey',$this->activeKey,true);
		$criteria->compare('superuser',$this->superuser);
		$criteria->compare('status',$this->status);
		$criteria->compare('id_rol',$this->id_rol);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('lastvist_at',$this->lastvist_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
        /**
         * 
         * funcion para verificar el pass actual
         */
        
        
        public function getPass($pass){
            $id=Yii::app()->user->id;
            if ($pass!=NULL){
                 $verificar_pass=self::model()->find('id=:id AND password=:pass',array(':id'=>$id, ':pass'=>$pass));
                 return $verificar_pass;
            }
            
            else{
                return false; 
            }
            
            
        }
        
        public static function getIdEmployee($idUser)
        {
            $model = self::model()->findByPk($idUser);
            if ($model!=NULL) return $model->id_employee; else return NULL;          
        }
}
