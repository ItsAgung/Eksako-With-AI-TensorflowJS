<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Letterformsktm extends CI_Controller
{
 public function __construct()
 {
 parent::__construct();
 
 //validasi jika user belum login
 $this->load->model('auth_model');
 $this->auth_model->cek_login();
 $this->load->library('Cetakpdf');
 $this->load->model('surat_model');

 }
 
 public function index(){
    $data['title'] = "Buat SKTM";
    $this->load->view('layanan/vw_sktm',$data);
 }


 public function proses()
	{   

		$this->form_validation->set_rules('namalengkap', 'Nama','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('nik', 'NIK','trim|required|min_length[16]|max_length[16]');
        $this->form_validation->set_rules('nokk', 'Nomor KK','trim|required|min_length[16]|max_length[16]');
		$this->form_validation->set_rules('tptlahir', 'Tempat Lahir','trim|required|min_length[1]|max_length[30]');
        $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir','trim|required|min_length[1]|max_length[20]');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('kebangsaan', 'Kebangsaan','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('agama', 'Agama','trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('alamat', 'Alamat','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('alasan', 'Alasan','trim|required|min_length[1]|max_length[255]');
         
         
		
		if ($this->form_validation->run()==true)
	   	{   

            $datasktm = [
                
                'nama' => $this->input->post('namalengkap'),
                'nik' => $this->input->post('nik'),
                'nokk' => $this->input->post('nokk'),
                'tptlahir' => $this->input->post('tptlahir'),
                'tgllahir' => $this->input->post('tgllahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'kebangsaan' => $this->input->post('kebangsaan'),
                'agama' => $this->input->post('agama'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat' => $this->input->post('alamat'),
                'alasan' => $this->input->post('alasan'),
                'suratfix' => $this->input->post('nik') . '_sktm.pdf'
              ];
            
	
			$this->session->set_flashdata('success_buatsurat','Proses Pembuatan Surat Berhasil');
            $this->surat_model->insertsktm($datasktm);
            
			redirect('layanan/letterformsktm/buatsurat');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('layanan/letterformsktm');
		}
	}

 public function buatsurat(){
    $query = $this->db->select('*')->from('tb_datasktm')
        ->order_by('nosurat','DESC')
        ->limit(1)
        ->get();
    
        foreach ($query->result_array() as $row)
        {
        $nosurat = $row['nosurat'];
        $getnama = $row['nama'];
        $getnik = $row['nik'];
        $getnokk = $row['nokk'];
        $gettptlahir = $row['tptlahir'];
        $gettgllahir = $row['tgllahir'];
        $getjenis_kelamin = $row['jenis_kelamin'];
        $getkebangsaan = $row['kebangsaan'];
        $getagama = $row['agama'];
        $getpekerjaan = $row['pekerjaan'];
        $getalamat = $row['alamat'];
        $getalasan = $row['alasan'];
        }

    $pdf = new Cetakpdf('P','cm', 'A4');
    $margin =  2.54; 
    $pdf->SetTopMargin(1.5);
    $pdf->SetLeftMargin($margin); 
    $pdf->SetRightMargin($margin); 
    $pdf->SetAutoPageBreak(true, $margin); 
    $pdf->AddPage(); 
    $pdf->SetFont('Times', '', 12);
 
    $pdf->SetY(5.5);

    $pdf->Cell(0, 0, "SURAT KETERANGAN", 0, 0, 'C');
    $pdf->SetXY(7.95,5.8);
    $pdf->Cell(5, 0, "", 'T', 0, 0, 'C');
    $pdf->SetXY(2.58,6.1);
    $pdf->Cell(0, 0, "No : 470/" . $nosurat . "/SK/VIII/2022", 0, 0, 'C');
    $pdf->Ln(1.5);

    $pdf->Cell(0, 0, "1. Yang bertanda tangan dibawah ini :", 0, 0, '');
    $pdf->Ln(0.7);
    $namapejabat = "INDI SUHANTO, SH.";
    $pdf->Cell(0, 0, "a. Nama                            :  " .$namapejabat, 0, 0, '');
    $pdf->Ln(0.7);
    $jabatan = "LURAH SAKO PALEMBANG";
    $pdf->Cell(0, 0, "b. Jabatan                         :  " . $jabatan, 0, 0, '');
    $pdf->Ln(1.5);

    $pdf->Cell(0, 0, "Dengan ini menerangkan, bahwa :", 0, 0, '');
    $pdf->Ln(0.7);
    $pdf->Cell(0, 0, "a. Nama                             :  " . $getnama, 0, 0, '');
    $pdf->Ln(0.7);
    $pdf->Cell(0, 0, "b. NIK/No.KK                  :  " . $getnik . "/" . $getnokk, 0, 0, '');
    $pdf->Ln(0.7);
    $pdf->Cell(0, 0, "c. Tempat/Tgl.Lahir          :  " . $gettptlahir . "/" . $gettgllahir, 0, 0, '');
    $pdf->Ln(0.7);
    $pdf->Cell(0, 0, "d. Jenis Kelamin               :  " . $getjenis_kelamin, 0, 0, '');
    $pdf->Ln(0.7);
    $pdf->Cell(0, 0, "e. Kebangsaan                   :  " . $getkebangsaan, 0, 0, '');
    $pdf->Ln(0.7);
    $pdf->Cell(0, 0, "f. Agama                           :  " . $getagama, 0, 0, '');
    $pdf->Ln(0.7);
    $pdf->Cell(0, 0, "g. Pekerjaan                      :  " . $getpekerjaan, 0, 0, '');
    $pdf->Ln(0.5);

    $pdf->Cell(0, 0.5, "h. Alamat                          :  ", 0, 0, '');
    $pdf->SetX(7.3);
    $pdf->MultiCell(0, 0.5,$getalamat, 0, 1, '');
    $pdf->Ln(0.5);
    $pdf->Cell(0, 0.5, "    Keterangan                   :  ", 0, 0, '');
    $pdf->SetX(7.3);
    $menerangkan = "Berdasarkan Surat Keterangan RT yang telah dilampirkan menerangkan bahwa nama tersebut adalah warga Kelurahan Sako Kecamatan Sako Palembang. Yang bersangkutan tersebut dari keluarga kurang mampu.";
    $pdf->MultiCell(0, 0.5,$menerangkan, 0, 'J');
    $pdf->Ln(0.5);
    $pdf->Cell(0, 0.5, "    Bermaksud                    :  ", 0, 0, '');
    $pdf->SetX(7.3);
    $maksud = 'Surat keterangan ini diberikan sebagai "' . $getalasan . '".';
    $pdf->MultiCell(0, 0.5,$maksud, 0, 'J');

    $pdf->Ln(1);
    $pdf->Cell(0, 0, "2. Demikian Surat Keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.", 0, 0, '');
    
    $filename = "ttd/belum_ttd/" . $getnik . '_sktm.pdf';
    $pdf->Output('F', $filename, true);
    $this->session->set_flashdata('success_buatsurat','Proses Pembuatan Surat Berhasil');
	redirect('layanan/letterformsktm');
    }

}

?>