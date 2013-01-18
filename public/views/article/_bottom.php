<?php $cccid=Yii::app()->controller->id;
	  if($cccid=='article'):
?>
<div class="indexleftList">
                        <dl class="dlList2">
                            <dt><span class="Blue bold">全自动洗碗机</span></dt>
         <?php $qzdxyjprolist=Product::model()->order()->limit(8)->findAll('cid=1');
                          foreach($qzdxyjprolist as $vo):
                          ?>                                         
                             <dd><a href="<?php echo Yii::app()->createUrl('product/view',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></dd>
					<?php endforeach;?>
                                                    </dl>
                        <dl class="dlList2">
                            <dt><span class="Blue bold">家用洗碗机</span></dt>
                                                  <?php $jyxwjprolist=Product::model()->order()->limit(8)->findAll('cid=2');
                          foreach($jyxwjprolist as $vo):
                          ?>                                         
                              <dd><a href="<?php echo Yii::app()->createUrl('product/view',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></dd>
					<?php endforeach;?> </dl>
                    </div>
                    
<?php endif;
 if($cccid=='product'):
?>        
     <div class="indexleftList">
                        <dl class="dlList2">
                            <dt><span class="Blue bold">餐具消毒设备</span></dt>
         <?php $cjxdsbprolist=Product::model()->order()->limit(8)->findAll('cid=3');
                          foreach($cjxdsbprolist as $vo):
                          ?>                                         
                              <dd><a href="<?php echo Yii::app()->createUrl('product/view',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></dd>
					<?php endforeach;?>
                                                    </dl>
                        <dl class="dlList2">
                            <dt><span class="Blue bold">商用洗碗机</span></dt>
                                                  <?php $xwjpjprolist=Product::model()->order()->limit(8)->findAll('cid=4');
                          foreach($xwjpjprolist as $vo):
                          ?>                                         
                              <dd><a href="<?php echo Yii::app()->createUrl('product/view',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></dd>
					<?php endforeach;?> </dl>
       </div>
       <?php endif;
?>