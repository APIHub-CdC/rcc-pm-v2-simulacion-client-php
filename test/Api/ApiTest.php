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
        $request->setFolioOtorgante("3930");
        $persona = new Persona();
        $persona->setRfc("VJS231120T20");
        $persona->setNombre("VIVERO LA JIRAFA SPR DE RL");
        $domicilio = new RequestDomicilio();
        $domicilio->setDireccion("MOTOLINIA 47");
        $domicilio->setCp("49900");
        $domicilio->setColoniaPoblacion("CENTRO");
        $domicilio->setDelegacionMunicipio("TECALITLAN");
        $domicilio->setCiudad("TECALITLAN");
        $domicilio->setEstado($estado::JAL);
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
