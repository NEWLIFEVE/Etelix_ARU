<?php

/**
 * This is the model class for table "event_employee".
 *
 * The followings are the available columns in table 'event_employee':
 * @property integer $id
 * @property integer $id_type_event
 * @property integer $id_employee
 * @property string $time_start_day
 * @property string $time_start_rest
 * @property string $time_end_rest
 * @property string $time_end_day
 * @property string $date
 *
 * The followings are the available model relations:
 * @property TypeEvent $idTypeEvent
 * @property Employee $idEmployee
 */
class EventEmployee extends CActiveRecord
{
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
			array('id_type_event, id_employee', 'numerical', 'integerOnly'=>true),
			array('time_start_day, time_start_rest, time_end_rest, time_end_day, date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_type_event, id_employee, time_start_day, time_start_rest, time_end_rest, time_end_day, date', 'safe', 'on'=>'search'),
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
			'idTypeEvent' => array(self::BELONGS_TO, 'TypeEvent', 'id_type_event'),
			'idEmployee' => array(self::BELONGS_TO, 'Employee', 'id_employee'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_type_event' => 'Id Type Event',
			'id_employee' => 'Id Employee',
			'time_start_day' => 'Time Start Day',
			'time_start_rest' => 'Time Start Rest',
			'time_end_rest' => 'Time End Rest',
			'time_end_day' => 'Time End Day',
			'date' => 'Date',
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
		$criteria->compare('id_type_event',$this->id_type_event);
		$criteria->compare('id_employee',$this->id_employee);
		$criteria->compare('time_start_day',$this->time_start_day,true);
		$criteria->compare('time_start_rest',$this->time_start_rest,true);
		$criteria->compare('time_end_rest',$this->time_end_rest,true);
		$criteria->compare('time_end_day',$this->time_end_day,true);
		$criteria->compare('date',$this->date,true);

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
        
        
        /**
         * 
         */
        
        
        public static function getWorkday($id, $fe){
            $array=array();
    
            $fecha= self::model()->findAll('id_employee=:id AND date=:date', array(':id'=>$id, ':date'=>$fe));
            var_dump($fecha);
              foreach ($fecha as $value){
                 
                   if($array[]=$value->time_start_day!== NULL){
                      echo "datos comienzo de jornada";
                      
                      if ($array[]=$value->time_start_rest!== NULL){
                          echo "comienzo de descanso";
                          
                           if ($array[]=$value->time_end_rest !== NULL){
                               echo "fin de descanso";
                               
                                if ($array[]=$value->time_end_day !==NULL){
                                    echo "fin de jornada ";
                                } 
                                else {
                                    echo "no hay datos de fin de jornada";
                                }
                           }
                           
                           else{
                               echo "no hay datos de fin de descanso";
                           }
                          
                      }
                      
                      else{
                          echo "no hay datos de comienzo de descanso";
                      }
 
                  }
                  
                  else{
                      echo "no hay datos de comienzo de jornada";
                  }
  
              }

            //return $fecha;
        }
}