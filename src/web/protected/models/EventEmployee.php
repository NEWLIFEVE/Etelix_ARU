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

        /**
         * 
         */
        public static function getWorkday($id, $date)
        {
            $eventos = array();
            $model = self::model()->findAll('id_employee=:id AND date=:date ORDER BY id_type_event ASC', array(':id' => $id, ':date' => $date));

            if ($model != NULL) {
                foreach ($model as $value) {
                    $eventos[] = array(
                        'event' => $value->id_type_event,
                        'hour' => $value->hour_event
                    );
                }
                return $eventos;
            } else {
                return false;
            }
        }
        
    public function getSearchStatus($id)
    {   
        $evento=false;
        $consut=self::model()->find('id_employee=:id  ORDER BY date DESC, hour_event DESC', array(':id'=>$id));
        if($consut!=NULL)
        {
            $evento=array(
                'name'=>$consut->idTypeEvent->name,
                'id_type_event'=>$consut->id_type_event
                    );
        }
        return $evento;
   }
   
   
   public function getStilo($id_event)
   {
       if ($id_event==1){ return $stilo="label-success";}
       if ($id_event==2){ return $stilo="label-warning";}
       if ($id_event==3){ return $stilo="label-info";}
       if ($id_event==4){ return $stilo="label-danger";}
   }
   
   
    /*
     * funcion para capturar las horas declaradas por empleado
     * 
     */
        
        public function getEventosHoras($id){
            $consulta="select x.*, ev.*
                        from
                        employee e, users u, event_employee ev, type_event t,
                        (select id_employee, MAX(date) as date
                        from event_employee 
                        group by id_employee ) x
                        where 
                        x.id_employee = e.id and u.id_employee = e.id and u.id_status = 1 and 
                        ev.id_employee=e.id and ev.date=x.date  and ev.id_type_event = t.id and ev.id_employee=".$id.";";
            $horas=self::model()->findAllBySql($consulta);
          
            return $horas;
        }
        
        
        public static function getValidate_hour($start, $date){
         
             $calculo_dias= DateManagement::getValidate_hour($start, $date, 16);
             $hourclient=DateManagement::gethourcliente();
             
//             var_dump($calculo_dias[1]); HORAS CALCULADAS
//             var_dump($calculo_dias[0]); FECHA CALCULADAS
             if ((strtotime($calculo_dias[1])<strtotime($hourclient)) && (strtotime($calculo_dias[0])<= strtotime($date))){
               return false; 
             }
             else {
               return true;
             }

        }
        
        
        public function getfiltroHour ($id,$type)
            {
              
               $employeeall=NULL;
                $consulta="select  e.id ,ev.date, ev.hour_event
                        from
                        employee e, users u, event_employee ev, type_event t,
                        (select id_employee, MAX(date) as date
                        from event_employee 
                        group by id_employee ) x
                        where 
                        x.id_employee = e.id and u.id_employee = e.id and u.id_status = 1 and ev.id_type_event=1 and
                        ev.id_employee=e.id and ev.date=x.date  and ev.id_type_event = t.id and ev.id_employee=".$id."";
               
                $model=self::model()->findAllBySql($consulta);
             
                foreach ($model as $value)
                    {
                        $filtrar= EventEmployee::getfiltro($value->id, $value->date, $value->hour_event);
                        if ($filtrar!=NULL){
                            $consul="
                                        select e.*
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
                        ev.id_employee=e.id and ev.date=x.date and ev.hour_event=y.hour and ev.id_type_event = t.id  and e.id=".$filtrar." ";
                            
                           switch ($type) {
                            case "active":
                                $consul.=" and t.id IN (1,3)";
                                break;
                            case "inactive":
                                $consul.=" and t.id IN (2,4)";
                                break;
                            }  
                            $employeeall=  Employee::model()->findBySql($consul);
                            
                        }
                          
                    }
                   
                    return $employeeall;
            }
            
            
            
            
            
            
            
            
            
            
            
      public static function getfiltro($id, $date, $hour)
        {
         $calculo_dias= DateManagement::getFiltroEmployee($hour, $date, 16);
         $hourclient=DateManagement::gethourcliente();
         $filtroId=NULL;
         $fecha=date('Ymd');
        
         //cuando la fecha actual es igual a la fecha de declaracion--------cuando la fecha actual es menor o igual a la fecha de calculo por horas
         if ((strtotime($fecha)== strtotime($date)) || (strtotime($fecha)<= strtotime($calculo_dias[0])))
             {
             $filtroId=$id;
             
                             
             }
             return $filtroId;
 
        }
}



