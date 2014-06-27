<?php

/**
 * This is the model class for table "division".
 *
 * The followings are the available columns in table 'division':
 * @property integer $id
 * @property string $name
 * @property integer $id_dependency
 * @property string $acro_name
 *
 * The followings are the available model relations:
 * @property Division $idDependency
 * @property Division[] $divisions
 * @property PositionCode[] $positionCodes
 */
class Division extends CActiveRecord
{
    
    
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'division';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('id_dependency', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('acro_name', 'length', 'max'=>25),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, id_dependency, acro_name', 'safe', 'on'=>'search'),
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
			'idDependency' => array(self::BELONGS_TO, 'Division', 'id_dependency'),
			'divisions' => array(self::HAS_MANY, 'Division', 'id_dependency'),
			'positionCodes' => array(self::HAS_MANY, 'PositionCode', 'id_division'),
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
			'id_dependency' => 'Id Dependency',
			'acro_name' => 'Acro Name',
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
		$criteria->compare('id_dependency',$this->id_dependency);
		$criteria->compare('acro_name',$this->acro_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Division the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    /**
     * 
     * 
     */
    
      public static function getDivision() {
            return  CHtml::ListData(self::model()->findAll(),"id","name"); 
        }
        
        
      /**
       * funcion para verificar la dependencia de los departmatentos
       */
        
      public function verificarDependencia($division)
              {
                 $consult="select * from division where id=".$division."";
                  $dependencia=self::model()->findBySql($consult);
                  return $dependencia;
              }
        
        
}
