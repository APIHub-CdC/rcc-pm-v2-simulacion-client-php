<?php

namespace RCCPMV2\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RCCPMV2\Simulacion\MX\Client\ObjectSerializer;

/**
 * PersonaRespuesta Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonaRespuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PersonaRespuesta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nombre' => 'string',
        'rfc' => 'string',
        'nacionalidad' => '\RCCPMV2\Simulacion\MX\Client\Model\CatalogoPaisNacionalidad',
        'domicilio' => '\RCCPMV2\Simulacion\MX\Client\Model\Domicilio'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nombre' => null,
        'rfc' => null,
        'nacionalidad' => null,
        'domicilio' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'nombre' => 'nombre',
        'rfc' => 'RFC',
        'nacionalidad' => 'nacionalidad',
        'domicilio' => 'domicilio'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nombre' => 'setNombre',
        'rfc' => 'setRfc',
        'nacionalidad' => 'setNacionalidad',
        'domicilio' => 'setDomicilio'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nombre' => 'getNombre',
        'rfc' => 'getRfc',
        'nacionalidad' => 'getNacionalidad',
        'domicilio' => 'getDomicilio'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['nacionalidad'] = isset($data['nacionalidad']) ? $data['nacionalidad'] : null;
        $this->container['domicilio'] = isset($data['domicilio']) ? $data['domicilio'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->container['nombre'];
    }

    /**
     * Sets nombre
     *
     * @param string $nombre Nombre de la compañía (Persona Moral) o primer nombre de la Persona Física con Actividad Empresarial.
     *
     * @return $this
     */
    public function setNombre($nombre)
    {
        $this->container['nombre'] = $nombre;

        return $this;
    }

    /**
     * Gets rfc
     *
     * @return string
     */
    public function getRfc()
    {
        return $this->container['rfc'];
    }

    /**
     * Sets rfc
     *
     * @param string $rfc RFC de la compañía. El dato debe ser capturado, pues aplica para el proceso de búsqueda e integración de expedientes.
     *
     * @return $this
     */
    public function setRfc($rfc)
    {
        $this->container['rfc'] = $rfc;

        return $this;
    }

    /**
     * Gets nacionalidad
     *
     * @return \Swagger\Client\Model\CatalogoPaisNacionalidad
     */
    public function getNacionalidad()
    {
        return $this->container['nacionalidad'];
    }

    /**
     * Sets nacionalidad
     *
     * @param \Swagger\Client\Model\CatalogoPaisNacionalidad $nacionalidad nacionalidad
     *
     * @return $this
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->container['nacionalidad'] = $nacionalidad;

        return $this;
    }

    /**
     * Gets domicilio
     *
     * @return \Swagger\Client\Model\Domicilio
     */
    public function getDomicilio()
    {
        return $this->container['domicilio'];
    }

    /**
     * Sets domicilio
     *
     * @param \Swagger\Client\Model\Domicilio $domicilio domicilio
     *
     * @return $this
     */
    public function setDomicilio($domicilio)
    {
        $this->container['domicilio'] = $domicilio;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
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
