<?php 
class Suratvalid_model extends CI_Model 
{
    
	
	public function __construct()
	{
        parent::__construct();
	}
 

    public function insertsuratvalid($datavalid)
	{
		if(!$datavalid){
			return;
		}

		return $this->db->insert('tb_datavalid', $datavalid);
	}

    public function get()
	{
		$query = $this->db->get('tb_datavalid');
		return $query->result();  
	}

    public function getAllSuratByIdNik($idnik)
	{
		return $this->db->get_where('tb_datavalid', ['nik' => $idnik])->result_array();	 
	}

	public function delete($nosurat)
	{
		if(!$nosurat){
			return;
		}

		$this->db->delete('tb_datasktm', ['nosurat' => $nosurat]);
	}


    function tampil_datasktm(){
		return $this->db->get('tb_datasktm');
	}
    
}
?>