<?php

namespace RCCPMV2\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RCCPMV2\Simulacion\MX\Client\ObjectSerializer;

class Persona implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;


    protected static $swaggerModelName = 'Persona';

    protected static $swaggerTypes = [
        'nombre' => 'string',
        'rfc' => 'string',
        'domicilio' => '\RCCPMV2\Simulacion\MX\Client\Model\RequestDomicilio'
    ];

    protected static $swaggerFormats = [
        'nombre' => null,
        'rfc' => null,
        'domicilio' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    protected static $attributeMap = [
        'nombre' => 'nombre',
        'rfc' => 'RFC',
        'domicilio' => 'domicilio'
    ];

    protected static $setters = [
        'nombre' => 'setNombre',
        'rfc' => 'setRfc',
        'domicilio' => 'setDomicilio'
    ];

    protected static $getters = [
        'nombre' => 'getNombre',
        'rfc' => 'getRfc',
        'domicilio' => 'getDomicilio'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    public function getModelName()
    {
        return self::$swaggerModelName;
    }


    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['domicilio'] = isset($data['domicilio']) ? $data['domicilio'] : null;
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['nombre'] === null) {
            $invalidProperties[] = "'nombre' can't be null";
        }
        if ($this->container['rfc'] === null) {
            $invalidProperties[] = "'rfc' can't be null";
        }
        if ($this->container['domicilio'] === null) {
            $invalidProperties[] = "'domicilio' can't be null";
        }
        return $invalidProperties;
    }

    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    public function getNombre()
    {
        return $this->container['nombre'];
    }

    public function setNombre($nombre)
    {
        $this->container['nombre'] = $nombre;

        return $this;
    }

    public function getRfc()
    {
        return $this->container['rfc'];
    }

    public function setRfc($rfc)
    {
        $this->container['rfc'] = $rfc;

        return $this;
    }

    public function getDomicilio()
    {
        return $this->container['domicilio'];
    }

    public function setDomicilio($domicilio)
    {
        $this->container['domicilio'] = $domicilio;

        return $this;
    }
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
