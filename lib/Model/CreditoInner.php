<?php
/**
 * CreditoInner
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
 * CreditoInner Class Doc Comment
 *
 * @category Class
 * @description El elemento de crédito contiene el comportamiento actual e histórico del crédito del consumidor, este elemento se repite dependiendo del número de cuentas del consumidor.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditoInner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'credito_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rfc' => 'string',
        'nombre_otorgante' => 'string',
        'contrato' => 'string',
        'saldo_inicial' => 'int',
        'saldo_total' => 'int',
        'moneda' => 'string',
        'fecha_apertura' => 'string',
        'plazo' => 'int',
        'claves_observacion' => 'string',
        'tipo_credito' => 'string',
        'vigente' => 'int',
        '_29dias' => 'int',
        '_59dias' => 'float',
        '_89dias' => 'int',
        '_119dias' => 'float',
        '_179dias' => 'int',
        '_180_mas_dias' => 'int',
        'actualizacion' => 'string',
        'fecha_cierre' => 'string',
        'pago_efectivo' => 'int',
        'quita' => 'int',
        'dacion_pago' => 'int',
        'quebranto_castigo' => 'int',
        'historia' => 'string',
        'atraso_mayor' => 'int',
        'registro_impugnado' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rfc' => null,
        'nombre_otorgante' => null,
        'contrato' => null,
        'saldo_inicial' => null,
        'saldo_total' => null,
        'moneda' => null,
        'fecha_apertura' => 'yyyy-MM-dd',
        'plazo' => null,
        'claves_observacion' => null,
        'tipo_credito' => null,
        'vigente' => null,
        '_29dias' => 'int32',
        '_59dias' => 'float',
        '_89dias' => 'int32',
        '_119dias' => 'float',
        '_179dias' => 'int32',
        '_180_mas_dias' => 'int32',
        'actualizacion' => 'yyyy-MM',
        'fecha_cierre' => 'yyyy-MM-dd',
        'pago_efectivo' => null,
        'quita' => null,
        'dacion_pago' => null,
        'quebranto_castigo' => null,
        'historia' => null,
        'atraso_mayor' => null,
        'registro_impugnado' => null
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
        'rfc' => 'RFC',
        'nombre_otorgante' => 'nombreOtorgante',
        'contrato' => 'contrato',
        'saldo_inicial' => 'saldoInicial',
        'saldo_total' => 'saldoTotal',
        'moneda' => 'moneda',
        'fecha_apertura' => 'fechaApertura',
        'plazo' => 'plazo',
        'claves_observacion' => 'clavesObservacion',
        'tipo_credito' => 'tipoCredito',
        'vigente' => 'vigente',
        '_29dias' => '29dias',
        '_59dias' => '59dias',
        '_89dias' => '89dias',
        '_119dias' => '119dias',
        '_179dias' => '179dias',
        '_180_mas_dias' => '180MasDias',
        'actualizacion' => 'actualizacion',
        'fecha_cierre' => 'fechaCierre',
        'pago_efectivo' => 'pagoEfectivo',
        'quita' => 'quita',
        'dacion_pago' => 'dacionPago',
        'quebranto_castigo' => 'quebrantoCastigo',
        'historia' => 'historia',
        'atraso_mayor' => 'atrasoMayor',
        'registro_impugnado' => 'registroImpugnado'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rfc' => 'setRfc',
        'nombre_otorgante' => 'setNombreOtorgante',
        'contrato' => 'setContrato',
        'saldo_inicial' => 'setSaldoInicial',
        'saldo_total' => 'setSaldoTotal',
        'moneda' => 'setMoneda',
        'fecha_apertura' => 'setFechaApertura',
        'plazo' => 'setPlazo',
        'claves_observacion' => 'setClavesObservacion',
        'tipo_credito' => 'setTipoCredito',
        'vigente' => 'setVigente',
        '_29dias' => 'set29dias',
        '_59dias' => 'set59dias',
        '_89dias' => 'set89dias',
        '_119dias' => 'set119dias',
        '_179dias' => 'set179dias',
        '_180_mas_dias' => 'set180MasDias',
        'actualizacion' => 'setActualizacion',
        'fecha_cierre' => 'setFechaCierre',
        'pago_efectivo' => 'setPagoEfectivo',
        'quita' => 'setQuita',
        'dacion_pago' => 'setDacionPago',
        'quebranto_castigo' => 'setQuebrantoCastigo',
        'historia' => 'setHistoria',
        'atraso_mayor' => 'setAtrasoMayor',
        'registro_impugnado' => 'setRegistroImpugnado'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rfc' => 'getRfc',
        'nombre_otorgante' => 'getNombreOtorgante',
        'contrato' => 'getContrato',
        'saldo_inicial' => 'getSaldoInicial',
        'saldo_total' => 'getSaldoTotal',
        'moneda' => 'getMoneda',
        'fecha_apertura' => 'getFechaApertura',
        'plazo' => 'getPlazo',
        'claves_observacion' => 'getClavesObservacion',
        'tipo_credito' => 'getTipoCredito',
        'vigente' => 'getVigente',
        '_29dias' => 'get29dias',
        '_59dias' => 'get59dias',
        '_89dias' => 'get89dias',
        '_119dias' => 'get119dias',
        '_179dias' => 'get179dias',
        '_180_mas_dias' => 'get180MasDias',
        'actualizacion' => 'getActualizacion',
        'fecha_cierre' => 'getFechaCierre',
        'pago_efectivo' => 'getPagoEfectivo',
        'quita' => 'getQuita',
        'dacion_pago' => 'getDacionPago',
        'quebranto_castigo' => 'getQuebrantoCastigo',
        'historia' => 'getHistoria',
        'atraso_mayor' => 'getAtrasoMayor',
        'registro_impugnado' => 'getRegistroImpugnado'
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
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['nombre_otorgante'] = isset($data['nombre_otorgante']) ? $data['nombre_otorgante'] : null;
        $this->container['contrato'] = isset($data['contrato']) ? $data['contrato'] : null;
        $this->container['saldo_inicial'] = isset($data['saldo_inicial']) ? $data['saldo_inicial'] : null;
        $this->container['saldo_total'] = isset($data['saldo_total']) ? $data['saldo_total'] : null;
        $this->container['moneda'] = isset($data['moneda']) ? $data['moneda'] : null;
        $this->container['fecha_apertura'] = isset($data['fecha_apertura']) ? $data['fecha_apertura'] : null;
        $this->container['plazo'] = isset($data['plazo']) ? $data['plazo'] : null;
        $this->container['claves_observacion'] = isset($data['claves_observacion']) ? $data['claves_observacion'] : null;
        $this->container['tipo_credito'] = isset($data['tipo_credito']) ? $data['tipo_credito'] : null;
        $this->container['vigente'] = isset($data['vigente']) ? $data['vigente'] : null;
        $this->container['_29dias'] = isset($data['_29dias']) ? $data['_29dias'] : null;
        $this->container['_59dias'] = isset($data['_59dias']) ? $data['_59dias'] : null;
        $this->container['_89dias'] = isset($data['_89dias']) ? $data['_89dias'] : null;
        $this->container['_119dias'] = isset($data['_119dias']) ? $data['_119dias'] : null;
        $this->container['_179dias'] = isset($data['_179dias']) ? $data['_179dias'] : null;
        $this->container['_180_mas_dias'] = isset($data['_180_mas_dias']) ? $data['_180_mas_dias'] : null;
        $this->container['actualizacion'] = isset($data['actualizacion']) ? $data['actualizacion'] : null;
        $this->container['fecha_cierre'] = isset($data['fecha_cierre']) ? $data['fecha_cierre'] : null;
        $this->container['pago_efectivo'] = isset($data['pago_efectivo']) ? $data['pago_efectivo'] : null;
        $this->container['quita'] = isset($data['quita']) ? $data['quita'] : null;
        $this->container['dacion_pago'] = isset($data['dacion_pago']) ? $data['dacion_pago'] : null;
        $this->container['quebranto_castigo'] = isset($data['quebranto_castigo']) ? $data['quebranto_castigo'] : null;
        $this->container['historia'] = isset($data['historia']) ? $data['historia'] : null;
        $this->container['atraso_mayor'] = isset($data['atraso_mayor']) ? $data['atraso_mayor'] : null;
        $this->container['registro_impugnado'] = isset($data['registro_impugnado']) ? $data['registro_impugnado'] : null;
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
     * @param string $rfc rfc
     *
     * @return $this
     */
    public function setRfc($rfc)
    {
        $this->container['rfc'] = $rfc;

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
     * Gets contrato
     *
     * @return int
     */
    public function getContrato()
    {
        return $this->container['contrato'];
    }

    /**
     * Sets contrato
     *
     * @param int $contrato Número de contrato.
     *
     * @return $this
     */
    public function setContrato($contrato)
    {
        $this->container['contrato'] = $contrato;

        return $this;
    }

    /**
     * Gets saldo_inicial
     *
     * @return int
     */
    public function getSaldoInicial()
    {
        return $this->container['saldo_inicial'];
    }

    /**
     * Sets saldo_inicial
     *
     * @param int $saldo_inicial Saldo inicial del crédito.
     *
     * @return $this
     */
    public function setSaldoInicial($saldo_inicial)
    {
        $this->container['saldo_inicial'] = $saldo_inicial;

        return $this;
    }

    /**
     * Gets saldo_total
     *
     * @return int
     */
    public function getSaldoTotal()
    {
        return $this->container['saldo_total'];
    }

    /**
     * Sets saldo_total
     *
     * @param int $saldo_total Saldo total del crédito.
     *
     * @return $this
     */
    public function setSaldoTotal($saldo_total)
    {
        $this->container['saldo_total'] = $saldo_total;

        return $this;
    }

    /**
     * Gets moneda
     *
     * @return \Swagger\Client\Model\CatalogoMoneda
     */
    public function getMoneda()
    {
        return $this->container['moneda'];
    }

    /**
     * Sets moneda
     *
     * @param \Swagger\Client\Model\CatalogoMoneda $moneda moneda
     *
     * @return $this
     */
    public function setMoneda($moneda)
    {
        $this->container['moneda'] = $moneda;

        return $this;
    }

    /**
     * Gets fecha_apertura
     *
     * @return string
     */
    public function getFechaApertura()
    {
        return $this->container['fecha_apertura'];
    }

    /**
     * Sets fecha_apertura
     *
     * @param string $fecha_apertura Fecha de apertura del crédito, en el formato especificado (por defecto yyyy-MM-dd).
     *
     * @return $this
     */
    public function setFechaApertura($fecha_apertura)
    {
        $this->container['fecha_apertura'] = $fecha_apertura;

        return $this;
    }

    /**
     * Gets plazo
     *
     * @return int
     */
    public function getPlazo()
    {
        return $this->container['plazo'];
    }

    /**
     * Sets plazo
     *
     * @param int $plazo Término en el que se pactó el crédito. Deberá reportarse en días.
     *
     * @return $this
     */
    public function setPlazo($plazo)
    {
        $this->container['plazo'] = $plazo;

        return $this;
    }

    /**
     * Gets claves_observacion
     *
     * @return \Swagger\Client\Model\CatalogoClavesObservacion
     */
    public function getClavesObservacion()
    {
        return $this->container['claves_observacion'];
    }

    /**
     * Sets claves_observacion
     *
     * @param \Swagger\Client\Model\CatalogoClavesObservacion $claves_observacion claves_observacion
     *
     * @return $this
     */
    public function setClavesObservacion($claves_observacion)
    {
        $this->container['claves_observacion'] = $claves_observacion;

        return $this;
    }

    /**
     * Gets tipo_credito
     *
     * @return \Swagger\Client\Model\CatalogoTiposDeCredito
     */
    public function getTipoCredito()
    {
        return $this->container['tipo_credito'];
    }

    /**
     * Sets tipo_credito
     *
     * @param \Swagger\Client\Model\CatalogoTiposDeCredito $tipo_credito tipo_credito
     *
     * @return $this
     */
    public function setTipoCredito($tipo_credito)
    {
        $this->container['tipo_credito'] = $tipo_credito;

        return $this;
    }

    /**
     * Gets vigente
     *
     * @return int
     */
    public function getVigente()
    {
        return $this->container['vigente'];
    }

    /**
     * Sets vigente
     *
     * @param int $vigente Monto Vigente. Sólo con créditos abiertos.
     *
     * @return $this
     */
    public function setVigente($vigente)
    {
        $this->container['vigente'] = $vigente;

        return $this;
    }

    /**
     * Gets _29dias
     *
     * @return int
     */
    public function get29dias()
    {
        return $this->container['_29dias'];
    }

    /**
     * Sets _29dias
     *
     * @param int $_29dias Vencido de 1 a 29 días. Sólo con créditos abiertos.
     *
     * @return $this
     */
    public function set29dias($_29dias)
    {
        $this->container['_29dias'] = $_29dias;

        return $this;
    }

    /**
     * Gets _59dias
     *
     * @return float
     */
    public function get59dias()
    {
        return $this->container['_59dias'];
    }

    /**
     * Sets _59dias
     *
     * @param float $_59dias Vencido de 30 a 59 días. Sólo con créditos abiertos.
     *
     * @return $this
     */
    public function set59dias($_59dias)
    {
        $this->container['_59dias'] = $_59dias;

        return $this;
    }

    /**
     * Gets _89dias
     *
     * @return int
     */
    public function get89dias()
    {
        return $this->container['_89dias'];
    }

    /**
     * Sets _89dias
     *
     * @param int $_89dias Vencido de 60 a 89 días. Sólo con créditos abiertos.
     *
     * @return $this
     */
    public function set89dias($_89dias)
    {
        $this->container['_89dias'] = $_89dias;

        return $this;
    }

    /**
     * Gets _119dias
     *
     * @return float
     */
    public function get119dias()
    {
        return $this->container['_119dias'];
    }

    /**
     * Sets _119dias
     *
     * @param float $_119dias Vencido de 90 a 119 días. Sólo con créditos abiertos.
     *
     * @return $this
     */
    public function set119dias($_119dias)
    {
        $this->container['_119dias'] = $_119dias;

        return $this;
    }

    /**
     * Gets _179dias
     *
     * @return int
     */
    public function get179dias()
    {
        return $this->container['_179dias'];
    }

    /**
     * Sets _179dias
     *
     * @param int $_179dias Vencido de 120 a 179 días. Sólo con créditos abiertos.
     *
     * @return $this
     */
    public function set179dias($_179dias)
    {
        $this->container['_179dias'] = $_179dias;

        return $this;
    }

    /**
     * Gets _180_mas_dias
     *
     * @return int
     */
    public function get180MasDias()
    {
        return $this->container['_180_mas_dias'];
    }

    /**
     * Sets _180_mas_dias
     *
     * @param int $_180_mas_dias Vencido 180 días a más. Sólo con créditos abiertos.
     *
     * @return $this
     */
    public function set180MasDias($_180_mas_dias)
    {
        $this->container['_180_mas_dias'] = $_180_mas_dias;

        return $this;
    }

    /**
     * Gets actualizacion
     *
     * @return string
     */
    public function getActualizacion()
    {
        return $this->container['actualizacion'];
    }

    /**
     * Sets actualizacion
     *
     * @param string $actualizacion Último periodo de actualización (sólo con créditos abiertos), en el formato especificado (por defecto yyyy-MM).
     *
     * @return $this
     */
    public function setActualizacion($actualizacion)
    {
        $this->container['actualizacion'] = $actualizacion;

        return $this;
    }

    /**
     * Gets fecha_cierre
     *
     * @return string
     */
    public function getFechaCierre()
    {
        return $this->container['fecha_cierre'];
    }

    /**
     * Sets fecha_cierre
     *
     * @param string $fecha_cierre Fecha de cierre del crédito (sólo con créditos cerrados), en el formato especificado (por defecto yyyy-MM-dd).
     *
     * @return $this
     */
    public function setFechaCierre($fecha_cierre)
    {
        $this->container['fecha_cierre'] = $fecha_cierre;

        return $this;
    }

    /**
     * Gets pago_efectivo
     *
     * @return int
     */
    public function getPagoEfectivo()
    {
        return $this->container['pago_efectivo'];
    }

    /**
     * Sets pago_efectivo
     *
     * @param int $pago_efectivo Pago efectuado al cierre del crédito. Sólo con créditos cerrados.
     *
     * @return $this
     */
    public function setPagoEfectivo($pago_efectivo)
    {
        $this->container['pago_efectivo'] = $pago_efectivo;

        return $this;
    }

    /**
     * Gets quita
     *
     * @return int
     */
    public function getQuita()
    {
        return $this->container['quita'];
    }

    /**
     * Sets quita
     *
     * @param int $quita Monto de la quita. Solo con créditos cerrados.
     *
     * @return $this
     */
    public function setQuita($quita)
    {
        $this->container['quita'] = $quita;

        return $this;
    }

    /**
     * Gets dacion_pago
     *
     * @return int
     */
    public function getDacionPago()
    {
        return $this->container['dacion_pago'];
    }

    /**
     * Sets dacion_pago
     *
     * @param int $dacion_pago Monto de la dación. Solo con créditos cerrados.
     *
     * @return $this
     */
    public function setDacionPago($dacion_pago)
    {
        $this->container['dacion_pago'] = $dacion_pago;

        return $this;
    }

    /**
     * Gets quebranto_castigo
     *
     * @return int
     */
    public function getQuebrantoCastigo()
    {
        return $this->container['quebranto_castigo'];
    }

    /**
     * Sets quebranto_castigo
     *
     * @param int $quebranto_castigo Monto del quebranto efectuado. Solo con créditos cerrados.
     *
     * @return $this
     */
    public function setQuebrantoCastigo($quebranto_castigo)
    {
        $this->container['quebranto_castigo'] = $quebranto_castigo;

        return $this;
    }

    /**
     * Gets historia
     *
     * @return string
     */
    public function getHistoria()
    {
        return $this->container['historia'];
    }

    /**
     * Sets historia
     *
     * @param string $historia Patrón histórico de pagos
     *
     * @return $this
     */
    public function setHistoria($historia)
    {
        $this->container['historia'] = $historia;

        return $this;
    }

    /**
     * Gets atraso_mayor
     *
     * @return int
     */
    public function getAtrasoMayor()
    {
        return $this->container['atraso_mayor'];
    }

    /**
     * Sets atraso_mayor
     *
     * @param int $atraso_mayor Muestra la cantidad exacta de días de atraso cuando se reportan montos con vencimiento.
     *
     * @return $this
     */
    public function setAtrasoMayor($atraso_mayor)
    {
        $this->container['atraso_mayor'] = $atraso_mayor;

        return $this;
    }

    /**
     * Gets registro_impugnado
     *
     * @return string
     */
    public function getRegistroImpugnado()
    {
        return $this->container['registro_impugnado'];
    }

    /**
     * Sets registro_impugnado
     *
     * @param string $registro_impugnado Si contiene RI, el registro está impugnado.
     *
     * @return $this
     */
    public function setRegistroImpugnado($registro_impugnado)
    {
        $this->container['registro_impugnado'] = $registro_impugnado;

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
