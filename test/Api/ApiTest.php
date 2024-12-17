<?php

namespace RCCPMV2\Simulacion\MX\Client;


use \GuzzleHttp\Client;

use RCCPMV2\Simulacion\MX\Client\ApiException;
use RCCPMV2\Simulacion\MX\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;
use RCCPMV2\Simulacion\MX\Client\Api\ReporteDeCrditoConsolidadoDePersonasMoralesV2Api as Instance;
use RCCPMV2\Simulacion\MX\Client\Model\RequestRCCV2;
use RCCPMV2\Simulacion\MX\Client\Model\Persona;
use RCCPMV2\Simulacion\MX\Client\Model\RequestDomicilio;
use RCCPMV2\Simulacion\MX\Client\Model\CatalogoEstados;
use RCCPMV2\Simulacion\MX\Client\Model\CatalogoPaisNacionalidad;
class ApiTest extends TestCase
{

    public function setUp(): void
    {
        $config = new Configuration();
        $config->setHost('the_url');
        $client = new Client();
        $this->apiInstance = new Instance($client, $config);
        $this->x_api_key = "your_x_api_key";
    }

    public function testV2rccPm()
    {   
        $estado = new CatalogoEstados();
        $pais = new CatalogoPaisNacionalidad();
        $request = new RequestRCCV2();
        $request->setFolioOtorgante("0125");
        $persona = new Persona();
        $persona->setRfc("ZSC990824DU9");
        $persona->setNombre("ZAPATITOS SA DE CV");
        $domicilio = new RequestDomicilio();
        $domicilio->setDireccion("IA LACTEA 164");
        $domicilio->setCp("03100");
        $domicilio->setColoniaPoblacion("DESARROLLO URBANO TRES RIOS");
        $domicilio->setDelegacionMunicipio("IZTACALCO");
        $domicilio->setCiudad("CIUDAD DE MEXICO");
        $domicilio->setEstado($estado::SIN);
        $domicilio->setPais($pais::MX);
        $persona->setDomicilio($domicilio);
        $request->setPersona($persona);

        print_r($request);

        try {
            $result = $this->apiInstance->v2rccPm($request, $this->x_api_key);
            print($result);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->testGetReporte: ', $e->getMessage(), PHP_EOL;
        }
    }
}
