<?php
global $module_menu;

unset($module_menu[0]);

// This will add the new option
$module_menu[]=Array("index.php?module=Campaigns&action=CustomCampaignWizard", "Campaign Wizard", "");
?>