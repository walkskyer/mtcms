      <!--Main Start-->
        <div id="main" class="marginbtm20">
        	<div class="indexMain">
            	<div class="indexLeft">
                	<div class="location marginbtm10"><h1>行业百科</h1><span>您的位置：<a href="<?php echo Yii::app()->params['siteurl'];?>" title="网站首页">网站首页</a>> <a href="<?php echo Yii::app()->createUrl('article/baike');?>" title="行业百科">行业百科</a> </span></div>
                    <div class="listPanle marginbtm15">
                    
                  <?php
      
		$criteria=new CDbCriteria(array(
        	'order'=>'id desc',
    	));
    	$criteria->addCondition("cid=14");
	    $count=Article::model()->count($criteria);
    	$pages=new CPagination($count);
   		$pages->pageSize=Yii::app()->params['pagesize']['article'];
    	$pages->applyLimit($criteria);
    	$list = Article::model()->findAll($criteria);
		foreach($list as $vo):
?>  
                    
                                        	<div class="listItem">
                                                	<div class="">
                                                        <div class="title"><span><?php echo date('Y-m-d',$vo->create_time);?></span><h3 class="Blue bold"><a href="<?php echo Yii::app()->createUrl('article/bkview',array('id'=>$vo->id))?>" target="_blank"  title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></h3></div>
                                <div class="pvcontent">
                                <p><?php echo $vo->description;?>... <span class="more1"><a href="<?php echo Yii::app()->createUrl('article/bkview',array('id'=>$vo->id))?>" target="_blank">[阅读全文]</a></span></p>
                                </div>
                            </div>
                        </div>
                        
                        
                        <?php endforeach;?>



                  
                                        	
                                        	
                                            <!--pages start-->
    <div class="pages"><?php 
$this->widget('CLinkPager', array(
    'pages' => $pages,
    'header'=>'',
    'prevPageLabel'=>'上一页',
    'nextPageLabel'=>'下一页',
));
?></div>
                        <!--pages end-->
                    </div>
					
					<?php echo $this->renderPartial('_bottom');?>
					
					
                </div>
                
                
                 <div class="indexRight">
 				
               <?php echo $this->renderPartial('_right');?>
        <!--Main End-->
    
