<?php


namespace RCCPMV2\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RCCPMV2\Simulacion\MX\Client\ObjectSerializer;


class AccionistasInner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;


    protected static $swaggerModelName = 'accionistas_inner';


    protected static $swaggerTypes = [
        'rfc' => 'string',
        'curp' => 'string',
        'nombre' => 'string',
        'segundo_nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'domicilio' => '\RCCPMV2\Simulacion\MX\Client\Model\Domicilio',
        'porcentaje' => 'int'
    ];


    protected static $swaggerFormats = [
        'rfc' => null,
        'curp' => null,
        'nombre' => null,
        'segundo_nombre' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'domicilio' => null,
        'porcentaje' => null
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
        'rfc' => 'RFC',
        'curp' => 'CURP',
        'nombre' => 'nombre',
        'segundo_nombre' => 'segundoNombre',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'domicilio' => 'domicilio',
        'porcentaje' => 'porcentaje'
    ];


    protected static $setters = [
        'rfc' => 'setRfc',
        'curp' => 'setCurp',
        'nombre' => 'setNombre',
        'segundo_nombre' => 'setSegundoNombre',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'domicilio' => 'setDomicilio',
        'porcentaje' => 'setPorcentaje'
    ];


    protected static $getters = [
        'rfc' => 'getRfc',
        'curp' => 'getCurp',
        'nombre' => 'getNombre',
        'segundo_nombre' => 'getSegundoNombre',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'domicilio' => 'getDomicilio',
        'porcentaje' => 'getPorcentaje'
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
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['segundo_nombre'] = isset($data['segundo_nombre']) ? $data['segundo_nombre'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['domicilio'] = isset($data['domicilio']) ? $data['domicilio'] : null;
        $this->container['porcentaje'] = isset($data['porcentaje']) ? $data['porcentaje'] : null;
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
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

    public function getCurp()
    {
        return $this->container['curp'];
    }

    public function setCurp($curp)
    {
        $this->container['curp'] = $curp;

        return $this;
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

    public function getSegundoNombre()
    {
        return $this->container['segundo_nombre'];
    }

    public function setSegundoNombre($segundo_nombre)
    {
        $this->container['segundo_nombre'] = $segundo_nombre;

        return $this;
    }

    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }

    public function setApellidoPaterno($apellido_paterno)
    {
        $this->container['apellido_paterno'] = $apellido_paterno;

        return $this;
    }

    public function getApellidoMaterno()
    {
        return $this->container['apellido_materno'];
    }

    public function setApellidoMaterno($apellido_materno)
    {
        $this->container['apellido_materno'] = $apellido_materno;

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

    public function getPorcentaje()
    {
        return $this->container['porcentaje'];
    }

    public function setPorcentaje($porcentaje)
    {
        $this->container['porcentaje'] = $porcentaje;

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
