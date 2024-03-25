<?php

include_once dirname(__FILE__) . "/Mobile_Detect.php";
$detect = new Mobile_Detect;

if (($detect->isMobile() || $detect->isTablet()) && !$detect->is('Bot')) {
    echo 'mobile echo'
    exit;
}

?>
