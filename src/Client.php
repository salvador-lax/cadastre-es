<?php

namespace SalvadorLax\CadastreEs;

use GuzzleHttp\Client as GuzzleClient;

class Client {
    private $httpClient;

    public function __construct() {
        $this->httpClient = new GuzzleClient(
            [
                'base_uri' => 'http://ovc.catastro.meh.es/ovcservweb/OVCSWLocalizacionRC/OVCCallejero.asmx'               
            ]
        );
    }
}