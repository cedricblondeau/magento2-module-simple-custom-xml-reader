<?php
namespace CedricBlondeau\SimpleCustomXmlReader\Model;

/**
 * Class SchemaLocator
 *
 * @package CedricBlondeau\SimpleCustomXmlReader\Model
 */
class SchemaLocator implements \Magento\Framework\Config\SchemaLocatorInterface
{
    /**
     * Merged config schema file name
     */
    const MERGED_CONFIG_SCHEMA = 'custom.xsd';

    /**
     * Per file validation schema file name
     */
    const PER_FILE_VALIDATION_SCHEMA = 'custom.xsd';

    /**
     * Path to corresponding XSD file with validation rules for merged config
     *
     * @var string
     */
    protected $_schema = null;

    /**
     * Path to corresponding XSD file with validation rules for separate config files
     *
     * @var string
     */
    protected $_perFileSchema = null;

    /**
     * @param \Magento\Framework\Module\Dir\Reader $moduleReader
     */
    public function __construct(\Magento\Framework\Module\Dir\Reader $moduleReader)
    {
        $moduleDir = $moduleReader->getModuleDir('etc', 'CedricBlondeau_SimpleCustomXmlReader');
        $this->_schema = $moduleDir . '/' . self::MERGED_CONFIG_SCHEMA;
        $this->_perFileSchema = $moduleDir . '/' . self::PER_FILE_VALIDATION_SCHEMA;
    }

    /**
     * Get path to merged config schema
     *
     * @return string|null
     */
    public function getSchema()
    {
        return $this->_schema;
    }

    /**
     * Get path to per file validation schema
     *
     * @return string|null
     */
    public function getPerFileSchema()
    {
        return $this->_perFileSchema;
    }
}