<?php

class Juicy_Geoip_Model_Info extends Juicy_Geoip_Model_Abstract
{
    public function getDatFileDownloadDate()
    {
        return file_exists($this->local_file) ? filemtime($this->local_file) : 0;
    }
}