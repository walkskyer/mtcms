      <!--Main Start-->
        <div id="main" class="marginbtm20">
        	<div class="indexMain">
            	<div class="indexLeft">
                	<div class="location marginbtm10"><h1><?php $mnavinfo; if(empty($_GET['cid'])) echo "成功案例";else{$mnavinfo=Category::model()->findByPk($_GET['cid']);echo $mnavinfo->title;}?></h1><span>您的位置：<a href="<?php echo Yii::app()->params['siteurl'];?>" title="网站首页">网站首页</a>> <a href="<?php echo Yii::app()->createUrl('article/anli');?>" title="成功案例">成功案例</a> <?php if(!empty($mnavinfo)){?> > <a href="<?php echo Yii::app()->createUrl('article/anli',array('cid'=>$mnavinfo->id))?>" title="<?php echo $mnavinfo->title;?>"><?php echo $mnavinfo->title;?></a><?php }?></span></div>
                    <div class="listPanle marginbtm15">
                    
                  <?php
      
		$criteria=new CDbCriteria(array(
        	'order'=>'id desc',
    	));
    	$cid=$_GET['cid'];
    	if(empty($cid)){
    	$categoryList=array();
    	$categoryList[]=10;
		Category::model()->getAllCategoryIds($categoryList,Category::model()->findAll('module='.Yii::app()->params['module']['article']),10);
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
                                                        <div class="title"><span><?php echo date('Y-m-d',$vo->create_time);?></span><h3 class="Blue bold"><a href="<?php echo Yii::app()->createUrl('article/alview',array('id'=>$vo->id))?>" target="_blank"  title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></h3></div>
                                <div style="line-height:25px;"><a href="<?php echo Yii::app()->createUrl('article/alview',array('id'=>$vo->id))?>" title="<?php echo $vo->title;?>" target="_blank" ><img src="<?php echo BASEURL.$vo->imgurl;?>" width="125" height="80" style="float:left;"  alt="<?php echo $vo->title;?>"/></a><?php echo $vo->description;?>... <span class="more1"><a href="<?php echo Yii::app()->createUrl('article/alview',array('id'=>$vo->id))?>" target="_blank"  title="<?php echo $vo->title;?>">[阅读全文]</a></span></div>
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
 					<div class="title2 indextt3"><span>成功案例</span></div>
                    <div class="rightList6 marginbtm15">
                      <ul class="ulRightnav3">
                         <?php $xwcatlist=Category::model()->findAll('parentid=10');
                         foreach($xwcatlist as $vo):
                         ?>
                         <li><a href="<?php echo Yii::app()->createUrl('article/anli',array('cid'=>$vo->id));?>"><?php echo $vo->title;?></a></li>
                         <?php endforeach;?>               	  	
                     </ul>
                      <div class="anliKindsListBottom"></div>
                  	</div>
               <?php echo $this->renderPartial('_right');?>
        <!--Main End-->
    
