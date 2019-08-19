<?php defined('BASEPATH') OR exit('No direct script access allowed');

$form = new zea();

$form->init('param');
$form->setTable('config');

$form->setParamName('kepdes_notes');

$form->addInput('motto','textarea');
$form->setAttribute('motto',['class'=>'form-control summernote']);
$form->addInput('tugas','textarea');
$form->setAttribute('tugas',['class'=>'form-control summernote']);
$form->addInput('fungsi','textarea');
$form->setAttribute('fungsi',['class'=>'form-control summernote']);
$form->addInput('wewenang','textarea');
$form->setAttribute('wewenang',['class'=>'form-control summernote']);
$form->addInput('hak','textarea');
$form->setAttribute('hak',['class'=>'form-control summernote']);
$form->addInput('kewajiban','textarea');
$form->setAttribute('kewajiban',['class'=>'form-control summernote']);

$form->form();