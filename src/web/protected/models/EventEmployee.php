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
        * funcion para consultar todos los ultimos eventos de declaracion de un empleado, retorna FALSE si no hay eventos declarados y sino retorna un arreglo con id de eventos, hora de eventos y fecha
        * @param type $id
        * @param type $date
        * @return boolean
        */
        public static function getWorkday($id,$date)
        {
            $eventos = array();
            $model = self::model()->findAll('id_employee=:id AND date>=:date  ORDER BY id_type_event ASC', array(':id' => $id, ':date' => $date));  
            if ($model != NULL) {
                foreach ($model as $value) {
                    $eventos[] = array(
                        'event' => $value->id_type_event,
                        'hour' => $value->hour_event,
                        'date' => $value->date
                    );
                }
                return $eventos;
            } else {
                return false;
            }
        }
    
    /**
     * funcion que recibe el id del empleado, selecciona la maxima fecha y el maximo tipo evento retornando un arreglo de nombre del evento y el id del evento
     * @param type $id
     * @return type
     */
    public function getSearchStatus($id)
    {   
        $evento=false;
        $consulta="select  ev.id_employee ,ev.date, ev.hour_event, ev.id_type_event
                        from
                  
                                        employee e, users u, event_employee ev, type_event t,
                                        (select id_employee, MAX(date) as date
                                        from event_employee 
                                        group by id_employee ) x,

                                        (select id_employee, date, MAX(id_type_event) as hour
                                        from event_employee
                                        group by id_employee, date
                                        order by id_employee) y

                                        where x.id_employee=y.id_employee and x.date = y.date and
                                        x.id_employee = e.id and u.id_employee = e.id and u.id_status NOT IN(2,3) and 
                                        ev.id_employee=e.id and ev.date=x.date and ev.id_type_event=y.hour and ev.id_type_event = t.id and e.id=".$id." ";
        $consut=self::model()->findBySql($consulta);
        if($consut!=NULL)
        {
            $evento=array(
                'name'=>$consut->idTypeEvent->name,
                'id_type_event'=>$consut->id_type_event
                    );
        }
       
        return $evento;
   }
   
   /**
    * funcion que recibe como parametro el id del tipo de evento y retorna un estilo
    * @param type $id_event
    * @return type
    */
   public function getStilo($id_event)
   {
       if ($id_event==1){ return $stilo="label-success";}
       if ($id_event==2){ return $stilo="label-warning";}
       if ($id_event==3){ return $stilo="label-info";}
       if ($id_event==4){ return $stilo="label-danger";}
       if ($id_event==5){ return $stilo="label-default";}
   }
   
   
    /**
     * funcion que recibe id del empleado y retorna por medio de la fecha los ultimos eventos declarados de un empleado
     * @param type $id
     * @return null
     */
        

        public function getEventosHoras($id)
        {
            $date=date('Ymd');
            $model=  EventEmployee::getMaxDateMinHour($id);
            if($model){
//                $eventosOld=EventEmployee::getWorkday($id, $model->date);
//                $validate_hour=EventEmployee::getValidate_hour($eventosOld[0]['hour'], $eventosOld[0]['date']);
                $eventos=EventEmployee::getWorkday($id, $model->date);
            }else{
                $eventos[]=NULL;
            }
            return $eventos;

        }
        
        
        /**
         * funcion que retorna el calculo de horas. recibe como paramatro la primera hora de declaracion y retorna el calculo de horas y dias
         * @param type $start
         * @param type $date
         * @return boolean
         */
        
        public static function getValidate_hour($start, $date)
        {
            $calculo_dias= DateManagement::getValidate_hour($start, $date, 16);
            $hourclient=DateManagement::gethourcliente();
            $fecha=date('Ymd');
            $calculo= strtotime($calculo_dias[0]." ".$calculo_dias[1]);
            $actual= strtotime($fecha." ".$hourclient);
            if ($actual<=$calculo)
                {
                    return true;
                }

                else{
                    return false;
                }
        }     
        
        
        /**
         * funcion para cerrar session automaticamente y mostrar los empleados activos e inactivos
         * @param type $id
         * @param type $type
         * @return type
         * 
         */
        public function getfiltroHour ($id,$type)
            {
               $employeeall=NULL;
               $filtrar=NULL;
//                $consulta="select  ev.id_employee ,ev.date, ev.hour_event, ev.id_type_event
//                        from
//                  
//                                        employee e, users u, event_employee ev, type_event t,
//                                        (select id_employee, MAX(date) as date
//                                        from event_employee 
//                                        group by id_employee ) x,
//
//                                        (select id_employee, date, MAX(hour_event) as hour
//                                        from event_employee
//                                        group by id_employee, date
//                                        order by id_employee) y
//
//                                        where x.id_employee=y.id_employee and x.date = y.date and
//                                        x.id_employee = e.id and u.id_employee = e.id and u.id_status NOT IN(2,3) and 
//                                        ev.id_employee=e.id and ev.date=x.date and ev.hour_event=y.hour and ev.id_type_event = t.id and e.id=".$id." ";
//                
//                                                      (select id_employee, date, MAX(hour_event) as hour
//                                        from event_employee 
               
               $consulta="select  ev.id_employee ,ev.date, ev.hour_event, ev.id_type_event
                        from
                  
                                        employee e, users u, event_employee ev, type_event t,
                                        (select id_employee, MAX(date) as date
                                        from event_employee 
                                        group by id_employee ) x,
                                        (select id_employee, date, MAX(id_type_event) as hour
                                        from event_employee
                                        group by id_employee, date
                                        order by id_employee) y

                                        where x.id_employee=y.id_employee and x.date = y.date and
                                        x.id_employee = e.id and u.id_employee = e.id and u.id_status NOT IN(2,3) and 
                                        ev.id_employee=e.id and ev.date=x.date and ev.id_type_event=y.hour and ev.id_type_event = t.id and e.id=".$id."";
                $model=self::model()->findAllBySql($consulta);
                
                foreach ($model as $value)
                    {
                        $idFiltrar=null;
                            if (($value->id_type_event!=5) && ($value->id_type_event!=4)){
                                      
                                        $filtrar= EventEmployee::getfiltro($value->id_employee, $value->date, $value->hour_event); 
                                        if ($filtrar==false){
                                            $new_event_employee = new EventEmployee; 
                                            $new_event_employee->id_employee =$value->id_employee;
                                            $new_event_employee->date =$value->date;
                                            $new_event_employee->hour_event =$value->hour_event;
                                            $new_event_employee->id_type_event =5;
                                            $new_event_employee->save();
                                        }

                                        else {$idFiltrar=$value->id_employee;}
 
                                    }
                                    
                            else {
                               $idFiltrar=$value->id_employee; 
                               
                            }        
                            if ($idFiltrar!=NULL){
                               $consul="
                                        select e.*

                                        from
                                        employee e, users u, event_employee ev, type_event t,
                                        (select id_employee, MAX(date) as date
                                        from event_employee 
                                        group by id_employee ) x,

                                        (select id_employee, date, MAX(id_type_event) as hour
                                        from event_employee
                                        group by id_employee, date
                                        order by id_employee) y

                                        where x.id_employee=y.id_employee and x.date = y.date and
                                        x.id_employee = e.id and u.id_employee = e.id and u.id_status NOT IN(2,3) and 
                                        ev.id_employee=e.id and ev.date=x.date and ev.id_type_event=y.hour and ev.id_type_event = t.id  and e.id=".$idFiltrar." ";

                           switch ($type) {
                            case "active":
                                $consul.=" and t.id IN (1,3) order by e.first_name desc";
                                break;
                            case "inactive":
                                $consul.=" and t.id IN (2,4,5)";
                                break;    
                            }     
                             
                              $employeeall=  Employee::model()->findBySql($consul);       
                            }
                           
                            return $employeeall;  
                    }
                
            }
       /**
        * funcion que retorna los id de los empleados que cumplen con la condicion 16 horas
        * @param type $id
        * @param type $date
        * @param type $hour
        * @return type
        * 
        * 
        */     
            
      public static function getfiltro($id, $date, $hour)
        {
         $calculo_dias= DateManagement::getFiltroEmployee($hour, $date, 16);
         $hourclient=DateManagement::gethourcliente();
         $filtroId=NULL;
         $fecha=date('Ymd');
         
        $calculo= strtotime($calculo_dias[0]. " ". $calculo_dias[1]);
        $actual= strtotime($fecha ." ". $hourclient );

         if ($actual <= $calculo)
             {
             $filtroId=$id;
                    
             }
         else {
                 return false;
             
         }
             
             return $filtroId;
 
        }
        
        /**
         * funcion para retornar la maxima fecha con la minima hora, con id de eventos tipo 1
         * @param type $id
         * @return boolean
         * 
         * 
         */
        
    public static function getMaxDateMinHour($id){
        $model=  EventEmployee::model()->findBySql("select  e.id ,ev.date, ev.hour_event, ev.id_type_event
                    from
                    employee e, users u, event_employee ev, type_event t,
                    (select id_employee, MAX(date) as date
                    from event_employee
                    where  id_type_event = 1
                    group by id_employee ) x,

                    (select id_employee, date, MIN(hour_event) as hour
                    from event_employee
                    where id_type_event = 1
                    group by id_employee, date
                    order by id_employee) y

                    where x.id_employee=y.id_employee and x.date = y.date and
                    x.id_employee = e.id and u.id_employee = e.id and u.id_status = 1 and 
                    ev.id_employee=e.id and ev.date=x.date and ev.hour_event=y.hour and ev.id_type_event = t.id and e.id=".$id." ");
        if($model!=NULL){
            return $model;
        }else{
            return false;
        }
    }
}
