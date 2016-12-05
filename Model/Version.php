<?php

namespace Flows\ApiExtension\Model;

use Flows\ApiExtension\Api\VersionInterface;

class Version implements VersionInterface
{
    /**
     * @return string
     */
    public function getVersion()
    {
        return json_decode(file_get_contents(__DIR__ . '/../composer.json'))->version;
    }
}