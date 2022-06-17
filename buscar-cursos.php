#!/usr/bin/env php
<?php

use Davi\BuscadorCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

require __DIR__.'/vendor/autoload.php';
$client = new Client(['base_uri' => 'https://www.alura.com.br']);
$crawler =  new Crawler();


$buscador = new Buscador($client,$crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso){
    echo $curso .PHP_EOL;
}