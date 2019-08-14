<?php defined('BASEPATH') OR exit('No direct script access allowed');

$form = new zea();
$form->init('param');
$form->setParamName('api_all_perangkat');
$form->setHeading('Link Api Perangkat Desa');
$form->setTable('config');
$form->addInput('link','text');

$form->form();