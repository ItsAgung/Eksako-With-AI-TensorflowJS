<?php 
class Auth_model extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
 
	function register($data_user)
	{
		if(!$data_user){
			return;
		}

		$this->db->insert('tb_user',$data_user);
	}

    function login_admin($nik,$password){
        $query=$this->db->query("SELECT * FROM tb_admin WHERE nip='$nik' AND password=MD5('$password') LIMIT 1");
        return $query;
    }

    function login_user($nik,$password)
	{
        $query = $this->db->get_where('tb_user',array('nik'=>$nik));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('nik',$nik);
				$this->session->set_userdata('nama',$data_user->nama);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }

  
}
?>