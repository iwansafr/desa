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
		$this->load->view('index',
			[
				'data'=>$this->perangkat_model->get_all(),
				'kelompok'=>
				[
					'1'=>'perangkat desa',
					'2'=>'bpd',
					'3'=>'lpmd',
					'4'=>'pkk',
					'5'=>'karang taruna',
					'6'=>'rt',
					'7'=>'rw',
					'8'=>'kpmd',
					'9'=>'linmas'
				],
				'kelamin'=>['0'=>'Perempuan','1'=>'Laki-laki'],
				'agama'=>
				[
					'1'=>'Islam',
					'2'=>'Kristen',
					'3'=>'Katholik',
					'4'=>'Hindu',
					'5'=>'Budha',
					'6'=>'Khonghucu',
					'7'=>'Kepercayaan thd Tuhan yang Maha Esa Lainnya'
				],
				'status_perkawinan'=>['Belum Kawin','Cerai Hidup','Cerai Mati','Kawin'],
				'pendidikan_terakhir'=>
				[
					'1'=>strtoupper('akademi/diploma iii/s.muda'),
					'2'=>strtoupper('belum tamat sd/sederajat'),
					'3'=>strtoupper('diploma i/ii'),
					'4'=>strtoupper('diploma iv/strata i'),
					'5'=>strtoupper('slta/sederajat'),
					'6'=>strtoupper('sltp/sederajat'),
					'7'=>strtoupper('strata ii'),
					'8'=>strtoupper('strata iii'),
					'9'=>strtoupper('tamat sd/sederajat'),
					'10'=>strtoupper('tidak/belum sekolah')
				],
				'jabatan'=>
				[
					'1' => 	[
										'1'=>strtoupper('kepala desa'),
										'2'=>strtoupper('sekretaris desa'),
										'3'=>strtoupper('kepala dusun 1'),
										'4'=>strtoupper('kepala dusun ii'),
										'5'=>strtoupper('kepala dusun iii'),
										'6'=>strtoupper('kepala dusun iv'),
										'7'=>strtoupper('kepala dusun v'),
										'8'=>strtoupper('kaur administrasi dan umum'),
										'18'=>strtoupper('staf kaur administrasi dan umum'),
										'20'=>strtoupper('staf administrasi dan umum'),
										'9'=>strtoupper('kaur keuangan'),
										'10'=>strtoupper('kasi pemerintahan'),
										'11'=>strtoupper('kasi pembangunan'),
										'12'=>strtoupper('kasi kesra'),
										'13'=>strtoupper('staf kaur keuangan'),
										'14'=>strtoupper('staf kasi pemerintahan'),
										'15'=>strtoupper('staf kasi pembangunan'),
										'16'=>strtoupper('staf kasi kesra'),
										'19'=>strtoupper('staf kadus'),
										'17'=>strtoupper('kader desa'),
									],
					'2' =>  [
										'1'=>strtoupper('ketua'),
										'2'=>strtoupper('wakil ketua'),
										'3'=>strtoupper('sekretaris'),
										'4'=>strtoupper('anggota')
									],
					'3' =>  [
										'1'=>strtoupper('ketua'),
										'5'=>strtoupper('sekretaris i'),
										'6'=>strtoupper('sekretaris ii'),
										'7'=>strtoupper('bendahara i'),
										'8'=>strtoupper('bendahara ii'),
										'2'=>strtoupper('seksi agama'),
										'3'=>strtoupper('seksi pemuda'),
										'9'=>strtoupper('seksi keamanan & ketertiban'),
										'10'=>strtoupper('pendidikan & penerangan'),
										'11'=>strtoupper('seksi lingkungan hidup'),
										'12'=>strtoupper('seksi pembangunan ekonomi & koperasi'),
										'13'=>strtoupper('seksi kesehatan & kependudukan'),
										'14'=>strtoupper('seksi kesejahteraan sosial'),
										'4'=>strtoupper('anggota')
									],
					'4' =>  [
										'1'=>strtoupper('ketua'),
										'11'=>strtoupper('wakil ketua'),
										'2'=>strtoupper('sekretaris i'),
										'3'=>strtoupper('sekretaris ii'),
										'4'=>strtoupper('bendahara i'),
										'5'=>strtoupper('bendahara ii'),
										'6'=>strtoupper('pokja i'),
										'7'=>strtoupper('pokja ii'),
										'8'=>strtoupper('pokja iii'),
										'9'=>strtoupper('pokja iv'),
										'10'=>strtoupper('pokja v')
									],
					'5' => 	[
										'1'=>strtoupper('ketua'),
										'2'=>strtoupper('wakil ketua'),
										'3'=>strtoupper('sekretaris i'),
										'4'=>strtoupper('sekretaris ii'),
										'5'=>strtoupper('bendahara i'),
										'6'=>strtoupper('bendahara ii'),
										'7'=>strtoupper('anggota'),
										'8'=>strtoupper('seksi pendidikan dan pelatihan'),
										'9'=>strtoupper('seksi usaha dan kesejahteraan sosial'),
										'10'=>strtoupper('seksi kelompok usaha bersama'),
										'11'=>strtoupper('seksi kerohanian dan pembinaan mental'),
										'12'=>strtoupper('seksi olah raga dan seni budaya'),
										'13'=>strtoupper('seksi lingkungan hidup'),
										'14'=>strtoupper('seksi hubungan masyarakat'),
										'15'=>strtoupper('seksi kerjasama kemitraan'),
									],
					'6' => ['Ketua Rt'],
					'7' => ['Ketua Rw'],
					'8' => ['KPMD'],
					'9' => ['LinMas'],
					// '10' => 
				]
			]
		);
	}

}