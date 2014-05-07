<?php

/**
 * This is the model class for table "country".
 *
 * The followings are the available columns in table 'country':
 * @property string $code
 * @property string $name
 * @property string $continent
 * @property string $region
 * @property string $local_name
 * @property integer $capital
 * @property string $code_short
 *
 * The followings are the available model relations:
 * @property State[] $states
 */
class Country extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'country';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, region, local_name, code_short', 'required'),
			array('capital', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>3),
			array('name', 'length', 'max'=>52),
			array('region', 'length', 'max'=>26),
			array('local_name', 'length', 'max'=>45),
			array('code_short', 'length', 'max'=>2),
			array('continent', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('code, name, continent, region, local_name, capital, code_short', 'safe', 'on'=>'search'),
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
			'states' => array(self::HAS_MANY, 'State', 'id_country'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'code' => 'Code',
			'name' => 'Name',
			'continent' => 'Continent',
			'region' => 'Region',
			'local_name' => 'Local Name',
			'capital' => 'Capital',
			'code_short' => 'Code Short',
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

		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('continent',$this->continent,true);
		$criteria->compare('region',$this->region,true);
		$criteria->compare('local_name',$this->local_name,true);
		$criteria->compare('capital',$this->capital);
		$criteria->compare('code_short',$this->code_short,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Country the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getCountry() {
            return  CHtml::ListData(Country::model()->findAll(),"code","name"); 
        }
        
}
