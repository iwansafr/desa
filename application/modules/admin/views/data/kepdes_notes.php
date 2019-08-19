<?php defined('BASEPATH') OR exit('No direct script access allowed');

$form = new zea();

$form->init('param');
$form->setTable('config');

$form->setParamName('kepdes_notes');

$form->addInput('motto','textarea');
$form->addInput('tugas','textarea');
$form->addInput('fungsi','textarea');
$form->addInput('wewenang','textarea');
$form->addInput('hak','textarea');
$form->addInput('kewajiban','textarea');

$form->form();