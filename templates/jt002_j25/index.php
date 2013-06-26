<?php /**  * @copyright	Copyright (C) 2012 JoomlaThemes.co - All Rights Reserved. **/
defined( '_JEXEC' ) or die( 'Restricted access' ); define( 'YOURBASEPATH', dirname(__FILE__) );
$jquery			= $this->params->get('jquery');
$scrolltop		= $this->params->get('scrolltop');
$superfish		= $this->params->get('superfish');
$logo			= $this->params->get('logo');
$logotype		= $this->params->get('logotype');
$sitedesc		= $this->params->get('sitedesc');
$app			= JFactory::getApplication();
$doc			= JFactory::getDocument();
$templateparams	= $app->getTemplate(true)->params; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
<link href='http://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>
<?php require(YOURBASEPATH . DS . "functions.php"); ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/styles.css" type="text/css" />
<?php if ($jquery == 'yes' ) : ?><script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script><?php endif; ?> 
<?php if ($scrolltop == 'yes' ) : ?><script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scrolltopcontrol.js"></script><?php endif; ?>
<?php if ($superfish == 'yes' ) : ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/superfish.js"></script>
<script type="text/javascript">
		jQuery(function(){
			jQuery('#nav ul').superfish({
			pathLevels	: 3,
			delay		: 800,
			animation	: {opacity:'show',height:'show',width:'show'},
			speed		: 'normal',
			autoArrows	: false,
			dropShadows : false,
			});		
		});
</script>
<?php endif; ?>
</head>
<body class="background">
<div id="scroll-top"></div>
<div id="main">
<div id="header-w">
    <div id="header">
    <?php if ($logotype == 'image' ) : ?>
    <?php if ($logo != null ) : ?>
    <div class="logo"><a href="<?php echo $this->baseurl ?>"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" /></a></div>
    <?php else : ?>
    <div class="logo"><a href="<?php echo $this->baseurl ?>/"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" border="0"></a></div>
    <?php endif; ?><?php endif; ?> 
    <?php if ($logotype == 'text' ) : ?>
    <div class="logo text"><a href="<?php echo $this->baseurl ?>"><?php echo htmlspecialchars($templateparams->get('sitetitle'));?></a></div>
    <?php endif; ?>
    <?php if ($sitedesc !== '' ) : ?>
    <div class="sitedescription"><?php echo htmlspecialchars($templateparams->get('sitedesc'));?></div>
    <?php endif; ?>     
    
    <?php if ($this->countModules('top')) : ?>
        <div id="top">
            <jdoc:include type="modules" name="top" style="none" />
        </div>
    <?php endif; ?>                       
		</div>        
</div>
	<div id="wrapper">
        	<?php if ($this->countModules('menu')) : ?>
        	<div id="navr"><div id="navl"><div id="nav">
		    	<jdoc:include type="modules" name="menu" style="none" />
			</div></div></div>
        	<?php endif; ?>    
		<?php if ($this->countModules('slideshow')) : ?> 
            <div id="slide-w">
                <jdoc:include type="modules" name="slideshow"  style="none"/>           
            </div>
        <?php endif; ?>    
 		<div id="comp">
        <?php if ($this->countModules('breadcrumbs')) : ?>
        	<jdoc:include type="modules" name="breadcrumbs"  style="none"/>
        <?php endif; ?>
					<?php if ($this->countModules('user1 or user2 or user3')) : ?>
                    <div id="mods1" class="spacer<?php echo $mainmod1_width; ?>">
                        <jdoc:include type="modules" name="user1" style="jaw" />
                        <jdoc:include type="modules" name="user2" style="jaw" />
                        <jdoc:include type="modules" name="user3" style="jaw" /> 
                    </div>
                    <?php endif; ?>        
        <div class="full">
                    <?php if ($this->countModules('left')) : ?>
                    <div id="leftbar-w">
                    <div id="sidebar">
                        <jdoc:include type="modules" name="left" style="jaw" />
                    </div>
                    </div>
                    <?php endif; ?>                          
                        <div id="comp_<?php echo $compwidth ?>">
                            <div id="comp-i">
                            	<jdoc:include type="message" />
                                <?php include "html/template.php"; ?>
                                <jdoc:include type="component" />
                                <div class="clr"></div>
                            </div>
                        </div>                     
                    </div>
                    <?php if ($this->countModules('right')) : ?>
                    <div id="rightbar-w">
                    <div id="sidebar">
                        <jdoc:include type="modules" name="right" style="jaw" />
                    </div>
                    </div>
                    <?php endif; ?>
		<div class="clr"></div>
        </div>
        <div class="clr"></div>
        <div class="shadow2"></div>
  </div>
</div>
		<?php if ($this->countModules('user4 or user5 or user6')) : ?>
        <div id="footer">
		<div id="mods2" class="spacer<?php echo $mainmod2_width; ?>">
			<jdoc:include type="modules" name="user4" style="jaw" />
			<jdoc:include type="modules" name="user5" style="jaw" />
			<jdoc:include type="modules" name="user6" style="jaw" />
		</div>
        </div>
		<?php endif; ?>   
<?php if ($this->countModules('user7 or user8 or user9 or user10')) : ?>
<div id="footer">
		<div id="mods3" class="spacer<?php echo $mainmod3_width; ?>">
			<jdoc:include type="modules" name="user7" style="jaw" />
			<jdoc:include type="modules" name="user8" style="jaw" />
			<jdoc:include type="modules" name="user9" style="jaw" />
            <jdoc:include type="modules" name="user10" style="jaw" />
		</div>  
</div>        
<?php endif; ?>
<div id="bottom">
        <?php if ($this->countModules('copyright')) : ?>
            <div class="copy">
                <jdoc:include type="modules" name="copyright"/>
            </div>
        <?php endif; ?>
<?php $app = JFactory::getApplication(); $menu = $app->getMenu(); if ($menu->getActive() == $menu->getDefault()) { ?>       
<div class="greenbiz"><a href="http://joomlathemes.co" target="_blank" title="free joomla templates">Joomla Themes</a> designed by <a href="http://webhostingtop.org" target="_blank" title="best hosting reviews">Web Hosting Top</a></div>
<?php } ?>
</div>

</body>
</html>