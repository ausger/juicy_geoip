<?php

class Juicy_Geoip_Model_Cron
{
    public function run()
    {
        /** @var $info Juicy_Geoip_Model_Info */
        $info = Mage::getModel('geoip/info');
        $info->update();
    }
}