<?php

/**
 * This is the model class for table "{{job}}".
 *
 * The followings are the available columns in table '{{job}}':
 * @property integer $id
 * @property string $title
 * @property integer $cid
 * @property string $number
 * @property string $content
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $end_time
 * @property integer $status
 */
class Job extends BaseModel
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Job the static model class
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
		return '{{job}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title,cid,content', 'required'),
			array('cid, create_time, update_time, status', 'numerical', 'integerOnly'=>true),
			array('title, number', 'length', 'max'=>32),
			array('content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, cid, number, content, create_time, update_time, end_time, status', 'safe', 'on'=>'search'),
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
            'category'=>array(self::BELONGS_TO, 'Category', 'cid'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'title' => '职位名称',
			'cid' => '职位类别',
			'number' => '招聘人数',
			'content' => '具体要求',
			'create_time' => '创建时间',
			'update_time' => '更新时间',
			'end_time' => '截止时间',
		);
	}

	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->create_time=$this->update_time=time();
				$this->status=Yii::app()->params['status']['ischecked'];
			}
			else
			{
				$this->update_time=time();
			}
			if(!empty($_POST['Job']['end_time']))
				$this->end_time=strtotime($_POST['Job']['end_time']);
			return true;
		}
		else
			return false;
	}
}