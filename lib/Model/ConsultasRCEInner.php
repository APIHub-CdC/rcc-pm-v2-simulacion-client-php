<?php
/**
 * ConsultasRCEInner
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
 * ConsultasRCEInner Class Doc Comment
 *
 * @category Class
 * @description Datos de consultas.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConsultasRCEInner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'consultasRCE_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fecha_consulta' => 'string',
        'nombre_otorgante' => 'string',
        'tipo_credito' => 'string',
        'importe_credito' => 'int',
        'clave_unidad_monetaria' => '\RCCPMV2\Simulacion\MX\Client\Model\CatalogoMoneda'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fecha_consulta' => 'yyyy-MM-dd',
        'nombre_otorgante' => null,
        'tipo_credito' => null,
        'importe_credito' => null,
        'clave_unidad_monetaria' => null
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
        'fecha_consulta' => 'fechaConsulta',
        'nombre_otorgante' => 'nombreOtorgante',
        'tipo_credito' => 'tipoCredito',
        'importe_credito' => 'importeCredito',
        'clave_unidad_monetaria' => 'claveUnidadMonetaria'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fecha_consulta' => 'setFechaConsulta',
        'nombre_otorgante' => 'setNombreOtorgante',
        'tipo_credito' => 'setTipoCredito',
        'importe_credito' => 'setImporteCredito',
        'clave_unidad_monetaria' => 'setClaveUnidadMonetaria'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fecha_consulta' => 'getFechaConsulta',
        'nombre_otorgante' => 'getNombreOtorgante',
        'tipo_credito' => 'getTipoCredito',
        'importe_credito' => 'getImporteCredito',
        'clave_unidad_monetaria' => 'getClaveUnidadMonetaria'
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
        $this->container['fecha_consulta'] = isset($data['fecha_consulta']) ? $data['fecha_consulta'] : null;
        $this->container['nombre_otorgante'] = isset($data['nombre_otorgante']) ? $data['nombre_otorgante'] : null;
        $this->container['tipo_credito'] = isset($data['tipo_credito']) ? $data['tipo_credito'] : null;
        $this->container['importe_credito'] = isset($data['importe_credito']) ? $data['importe_credito'] : null;
        $this->container['clave_unidad_monetaria'] = isset($data['clave_unidad_monetaria']) ? $data['clave_unidad_monetaria'] : null;
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
     * Gets fecha_consulta
     *
     * @return string
     */
    public function getFechaConsulta()
    {
        return $this->container['fecha_consulta'];
    }

    /**
     * Sets fecha_consulta
     *
     * @param string $fecha_consulta Fecha de la consulta.
     *
     * @return $this
     */
    public function setFechaConsulta($fecha_consulta)
    {
        $this->container['fecha_consulta'] = $fecha_consulta;

        return $this;
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
     * @param string $nombre_otorgante Contiene el Nombre del Otorgante de Crédito que reporto el Crédito. Ver Tabla: Tipo de Negocio. <br>Nota: Este elemento solo es reportado para reporte de crédito especial.
     *
     * @return $this
     */
    public function setNombreOtorgante($nombre_otorgante)
    {
        $this->container['nombre_otorgante'] = $nombre_otorgante;

        return $this;
    }

    /**
     * Gets tipo_credito
     *
     * @return string
     */
    public function getTipoCredito()
    {
        return $this->container['tipo_credito'];
    }

    /**
     * Sets tipo_credito
     *
     * @param string $tipo_credito tipo_credito
     *
     * @return $this
     */
    public function setTipoCredito($tipo_credito)
    {
        $this->container['tipo_credito'] = $tipo_credito;

        return $this;
    }

    /**
     * Gets importe_credito
     *
     * @return int
     */
    public function getImporteCredito()
    {
        return $this->container['importe_credito'];
    }

    /**
     * Sets importe_credito
     *
     * @param int $importe_credito importe_credito
     *
     * @return $this
     */
    public function setImporteCredito($importe_credito)
    {
        $this->container['importe_credito'] = $importe_credito;

        return $this;
    }

    /**
     * Gets clave_unidad_monetaria
     *
     * @return \Swagger\Client\Model\CatalogoMoneda
     */
    public function getClaveUnidadMonetaria()
    {
        return $this->container['clave_unidad_monetaria'];
    }

    /**
     * Sets clave_unidad_monetaria
     *
     * @param \Swagger\Client\Model\CatalogoMoneda $clave_unidad_monetaria clave_unidad_monetaria
     *
     * @return $this
     */
    public function setClaveUnidadMonetaria($clave_unidad_monetaria)
    {
        $this->container['clave_unidad_monetaria'] = $clave_unidad_monetaria;

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
