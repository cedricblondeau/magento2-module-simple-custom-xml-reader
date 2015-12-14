<?php
namespace CedricBlondeau\SimpleCustomXmlReader\Model;

/**
 * Class Converter
 *
 * @package CedricBlondeau\SimpleCustomXmlReader\Model
 */
class Converter implements \Magento\Framework\Config\ConverterInterface
{
    /**
     * @param \DOMDocument $source
     * @return array
     */
    public function convert($source)
    {
        $xpath = new \DOMXPath($source);
        $hellos = $xpath->query("/custom/hello");
        $result = array();
        foreach ($hellos as $hello) {
            $result[] = $hello->nodeValue;
        }
        return $result;
    }
}
