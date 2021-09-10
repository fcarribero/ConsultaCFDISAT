<?php

require_once '../vendor/autoload.php';

use Webneex\ConsultaCFDISAT\ConsultaCFDISAT;

$resultado = ConsultaCFDISAT::ConsultaCfdiProduccion('1F02AFC8-ADB4-4C3D-A9F8-422D4778E880', 'FDV940316UR8', 'IAE060118A50', 67277);

echo "isVigente: " . json_encode($resultado->isVigente()) . "\n";
echo "isCancelable: " . json_encode($resultado->isCancelable()) . "\n";

echo "JSON: \n" . json_encode($resultado, JSON_PRETTY_PRINT)."\n";