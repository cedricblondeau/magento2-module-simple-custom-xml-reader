<?php
namespace CedricBlondeau\SimpleCustomXmlReader\Model;

/**
 * Class Reader
 *
 * @package CedricBlondeau\SimpleCustomXmlReader\Model
 */
class Reader extends \Magento\Framework\Config\Reader\Filesystem
{
    /**
     * List of identifier attributes for merging
     *
     * @var array
     */
    protected $_idAttributes = [
        '/custom/hello' => 'name',
    ];
}
