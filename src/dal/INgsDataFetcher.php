<?php
/**
 *
 * @author Zaven Naghashyan
 * @site https://naghashyan.com
 * @mail zaven@naghashyan.com
 * @year 2021
 * @package ngs.testing.dal
 * @version 1.0.0
 */

namespace ngs\testing\dal;

interface INgsDataFetcher {

    /**
     * @param $key
     * @return mixed
     */
    public function fetchRow($key);

}
