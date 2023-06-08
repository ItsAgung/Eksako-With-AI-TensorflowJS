<?php 
class Surat_model extends CI_Model 
{
    
	
	public function __construct()
	{
        parent::__construct();
	}
 

    public function insertsktm($datasktm)
	{
		if(!$datasktm){
			return;
		}

		return $this->db->insert('tb_datasktm', $datasktm);
	}

    public function get()
	{
		$query = $this->db->get('tb_datasktm');
		return $query->result();
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