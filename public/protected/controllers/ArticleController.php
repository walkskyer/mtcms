<?php

class ArticleController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$cid=$_GET['cid'];
		if(empty($cid))
		$cid=5;
		$this->viewSeo=Category::model()->findByPk($cid);
		$this->render('index');
	}
	public function actionView()
	{
		$id=$_GET['id'];
		$info=Article::model()->find("id=$id");
		$info->hits+=1;
		$info->save();
		$this->viewSeo=$info;
		$this->render('view',array(
			'info'=>$info,
		));
	}
	public function actionAbout()
	{
		$id=$_GET['id'];
		if(!empty($id))
		$info=Article::model()->findByPk($id);
		else 
		$info=Article::model()->find("cid=8");
		$info->hits+=1;
		$info->save();
		$this->viewSeo=$info;
		$this->render('about',array(
			'info'=>$info,
		));
	}
	public function actionAnli()
	{
		$cid=$_GET['cid'];
		if(empty($cid))
		$cid=10;
		$this->viewSeo=Category::model()->findByPk($cid);
		$this->render('anli');
	}
	public function actionAlview()
	{
		$id=$_GET['id'];
		$info=Article::model()->find("id=$id");
		$info->hits+=1;
		$info->save();
		$this->viewSeo=$info;
		$this->render('alview',array(
			'info'=>$info,
		));
	}
	public function actionBaike()
	{
		$cid=$_GET['cid'];
		if(empty($cid))
		$cid=14;
		$this->viewSeo=Category::model()->findByPk($cid);
		$this->render('baike');
	}
	public function actionBkview()
	{
		$id=$_GET['id'];
		$info=Article::model()->find("id=$id");
		$info->hits+=1;
		$info->save();
		$this->viewSeo=$info;
		$this->render('bkview',array(
			'info'=>$info,
		));
	}
	public function actionContact()
	{
			$id=$_GET['id'];
		if(!empty($id))
		$info=Article::model()->findByPk($id);
		else 
		$info=Article::model()->find("cid=9");
		$info->hits+=1;
		$info->save();
		$this->viewSeo=$info;
		$this->render('contact',array(
			'info'=>$info,
		));
	}
	public function actionBlog()
	{
		$cid=$_GET['cid'];
		if(empty($cid))
		$cid=17;
		$this->viewSeo=Category::model()->findByPk($cid);
		$this->render('blog');
	}
	public function actionBview()
	{
		$id=$_GET['id'];
		$info=Article::model()->find("id=$id");
		$info->hits+=1;
		$info->save();
		$this->viewSeo=$info;
		$this->render('bview',array(
			'info'=>$info,
		));
	}
}