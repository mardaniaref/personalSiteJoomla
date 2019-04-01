<?php
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.framework', true);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />

<?php if($this->direction == 'ltr') : ?> 
 <link href="<?php echo $this->baseurl ;?>/templates/<?php echo $this->template ;?>/css/template_ltr.css" rel="stylesheet" type="text/css" /> 
 <?php endif; ?> 
 
 <?php
 $app  = JFactory::getApplication();
 $sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
if ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle'), ENT_COMPAT, 'UTF-8') . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}

$blogLogo =  JUri::root() . $this->params->get('logoBlog');
// echo $blogLogo;
?>

<style>
#top-menu {

  /* background-image:  url(<?php echo $blogLogo; ?>)   ; */
}


	</style>
</head>

<body>

<div id="main">

 




	<?php
		 $menu = JFactory::getApplication()->getMenu();

// Get menu items - array with menu items
// $items = $menu->getMenu();
// $menu_items = $menu->getItems('home', '1');
if ($menu->getActive() == $menu->getDefault()) {
?>
<div id="homePage">

<div id="right">
<div id="dot"></div>
<div id="right_top">
</div>
<div id="middle_right">
<div id="right_pic">



<?php echo '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />'; ?>

		<!-- <jdoc:include type="modules" name="middel_right" style="xhtml" />  -->
</div>
</div>
<div id="right_bottom">
</div>

</div><!--end right-->

<div id="left">

<div id="top_left">

<div id="siteTitle">
<?php if ($this->params->get('sitetitle')) : ?>

	<?php echo '<div class="siteTitle">  <p> <img src="templates/arefmardani/images/right.png" alt="">' . htmlspecialchars($this->params->get('sitetitle'), ENT_COMPAT, 'UTF-8') . '<img src="templates/arefmardani/images/left.png" alt=""></p></div>'; ?>
<?php endif; ?>
<!-- <jdoc:include type="modules" name="name_txt1" style="xhtml" />  -->

</div>


<div id="description">

<!-- <jdoc:include type="modules" name="name_txt2" style="xhtml" />  -->
<?php if ($this->params->get('sitedescription')) : ?>
					<?php echo '<div class="description"> <p>' . htmlspecialchars($this->params->get('sitedescription'), ENT_COMPAT, 'UTF-8') . ' </p></div>'; ?>
				<?php endif; ?>
</div>

</div><!--end top_left-->
<?php if($this->countModules('description')): ?>
<div id="middel_left"> 

</div><!--end middel_left-->
<?php endif; ?>

<div id="bottom_left">
<div id="mf_po">
<?php if($this->countModules('menu_first')): ?>
<div id="menu_first">

<jdoc:include type="modules" name="menu_first" style="none" /> 
</div><!--end menu_first-->
<?php endif; ?>
</div>
</div><!--end bottom_left-->
</div><!--end left-->

</div> <!--end homepage-->

<?php
}else{
?>
<?php if($this->countModules('menu_h')): ?>
<div id="menu_h">
<div id="top-menu">
 <div id="menu">
 <?php echo '<div id="menuLogo">   <img src="templates/arefmardani/images/right.png" alt="">' . htmlspecialchars($this->params->get('sitetitle'), ENT_COMPAT, 'UTF-8') . '<img src="templates/arefmardani/images/left.png" alt=""></div>'; ?>
<jdoc:include type="modules" name="menu_h" style="none" /> 
</div> <!--end menu_h -->
</div> 
</div> <!--top-menu -->
<?php endif; ?>

<div id="header">
	
	     <div id="logo"> 
		 <?php echo '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />'; ?>

	     </div> <!-- end logo -->
	
	 <?php if ($this->params->get('sitedescription')) : ?>
					<?php echo '<div id="logo_text"> <p>' . htmlspecialchars($this->params->get('sitedescription'), ENT_COMPAT, 'UTF-8') . ' </p></div>'; ?>
				<?php endif; ?>      
	 

</div>
<div id="back">

<?php if($this->countModules('content')): ?>
	<div id="content">
	<jdoc:include type="message" />
	<jdoc:include type="component" />  
 </div> <!-- end content -->
	 
<?php endif; ?>
 
  <?php if($this->countModules('links')): ?>
	   <div id="links"> 
	   <div id="link_head">  پیوندها</div>
		   <jdoc:include type="modules" name="links" style="xhtml" /> 
		</div> <!-- end links -->
	<?php endif; ?>    

</div>
</div> <!--end main-->

<div id="foot">
		
		<?php if($this->countModules('footer1')): ?>
			  <div id="footer1">
			 		 <jdoc:include type="modules" name="footer1" style="xhtml" />       
			  </div><!-- end footer1 -->
		<?php endif; ?>

		<?php if($this->countModules('footer2')): ?>
			  <div id="footer2">
			 		 <jdoc:include type="modules" name="footer2" style="xhtml" />       
			  </div><!-- end footer2-->
		<?php endif; ?>

		<?php if($this->countModules('footer3')): ?>
			  <div id="footer3">
			 		 <jdoc:include type="modules" name="footer3" style="xhtml" />       
			  </div><!-- end footer3 -->
		<?php endif; ?>


		<?php if($this->countModules('footer4')): ?>
				  <div id="footer4">
						  <jdoc:include type="modules" name="footer4" style="xhtml" />       
				  </div><!-- end footer4 -->
		<?php endif; ?>

		<?php if($this->countModules('footer5')): ?>
				  <div id="footer5">
						  <jdoc:include type="modules" name="footer5" style="xhtml" />       
				  </div><!-- end footer5 -->
		<?php endif; ?>

</div><!-- end foot -->


<?php
}
?>

  


</body>
</html>