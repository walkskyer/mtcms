<?php $this->beginContent('/layouts/main'); ?>
<div region="north" style="height:65px;border:0px;">
	<div id="nav">
		<div class="logo_admin"></div>
		<div class="toolbar"></div>
		<div id="menu">
			<button class="sexybutton sexysimple sexylarge <?php if($this->menupanel[0]=='content') echo 'sexymagenta';?>" url="<?php echo Yii::app()->createUrl('site/index',array('menupanel'=>'content'));?>">内容管理</button>
			<button class="sexybutton sexysimple sexylarge sexygreen" url='<?php echo Yii::app()->createUrl('site/index',array('menupanel'=>'content|short|sitemap'));?>'>网站导航</button>
			<button class="sexybutton sexysimple sexylarge <?php if($this->menupanel[0]=='usermanager') echo 'sexymagenta';?>" url="<?php echo Yii::app()->createUrl('site/index',array('menupanel'=>'usermanager'));?>">用户管理</button>
			<button class="sexybutton sexysimple sexylarge <?php if($this->menupanel[0]=='optionmanager') echo 'sexymagenta';?>" url="<?php echo Yii::app()->createUrl('site/index',array('menupanel'=>'optionmanager'));?>">系统设置</button>
			<button class="sexybutton sexysimple sexylarge" url="<?php echo Yii::app()->createUrl('site/logout');?>">退出系统</button>
		</div>
		<div id="technology">技术支持：<a href="http://www.hhfl.net" target="_blank"><b>郑州旗人科技</b></a></div>
	</div>
</div>







<?php
if($this->menupanel[0]==='content'):
?>
<div region="west" split="true" title="内容管理" iconCls="icon-cash" style="width:185px;padding1:1px;overflow:hidden;">
	<div class="easyui-accordion" fit="true" border="false">

		<div title="快捷菜单" <?php if($this->menupanel[1]==='short')echo "selected='true'";?>>
			<ul class="vlist">
			<?php if(Yii::app()->params['menuoption']['content']['article']){ ?>
				<li <?php if($this->menupanel[2]==='article_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('article/index',array('menupanel'=>'content|short|article_index'));?>">文章管理</a>
				</li>
			<?php }?>
				
			<?php if(Yii::app()->params['menuoption']['content']['product']){ ?>
				<li <?php if($this->menupanel[2]==='product_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('product/index',array('menupanel'=>'content|short|product_index'));?>">产品管理</a>
				</li>
			<?php }?>
				
				
			<?php if(Yii::app()->params['menuoption']['content']['link']){ ?>	
				<li <?php if($this->menupanel[2]==='link_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('link/index',array('menupanel'=>'content|short|link_index'));?>">链接管理</a>
				</li>
			<?php }?>	
				
			<?php if(Yii::app()->params['menuoption']['content']['picture']){ ?>		
				<li <?php if($this->menupanel[2]==='picture_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('picture/index',array('menupanel'=>'content|short|picture_index'));?>">图片广告管理</a>
				</li>
			<?php }?>
			
			<?php if(Yii::app()->params['menuoption']['content']['feedback']){ ?>
				<li <?php if($this->menupanel[2]==='feedback_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('feedback/index',array('menupanel'=>'content|short|feedback_index'));?>">留言反馈管理</a>
				</li>
			<?php }?>
				
			<?php if(Yii::app()->params['menuoption']['content']['job']){ ?>
				<li <?php if($this->menupanel[2]==='job_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('job/index',array('menupanel'=>'content|short|job_index'));?>">招聘职位管理</a>
				</li>
			<?php }?>
			</ul>
		</div>
	
	
	<?php if(Yii::app()->params['menuoption']['content']['article']){ ?>
		<div title="文章"  <?php if($this->menupanel[1]==='article')echo "selected='true'";?>>
			<ul class="vlist">
				<li <?php if($this->menupanel[2]==='article_create')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('article/create',array('menupanel'=>'content|article|article_create'));?>">添加文章</a>
				</li>
				<li <?php if($this->menupanel[2]==='article_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('article/index',array('menupanel'=>'content|article|article_index'));?>">文章管理</a>
				</li>
				<li <?php if($this->menupanel[2]==='article_category')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('category/index',array('menupanel'=>'content|article|article_category','module'=>Yii::app()->params['module']['article']));?>">栏目管理</a>
				</li>
			</ul>
		</div>
	<?php }?>
	
	<?php if(Yii::app()->params['menuoption']['content']['product']){ ?>
		<div title="产品"  <?php if($this->menupanel[1]==='product')echo "selected='true'";?>>
			<ul class="vlist">
				<li <?php if($this->menupanel[2]==='product_create')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('product/create',array('menupanel'=>'content|product|product_create'));?>">添加产品</a>
				</li>
				<li <?php if($this->menupanel[2]==='product_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('product/index',array('menupanel'=>'content|product|product_index'));?>">产品管理</a>
				</li>
				<li <?php if($this->menupanel[2]==='product_category')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('category/index',array('menupanel'=>'content|product|product_category','module'=>Yii::app()->params['module']['product']));?>">产品分类</a>
				</li>
				<li <?php if($this->menupanel[2]==='brand_category')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('category/index',array('menupanel'=>'content|product|brand_category','module'=>Yii::app()->params['module']['brand']));?>">品牌管理</a>
				</li>
			</ul>
		</div>
	<?php }?>	

		
	<?php if(Yii::app()->params['menuoption']['content']['link']){ ?>	
		<div title="链接"  <?php if($this->menupanel[1]==='link')echo "selected='true'";?>>
			<ul class="vlist">
				<li <?php if($this->menupanel[2]==='link_create')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('link/create',array('menupanel'=>'content|link|link_create'));?>">添加链接</a>
				</li>
				<li <?php if($this->menupanel[2]==='link_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('link/index',array('menupanel'=>'content|link|link_index'));?>">链接管理</a>
				</li>
				<li <?php if($this->menupanel[2]==='link_category')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('category/index',array('menupanel'=>'content|link|link_category','module'=>Yii::app()->params['module']['link']));?>">链接分类</a>
				</li>
			</ul>
		</div>
	<?php }?>	
		
	<?php if(Yii::app()->params['menuoption']['content']['picture']){ ?>		
		<div title="图片广告"  <?php if($this->menupanel[1]==='picture')echo "selected='true'";?>>
			<ul class="vlist">
				<li <?php if($this->menupanel[2]==='picture_create')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('picture/create',array('menupanel'=>'content|picture|picture_create'));?>">添加图片广告</a>
				</li>
				<li <?php if($this->menupanel[2]==='picture_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('picture/index',array('menupanel'=>'content|picture|picture_index'));?>">图片广告管理</a>
				</li>
				<li <?php if($this->menupanel[2]==='picture_category')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('category/index',array('menupanel'=>'content|picture|picture_category','module'=>Yii::app()->params['module']['picture']));?>">图片广告分类</a>
				</li>
			</ul>
		</div>
	<?php }?>		
	
	<?php if(Yii::app()->params['menuoption']['content']['feedback']){ ?>
		<div title="留言反馈"  <?php if($this->menupanel[1]==='feedback')echo "selected='true'";?>>
			<ul class="vlist">
				<li <?php if($this->menupanel[2]==='feedback_create')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('feedback/create',array('menupanel'=>'content|feedback|feedback_create'));?>">添加留言反馈</a>
				</li>
				<li <?php if($this->menupanel[2]==='feedback_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('feedback/index',array('menupanel'=>'content|feedback|feedback_index'));?>">留言反馈管理</a>
				</li>
			</ul>
		</div>
	<?php }?>
	
	<?php if(Yii::app()->params['menuoption']['content']['job']){ ?>	
		<div title="招聘职位"  <?php if($this->menupanel[1]==='job')echo "selected='true'";?>>
			<ul class="vlist">
				<li <?php if($this->menupanel[2]==='job_create')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('job/create',array('menupanel'=>'content|job|job_create'));?>">添加招聘职位</a>
				</li>
				<li <?php if($this->menupanel[2]==='job_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('job/index',array('menupanel'=>'content|job|job_index'));?>">招聘职位管理</a>
				</li>
				<li <?php if($this->menupanel[2]==='job_category')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('category/index',array('menupanel'=>'content|job|job_category','module'=>Yii::app()->params['module']['job']));?>">招聘职位分类</a>
				</li>
			</ul>
		</div>
	<?php }?>	
		
	</div>
</div>
<?php
endif;
if($this->menupanel[0]==='usermanager'):
?>
<div region="west" split="true" title="用户管理" iconCls="icon-cash" style="width:185px;padding1:1px;overflow:hidden;">
	<div class="easyui-accordion" fit="true" border="false">
	
		<div title="用户管理" <?php if($this->menupanel[1]==='user')echo "selected='true'";?>>
			<ul class="vlist">
				<li <?php if($this->menupanel[2]==='user_create')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('user/create',array('menupanel'=>'usermanager|user|user_create'));?>">添加用户</a>
				</li>
				<li <?php if($this->menupanel[2]==='user_index')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('user/index',array('menupanel'=>'usermanager|user|user_index'));?>">用户管理</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php
endif;
if($this->menupanel[0]==='optionmanager'):
?>
<div region="west" split="true" title="系统设置" iconCls="icon-cash" style="width:185px;padding1:1px;overflow:hidden;">
	<div class="easyui-accordion" fit="true" border="false">
		<div title="系统设置" <?php if($this->menupanel[1]==='system')echo "selected='true'";?>>
			<ul class="vlist">
				<li <?php if($this->menupanel[2]==='site')echo "class='active'";?>>
					<a href="<?php echo Yii::app()->createUrl('option/update',array('menupanel'=>'optionmanager|system|site'));?>">网站参数设置</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php
endif;
?>

<div region="center" title="操作面板" id="content">
        <?php echo $content?>
</div>









<?php $this->endContent(); ?>







