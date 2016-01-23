<?php

/**
 * This is the model class for table "{{orders}}".
 *
 * The followings are the available columns in table '{{orders}}':
 * @property integer $id
 * @property string $name
 * @property string $tel
 * @property string $order_time
 * @property integer $selected_time_id
 * @property string $date_day
 * @property integer $quest_id
 */
class Orders extends CActiveRecord
{
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{orders}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, tel, date_day, quest_id', 'required'),
            array('selected_time_id', 'required', 'message'=>'Пожалуйста, выберите время прохождения квеста'),
			array('selected_time_id, quest_id', 'numerical', 'integerOnly'=>true),
            array('tel', 'match', 'pattern'=>'/^([+]?[0-9-() ]+)$/', 'message'=>'Неверный формат номера телефона'),
			array('name', 'length', 'max'=>100),
			array('tel', 'length', 'max'=>20),
			array('date_day', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, tel, order_time, selected_time_id, date_day, quest_id', 'safe', 'on'=>'search'),
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
            'quest' => array(self::BELONGS_TO, 'Quests', 'quest_id'),
            'selected_time' => array(self::BELONGS_TO, 'Time', 'selected_time_id'),
            'price' => array(self::BELONGS_TO, 'Time', 'selected_time_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Имя',
			'tel' => 'Телефон',
			'order_time' => 'Время заказа',
			'selected_time_id' => 'Выбранное время квеста',
			'date_day' => 'Дата квеста',
			'price' => 'Цена',
			'quest_id' => 'Квест',
            'quest' => 'Квест',
            'selected_time' => 'Выбранное время',
            'verifyCode' => 'Код проверки',
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
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('order_time',$this->order_time,true);
		$criteria->compare('selected_time_id',$this->selected_time_id);
		$criteria->compare('date_day',$this->date_day,true);
		$criteria->compare('quest_id',$this->quest_id);
        

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'sort' => array(
            'defaultOrder' => 'id DESC',
            ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Orders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    
    protected function beforeSave()
    {
    $this->order_time = time();
        return parent::beforeSave();
    }
}
