<?php

/**
 * This is the model class for table "{{option}}".
 *
 * The followings are the available columns in table '{{option}}':
 * @property integer $id
 * @property string $seotitle
 * @property string $seokeywords
 * @property string $seodescription
 */
class Option extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Option the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{option}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('seotitle', 'length', 'max'=>100),
			array('seokeywords', 'length', 'max'=>200),
			array('seodescription', 'length', 'max'=>400),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, seotitle, seokeywords, seodescription', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'seotitle' => '网站标题',
			'seokeywords' => '网站关键词',
			'seodescription' => '网站内容描述',
		);
	}

}