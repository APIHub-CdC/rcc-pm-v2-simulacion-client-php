# rcc-pm-v2-pld-simulacion-client-php

Esta API simula el Reporte de Crédito Consolidado de Persona Moral v2.

## Requisitos

PHP 7.4 ó superior

### Dependencias adicionales
- Se debe contar con las siguientes dependencias de PHP:
    - ext-curl
    - ext-mbstring
- En caso de no ser así, para linux use los siguientes comandos

```sh
#ejemplo con php en versión 7.3 para otra versión colocar php{version}-curl
apt-get install php7.4-curl
apt-get install php7.4-mbstring
```
- Composer [vea como instalar][1]

## Instalación

Ejecutar: `composer install`

## Guía de inicio

### Paso 1. Agregar el producto a la aplicación

Al iniciar sesión seguir los siguientes pasos:

 1. Dar clic en la sección "**Mis aplicaciones**".
 2. Seleccionar la aplicación.
 3. Ir a la pestaña de "**Editar '@tuApp**' ".
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/edit_applications.jpg" width="900">
    </p>
 4. Al abrirse la ventana emergente, seleccionar el producto.
 5. Dar clic en el botón "**Guardar App**":
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/selected_product.jpg" width="400">
    </p>

### Paso 2. Capturar los datos de la petición

Los siguientes datos a modificar se encuentran en **test/Api/ApiTest.php**

Es importante contar con el setUp() que se encargará de inicializar la petición. Por tanto, se debe modificar la URL (**the_url**) y la API KEY (**your_x_api_key**), como se muestra en el siguiente fragmento de código:

```php
public function setUp(): void
{
    $config = new Configuration();
    $config->setHost('the_url');
    $client = new Client();
    $this->apiInstance = new Instance($client, $config);
    $this->x_api_key = "your_x_api_key";
}
```

Para la petición se deberá modificar el siguiente fragmento de código con los datos correspondientes:

> **NOTA:** Para más ejemplos de simulación, consulte la colección de Postman.

```php
/**
* Este método será ejecutado en la prueba ubicado en path/to/repository/test/Api/ApiTest.php
*/
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
```

## Pruebas unitarias

Para ejecutar las pruebas unitarias:

```sh
./vendor/bin/phpunit
```

---
[CONDICIONES DE USO, REPRODUCCIÓN Y DISTRIBUCIÓN](https://github.com/APIHub-CdC/licencias-cdc)

[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos