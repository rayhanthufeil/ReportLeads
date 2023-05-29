<?php
include "koneksi.php";
require('fpdf17/fpdf.php');

$from = $_POST['from_date'];
$until = $_POST['until_date'];

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
if($from == "" OR $until == ""){
    $query1 = "SELECT * FROM report";
}
else{
    $query1 = "SELECT * FROM report  WHERE tanggal_visit >= '$from' AND tanggal_visit <= '$until'";
}
$result=mysqli_query($koneksi,$query1) or die(mysqli_error());
//Inisiasi untuk membuat header kolom
$column_id_report = "";
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



//For each row, add the field to the corresponding column
while($row = mysqli_fetch_array($result))
{
    $id_report = $row["id_report"];
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
 
    
    $column_id_report = $column_id_report.$id_report."\n";
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
    
    //echo $column_nama_klien;

//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(80);
$pdf->Cell(30,10,'DATA KARYAWAN',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(30,10,'PT. NiqoWeb Cikarang | www.niqoweb.com',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(25,8,'ID Report',1,0,'C',1);
$pdf->SetX(30);
$pdf->Cell(40,8,'Nama Klien',1,0,'C',1);
$pdf->SetX(70);
$pdf->Cell(25,8,'Nama Perusahaan',1,0,'C',1);
$pdf->SetX(95);
$pdf->Cell(25,8,'No. Telepon',1,0,'C',1);
$pdf->SetX(120);
$pdf->Cell(50,8,'Email',1,0,'C',1);
$pdf->SetX(170);
$pdf->Cell(35,8,'Referensi',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(25,6,$column_id_report,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(30);
$pdf->MultiCell(40,6,$column_nama_klien,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(70);
$pdf->MultiCell(25,6,$column_nama_perusahaan,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(95);
$pdf->MultiCell(25,6,$column_no_telp,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(120);
$pdf->MultiCell(50,6,$column_email,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(170);
$pdf->MultiCell(35,6,$column_referensi,1,'C');

$pdf->Output();
?>
