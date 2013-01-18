<?php

class JobController extends Controller
{
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$criteria=new CDbCriteria(array(
        	'order'=>'id desc',
    	));
    	if(!empty($_GET['cid'])){
    		$categoryList=array();
    		$categoryList[]=$_GET['cid'];
			Category::model()->getAllCategoryIds($categoryList,Category::model()->findAll('module='.Yii::app()->params['module']['job']),$_GET['cid']);
		    $criteria->addInCondition('cid',$categoryList);
    	}
    	if(!empty($_GET['title']))
    		$criteria->addSearchCondition('title',$_GET['title']);
		$dataProvider=new CActiveDataProvider('Job',array(
			'criteria'=>$criteria,
			'pagination'=>array(
        		'pageSize'=>Yii::app()->params['girdpagesize'],
    		),	
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			'categorys'=>Category::model()->showAllSelectCategory(Yii::app()->params['module']['job'],Category::SHOW_ALLCATGORY),
		));
	}

	public function actionCreate()
	{
		$model=new Job;
		if(isset($_POST['Job']))
		{
			$model->attributes=$_POST['Job'];
			if($model->save()){
				Yii::app()->user->setFlash('actionInfo',Yii::app()->params['actionInfo']['saveSuccess']);
				$this->refresh();
			}else if($model->validate()){
				Yii::app()->user->setFlash('actionInfo',Yii::app()->params['actionInfo']['saveFail']);
				$this->refresh();
			}
		}
		$this->render('create',array(
			'model'=>$model,
			'categorys'=>Category::model()->showAllSelectCategory(Yii::app()->params['module']['job']),
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		if(!empty($_POST['Job']))
		{
			$model->attributes=$_POST['Job'];
			if($model->save()){
				Yii::app()->user->setFlash('actionInfo',Yii::app()->params['actionInfo']['updateSuccess']);
				$this->redirect(array('index','menupanel'=>$_GET['menupanel']));
			}else if($model->validate()){
				Yii::app()->user->setFlash('actionInfo',Yii::app()->params['actionInfo']['updateFail']);
				$this->redirect(array('index','menupanel'=>$_GET['menupanel']));
			}
		}
		$this->render('update',array(
			'model'=>$model,
			'categorys'=>Category::model()->showAllSelectCategory(Yii::app()->params['module']['job']),
		));
	}
	public function actionView($id){
		$model=$this->loadModel($id);
		$this->render('view',array(
			'model'=>$model,
			'categorys'=>Category::model()->showAllSelectCategory(Yii::app()->params['module']['job']),
		));
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Job::model()->findByPk((int)$id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
