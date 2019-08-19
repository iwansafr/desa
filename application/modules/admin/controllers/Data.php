<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->db->cache_off();
		$this->load->model('esg_model');
		$this->load->model('admin_model');
		$this->load->model('config_model');
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
		$this->esg_model->init();
	}
	public function index()
	{
		$this->load->view('index');
	}
  public function api_perangkat()
  {
    $this->load->view('index');
  }
  public function kepdes_notes()
  {
  	$this->load->view('index');
  }
}