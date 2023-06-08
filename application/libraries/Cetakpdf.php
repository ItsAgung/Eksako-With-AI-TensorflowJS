<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once dirname(__FILE__) . './fpdf/fpdf.php';
class Cetakpdf extends FPDF
{
    function Header() { 
        $this->Image('./assets/images/plg.png',1.3,1.1,2,0,'PNG');
        $this->SetFont('Times', 'B', 16);
        $this->Cell(0, 0, "PEMERINTAH KOTA PALEMBANG", 0, 0,'C');
        $this->Cell(-16, 1.5, "KELURAHAN SAKO", 0, 0, 'C');
        $this->SetFont('Times', '', 14);
        $this->Cell(0, 2.8, "KECAMATAN SAKO", 0, 0, 'C');
        $this->SetFont('Times', '', 12);
        $this->Cell(-16, 4, "Jln. MGS. HA. Rahman Lorong Cempaka IV Rt.017 Rw.007 Kode Pos : 30163", 0, 0, 'C');
        $this->Cell(0, 5, "PALEMBANG", 0, 0, 'C');
        $this->SetXY(2.5,4.5); 
        $this->Cell(0, 0.1, "", 'T', 0, 0, 'C');
        
    }

    function Footer() { 
        $this->SetFont('Times', '', 12); 
        setlocale(LC_ALL, 'id-ID', 'id_ID');
        $tanggal = strftime("%d %B %Y");
        $this->SetXY(13,-6);
        $this->Cell(0, 0, "Palembang, " . $tanggal, 0, 0, '');
        $this->Ln(0.5);
        $this->SetX(13);
        $this->Cell(0, 0, "LURAH SAKO PALEMBANG", 0, 0, '');
        $this->Ln(2.7);
        $this->SetX(13);
        $this->Cell(0, 0, "INDI SUHANTO,SH.", 0, 0, '');
        $this->Ln(0.5);
        $this->SetX(13);
        $this->Cell(0, 0, "Penata Tingkat I", 0, 0, '');
        $this->Ln(0.5);
        $this->SetX(13);
        $this->Cell(0, 0, "NIP.197502012001031001", 0, 0, '');
    }

    function PriceTable($products, $prices) { 
        $this->SetFont('Arial', 'B', 12); 
        $this->SetTextColor(0); 
        $this->SetFillColor(36, 140, 129); 
        $this->SetLineWidth(1); 
        $this->Cell(100, 10, "Item Description", 'LTR', 0, 'C', true); 
        $this->Cell(75, 10, "Price", 'LTR', 1, 'C', true); 
     
        $this->SetFont('Arial', ''); 
        $this->SetFillColor(238); 
        $this->SetLineWidth(0.2); 
        $fill = false; 
     
        for ($i = 0; $i < count($products); $i++) { 
            $this->Cell(100, 10, $products[$i], 1, 0, 'L', $fill); 
            $this->Cell(75, 10, '$' . $prices[$i], 1, 1, 'R', $fill); 
            $fill = !$fill; 
        } 
        $this->SetX(367); 
        $this->Cell(100, 20, "Total", 1); 
        $this->Cell(100, 20, '$' . array_sum($prices), 1, 1, 'R'); 
    }
}