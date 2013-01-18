<?php

class ProductController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$cid=$_GET['cid'];
		if(empty($cid))
		$cid=22;
		$this->viewSeo=Category::model()->findByPk($cid);
		$this->render('index');
	}
	public function actionView()
	{
		$id=$_GET['id'];
		$info=Product::model()->find("id=$id");
		$info->hits+=1;
		$info->save();
		$this->viewSeo=$info;
		$this->render('view',array(
			'info'=>$info,
		));
	}
}