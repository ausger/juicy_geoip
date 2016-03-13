<?php

class Juicy_Geoip_Block_Adminhtml_Notifications extends Mage_Adminhtml_Block_Template
{
    public function checkFilePermissions()
    {
        /** @var $info Juicy_Geoip_Model_Info */
        $info = Mage::getModel('geoip/info');
        return $info->checkFilePermissions();
    }
}
