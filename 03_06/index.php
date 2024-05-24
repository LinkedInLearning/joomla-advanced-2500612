<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

  <head>
    <jdoc:include type="head" />
  </head>
  
  <body>
  
	<h1>Odenwälder Rezepte</h1>
	
	<div> <jdoc:include type="modules" name="menu" /> </div> <!-- Hauptmenü -->

	<div> <jdoc:include type="component" /> </div> <!-- Beitrag -->

	<div> <jdoc:include type="modules" name="sidebar-right" /> </div> <!-- Module -->
	
  </body>

</html>

