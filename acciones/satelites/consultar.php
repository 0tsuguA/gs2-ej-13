<?php

header('Content-Type: application/json');
require_once 'response/consultarResponse.php';
require_once '../../modelo/operador.php';
require_once '../../modelo/satelite.php';

$o = new Operador();
$o->Nombre = 'ARSAT';
$o->TipoEmpresa = 'Publica';
$o->FormaLegal = 'Sociedad anónima';

$s = new Satelite();
$s->Id = $_GET['Id'] ;
$s->Nombre = 'Arsat-1';
$s->Operador = $o;
$s->TipoMision = 'comunicaciones';
$s->DuracionEnAnios = '15';

$cr = new ConsultarResponse();
$cr->Satelite = $s;

echo json_encode($cr);
