<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Perangkat_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
    $this->load->model('esg_model');
	}
	
  public function get_all($id = 0, $jabatan = 0)
  {
    $api_config = $this->esg->get_config('api_all_perangkat');
    if(!empty($api_config))
    {
      $get = '';
      if(!empty($jabatan) && !empty($id))
      {
        $get = '&jabatan='.$jabatan;
      }
      $data = file_get_contents($api_config['link'].'&kelompok='.$id.'&full=1'.$get);
      $data = json_decode($data,true);
      ksort($data);
      return $data;
    }
  }

}