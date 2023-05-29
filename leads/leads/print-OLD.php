<?php
include "koneksi.php";
require('fpdf17/fpdf.php');

$from = $_POST['from_date'];
$until = $_POST['until_date'];
$sales= $_POST['sales'];
$progres = $_POST['progres'];
$kosong='';
/**
 Judul  : Laporan PDF (portait):
 Level  : Menengah
 Author : Hakko Bio Richard
 Blog   : www.hakkoblogs.com
 Web    : www.niqoweb.com
 Email  : hakkobiorichard@ygmail.com
 
 Untuk tutorial yang lainnya silahkan berkunjung ke www.hakkoblogs.com
 
 Butuh jasa pembuatan website, aplikasi, pembuatan program TA dan Skripsi.? Hubungi NiqoWeb ==>> 085694984803
 
 **/
//Menampilkan data dari tabel di database

//$result=mysql_query("SELECT * FROM karyawan ORDER BY nik ASC") or die(mysql_error());
if($from == "" OR $until == "" OR $sales == "" OR $progres == ""){
    $query1 = "SELECT * FROM report";
}
else{
    $query1 = "SELECT * FROM report  WHERE tanggal_event >= '$from' AND tanggal_event <= '$until' AND  sales = '$sales' AND progres = '$progres'";
}
$result=mysqli_query($koneksi,$query1) or die(mysqli_error());
//Inisiasi untuk membuat header kolom

$column_nourut = "";
$column_nama_klien = "";
$column_nama_perusahaan = "";
$column_no_telp = "";
$column_email = "";
$column_referensi = "";
$column_tanggal_visit = "";
$column_tanggal_event = "";
$column_jumlah_pax = "";
$column_kategori_event = "";
$column_sales = "";
$column_progres = "";

if($result == ""){
        echo "data tidak ada";
    } 
    else{
//For each row, add the field to the corresponding column
        $no= 1;
while($row = mysqli_fetch_array($result))
{
    $nourut = $no++;
    $nama_klien = $row["nama_klien"];
    $nama_perusahaan = $row["nama_perusahaan"];
    $no_telp = $row["no_telp"];
    $email = $row["email"];
    $referensi = $row["referensi"];
	$tanggal_visit = $row["tanggal_visit"];
    $tanggal_event = $row["tanggal_event"];
    $jumlah_pax = $row["jumlah_pax"];
    $kategori_event = $row["kategori_event"];
    $sales = $row["sales"];
    $progres = $row["progres"];
 
    
    $column_nourut = $column_nourut.$nourut."\n";
    $column_nama_klien = $column_nama_klien.$nama_klien."\n";
    $column_nama_perusahaan = $column_nama_perusahaan.$nama_perusahaan."\n";
    $column_no_telp = $column_no_telp.$no_telp."\n";
    $column_email = $column_email.$email."\n";
    $column_referensi = $column_referensi.$referensi."\n";
    $column_tanggal_visit = $column_tanggal_visit.$tanggal_visit."\n";
    $column_tanggal_event = $column_tanggal_event.$tanggal_event."\n";
    $column_jumlah_pax = $column_jumlah_pax.$jumlah_pax."\n";
    $column_kategori_event = $column_kategori_event.$kategori_event."\n";
    $column_sales = $column_sales.$sales."\n";
    $column_progres = $column_progres.$progres."\n";
    
}
//Create a new PDF file
$pdf = new FPDF('L','mm','Legal'); //L For Landscape / P For Portrait
$pdf->AddPage();


//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(150);
$pdf->Cell(30,10,'REPORTLEADS',0,0,'C');
$pdf->Ln();
$pdf->Cell(150);
$pdf->Cell(30,10,'PT. GRAHA 165 TBK. | www.menara165.com',0,0,'C');
$pdf->Ln();
}

//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',8);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(6,8,'Id',1,0,'C',1);
$pdf->SetX(11);
$pdf->Cell(40,8,'Nama klien',1,0,'C',1);
$pdf->SetX(51);
$pdf->Cell(46,8,'nama perusahaan',1,0,'C',1);
$pdf->SetX(97);
$pdf->Cell(27,8,'no telp',1,0,'C',1);
$pdf->SetX(124);
$pdf->Cell(40,8,'email',1,0,'C',1);
$pdf->SetX(164);
$pdf->Cell(25,8,'referensi',1,0,'C',1);
$pdf->SetX(189);
$pdf->Cell(20,8,'tanggal visit',1,0,'C',1);
$pdf->SetX(209);
$pdf->Cell(20,8,'tanggal event',1,0,'C',1);
$pdf->SetX(229);
$pdf->Cell(21,8,'jumlah pax',1,0,'C',1);
$pdf->SetX(250);
$pdf->Cell(54,8,'kategori event',1,0,'C',1);
$pdf->SetX(304);
$pdf->Cell(17,8,'sales',1,0,'C',1);
$pdf->SetX(321);
$pdf->Cell(31,8,'progres',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',6);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(6,6,$column_nourut,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(11);
$pdf->MultiCell(40,6,$column_nama_klien,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(51);
$pdf->MultiCell(46,6,$column_nama_perusahaan,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(97);
$pdf->MultiCell(27,6,$column_no_telp,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(124);
$pdf->MultiCell(40,6,$column_email,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(164);
$pdf->MultiCell(25,6,$column_referensi,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(189);
$pdf->MultiCell(20,6,$column_tanggal_visit,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(209);
$pdf->MultiCell(20,6,$column_tanggal_event,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(229);
$pdf->MultiCell(21,6,$column_jumlah_pax,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(250);
$pdf->MultiCell(54,6,$column_kategori_event,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(304);
$pdf->MultiCell(17,6,$column_sales,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(321);
$pdf->MultiCell(31,6,$column_progres,1,'L');

$pdf->SetY(155);
$pdf->SetFont('Arial','',8);
$pdf->Cell(280);
$pdf->Cell(30,10,'Verifikasi Oleh,',0,0,'C');
$pdf->Ln(30);
$pdf->SetFont('Arial','',8);
$pdf->Cell(280);
$pdf->Cell(30,0.1,'IT Officer',0,0,'C');
$pdf->Ln();
$pdf->Cell(280);
$pdf->Cell(30,10,'Perdiansyah',0,0,'C');
$pdf->Ln();

$pdf->Output();

?>
