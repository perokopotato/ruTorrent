<?php

if ( function_exists("geoip_database_info") ) {
    $jResult .= "utWebUI.prsColumns.unshift( {'text' : utWebUI.prsColumns[ 0 ][ 'text' ], 'width' : '60px', 'type' : TYPE_STRING}); ";
    $jResult .= "utWebUI.GeoIPSupported = true; ";
    $theSettings->registerPlugin("geoip");
} else {
    $jResult .= "utWebUI.GeoIPSupported = false; ";
}
    
?>