
                	<div class="title2 indextt3"><span><a href="<?php echo Yii::app()->createUrl('article/about')?>">关于我们</a></span><em><a href="<?php echo Yii::app()->createUrl('article/about')?>">更多 >> </a></em></div>
                    <div style="padding:0px 10px 10px 10px" class="rightList1 marginbtm15">
					<div style="line-height:25px;width:280px"><?php $gywmycinfo=Article::model()->find('cid=21');echo $gywmycinfo->content;?> </div>                                    
                    </div>
                    
                   
                
                  	
                
             
                   
                  
                    <div class="title2 indextt4"><span><a href="<?php echo Yii::app()->createUrl('article/baike');?>">行业百科</a></span></div>
                    <div class="rightList3 marginbtm10">
                    	<ul class="ulRightList3 ">
                        	 <?php $hybklist=Article::model()->order()->limit(7)->findAll('cid=14');
                        	foreach($hybklist as $vo):
                        	?>
                        	 <li><a href="<?php echo Yii::app()->createUrl('article/bkview',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></li>
                           <?php endforeach;?>               </ul>
                    </div>
                     <div class="title2 indextt4"><span><a href="<?php echo Yii::app()->createUrl('article/index',array('cid'=>7));?>">行业新闻</a></span></div>
                    <div class="rightList3 marginbtm10">
                    	<ul class="ulRightList3 ">
                        	  	<?php $hyxwlist=Article::model()->order()->limit(7)->findAll('cid=7');
                        	foreach($hyxwlist as $vo):
                        	?>
                        	 <li><a href="<?php echo Yii::app()->createUrl('article/view',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></li>
                           <?php endforeach;?>                   </ul>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        </div>