<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oprec extends CI_Controller {

	/**
	 * Index Page for this controll,er.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('OprecModel');
		$this->load->library('session');
		$this->load->helper('url');

	}

	public function dbbackup()
	{
		$data = $this->OprecModel->getEvent();
		var_dump($data);
	}

	public function delRegister()
	{
		if($this->input->post('NRP')&&$this->input->server('REQUEST_METHOD')=="POST"&&$this->checkingSession()==1)
		{
			$this->OprecModel->delRegister();
		}
		else echo "Gagal masuk";
	}

	public function bph()
	{
		$this->load->view('oprec/bph');
	}

    public function closed()
	{
		$this->load->view('oprec/closed');
	}
    
	public function staff()
	{
		$this->load->view('oprec/staff');
	}

	public function index()
	{
        $this->load->view('header/header');
		$this->load->view('oprec/index');
        $this->load->view('footer/footer');
	}
    
    public function doRegistrasi()
    {
    	if($this->input->server('REQUEST_METHOD')=="POST")
    	{
	    	$this->session->set_userdata("NRP",$this->input->post('NRP'));
	    	$this->session->set_userdata("nama",$this->input->post('nama'));
	    	$this->session->set_userdata("pilJabatan",$this->input->post('pilJabatan'));
	    	$this->session->set_userdata("pilihan1",$this->input->post('pilihan1'));
	    	$this->session->set_userdata("alasan_pilihan1",$this->input->post('alasan_pilihan1'));
	    	$this->session->set_userdata("pilihan2",$this->input->post('pilihan2'));
	    	$this->session->set_userdata("alasan_pilihan2",$this->input->post('alasan_pilihan2'));
	    	$this->session->set_userdata("pilihan3",$this->input->post('pilihan3'));
	    	$this->session->set_userdata("alasan_pilihan3",$this->input->post('alasan_pilihan3'));
	    	$this->session->set_userdata("pilihan4",$this->input->post('pilihan4'));
	    	$this->session->set_userdata("pilihan5",$this->input->post('pilihan5'));
	    	$this->session->set_userdata("ukuranbaju",$this->input->post('ukuranbaju'));
	    	$this->session->set_userdata("ukuranlengan",$this->input->post('ukuranlengan'));
	    	redirect('oprec/konfirmasi');
    	}
    	else redirect('oprec/index');
    }

	public function registrasi()
	{
		$this->load->view('header/header');
		$this->load->view('oprec/list-biro');
        $this->load->view('footer/footer');
	}

    public function konfirmasi()
	{
		if($this->session->userdata('NRP'))
		{
			$this->load->view('header/header');
			$this->load->view('oprec/konfirmasi');
        	$this->load->view('footer/footer');
    	}
    	else redirect('oprec/index');
	}

	
    
	public function doKonfirmasi()
	{

		if($this->input->server('REQUEST_METHOD')=="POST")
		{
			$this->load->helper('url');
			$flag_input=$this->OprecModel->inputOprec();
			$this->status($flag_input);
			
		}
		else redirect('oprec/index');
	}



	public function status($flag_input)
	{
			$data['img'] = base_url()."assets/img/ui/cross.png";
			$data['title'] = "Gagal";
			$data['link'] = base_url()."oprec/registrasi";
			$data['button'] = "Edit Data";
			if($flag_input==1) 
			{
				$data['title'] = "Berhasil";
				$data['message'] = "Terima kasih sudah mendaftar, silahkan tunggu kabar selanjutnya";
				$data['img'] = base_url()."assets/img/ui/tick.png";
				$data['link'] = base_url()."oprec";
				$data['button'] = "Ok";
				$this->session->sess_destroy();
			}
			elseif ($flag_input==-2) 
			{
				$data['message'] =  "User sudah registrasi";
			}
			elseif ($flag_input==-1) $data['message'] =  "Gagal registrasi";
			elseif ($flag_input==-9) $data['message'] =  "Pilihan biro sama, tidak diperbolehkan memilih biro yang sama";
			else 
			{
					$data['message'] =  "Fatal error, silahkan hubungi administrator";
					$data['button'] = "Ok";
			}
			$this->load->view('oprec/status',$data);
	}


	private function checkingSession()
	{
		if(isset($_SESSION['u']))
		{
			if($_SESSION['u']!=base64_decode("NjE3NGE0NjJhOGZmNjllNmZkMGZmYmVlYTVlNTZhMWQ="))
			{
				session_destroy();
				redirect('oprec/sampoerna');
			}
			else return 1;
		}
		else redirect('oprec/sampoerna');
	}

	public function sampoerna()
	{
		$LoginSuccessful = false;
		 
		if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
		{
			$u=$_SERVER['PHP_AUTH_USER'];
			$p=$_SERVER['PHP_AUTH_PW'];
		    
		    if (base64_encode(md5($u)) == base64_encode("6174a462a8ff69e6fd0ffbeea5e56a1d") &&  base64_encode(md5($p))== base64_encode("8246675b653f11ff57d0fb275305d331"))
		    {
		        $LoginSuccessful = true;
		        $_SESSION['u']=md5($u);
		    }
		}
		if (!$LoginSuccessful)
		{
		    header('WWW-Authenticate: Basic realm="Secret page"');
		    header('HTTP/1.0 401 Unauthorized');
		    echo "Login Failed";
		}
		else {
		    $data['rows']=$this->OprecModel->getAllDataPrint();
		    $this->load->view('oprec/dashboard_home.php',$data);
		}
	}

	public function downloadToExcel()
	{
		if($this->checkingSession()==1)
		{

			$cetakExcell = $this->OprecModel->getAllDataPrint();
			$filename="Backup ".date("Y-m-d H:i:s",time()).".xlsx";
			$flag=false;

			function cleanData(&$str)
			{
				$str=preg_replace("/\t/", "\\t", $str);
				$str=preg_replace("/\r?\n/", "\\n", $str);
				if(strstr($str,'"'))
					$str='"'.str_replace('"', '""', $str).'"';
			}

			header("Content-Disposition: attachment; filename=\"$filename\"; worksheetTitle=\"hahaha\"");
			header("Content-Type: application/vnd.ms-excel");
			$array=json_decode(json_encode($cetakExcell),true);
			foreach ($array as $row) 
			{

				if($row['jabatan_oprec']==2) $row['jabatan_oprec']="Staff";
				else $row['jabatan_oprec']="BPH";



				
				if($row['pilihan1_oprec']==1) $row['pilihan1_oprec']="NLC";
				elseif($row['pilihan1_oprec']==2) $row['pilihan1_oprec']="NPC";
				elseif($row['pilihan1_oprec']==3) $row['pilihan1_oprec']="NST";
				elseif($row['pilihan1_oprec']==4) $row['pilihan1_oprec']="Reeva";
				elseif($row['pilihan1_oprec']==5) $row['pilihan1_oprec']="Webkestari";
				elseif($row['pilihan1_oprec']==6) $row['pilihan1_oprec']="Kamzin";
				elseif($row['pilihan1_oprec']==7) $row['pilihan1_oprec']="Danus";
				elseif($row['pilihan1_oprec']==8) $row['pilihan1_oprec']="Humas";
				elseif($row['pilihan1_oprec']==9) $row['pilihan1_oprec']="Perkaptrans";
				elseif($row['pilihan1_oprec']==10) $row['pilihan1_oprec']="3D";
				elseif($row['pilihan1_oprec']==11) $row['pilihan1_oprec']="Wakil Ketua";
				elseif($row['pilihan1_oprec']==12) $row['pilihan1_oprec']="Sekretaris";
				elseif($row['pilihan1_oprec']==13) $row['pilihan1_oprec']="Bendahara";
				else $row['pilihan1_oprec']="Kosong";

				
				if($row['pilihan2_oprec']==1) $row['pilihan2_oprec']="NLC";
				elseif($row['pilihan2_oprec']==2) $row['pilihan2_oprec']="NPC";
				elseif($row['pilihan2_oprec']==3) $row['pilihan2_oprec']="NST";
				elseif($row['pilihan2_oprec']==4) $row['pilihan2_oprec']="Reeva";
				elseif($row['pilihan2_oprec']==5) $row['pilihan2_oprec']="Webkestari";
				elseif($row['pilihan2_oprec']==6) $row['pilihan2_oprec']="Kamzin";
				elseif($row['pilihan2_oprec']==7) $row['pilihan2_oprec']="Danus";
				elseif($row['pilihan2_oprec']==8) $row['pilihan2_oprec']="Humas";
				elseif($row['pilihan2_oprec']==9) $row['pilihan2_oprec']="Perkaptrans";
				elseif($row['pilihan2_oprec']==10) $row['pilihan2_oprec']="3D";
				elseif($row['pilihan2_oprec']==11) $row['pilihan2_oprec']="Wakil Ketua";
				elseif($row['pilihan2_oprec']==12) $row['pilihan2_oprec']="Sekretaris";
				elseif($row['pilihan2_oprec']==13) $row['pilihan2_oprec']="Bendahara";
				else $row['pilihan2_oprec']="Kosong";

				if($row['pilihan3_oprec']==1) $row['pilihan3_oprec']="NLC";
				elseif($row['pilihan3_oprec']==2) $row['pilihan3_oprec']="NPC";
				elseif($row['pilihan3_oprec']==3) $row['pilihan3_oprec']="NST";
				elseif($row['pilihan3_oprec']==4) $row['pilihan3_oprec']="Reeva";
				elseif($row['pilihan3_oprec']==5) $row['pilihan3_oprec']="Webkestari";
				elseif($row['pilihan3_oprec']==6) $row['pilihan3_oprec']="Kamzin";
				elseif($row['pilihan3_oprec']==7) $row['pilihan3_oprec']="Danus";
				elseif($row['pilihan3_oprec']==8) $row['pilihan3_oprec']="Humas";
				elseif($row['pilihan3_oprec']==9) $row['pilihan3_oprec']="Perkaptrans";
				elseif($row['pilihan3_oprec']==10) $row['pilihan3_oprec']="3D";
				elseif($row['pilihan3_oprec']==11) $row['pilihan3_oprec']="Wakil Ketua";
				elseif($row['pilihan3_oprec']==12) $row['pilihan3_oprec']="Sekretaris";
				elseif($row['pilihan3_oprec']==13) $row['pilihan3_oprec']="Bendahara";
				else $row['pilihan3_oprec']="Kosong";

				
				if($row['pilihan4_oprec']==1) $row['pilihan4_oprec']="NLC";
				elseif($row['pilihan4_oprec']==2) $row['pilihan4_oprec']="NPC";
				elseif($row['pilihan4_oprec']==3) $row['pilihan4_oprec']="NST";
				elseif($row['pilihan4_oprec']==4) $row['pilihan4_oprec']="Reeva";
				elseif($row['pilihan4_oprec']==5) $row['pilihan4_oprec']="Webkestari";
				elseif($row['pilihan4_oprec']==6) $row['pilihan4_oprec']="Kamzin";
				elseif($row['pilihan4_oprec']==7) $row['pilihan4_oprec']="Danus";
				elseif($row['pilihan4_oprec']==8) $row['pilihan4_oprec']="Humas";
				elseif($row['pilihan4_oprec']==9) $row['pilihan4_oprec']="Perkaptrans";
				elseif($row['pilihan4_oprec']==10)  $row['pilihan4_oprec']="3D";
				else $row['pilihan4_oprec']="Kosong";

				if($row['pilihan5_oprec']==1) $row['pilihan5_oprec']="NLC";
				elseif($row['pilihan5_oprec']==2) $row['pilihan5_oprec']="NPC";
				elseif($row['pilihan5_oprec']==3) $row['pilihan5_oprec']="NST";
				elseif($row['pilihan5_oprec']==4) $row['pilihan5_oprec']="Reeva";
				elseif($row['pilihan5_oprec']==5) $row['pilihan5_oprec']="Webkestari";
				elseif($row['pilihan5_oprec']==6) $row['pilihan5_oprec']="Kamzin";
				elseif($row['pilihan5_oprec']==7) $row['pilihan5_oprec']="Danus";
				elseif($row['pilihan5_oprec']==8) $row['pilihan5_oprec']="Humas";
				elseif($row['pilihan5_oprec']==9) $row['pilihan5_oprec']="Perkaptrans";
				elseif($row['pilihan5_oprec']==10) $row['pilihan5_oprec']="3D";
				else $row['pilihan5_oprec']="Kosong";

				if($row['ukuran_baju']==1) $row['ukuran_baju']="S";
				elseif($row['ukuran_baju']==2) $row['ukuran_baju']="M";
				elseif($row['ukuran_baju']==3) $row['ukuran_baju']="L";
				elseif($row['ukuran_baju']==4) $row['ukuran_baju']="XL";
				elseif($row['ukuran_baju']==5) $row['ukuran_baju']="XXL";
				elseif($row['ukuran_baju']==6) $row['ukuran_baju']="XXXL";
				else $row['ukuran_baju']="Kosong";

				if($row['ukuran_lengan']==1) $row['ukuran_baju']="Pendek";
				elseif($row['ukuran_lengan']==2) $row['ukuran_baju']="Panjang";
				else $row['ukuran_lengan']="Kosong";

				

				if(!$flag)
				{
					echo implode("\t",array_keys($row))."\r\n";
					$flag=true;
				}

				array_walk($row, "cleanData");	
				echo implode("\t",array_values($row))."\r\n";
			}
			exit();
		}
	}
}
