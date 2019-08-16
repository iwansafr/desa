<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Perangkat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('perangkat_model');
		$this->load->helper('content');
		$this->load->library('esg');
	}
	public function index()
	{
		$this->home_model->home();
		$this->load->view('index');
	}

	public function desa()
	{
		$this->home_model->home();
		$this->load->view('index',['data'=>$this->perangkat_model->get_all(1)]);
	}
	public function bpd()
	{
		$this->home_model->home();
		$this->load->view('index',['data'=>$this->perangkat_model->get_all(2)]);
	}
	public function lpmd()
	{
		$this->home_model->home();
		$this->load->view('index',['data'=>$this->perangkat_model->get_all(3)]);
	}
	public function pkk()
	{
		$this->home_model->home();
		$this->load->view('index',['data'=>$this->perangkat_model->get_all(4)]);
	}
	public function karang_taruna()
	{
		$this->home_model->home();
		$this->load->view('index',['data'=>$this->perangkat_model->get_all(5)]);
	}
	public function rt()
	{
		$this->home_model->home();
		$data = $this->perangkat_model->get_all(6);
		$data_tmp = [];
		if(!empty($data))
		{
			foreach ($data as $key => $value) 
			{
				foreach ($value as $vkey => $vvalue)
				{
					$data_tmp[$vvalue['rw']][] = $vvalue;
				}
			}
			$data = $data_tmp;
		}
		ksort($data);
		$this->load->view('index',['data'=>$data]);
	}
	public function rw()
	{
		$this->home_model->home();
		$data = $this->perangkat_model->get_all(7);
		$data_tmp = [];
		if(!empty($data))
		{
			foreach ($data as $key => $value) 
			{
				foreach ($value as $vkey => $vvalue)
				{
					$data_tmp[$vvalue['rw']][] = $vvalue;
				}
			}
			$data = $data_tmp;
		}
		ksort($data);
		$this->load->view('index',['data'=>$data]);
	}
	public function kpmd()
	{
		$this->home_model->home();
		$this->load->view('index',['data'=>$this->perangkat_model->get_all(8)]);
	}
	public function linmas()
	{
		$this->home_model->home();
		$this->load->view('index',['data'=>$this->perangkat_model->get_all(9)]);
	}
}