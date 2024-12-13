<?php

namespace RCCPMV2\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RCCPMV2\Simulacion\MX\Client\ObjectSerializer;

/**
 * CatalogoClavesObservacion Class Doc Comment
 *
 * @category Class
 * @description &lt;table&gt; &lt;thead&gt;&lt;tr&gt;&lt;th&gt;Clave&lt;/th&gt;&lt;th&gt;Descripción&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt; &lt;tr&gt;&lt;td&gt;AD&lt;/td&gt;&lt;td&gt;Cuenta en disputa&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;CA&lt;/td&gt;&lt;td&gt;Cartera al corriente vencida&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;CC&lt;/td&gt;&lt;td&gt;Cerrada por el Consumidor&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;CI&lt;/td&gt;&lt;td&gt;Cancelada por inactividad&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;CL&lt;/td&gt;&lt;td&gt;Cuenta en Cobranza pagada totalmente&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;CM&lt;/td&gt;&lt;td&gt;Cancelada por el otorgante&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;CR&lt;/td&gt;&lt;td&gt;Dación en renta&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;CV&lt;/td&gt;&lt;td&gt;Cartera vencida vendida&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;CZ&lt;/td&gt;&lt;td&gt;Cancelada con Saldo Cero&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;DP&lt;/td&gt;&lt;td&gt;Pagos diferidos&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;DR&lt;/td&gt;&lt;td&gt;Disputa resuelta, Consumidor inconforme&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;FD&lt;/td&gt;&lt;td&gt;Cuenta fraudulenta&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;FN&lt;/td&gt;&lt;td&gt;Cuenta fraudulenta no atribuible al Consumidor&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;FP&lt;/td&gt;&lt;td&gt;Cancelación de adjudicación de inmueble por pago&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;FR&lt;/td&gt;&lt;td&gt;Adjudicación de inmueble en proceso&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;IA&lt;/td&gt;&lt;td&gt;Cuenta inactiva&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;IR&lt;/td&gt;&lt;td&gt;Adjudicación involuntaria&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;LC&lt;/td&gt;&lt;td&gt;Acuerdo por importe menor promovido por el Consumidor&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;LG&lt;/td&gt;&lt;td&gt;Acuerdo por importe menor promovido por el Otorgante&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;LS&lt;/td&gt;&lt;td&gt;Tarjeta de crédito extraviada o robada&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;MD&lt;/td&gt;&lt;td&gt;Pago parcial efectuado a cuenta irrecuperable&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;PC&lt;/td&gt;&lt;td&gt;Enviado a despacho de Cobranza&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;PD&lt;/td&gt;&lt;td&gt;Adjudicación cancelada por pago&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;PL&lt;/td&gt;&lt;td&gt;Límite excedido&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;PS&lt;/td&gt;&lt;td&gt;Suspensión de Pago&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;RC&lt;/td&gt;&lt;td&gt;Cuenta al corriente reestructurada&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;RE&lt;/td&gt;&lt;td&gt;Cuenta reestructurada pagada totalmente&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;RF&lt;/td&gt;&lt;td&gt;Refinanciada&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;RR&lt;/td&gt;&lt;td&gt;Restitución del bien&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;RV&lt;/td&gt;&lt;td&gt;Cuenta vencida reestructurada&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;SC&lt;/td&gt;&lt;td&gt;Demanda resuelta en favor del consumidor&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;SG&lt;/td&gt;&lt;td&gt;Demanda por el Otorgante&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;SL&lt;/td&gt;&lt;td&gt;Préstamo para estudiante&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;SP&lt;/td&gt;&lt;td&gt;Demanda resuelta a favor del Otorgante&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;SU&lt;/td&gt;&lt;td&gt;Demanda por el Consumidor&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;TC&lt;/td&gt;&lt;td&gt;Sustitución de Deudor&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;TL&lt;/td&gt;&lt;td&gt;Transferencia a nuevo otorgante&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;TR&lt;/td&gt;&lt;td&gt;Transferida a otra área&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;UP&lt;/td&gt;&lt;td&gt;Cuenta irrecuperable&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;VR&lt;/td&gt;&lt;td&gt;Dación en pago&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;NA&lt;/td&gt;&lt;td&gt;Cuenta al corriente vendida a un No Usuario de Buró de Crédito&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;NV&lt;/td&gt;&lt;td&gt;Cuenta vencida vendida a un No Usuario de Buró de Crédito&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;RA&lt;/td&gt;&lt;td&gt;Cuenta al corriente reestructurada por programa institucional&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;RO&lt;/td&gt;&lt;td&gt;Cuenta vencida reestructurada por programa institucional&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;RQ&lt;/td&gt;&lt;td&gt;Cuenta vencida reestructurada con Quita&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;CP&lt;/td&gt;&lt;td&gt;Cartera Vendida (Clave Inhabilitada, la sustituye CA y CV)&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;ST&lt;/td&gt;&lt;td&gt;Acuerdo por importe menor. (Inhabilitada sustituida LC y LG)&lt;/td&gt;&lt;/tr&gt; &lt;tr&gt;&lt;td&gt;CD&lt;/td&gt;&lt;td&gt;Compre Ahora pague Después&lt;/td&gt;&lt;/tr&gt; &lt;/table&gt;
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogoClavesObservacion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CatalogoClavesObservacion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
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
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
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
