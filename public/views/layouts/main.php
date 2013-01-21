<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php 
$topcid=Yii::app()->controller->id;
$topaid=Yii::app()->controller->action->id;
?>
<?php if($topcid=='site'&&$topaid=='index'):?>
<title><?php echo $this->optionInfo->seotitle." | ".Yii::app()->name;?></title>
<meta name="keywords" content="<?php echo $this->optionInfo->seokeywords;?>"/>
<meta name="description" content="<?php echo $this->optionInfo->seodescription;?>"/>
<?php else:?>
	<title><?php if(!empty($this->viewSeo->seotitle))
					echo $this->viewSeo->seotitle." | ".Yii::app()->name; 
					else 
					echo $this->viewSeo->title." | ".Yii::app()->name; 
		?>
	</title>
	<?php if(!empty($this->viewSeo->keywords)):?>
		<meta name="keywords" content="<?php echo $this->viewSeo->keywords;?>"/>
	<?php endif;?>
	<?php if(!empty($this->viewSeo->description)):?>
		<meta name="description" content="<?php echo $this->viewSeo->description;?>" />
	<?php endif;?>
<?php endif;?>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo BASEURL?>/Images/Style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL?>/JS/Common.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL?>/JS/jcarousellite_1.0.1.min.js"></script>
</head>
<body id="oneColFixCtr">
	<div id="container">
    	    	<!--Header Start-->
		<div id="header">
        	<div id="top">
            	<div class="logo"><a href="/"><img src="<?php echo BASEURL?>/Images/logo.gif" alt="<?php echo Yii::app()->name;?>" width="192" height="90" /></a>
                
                <div style="text-align:left; padding-top:4px;">
                	<table cellpadding="0" cellspacing="0"><tr><td>
                	<span class="Blue"></span>
                    </td>
                    <td style="padding-left:10px;"></td>
                    </tr>
                    </table>
                </div>
                
                </div>
            </div>
           
            <div id="nav" class="clear">
                	<ul class="ulNav">
                    	<li><a href="/" id="nav_1" onmouseover="navHover(1)" onmouseout="navMouseOut()">网站首页</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('article/about');?>" id="nav_2" onmouseover="navHover(2)" onmouseout="navMouseOut()">关于我们</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('product/index');?>" id="nav_3" onmouseover="navHover(3)" onmouseout="navMouseOut()">产品中心</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('article/index');?>" id="nav_4" onmouseover="navHover(4)" onmouseout="navMouseOut()">新闻中心</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('article/baike');?>" id="nav_5" onmouseover="navHover(5)" onmouseout="navMouseOut()">行业百科</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('article/anli');?>" id="nav_6" onmouseover="navHover(6)" onmouseout="navMouseOut()">成功案例</a></li>
                        <li><a href="<?php echo Yii::app()->createUrl('article/contact');?>" id="nav_7" onmouseover="navHover(7)" onmouseout="navMouseOut()">联系我们</a></li>
                        <li class="rightli"><a href="<?php echo Yii::app()->createUrl('article/blog');?>" id="nav_8" onmouseover="navHover(8)" onmouseout="navMouseOut()">官方博客</a></li>
                    </ul>
            </div>
            <div class="navbtm">
            </div>
        </div>
		<!--Header End-->        
		<script type="text/javascript">$(function(){setDefaultNav(<?php if($topcid=='site'&&$topaid=='index') echo 1;if($topcid=='article'&&$topaid=='about') echo 2;if($topcid=='product'&&$topaid=='index') echo 3;if($topcid=='article'&&$topaid=='index') echo 4;if($topcid=='article'&&$topaid=='baike') echo 5;if($topcid=='article'&&$topaid=='anli') echo 6;if($topcid=='article'&&$topaid=='contact') echo 7;if($topcid=='article'&&$topaid=='blog') echo 8;?>)});</script>
	<?php echo $content?>
 <!--Footer Start-->
 
 <?php if(Yii::app()->controller->id=='site'&&Yii::app()->controller->action->id=='index'):?>
        <div class="footer">
        	<div id="links" style="background-color:#F4F4F4">
           	<span>友情链接:</span>
           	<?php $linklist=Link::model()->findAll('cid=16');
           	foreach($linklist as $vo):
           	?>
                 <span><a href="<?php echo $vo->linkurl;?>" target="_blank" title="<?php echo $vo->title;?>"><?php echo $vo->title;?></a></span>
                 <?php endforeach;?>
            		<span>申请友情链接 QQ:</span>
        	</div>
        </div>
    <?php else:?>
        
           <div class="footer">
        	<div id="links">
           	<span>相关导航:</span>
           	<?php  $bcatprilist=Category::model()->findAll('parentid=22');
           foreach($bcatprilist as $vo):
           ?>
           <span><a href="<?php echo Yii::app()->params['siteurl'];?>" title="<?php echo $vo->title?>"><?php echo $vo->title?></a></span>
           <?php endforeach;?>
        	</div>
        </div>      
    <?php endif;?>
        
          <!--Footer Start-->
        <div id="footer">
           
            
  <div id="copyright"> 
  <?php $footinfo=Article::model()->find('cid=20');echo $footinfo->content;?>
  </div>
        </div>
   <!--Footer End-->	</div>
</body>
</html>