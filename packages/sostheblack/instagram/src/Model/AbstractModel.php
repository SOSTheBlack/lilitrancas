<?php

namespace SOSTheBlack\Instagram\Model;

use SOSTheBlack\Instagram\Traits\ArrayLikeTrait;
use SOSTheBlack\Instagram\Traits\InitializerTrait;

/**
 * Class AbstractModel
 * @package InstagramScraper\Model
 */
abstract class AbstractModel implements \ArrayAccess
{
    use InitializerTrait, ArrayLikeTrait;

    /**
     * @var array
     */
    protected static $initPropertiesMap = [];

    /**
     * @return array
     */
    public static function getColumns()
    {
        return \array_keys(static::$initPropertiesMap);
    }
}