<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Digital_sign extends CI_Controller
{
  public function __construct(){
		parent::__construct();
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url('login');
			redirect($url);
			}
	}
  
  public function index()
  {
    $data = [
      'title' => 'Digital Signature'
    ];
    $this->load->view('digitalsign/digital_sign', $data);
    $this->load->model('surat_model');
  }
  
  public function sign()
  {
    $this->load->library('Ciqrcode');
    $output = [
      'status'  => true,
      'message' => '',
      'error'   => ''
    ];
  
    $query = $this->db->select('*')->from('tb_datasktm')
    ->order_by('nosurat')
    ->limit(1)
    ->get();

    foreach ($query->result_array() as $row)
    {
    $nik = $row['nik'];
    $nosurat = $row['nosurat'];
    $file_name = $row['suratfix'];
    }

		
    $this->load->model('suratvalid_model');
			$id = uniqid('',true);
      $datavalid = [
                'id' => $id,
                'nik' => $nik,
			          'suratvalid' => $nik . "_sktm_signed.pdf"
            ];

        $this->suratvalid_model->insertsuratvalid($datavalid);
      
      
      $token     = substr(md5($file_name), 0, 10);
      $qr_image  = strtotime(date('Y-m-d H:i')) . '-' . strtoupper($token) . '.png';
      $file_names = explode('.pdf', $file_name);
  
      $params['data']     = 'Dokumen telah ditandatangani secara elektronik oleh : LURAH SAKO PALEMBANG';
      $params['level']    = 'H';
      $params['size']     = 4;
      $params['savename'] = FCPATH . "ttd/qrcode/" . $qr_image;
      $this->ciqrcode->generate($params);
  
      $path_jar = APPPATH . 'third_party/jsignpdf/JSignPdf.jar';
  
      $path_pdf = realpath('./ttd/belum_ttd/' . $file_name);
  
      $path_p12 = realpath('./ttd/p12/INDISUHANTO-2022-07-16-095933.p12');
      $visualisasi = realpath('./ttd/qrcode/' . $qr_image);
      $passphrase = 'password';
      $output_path = realpath('./ttd/sudah_ttd/');
  
      $llx = 400.48944;
      $lly = 143.43314;
      $urx = 456.5891;
      $ury = 93.54333;

      if (file_exists($path_jar)) {
        $output['java'] = "Java Valid";
      }
      if (file_exists($path_pdf)) {
        $output['pdf'] = "Dokumen Valid";
      }
      if (file_exists($path_p12)) {
        $output['sertifikat'] = "Sertifikat Valid";
      }
      if (!file_exists($path_p12)) {
        $output['status_sertifikat'] = "Sertifikat Tidak Ditemukan !";
      }
  
      if (!($cert_store = file_get_contents($path_p12))) {
        $output['read_sertifikat'] = "Sertifikat tidak bisa dibaca !";
      }
  
      if (!openssl_pkcs12_read($cert_store, $cert_info, $passphrase)) {
        $output['pass_key'] = "Pass Key Salah !";
      }
  
      $first = 1;
  
      $command = 'java -jar "' . $path_jar . '" "' . $path_pdf . '" -kst PKCS12 -ksf "' . $path_p12 . '" -ksp "' . $passphrase . '" -tsh SHA256 -ha SHA256 -d "' . $output_path . '" -os "_signed" -llx ' . $llx . ' -lly ' . $lly . ' -urx ' . $urx . ' -ury ' . $ury . ' --l4-text "" --l2-text "" --bg-scale -1 --bg-path "' . $visualisasi . '" -r "Dokumen telah ditandatangani secara elektronik" -l "Palembang" --page ' . $first . ' -V -v';
  
      exec($command, $val, $er);
  
      if ($er == 0 || $er == 3) {
        $output['status'] = true;
        @unlink($visualisasi);
      } else {
        $output['error']    = $er;
        $output['status']   = false;
      }
    
  
    echo json_encode($output);
    redirect('admin/surat');
  }
}