<?php

/**
 * This is the model class for table "position".
 *
 * The followings are the available columns in table 'position':
 * @property integer $id
 * @property string $name
 * @property integer $leader
 *
 * The followings are the available model relations:
 * @property PositionCode[] $positionCodes
 */
class Position extends CActiveRecord
{
    
    public  $position;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'position';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('leader', 'numerical', 'integerOnly'=>true),
			array('name', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, leader', 'safe', 'on'=>'search'),
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
			'positionCodes' => array(self::HAS_MANY, 'PositionCode', 'id_position'),
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
			'leader' => 'Leader',
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
		$criteria->compare('leader',$this->leader);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Position the static model class
	 */
        public static function model($className=__CLASS__)
        {
                return parent::model($className);
        }
    
    
        /**
         * funcion para listar las posiciones organizacionales creadas
         */


        public function getPosition()
        {
             return  CHtml::ListData(Position::model()->findAllBySql("SELECT * FROM position ORDER BY name;"),"id","name"); 
        }
    
    
    
         /**
         * funcion para verificar si existe lider en la division
         */


         public function getModelPositionByDivision($division)
         {
             $consulta="select leader from position_code, position where id_division=".$division." and id_position=position.id order by leader desc;";
             $position=self::model()->findAllBySql($consulta);
             return $position;
         }

         /**
          * funcion para verificar si el cargo cumple como lider
          */


         public function getModelPosition($position)
         {
             $consulta="select leader from position where id=".$position."";
             $position=self::model()->findBySql($consulta);
             return $position;
         }



         /**
          * 
          * 
          */

         public function getNewPosition($newPosition, $leader)
         {
            if ($leader=="undefined")$leader=0;
            $modelCheckPosition = self::model()->find("name = '$newPosition'");
            if($modelCheckPosition == NULL){
                $modelNewPosition=new Position;
                $modelNewPosition->name=$newPosition;
                $modelNewPosition->leader=$leader;
                if($modelNewPosition->save())return $modelNewPosition->id; else return false;   
            }else{
                return $modelCheckPosition->id;
            }
         }
}
