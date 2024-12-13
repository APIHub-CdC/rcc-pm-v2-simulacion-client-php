<?php
/**
 * RespuestaRCCV2ClavePrevenciones
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
 * RespuestaRCCV2ClavePrevenciones Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RespuestaRCCV2ClavePrevenciones implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RespuestaRCCV2_clavePrevenciones';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nombre_otorgante' => 'string',
        'fecha_reporte' => 'string',
        'numero_contrato' => 'string',
        'clave_prevencion' => '\RCCPMV2\Simulacion\MX\Client\Model\CatalogoClavesPrevencion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nombre_otorgante' => null,
        'fecha_reporte' => null,
        'numero_contrato' => null,
        'clave_prevencion' => null
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
        'nombre_otorgante' => 'nombreOtorgante',
        'fecha_reporte' => 'fechaReporte',
        'numero_contrato' => 'numeroContrato',
        'clave_prevencion' => 'clavePrevencion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'nombre_otorgante' => 'setNombreOtorgante',
        'fecha_reporte' => 'setFechaReporte',
        'numero_contrato' => 'setNumeroContrato',
        'clave_prevencion' => 'setClavePrevencion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'nombre_otorgante' => 'getNombreOtorgante',
        'fecha_reporte' => 'getFechaReporte',
        'numero_contrato' => 'getNumeroContrato',
        'clave_prevencion' => 'getClavePrevencion'
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
        $this->container['nombre_otorgante'] = isset($data['nombre_otorgante']) ? $data['nombre_otorgante'] : null;
        $this->container['fecha_reporte'] = isset($data['fecha_reporte']) ? $data['fecha_reporte'] : null;
        $this->container['numero_contrato'] = isset($data['numero_contrato']) ? $data['numero_contrato'] : null;
        $this->container['clave_prevencion'] = isset($data['clave_prevencion']) ? $data['clave_prevencion'] : null;
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
     * Gets nombre_otorgante
     *
     * @return string
     */
    public function getNombreOtorgante()
    {
        return $this->container['nombre_otorgante'];
    }

    /**
     * Sets nombre_otorgante
     *
     * @param string $nombre_otorgante Nombre del otorgante que envían la calificacio.
     *
     * @return $this
     */
    public function setNombreOtorgante($nombre_otorgante)
    {
        $this->container['nombre_otorgante'] = $nombre_otorgante;

        return $this;
    }

    /**
     * Gets fecha_reporte
     *
     * @return string
     */
    public function getFechaReporte()
    {
        return $this->container['fecha_reporte'];
    }

    /**
     * Sets fecha_reporte
     *
     * @param string $fecha_reporte Fecha reporte, en el formato especificado (por defecto yyyy-MM-dd).
     *
     * @return $this
     */
    public function setFechaReporte($fecha_reporte)
    {
        $this->container['fecha_reporte'] = $fecha_reporte;

        return $this;
    }

    /**
     * Gets numero_contrato
     *
     * @return string
     */
    public function getNumeroContrato()
    {
        return $this->container['numero_contrato'];
    }

    /**
     * Sets numero_contrato
     *
     * @param string $numero_contrato Número de contrato.
     *
     * @return $this
     */
    public function setNumeroContrato($numero_contrato)
    {
        $this->container['numero_contrato'] = $numero_contrato;

        return $this;
    }

    /**
     * Gets clave_prevencion
     *
     * @return \Swagger\Client\Model\CatalogoClavesPrevencion
     */
    public function getClavePrevencion()
    {
        return $this->container['clave_prevencion'];
    }

    /**
     * Sets clave_prevencion
     *
     * @param \Swagger\Client\Model\CatalogoClavesPrevencion $clave_prevencion clave_prevencion
     *
     * @return $this
     */
    public function setClavePrevencion($clave_prevencion)
    {
        $this->container['clave_prevencion'] = $clave_prevencion;

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
