<?php $this->getWebAssetManager()->registerAndUseStyle('rezepte', '/templates/' . $this->template . '/css/template.css'); ?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

  <head>
    <jdoc:include type="head" />
  </head>
  
  <body>
  
	<h1><?php echo JFactory::getApplication()->get('sitename'); ?></h1>
	
	<div class="hauptmenue"> <jdoc:include type="modules" name="menu" /> </div> <!-- Hauptmenü -->

	<div class="komponenten"> <jdoc:include type="component" /> </div> <!-- Beitrag -->

	<div class="seitenleiste"> <jdoc:include type="modules" name="sidebar-right" /> </div> <!-- Module -->
	
  </body>

</html>

