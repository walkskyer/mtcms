<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/resources/plugins/easyui/themes/default/easyui.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/resources/plugins/easyui/themes/icon.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/resources/plugins/SexyButtons/sexybuttons.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/resources/backend/backend.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/css/form.css">
		<?php 
			  Yii::app()->clientScript->registerCoreScript('jquery');		 	 
		 	  Yii::app()->clientScript->registerScriptFile(BASEURL.'/resources/plugins/easyui/jquery.easyui.min.js');
  			  Yii::app()->clientScript->registerScriptFile(BASEURL.'/resources/backend/backend.js');
		      Yii::app()->clientScript->registerScriptFile(BASEURL.'/resources/plugins/kindeditor/kindeditor-min.js');
		?>
		<title><?php echo CHtml::encode(Yii::app()->name);?></title>

	</head>
	<body class="easyui-layout">
	<?php echo $content?>
	</body>
</html>