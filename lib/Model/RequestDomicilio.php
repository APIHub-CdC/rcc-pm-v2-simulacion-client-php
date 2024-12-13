<?php

namespace RCCPMV2\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RCCPMV2\Simulacion\MX\Client\ObjectSerializer;

class RequestDomicilio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $swaggerModelName = 'RequestDomicilio';

    protected static $swaggerTypes = [
        'direccion' => 'string',
        'colonia_poblacion' => 'string',
        'delegacion_municipio' => 'string',
        'ciudad' => 'string',
        'estado' => '\RCCPMV2\Simulacion\MXger\Client\Model\CatalogoEstados',
        'cp' => 'string',
        'estado_extranjero' => 'string',
        'pais' => '\RCCPMV2\Simulacion\MX\Client\Model\CatalogoPaisNacionalidad'
    ];

    protected static $swaggerFormats = [
        'direccion' => null,
        'colonia_poblacion' => null,
        'delegacion_municipio' => null,
        'ciudad' => null,
        'estado' => null,
        'cp' => null,
        'estado_extranjero' => null,
        'pais' => null
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
        'direccion' => 'direccion',
        'colonia_poblacion' => 'coloniaPoblacion',
        'delegacion_municipio' => 'delegacionMunicipio',
        'ciudad' => 'ciudad',
        'estado' => 'estado',
        'cp' => 'CP',
        'estado_extranjero' => 'estadoExtranjero',
        'pais' => 'pais'
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
        'estado_extranjero' => 'setEstadoExtranjero',
        'pais' => 'setPais'
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
        'estado_extranjero' => 'getEstadoExtranjero',
        'pais' => 'getPais'
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
        $this->container['estado_extranjero'] = isset($data['estado_extranjero']) ? $data['estado_extranjero'] : null;
        $this->container['pais'] = isset($data['pais']) ? $data['pais'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['direccion'] === null) {
            $invalidProperties[] = "'direccion' can't be null";
        }
        if ($this->container['colonia_poblacion'] === null) {
            $invalidProperties[] = "'colonia_poblacion' can't be null";
        }
        if ($this->container['delegacion_municipio'] === null) {
            $invalidProperties[] = "'delegacion_municipio' can't be null";
        }
        if ($this->container['ciudad'] === null) {
            $invalidProperties[] = "'ciudad' can't be null";
        }
        if ($this->container['estado'] === null) {
            $invalidProperties[] = "'estado' can't be null";
        }
        if ($this->container['cp'] === null) {
            $invalidProperties[] = "'cp' can't be null";
        }
        if ($this->container['pais'] === null) {
            $invalidProperties[] = "'pais' can't be null";
        }
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
     * @param string $direccion Reportar el nombre de la calle, número exterior, número interior. Deben considerarse avenida,cerrada, manzana, lote, edificio,departamento etc. Debe contener por lo menos dos cadenas de caracteres para que el registro sea válido, de lo contrario el registro será rechazado.
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
     * @param string $colonia_poblacion Reportar la colonia a la cual pertenece la dirección contenida en el elemento dirección.
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
     * @param string $delegacion_municipio Reportar la delegación o municipio a la cual pertenece la dirección contenida en el elemento Dirección.
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
     * @param string $ciudad Reportar la ciudad a la cual pertenece la dirección contenida en el elemento Dirección.
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
     * @param string $cp El código postal reportado debe estar compuesto por 5 dígitos. Para que el código postal sea válido deberá corresponder al estado reportado.
     *
     * @return $this
     */
    public function setCp($cp)
    {
        $this->container['cp'] = $cp;

        return $this;
    }

    /**
     * Gets estado_extranjero
     *
     * @return string
     */
    public function getEstadoExtranjero()
    {
        return $this->container['estado_extranjero'];
    }

    /**
     * Sets estado_extranjero
     *
     * @param string $estado_extranjero Debe de reportarse la fecha desde cuando el consumidor vive en la  dirección reportada.
     *
     * @return $this
     */
    public function setEstadoExtranjero($estado_extranjero)
    {
        $this->container['estado_extranjero'] = $estado_extranjero;

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
