<?php

/**
 * This is the model class for table "{{link}}".
 *
 * The followings are the available columns in table '{{link}}':
 * @property integer $id
 * @property string $title
 * @property integer $cid
 * @property string $imgurl
 * @property string $linkurl
 * @property string $summary
 * @property integer $userid
 * @property integer $create_time
 * @property integer $update_time
 * @property string $recommend
 * @property integer $recommend_level
 * @property integer $status
 */
class Link extends BaseModel
{
	public $imagefile;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Link the static model class
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
		return '{{link}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, cid, linkurl', 'required'),
			array('imagefile','file','allowEmpty'=>true,'types'=>'jpg, gif, png','maxSize'=>1024 * 1024 * 10,'tooLarge'=>'上传图片已超过10M'),
			array('linkurl','url'),
			array('cid, userid, create_time, update_time, recommend_level, status', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>32),
			array('imgurl, target, linkurl', 'length', 'max'=>200),
			array('summary', 'length', 'max'=>500),
			array('recommend', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, cid, imgurl, linkurl, summary, userid, create_time, update_time, recommend, recommend_level, status', 'safe', 'on'=>'search'),
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
			'title' => '链接标题',
			'cid' => '链接类别',
			'linkurl' => '链接地址',
			'summary' => '链接描述',
			'target'=>'链接指向',
			'imagefile' => '链接图片',
			'create_time' => '创建时间',
			'update_time' => '更新时间',
			'recommend' => '推荐类别',
			'recommend_level' => '推荐级别',
			'status' => '状态',
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
			return true;
		}
		else
			return false;
	}
}