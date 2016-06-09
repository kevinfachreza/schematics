<?php
class OprecModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->db1 = $this->load->database("default", TRUE);
		$this->db2 = $this->load->database("backup",TRUE);
	}

	public function getHasil()
	{
		$NRP=$this->input->post('NRP');
		$flag_hasil = $this->db->query("Call sp_getHasil('".$NRP."')");
		return $flag_hasil->first_row();

	}

	public function delRegister()
	{
		$NRP = $this->input->post('NRP');
		$qDelete="DELETE FROM Oprec where NRP = ".$NRP."";
		$flag=$this->db->query($qDelete);
		if($flag) echo "Data berhasil dihapus";
		else echo "Data gagal dihapus";

	}

	public function inputOprec()
	{
		$NRP_ = $this->session->userdata('NRP');
		$nama_ = $this->session->userdata('nama');
		$jabatan = $this->session->userdata('pilJabatan');
		$pilihan[1] = $this->session->userdata('pilihan1');
		$alasan_pil1 = $this->session->userdata('alasan_pilihan1');
		$pilihan[2] = $this->session->userdata('pilihan2');
		$alasan_pil2 = $this->session->userdata('alasan_pilihan2');
		$pilihan[3] = $this->session->userdata('pilihan3');
		$alasan_pil3 = $this->session->userdata('alasan_pilihan3');
		$pilihan[4] = $this->session->userdata('pilihan4');
		$pilihan[5] = $this->session->userdata('pilihan5');
		$ukuran_baju = $this->session->userdata('ukuranbaju');
		$ukuran_lengan = $this->session->userdata('ukuranlengan');

		if($jabatan==2) $n=5;
		else $n=3;

		$flagSamaPilihan=0;

		for($i=1; $i<=$n;$i++)
		{
			for($j=1; $j<=$n; $j++)
			{
				if($i==$j) continue;
				else
				{
					if($pilihan[$i]==$pilihan[$j])
					{
						$flagSamaPilihan=-9;
						break;
					}
				}
			}
		}

		if($flagSamaPilihan==-9) 
		{
			return -9;
		}
		else
		{
			if($pilihan[4]==NULL) $pilihan[4]=-1;
			if($pilihan[5]==NULL) $pilihan[5]=-1;
			if($ukuran_lengan==NULL) $ukuran_lengan=-1;
			if($ukuran_baju==NULL) $ukuran_baju=-1;
			if($alasan_pil1==NULL) $alasan_pil1="NULL";
			if($alasan_pil2==NULL) $alasan_pil2="NULL";
			if($alasan_pil3==NULL) $alasan_pil3="NULL";

			$flag_insert=$this->db1->query("CAll sp_inputOprec(".$NRP_.",'".$nama_."',".$jabatan.",".$pilihan[1].",'".$alasan_pil1."',".$pilihan[2].",'".$alasan_pil2."',".$pilihan[3].",'".$alasan_pil3."',".$pilihan[4].",".$pilihan[5].",".$ukuran_baju.",".$ukuran_lengan.")");
			foreach ($flag_insert->result() as $rows) 
			{
				return $rows->message;
			}
		}

	}

	public function getAllDataPrint()
	{
		$query="Select * from Oprec, Oprec_detail where Oprec.NRP = Oprec_detail.NRP";
		$flag=$this->db1->query($query);
		$datas=$flag->result();
		$data['result']=$datas;
		return $datas;

	}

	public function getEvent()
	{
		$data = $this->db2->query("SELECT * from userDetail");
		return $data->result();
	}

	
}
?>