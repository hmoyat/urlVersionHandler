<?php
/**
 * Created by PhpStorm.
 * User: hmoya
 * Date: 8/18/14
 * Time: 4:15 PM
 */

namespace UrlVersionHandler\View\Helper;


use Zend\View\Helper\AbstractHelper;

class UrlVersionHandler extends AbstractHelper
{
    private $config = null;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function __invoke($url, $version = null, $params = array())
    {
        if (!is_string($url))
            throw new \InvalidArgumentException('URL must be a string');

        if (is_null($version)) {
            if (!isset($this->config['version']))
                throw new \InvalidArgumentException("Unspecified version number");

            $version = $this->config['version'];
        }

        if (!(is_string($version) || is_numeric($version)))
            throw new \InvalidArgumentException("Invalid version number");

        if (!is_array($params))
            throw new \InvalidArgumentException('Parameters must be a key-value array');

        $urlData = array("_version" => $version) + $params;
        return $url . "?" . http_build_query($urlData);
    }
} 