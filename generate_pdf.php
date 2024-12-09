<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial','B',15);
        $this->Cell(0,10,'STRUK PEMBELIAN KOMPUTER',0,1,'C');
        $this->SetFont('Arial','',10);
        $this->Cell(0,10,'Tanggal: ' . date('d/m/Y H:i:s'),0,1,'C');
        $this->Ln(10);
    }
    
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Halaman '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

session_start();
if(isset($_SESSION['struk_data'])) {
    $data = $_SESSION['struk_data'];
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    
    // Set font
    $pdf->SetFont('Arial','B',12);
    
    // Header Tabel
    $pdf->Cell(60,10,'Item',1);
    $pdf->Cell(60,10,'Spesifikasi',1);
    $pdf->Cell(20,10,'Jumlah',1);
    $pdf->Cell(50,10,'Harga',1,1);
    
    $pdf->SetFont('Arial','',10);
    
    if(isset($data['is_paket']) && $data['is_paket']) {
        // Untuk pembelian paket
        $paket = $data['paket'];
        foreach($paket['komponen'] as $komponen => $nilai) {
            $pdf->Cell(60,10,$komponen,1);
            $pdf->Cell(60,10,$nilai,1);
            if($komponen === array_key_first($paket['komponen'])) {
                $pdf->Cell(20,10,$data['jumlah'],1);
                $pdf->Cell(50,10,'Rp. ' . number_format($paket['harga'],0,',','.'),1);
            } else {
                $pdf->Cell(20,10,'',1);
                $pdf->Cell(50,10,'',1);
            }
            $pdf->Ln();
        }
        
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(140,10,'Total:',1);
        $pdf->Cell(50,10,'Rp. ' . number_format($data['total'],0,',','.'),1,1);
        
    } else {
        // Untuk custom build
        foreach($data['items'] as $item) {
            $pdf->Cell(60,10,$item['nama'],1);
            $pdf->Cell(60,10,$item['spesifikasi'],1);
            $pdf->Cell(20,10,$item['jumlah'],1);
            $pdf->Cell(50,10,'Rp. ' . number_format($item['harga'],0,',','.'),1,1);
        }
        
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(140,10,'Total:',1);
        $pdf->Cell(50,10,'Rp. ' . number_format($data['total'],0,',','.'),1,1);
    }
    
    $pdf->Output('D', 'struk_pembelian_' . date('YmdHis') . '.pdf');
} else {
    echo "Tidak ada data struk yang tersedia.";
}
?> 