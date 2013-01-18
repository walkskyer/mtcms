      <!--Main Start-->
        <div id="main" class="marginbtm20">
        	<div class="indexMain">
            	<div class="indexLeft">
                	<div class="location marginbtm10"><h1><?php $mnavinfo; if(empty($_GET['cid'])) echo "官方博客";else{$mnavinfo=Category::model()->findByPk($_GET['cid']);echo $mnavinfo->title;}?></h1><span>您的位置：<a href="<?php echo Yii::app()->params['siteurl'];?>" title="网站首页">网站首页</a>> <a href="<?php echo Yii::app()->createUrl('article/blog');?>" title="官方博客">官方博客</a> <?php if(!empty($mnavinfo)){?> > <a href="<?php echo Yii::app()->createUrl('article/blog',array('cid'=>$mnavinfo->id))?>" title="<?php echo $mnavinfo->title;?>"><?php echo $mnavinfo->title;?></a><?php }?></span></div>
                    <div class="listPanle marginbtm15">
                    
                  <?php
      
		$criteria=new CDbCriteria(array(
        	'order'=>'id desc',
    	));
    	$cid=$_GET['cid'];
    	if(empty($cid)){
    	$categoryList=array();
    	$categoryList[]=17;
		Category::model()->getAllCategoryIds($categoryList,Category::model()->findAll('module='.Yii::app()->params['module']['article']),17);
		$criteria->addInCondition('cid',$categoryList);
    	}else{
    	$criteria->addCondition("cid=$cid");
    	}

	    $count=Article::model()->count($criteria);
    	$pages=new CPagination($count);
   		$pages->pageSize=Yii::app()->params['pagesize']['article'];
    	$pages->applyLimit($criteria);
    	$list = Article::model()->findAll($criteria);
		foreach($list as $vo):
?>  
                    
                                        	<div class="listItem">
                                                	<div class="">
                                                        <div class="title"><span><?php echo date('Y-m-d',$vo->create_time);?></span><h3 class="Blue bold"><a href="<?php echo Yii::app()->createUrl('article/bview',array('id'=>$vo->id))?>" target="_blank"  title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></h3></div>
                                <div class="pvcontent">
                                <p><?php echo $vo->description;?>... <span class="more1"><a href="<?php echo Yii::app()->createUrl('article/bview',array('id'=>$vo->id))?>" target="_blank">[阅读全文]</a></span></p>
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
 					<div class="title2 indextt3"><span>博客分类</span></div>
                    <div class="rightList6 marginbtm15">
                      <ul class="ulRightnav3">
                         <?php $xwcatlist=Category::model()->findAll('parentid=17');
                         foreach($xwcatlist as $vo):
                         ?>
                         <li><a href="<?php echo Yii::app()->createUrl('article/blog',array('cid'=>$vo->id));?>"><?php echo $vo->title;?></a></li>
                         <?php endforeach;?>               	  	
                     </ul>
                      <div class="anliKindsListBottom"></div>
                  	</div>
               <?php echo $this->renderPartial('_right');?>
        <!--Main End-->
    
