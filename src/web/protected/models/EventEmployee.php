<?php

/**
 * This is the model class for table "event_employee".
 *
 * The followings are the available columns in table 'event_employee':
 * @property integer $id
 * @property integer $id_employee
 * @property string $date
 * @property string $hour_event
 * @property integer $id_type_event
 * @property integer $id_location
 *
 * The followings are the available model relations:
 * @property Employee $idEmployee
 * @property TypeEvent $idTypeEvent
 * @property Location $idLocation
 */
class EventEmployee extends CActiveRecord
{
    public $confir_pass;
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event_employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_employee, id_type_event, id_location', 'numerical', 'integerOnly'=>true),
			array('date, hour_event', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_employee, date, hour_event, id_type_event, id_location', 'safe', 'on'=>'search'),
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
			'idEmployee' => array(self::BELONGS_TO, 'Employee', 'id_employee'),
			'idTypeEvent' => array(self::BELONGS_TO, 'TypeEvent', 'id_type_event'),
			'idLocation' => array(self::BELONGS_TO, 'Location', 'id_location'),
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
			'date' => 'Date',
			'hour_event' => 'Hour Event',
			'id_type_event' => 'Id Type Event',
			'id_location' => 'Id Location',
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
		$criteria->compare('date',$this->date,true);
		$criteria->compare('hour_event',$this->hour_event,true);
		$criteria->compare('id_type_event',$this->id_type_event);
		$criteria->compare('id_location',$this->id_location);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EventEmployee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

        
        
        public static function getWorkday($id, $date){
            $array=array();
   
         $fecha= self::model()->findAll('id_employee=:id AND date=:date ORDER BY id_type_event ASC', array(':id'=>$id, ':date'=>$date));
        
          
           if ($fecha!=NULL){ 
                    foreach ($fecha as $value)
                    {
                        $array[]=array(
                            'event'=>$value->id_type_event,
                            'hour'=>$value->hour_event
                        );
                    }
                    return $array;
          }
          else
          {
            return false;
          }
        }
        
       

}
