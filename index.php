<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

// Any mobile device (phones or tablets).

if ($detect->isMobile())

{
               header( 'Location: mobi/mobile.html' ) ;
}


// not a mobile device
else

{
echo ("<p>You have reached this page because you are on a desktop. To reach ");
echo ("this website locate the desktop version or access it on a mobile device.");
echo ("If you really want to see this page on your desktop then click the link");
echo ("<a href='mobi/mobile.html' computer> (it will not be as pretty)</p>");
}

// Any tablet device.
if( $detect->isTablet() ){

}

// Exclude tablets.
if( $detect->isMobile() && !$detect->isTablet() ){

}

// Check for a specific platform with the help of the magic methods:
if( $detect->isiOS() ){

}

if( $detect->isAndroidOS() ){

}
?>
