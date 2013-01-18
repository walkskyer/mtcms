      <!--Main Start-->
        <div id="main" class="marginbtm20">
        	<div class="indexMain">
            	<div class="indexLeft">
                	<div class="location marginbtm10"><h1><?php echo $info->category->title;?></h1><span>您的位置：<a href="<?php echo Yii::app()->params['siteurl'];?>" title="网站首页">网站首页</a>><a href="<?php echo Yii::app()->createUrl('article/contact')?>" title="<?php echo $info->category->title;?>"><?php echo $info->category->title;?></a></span></div>
                    <div class="listPanle marginbtm15">
                    <h1 class="articleTitle"><?php echo $info->title;?></h1>
      				<?php echo $info->content;?>
					

                  
                                        	
    
                    </div>
					
					<?php echo $this->renderPartial('_bottom');?>
					
					
                </div>
                
                
                 <div class="indexRight">
 					<div class="title2 indextt3"><span>联系我们</span></div>
                    <div class="rightList6 marginbtm15">
                      <ul class="ulRightnav3">
                         <?php $xwcatlist=Article::model()->findAll('cid=9');
                         foreach($xwcatlist as $vo):
                         ?>
                         <li><a href="<?php echo Yii::app()->createUrl('article/contact',array('id'=>$vo->id));?>"><?php echo $vo->title;?></a></li>
                         <?php endforeach;?>               	  	
                     </ul>
                      <div class="anliKindsListBottom"></div>
                  	</div>
               <?php echo $this->renderPartial('_right');?>
        <!--Main End-->
    
