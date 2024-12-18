<?php
/**
 * RespuestaRCCV2ClavesBanxico
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reporte de Crédito Consolidado Personas Morales
 *
 * <p>PI Reporte de Crédito Consolidado de Personas Morales. <br/><br><img src='https://developer.circulodecredito.com.mx/sites/default/files/2024-01/Logo-Swaggers.png' height='70' width='270'/></p><br/>
 *
 * OpenAPI spec version: 1.0.0
 * Contact: api@circulodecredito.com.mx
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.64
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RCCPMV2\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RCCPMV2\Simulacion\MX\Client\ObjectSerializer;

/**
 * RespuestaRCCV2ClavesBanxico Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RespuestaRCCV2ClavesBanxico implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RespuestaRCCV2_clavesBanxico';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clave_banxico1' => 'string',
        'clave_banxico2' => 'string',
        'clave_banxico3' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'clave_banxico1' => null,
        'clave_banxico2' => null,
        'clave_banxico3' => null
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
        'clave_banxico1' => 'claveBanxico1',
        'clave_banxico2' => 'claveBanxico2',
        'clave_banxico3' => 'claveBanxico3'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clave_banxico1' => 'setClaveBanxico1',
        'clave_banxico2' => 'setClaveBanxico2',
        'clave_banxico3' => 'setClaveBanxico3'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clave_banxico1' => 'getClaveBanxico1',
        'clave_banxico2' => 'getClaveBanxico2',
        'clave_banxico3' => 'getClaveBanxico3'
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
        $this->container['clave_banxico1'] = isset($data['clave_banxico1']) ? $data['clave_banxico1'] : null;
        $this->container['clave_banxico2'] = isset($data['clave_banxico2']) ? $data['clave_banxico2'] : null;
        $this->container['clave_banxico3'] = isset($data['clave_banxico3']) ? $data['clave_banxico3'] : null;
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
     * Gets clave_banxico1
     *
     * @return \Swagger\Client\Model\CatalogoClavesBanxico
     */
    public function getClaveBanxico1()
    {
        return $this->container['clave_banxico1'];
    }

    /**
     * Sets clave_banxico1
     *
     * @param \Swagger\Client\Model\CatalogoClavesBanxico $clave_banxico1 clave_banxico1
     *
     * @return $this
     */
    public function setClaveBanxico1($clave_banxico1)
    {
        $this->container['clave_banxico1'] = $clave_banxico1;

        return $this;
    }

    /**
     * Gets clave_banxico2
     *
     * @return \Swagger\Client\Model\CatalogoClavesBanxico
     */
    public function getClaveBanxico2()
    {
        return $this->container['clave_banxico2'];
    }

    /**
     * Sets clave_banxico2
     *
     * @param \Swagger\Client\Model\CatalogoClavesBanxico $clave_banxico2 clave_banxico2
     *
     * @return $this
     */
    public function setClaveBanxico2($clave_banxico2)
    {
        $this->container['clave_banxico2'] = $clave_banxico2;

        return $this;
    }

    /**
     * Gets clave_banxico3
     *
     * @return \Swagger\Client\Model\CatalogoClavesBanxico
     */
    public function getClaveBanxico3()
    {
        return $this->container['clave_banxico3'];
    }

    /**
     * Sets clave_banxico3
     *
     * @param \Swagger\Client\Model\CatalogoClavesBanxico $clave_banxico3 clave_banxico3
     *
     * @return $this
     */
    public function setClaveBanxico3($clave_banxico3)
    {
        $this->container['clave_banxico3'] = $clave_banxico3;

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
