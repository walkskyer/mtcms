      <!--Main Start-->
        <div id="main" class="marginbtm20">
        	<div class="indexMain">
            	<div class="indexLeft">
                	<div class="location marginbtm10"><h1><?php echo $info->category->title;?></h1><span>您的位置：<a href="<?php echo Yii::app()->params['siteurl'];?>" title="网站首页">网站首页</a>> <a href="<?php echo Yii::app()->createUrl('product/index');?>" title="产品中心">产品中心</a>  > <a href="<?php echo Yii::app()->createUrl('article/index',array('cid'=>$info->cid))?>" title="<?php echo $info->category->title;?>"><?php echo $info->category->title;?></a></span></div>
                    <div class="listPanle marginbtm15">
                    <h1 class="articleTitle"><?php echo $info->title;?></h1>
                       <div class="articleTool"><?php echo date('Y-m-d H:i',$info->create_time);?>  来源:<?php echo Yii::app()->name;?> </div>
                       <div class="articleContent" id="articleContent">
      				<?php echo $info->content;?>
					

					</div>
                    </div>
					
					<?php echo $this->renderPartial('/article/_bottom');?>
					
					
                </div>
                
                
                    <div class="indexRight">
 					<div class="title2 indextt3"><span>产品分类</span></div>
                    <div class="rightList6 marginbtm15">
                      <ul class="ulRightnav3">
                         <?php $xwcatlist=Category::model()->findAll('parentid=22');
                         foreach($xwcatlist as $vo):
                         ?>
                         <li><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>$vo->id));?>"><?php echo $vo->title;?></a></li>
                         <?php endforeach;?>               	  	
                     </ul>
                      <div class="anliKindsListBottom"></div>
                  	</div>
               <?php echo $this->renderPartial('/article/_right');?>
        <!--Main End-->
    
