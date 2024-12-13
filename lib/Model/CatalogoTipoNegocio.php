<?php
/**
 * CatalogoTipoNegocio
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
use \RCCPMV2\Simulacion\MX\Client\ObjectSerializer;

/**
 * CatalogoTipoNegocio Class Doc Comment
 *
 * @category Class
 * @description Lista de objetos con tipo de negocio.&lt;/table&gt;&lt;table&gt;&lt;thead&gt;&lt;tr&gt;&lt;th&gt;Id&lt;/th&gt;&lt;th&gt;Descripcion&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td&gt;001&lt;/td&gt;&lt;td&gt;ADMINISTRADORAS DE CARTERA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;002&lt;/td&gt;&lt;td&gt;ALMACENES DE DEPOSITO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;003&lt;/td&gt;&lt;td&gt;ARRENDADORAS FINANCIERAS&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;004&lt;/td&gt;&lt;td&gt;ARRENDADORAS NO FINANCIERAS&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;005&lt;/td&gt;&lt;td&gt;ATENCION AL CONSUMIDOR&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;006&lt;/td&gt;&lt;td&gt;AUTOMOTRIZ&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;007&lt;/td&gt;&lt;td&gt;AUTORIDADES&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;008&lt;/td&gt;&lt;td&gt;BANCOS&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;009&lt;/td&gt;&lt;td&gt;BIENES RAICES&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;010&lt;/td&gt;&lt;td&gt;CAJAS DE AHORRO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;011&lt;/td&gt;&lt;td&gt;CAMARAS Y ASOCIACIONES&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;012&lt;/td&gt;&lt;td&gt;CASA DE BOLSA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;013&lt;/td&gt;&lt;td&gt;CASA DE CAMBIO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;014&lt;/td&gt;&lt;td&gt;CIRCULO DE CREDITO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;015&lt;/td&gt;&lt;td&gt;COMPAÑIA DE FINANCIAMIENTO AUTOMOTRIZ&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;016&lt;/td&gt;&lt;td&gt;COMPAÑIA DE PRESTAMO PERSONAL&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;017&lt;/td&gt;&lt;td&gt;COMUNICACIONES&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;018&lt;/td&gt;&lt;td&gt;EDITORIAL&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;019&lt;/td&gt;&lt;td&gt;FACTORAJE&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;020&lt;/td&gt;&lt;td&gt;FONDOS Y FIDEICOMISOS&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;021&lt;/td&gt;&lt;td&gt;GOBIERNO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;022&lt;/td&gt;&lt;td&gt;HIPOTECARIO NO BANCARIO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;023&lt;/td&gt;&lt;td&gt;MERCANCIA PARA HOGAR Y OFICINA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;024&lt;/td&gt;&lt;td&gt;MERCANCIA PARA LA CONSTRUCCION&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;025&lt;/td&gt;&lt;td&gt;MONITOREO DE CREDITO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;026&lt;/td&gt;&lt;td&gt;SALUD Y SERVICIOS MEDICOS&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;027&lt;/td&gt;&lt;td&gt;SEGUROS Y FIANZAS&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;028&lt;/td&gt;&lt;td&gt;SERVICIOS&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;029&lt;/td&gt;&lt;td&gt;SOFOL AUTOMOTRIZ&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;030&lt;/td&gt;&lt;td&gt;SOFOL HIPOTECARIA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;031&lt;/td&gt;&lt;td&gt;SOFOL PRESTAMO PERSONAL&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;032&lt;/td&gt;&lt;td&gt;TIENDA DE AUTOSERVICIO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;033&lt;/td&gt;&lt;td&gt;TIENDA DE ROPA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;051&lt;/td&gt;&lt;td&gt;INSUMOS&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;035&lt;/td&gt;&lt;td&gt;UNION DE CREDITO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;036&lt;/td&gt;&lt;td&gt;VENTA POR CORREO / TELEFONO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;038&lt;/td&gt;&lt;td&gt;PRUEBA DE CONSULTAS&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;039&lt;/td&gt;&lt;td&gt;CASA DE EMPEÑO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;040&lt;/td&gt;&lt;td&gt;COOPERATIVA DE AHORRO Y CREDITO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;041&lt;/td&gt;&lt;td&gt;TELEFONÍA CELULAR&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;042&lt;/td&gt;&lt;td&gt;SERVICIO DE TELEVISION DE PAGA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;043&lt;/td&gt;&lt;td&gt;AUTOFINANCIAMIENTO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;044&lt;/td&gt;&lt;td&gt;TELEFONIA LOCAL Y DE LARGA DISTANCIA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;045&lt;/td&gt;&lt;td&gt;MICROFINANCIERA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;046&lt;/td&gt;&lt;td&gt;SOCIEDADES FINANCIERAS POPULARES&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;047&lt;/td&gt;&lt;td&gt;SOFOL EMPRESARIAL&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;034&lt;/td&gt;&lt;td&gt;TIENDA DEPARTAMENTAL&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;050&lt;/td&gt;&lt;td&gt;SIC&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;048&lt;/td&gt;&lt;td&gt;VENTA POR CATALOGO&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;049&lt;/td&gt;&lt;td&gt;SOCIEDAD FINANCIERA DE OBJETO MULTIPLE&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;054&lt;/td&gt;&lt;td&gt;EDUCACIÓN&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;056&lt;/td&gt;&lt;td&gt;EMPRESA PETROLERA&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;057&lt;/td&gt;&lt;td&gt;SERVICIOS FIDUCIARIOS&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;052&lt;/td&gt;&lt;td&gt;SOCIEDAD FINANCIERA COMUNITARIA&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogoTipoNegocio
{
    /**
     * Possible values of this enum
     */
    const _01 = '01';
    const _02 = '02';
    const _03 = '03';
    const _04 = '04';
    const _05 = '05';
    const _06 = '06';
    const _07 = '07';
    const _08 = '08';
    const _09 = '09';
    const _010 = '010';
    const _011 = '011';
    const _012 = '012';
    const _013 = '013';
    const _014 = '014';
    const _015 = '015';
    const _016 = '016';
    const _017 = '017';
    const _018 = '018';
    const _019 = '019';
    const _020 = '020';
    const _021 = '021';
    const _022 = '022';
    const _023 = '023';
    const _024 = '024';
    const _025 = '025';
    const _026 = '026';
    const _027 = '027';
    const _028 = '028';
    const _029 = '029';
    const _030 = '030';
    const _031 = '031';
    const _032 = '032';
    const _033 = '033';
    const _051 = '051';
    const _035 = '035';
    const _036 = '036';
    const _038 = '038';
    const _039 = '039';
    const _040 = '040';
    const _041 = '041';
    const _042 = '042';
    const _043 = '043';
    const _044 = '044';
    const _045 = '045';
    const _046 = '046';
    const _047 = '047';
    const _034 = '034';
    const _050 = '050';
    const _048 = '048';
    const _049 = '049';
    const _054 = '054';
    const _056 = '056';
    const _057 = '057';
    const _052 = '052';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_01
            self::_02
            self::_03
            self::_04
            self::_05
            self::_06
            self::_07
            self::_08
            self::_09
            self::_010
            self::_011
            self::_012
            self::_013
            self::_014
            self::_015
            self::_016
            self::_017
            self::_018
            self::_019
            self::_020
            self::_021
            self::_022
            self::_023
            self::_024
            self::_025
            self::_026
            self::_027
            self::_028
            self::_029
            self::_030
            self::_031
            self::_032
            self::_033
            self::_051
            self::_035
            self::_036
            self::_038
            self::_039
            self::_040
            self::_041
            self::_042
            self::_043
            self::_044
            self::_045
            self::_046
            self::_047
            self::_034
            self::_050
            self::_048
            self::_049
            self::_054
            self::_056
            self::_057
            self::_052
        ];
    }
}