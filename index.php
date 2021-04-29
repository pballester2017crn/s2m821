<!DOCTYPE html>
<html>
<body>




<?php
	$browser = new Browser();
    if( $browser->getBrowser() == Browser::BROWSER_FIREFOX && $browser->getVersion() >= 2 ) {
        echo 'You have FireFox version 2 or greater';
    }
 ?>  
<h1>bon dia</h1>
</body>
</html>