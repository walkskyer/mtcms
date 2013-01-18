
        <!--Main Start-->
        <div id="main" class="marginbtm20">
        	<div class="indexMain">
       	    <div class="indexLeft">
                <div class="bannerFlash marginbtm15">
<style type="text/css">
#slideshow{position:relative;height:269px;width:680px;}
#slideshow div{position:absolute;top:0;left:0;z-index:8;opacity:0.0;height:269px;overflow:hidden;background-color:#FFF;}
#slideshow div.current{z-index:10;}
#slideshow div.prev{z-index:9;}
#slideshow div img{display:block;border:0;margin-bottom:10px;}
#slideshow div.current span{display:block;}
</style>
    <div id="slideshow">
    <?php $picscrolllist=Picture::model()->findAll('cid=15');
    foreach($picscrolllist as $k=>$vo):
    ?>
    <div <?php if((int)$k===0) echo "class='current'";?>>
        <a href="<?php echo $vo->linkurl;?>"><img src="<?php echo BASEURL.$vo->imgurl;?>" width="680" height="269"/></a>
        
    </div>
    <?php endforeach;?>
</div>
<script type="text/javascript">
function slideSwitch() {
	var $current = $("#slideshow div.current");
	
	// 判断div.current个数为0的时候 $current的取值
	if ( $current.length == 0 ) $current = $("#slideshow div:last");
	
	// 判断div.current存在时则匹配$current.next(),否则转到第一个div
	var $next =  $current.next().length ? $current.next() : $("#slideshow div:first");
	$current.addClass('prev');
	
	$next.css({opacity: 0.0}).addClass("current").animate({opacity: 1.0}, 1000, function() {
			//因为原理是层叠,删除类,让z-index的值只放在轮转到的div.current,从而最前端显示
			$current.removeClass("current prev");
		});
}

$(function() {
	$("#slideshow span").css("opacity","0.7");
	$(".current").css("opacity","1.0");
	
	// 设定时间为3秒(1000=1秒)
    setInterval( "slideSwitch()", 4000 ); 
});
</script>
    
    
              </div>
              <div class="title1 indextt1 Blue"><span><a href="<?php echo Yii::app()->createUrl('product/index');?>">更多 >></a></span><a href="<?php echo Yii::app()->createUrl('product/index');?>" title="洗碗机产品中心">洗碗机产品中心</a></div>
                <ul class="ulIndexTC marginbtm10">
                    <li>
                    	<?php $qzdxwjcat=Category::model()->findByPK(1);?>
                    	
                    	<h1 class="h1tc"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>1));?>" title="全自动洗碗机">全自动洗碗机</a></h1>
                        <p class="contentp marginbtm13"><img src="<?php echo BASEURL.$qzdxwjcat->imgurl;?>" width="67" height="92" alt="全自动洗碗机" /><?php echo $qzdxwjcat->description;?></p>
                        <p style=" clear:both"><span class="btntc Blue"><a href="<?php echo Yii::app()->createUrl('article/anli',array('cid'=>11));?>">成功案例</a></span><span class="btntc Blue"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>1));?>">详细查询</a> >></span></p>
                    </li>
                 <li>
                 <?php $jyxwjcat=Category::model()->findByPK(2);?>
                    	<h1 class="h1tc"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>2));?>" title="家用洗碗机">家用洗碗机</a></h1>
                        <p class="contentp marginbtm13"><img src="<?php echo BASEURL.$jyxwjcat->imgurl;?>" width="67" height="92" alt="家用洗碗机" /><?php echo $jyxwjcat->description;?></p>
                        <p style=" clear:both"><span class="btntc Blue"><a href="<?php echo Yii::app()->createUrl('article/anli',array('cid'=>12));?>">成功案例</a></span><span class="btntc Blue"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>2));?>">详细查询</a> >></span></p>
                    </li>
                    							       <li>
                     <?php $cjxdsbcat=Category::model()->findByPK(3);?>
                    	<h1 class="h1tc"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>3));?>" title="餐具消毒设备">餐具消毒设备</a></h1>
                        <p class="contentp marginbtm13"><img src="<?php echo BASEURL.$cjxdsbcat->imgurl;?>" width="67" height="92" alt="餐具消毒设备" /><?php echo $cjxdsbcat->description;?></p>
                        <p style=" clear:both"><span class="btntc Blue"><a href="<?php echo Yii::app()->createUrl('article/anli',array('cid'=>13));?>">成功案例</a></span><span class="btntc Blue"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>3));?>">详细查询</a> >></span></p>
                    </li>
                    							                </ul>
                <div class="title1 indextt2 White"><span><a href="<?php echo Yii::app()->createUrl('article/anli');?>">更多 >></a></span>成功案例<em><a href="<?php echo Yii::app()->createUrl('article/anli',array('cid'=>11));?>" title="全自动洗碗机">全自动洗碗机</a></em><em><a href="<?php echo Yii::app()->createUrl('article/anli',array('cid'=>12));?>" title="家用洗碗机">家用洗碗机</a></em><em><a href="<?php echo Yii::app()->createUrl('article/anli',array('cid'=>13));?>" title="餐具消毒设备">餐具消毒设备</a></em><em><a href="<?php echo Yii::app()->createUrl('article/anli',array('cid'=>24));?>" title="商用洗碗机">商用洗碗机</a></em></div>
              <div class="caseShow marginbtm20">
               	  <div class="leftarrow"></div>
                    <div class="centerCase">
                        <ul class="ulIndexCase">
                        
                       <?php
       	$criteria=new CDbCriteria(array(
        	'order'=>'id desc',
    	));
 		$criteria->addInCondition('cid',array(10,11,12,13));
 		$criteria->addCondition("imgurl!=''");
  		$cgalcatlist=Article::model()->order()->limit(15)->findAll($criteria);
                       foreach($cgalcatlist as $vo):
                        ?>
                        	<li>
                            <a href="<?php echo Yii::app()->createUrl('article/alview',array('id'=>$vo->id));?>" title="<?php echo $vo->title;?>" target="_blank"><img src="<?php echo BASEURL.$vo->imgurl;?>" width="171" height="112" alt="<?php echo $vo->title;?>"/></a>
                            <p class="Blue"><a href="" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></p>
                            </li>
                       <?php endforeach;?>
                                         	                        	
                                                    </ul>
                  </div>
                    <div class="rightarrow"></div>
                </div>
				<script type="text/javascript">
                    $(".centerCase").jCarouselLite({
                    btnNext: ".rightarrow",
                    btnPrev: ".leftarrow",
                    visible:3,
                    scroll: 3,
					auto: 5000,
					speed: 1000
			
                });
                </script>
            	<div class="indexleftList">
                    <dl class="dlIndexList1">
                        <dt><em class="Blue"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>1));?>l">更多 >></a> </em><span class="Blue bold"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>1));?>" title="全自动洗碗机">全自动洗碗机</a></span></dt>
                          <?php $qzdxyjprolist=Product::model()->order()->limit(8)->findAll('cid=1');
                          foreach($qzdxyjprolist as $vo):
                          ?>                                         
                           <dd><a href="<?php echo Yii::app()->createUrl('product/view',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></dd>
					<?php endforeach;?>
						                    </dl>
                    <dl class="dlIndexList1">
                        <dt><em class="Blue"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>2));?>">更多 >></a> </em><span class="Blue bold"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>2));?>" title="家用洗碗机">家用洗碗机</a></span></dt>
  <?php $jyxwjprolist=Product::model()->order()->limit(8)->findAll('cid=2');
                          foreach($jyxwjprolist as $vo):
                          ?>                                         
                           <dd><a href="<?php echo Yii::app()->createUrl('product/view',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></dd>
					<?php endforeach;?>
						                    </dl>
                    <dl class="dlIndexList1">
                        <dt><em class="Blue"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>3));?>">更多 >></a> </em><span class="Blue bold"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>3));?>" title="餐具消毒设备">餐具消毒设备</a></span></dt>
                                        <?php $cjxdsbprolist=Product::model()->order()->limit(8)->findAll('cid=3');
                          foreach($cjxdsbprolist as $vo):
                          ?>                                         
                           <dd><a href="<?php echo Yii::app()->createUrl('product/view',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></dd>
					<?php endforeach;?> </dl>
                    <dl class="dlIndexList1">
                        <dt><em class="Blue"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>4));?>">更多 >></a> </em><span class="Blue bold"><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>4));?>" title="商用洗碗机">商用洗碗机</a></span></dt>
                                           <?php $xwjpjprolist=Product::model()->order()->limit(8)->findAll('cid=4');
                          foreach($xwjpjprolist as $vo):
                          ?>                                         
                          <dd><a href="<?php echo Yii::app()->createUrl('product/view',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></dd>
					<?php endforeach;?> 
						                    </dl>
                </div>
              </div>
              
                <div class="indexRight">
                	
                	<div class="title2 indextt4"><span><a href="<?php echo Yii::app()->createUrl('product/index');?>" title="产品分类">产品分类</a></span></div>
                    <div class="rightList3 marginbtm10">
                    	<div class="rightList6">
                        
                          <br />
                          <ul class="ulRightnav3">
                          <?php $catlist=Category::model()->findAll('parentid=22');
                          foreach($catlist as $vo):
                          ?>
                          <li><a href="<?php echo Yii::app()->createUrl('product/index',array('cid'=>$vo->id));?>" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></li>
                         <?php endforeach;?>
                          </ul>
                        </div>
                    </div>
                	
                    <div class="title2 indextt4"><span><a href="<?php echo Yii::app()->createUrl('article/baike');?>" title="行业百科">行业百科</a></span><em><a href="<?php echo Yii::app()->createUrl('article/baike');?>">更多 >> </a></em></div>
                    <div class="rightList2 marginbtm15">
                    	<ul class="ulRightList1s">
 	<?php $hybklist=Article::model()->order()->limit(8)->findAll('cid=14');
                        	foreach($hybklist as $vo):
                        	?>
                        	 <li><a href="<?php echo Yii::app()->createUrl('article/bkview',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></li>
                           <?php endforeach;?> 
                                                    </ul>
                    </div>
                    <div class="title2 indextt3"><span><a href="<?php echo Yii::app()->createUrl('article/index',array('cid'=>7));?>" title="行业新闻">行业新闻</a></span><em><a href="<?php echo Yii::app()->createUrl('article/index',array('cid'=>7));?>">更多 >> </a></em></div>
                    <div class="rightList1 marginbtm15">
                    	
                        <ul class="ulRightList1">
                        	<?php $hyxwlist=Article::model()->order()->limit(8)->findAll('cid=7');
                        	foreach($hyxwlist as $vo):
                        	?>
                        	 <li><a href="<?php echo Yii::app()->createUrl('article/view',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></li>
                           <?php endforeach;?>    
                                                    	
                                                    </ul>
                        <div><img src='Images/list_bg1_bottom.jpg' /></div>
                    </div>
                    <div class="title2 indextt3"><span><a href="<?php echo Yii::app()->createUrl('article/index',array('cid'=>6));?>" title="企业新闻">企业新闻</a></span><em><a href="<?php echo Yii::app()->createUrl('article/index',array('cid'=>6));?>">更多 >> </a></em></div>
                    <div class="rightList1 marginbtm15">
                    	
                        <ul class="ulRightList1">
                        	<?php $qxwlist=Article::model()->order()->limit(8)->findAll('cid=6');
                        	foreach($qxwlist as $vo):
                        	?>
                        	 <li><a href="<?php echo Yii::app()->createUrl('article/view',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></li>
                           <?php endforeach;?>    
                                                    	
                                                    </ul>
                        <div><img src='Images/list_bg1_bottom.jpg' /></div>
                    </div>
                    
                    <div class="title2 indextt4"><span><a href="<?php echo Yii::app()->createUrl('article/blog');?>" title="精品博文">精品博文</a></span><em><a href="<?php echo Yii::app()->createUrl('article/blog');?>">更多 >> </a></em></div>
                    <div class="rightList4">
                    	<ul class="ulRightList2">
                    	<?php
               $criteria=new CDbCriteria(array(
        		'order'=>'id desc',
    			));
    	$categoryList=array();
    	$categoryList[]=17;
		Category::model()->getAllCategoryIds($categoryList,Category::model()->findAll('module='.Yii::app()->params['module']['article']),17);
		$criteria->addInCondition('cid',$categoryList);
    	
                    	$zxbwlist=Article::model()->order()->limit(8)->findAll($criteria);
                    	foreach($zxbwlist as $k=>$vo):
                    	?>
                    	 
                       <li><em><?php echo $k+1;?></em><a href="<?php echo Yii::app()->createUrl('article/bview',array('id'=>$vo->id));?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></li>
                 <?php endforeach;?>
                                                                            </ul>
                        <div><img src='<?php echo BASEURL?>/Images/list_bg3_bottom.jpg' /></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Main End-->
       