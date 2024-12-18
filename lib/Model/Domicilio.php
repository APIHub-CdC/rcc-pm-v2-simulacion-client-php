<?php
/**
 * Domicilio
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
 * Domicilio Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Domicilio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'domicilio';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'direccion' => 'string',
        'colonia_poblacion' => 'string',
        'delegacion_municipio' => 'string',
        'ciudad' => 'string',
        'estado' => '\RCCPMV2\Simulacion\MX\Client\Model\CatalogoEstados',
        'cp' => 'string',
        'pais' => '\RCCPMV2\Simulacion\MX\Client\Model\CatalogoPaisNacionalidad',
        'telefono' => 'string',
        'extension' => 'string',
        'fax' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'direccion' => null,
        'colonia_poblacion' => null,
        'delegacion_municipio' => null,
        'ciudad' => null,
        'estado' => null,
        'cp' => null,
        'pais' => null,
        'telefono' => null,
        'extension' => null,
        'fax' => null
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
        'direccion' => 'direccion',
        'colonia_poblacion' => 'coloniaPoblacion',
        'delegacion_municipio' => 'delegacionMunicipio',
        'ciudad' => 'ciudad',
        'estado' => 'estado',
        'cp' => 'CP',
        'pais' => 'pais',
        'telefono' => 'telefono',
        'extension' => 'extension',
        'fax' => 'fax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'direccion' => 'setDireccion',
        'colonia_poblacion' => 'setColoniaPoblacion',
        'delegacion_municipio' => 'setDelegacionMunicipio',
        'ciudad' => 'setCiudad',
        'estado' => 'setEstado',
        'cp' => 'setCp',
        'pais' => 'setPais',
        'telefono' => 'setTelefono',
        'extension' => 'setExtension',
        'fax' => 'setFax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'direccion' => 'getDireccion',
        'colonia_poblacion' => 'getColoniaPoblacion',
        'delegacion_municipio' => 'getDelegacionMunicipio',
        'ciudad' => 'getCiudad',
        'estado' => 'getEstado',
        'cp' => 'getCp',
        'pais' => 'getPais',
        'telefono' => 'getTelefono',
        'extension' => 'getExtension',
        'fax' => 'getFax'
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
        $this->container['direccion'] = isset($data['direccion']) ? $data['direccion'] : null;
        $this->container['colonia_poblacion'] = isset($data['colonia_poblacion']) ? $data['colonia_poblacion'] : null;
        $this->container['delegacion_municipio'] = isset($data['delegacion_municipio']) ? $data['delegacion_municipio'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
        $this->container['cp'] = isset($data['cp']) ? $data['cp'] : null;
        $this->container['pais'] = isset($data['pais']) ? $data['pais'] : null;
        $this->container['telefono'] = isset($data['telefono']) ? $data['telefono'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
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
     * Gets direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->container['direccion'];
    }

    /**
     * Sets direccion
     *
     * @param string $direccion Es el nombre de la calle, número exterior, número interior. Deben considerarse avenida,cerrada, manzana, lote, edificio,departamento etc.
     *
     * @return $this
     */
    public function setDireccion($direccion)
    {
        $this->container['direccion'] = $direccion;

        return $this;
    }

    /**
     * Gets colonia_poblacion
     *
     * @return string
     */
    public function getColoniaPoblacion()
    {
        return $this->container['colonia_poblacion'];
    }

    /**
     * Sets colonia_poblacion
     *
     * @param string $colonia_poblacion Colonia a la cual pertenece la dirección contenida en el elemento dirección.
     *
     * @return $this
     */
    public function setColoniaPoblacion($colonia_poblacion)
    {
        $this->container['colonia_poblacion'] = $colonia_poblacion;

        return $this;
    }

    /**
     * Gets delegacion_municipio
     *
     * @return string
     */
    public function getDelegacionMunicipio()
    {
        return $this->container['delegacion_municipio'];
    }

    /**
     * Sets delegacion_municipio
     *
     * @param string $delegacion_municipio La delegación o municipio a la cual pertenece la dirección contenida en el elemento Dirección.
     *
     * @return $this
     */
    public function setDelegacionMunicipio($delegacion_municipio)
    {
        $this->container['delegacion_municipio'] = $delegacion_municipio;

        return $this;
    }

    /**
     * Gets ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->container['ciudad'];
    }

    /**
     * Sets ciudad
     *
     * @param string $ciudad La ciudad a la cual pertenece la dirección contenida en el elemento Dirección.
     *
     * @return $this
     */
    public function setCiudad($ciudad)
    {
        $this->container['ciudad'] = $ciudad;

        return $this;
    }

    /**
     * Gets estado
     *
     * @return \Swagger\Client\Model\CatalogoEstados
     */
    public function getEstado()
    {
        return $this->container['estado'];
    }

    /**
     * Sets estado
     *
     * @param \Swagger\Client\Model\CatalogoEstados $estado estado
     *
     * @return $this
     */
    public function setEstado($estado)
    {
        $this->container['estado'] = $estado;

        return $this;
    }

    /**
     * Gets cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->container['cp'];
    }

    /**
     * Sets cp
     *
     * @param string $cp Para domicilios en México se validará la correcta correspondencia del código postal contra el estado ingresado. En el caso de domicilios en el extranjero debe reportarse un dato válido. No rellenar espacio.
     *
     * @return $this
     */
    public function setCp($cp)
    {
        $this->container['cp'] = $cp;

        return $this;
    }

    /**
     * Gets pais
     *
     * @return \Swagger\Client\Model\CatalogoPaisNacionalidad
     */
    public function getPais()
    {
        return $this->container['pais'];
    }

    /**
     * Sets pais
     *
     * @param \Swagger\Client\Model\CatalogoPaisNacionalidad $pais pais
     *
     * @return $this
     */
    public function setPais($pais)
    {
        $this->container['pais'] = $pais;

        return $this;
    }

    /**
     * Gets telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->container['telefono'];
    }

    /**
     * Sets telefono
     *
     * @param string $telefono Número de Teléfono.
     *
     * @return $this
     */
    public function setTelefono($telefono)
    {
        $this->container['telefono'] = $telefono;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param string $extension Número de extension.
     *
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax Número de fax.
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

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
