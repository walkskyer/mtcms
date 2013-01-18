<?php

/**
 * This is the model class for table "{{product}}".
 *
 * The followings are the available columns in table '{{product}}':
 * @property integer $id
 * @property string $title
 * @property integer $cid
 * @property string $imgurl
 * @property string $linkurl
 * @property string $summary
 * @property string $content
 * @property string $tags
 * @property string $keywords
 * @property string $description
 * @property integer $userid
 * @property integer $create_time
 * @property integer $update_time
 * @property string $recommend
 * @property integer $recommend_level
 * @property integer $status
 * @property integer $hits
 */
class Product extends BaseModel
{
	public $imagefile;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Product the static model class
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
		return '{{product}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, cid, content', 'required'),
			array('imagefile','file','allowEmpty'=>true,'types'=>'jpg, gif, png','maxSize'=>1024 * 1024 * 10,'tooLarge'=>'上传图片已超过10M'),
			array('cid , bid, userid, create_time, update_time, recommend_level, status, hits', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>32),
			array('imgurl, linkurl', 'length', 'max'=>200),
			array('summary', 'length', 'max'=>500),
			array('tags, keywords, recommend,seotitle', 'length', 'max'=>100),
			array('content, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, cid , bid, imgurl, linkurl, summary, content, tags, seotitle, keywords, description, userid, create_time, update_time, recommend, recommend_level, status, hits', 'safe', 'on'=>'search'),
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
            //'bcategory'=>array(self::BELONGS_TO, 'Category', 'bid'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'title' => '产品名称',
			'cid' => '产品类别',
			'bid' => '产品品牌',
			'summary' => '摘要',
			'content' => '内容',
			'imagefile' => '产品图片',
			'seotitle'=>'页面标题',
			'keywords' => '关键词',
			'description' => '页面描述',
			'create_time' => '创建时间',
			'update_time' => '更新时间',
			'recommend' => '推荐类别',
			'recommend_level' => '推荐级别',
			'status' => '状态',
			'hits' => '点击数',
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
				$this->hits=0;
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