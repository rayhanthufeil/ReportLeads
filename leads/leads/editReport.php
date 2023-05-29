<?php
include('cekadmin.php');
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.treb{font-family: Trebuchet MS}
.flex{display: flex;}
.hub-top {position: fixed;top: 0;z-index: 20;width: 100%;background: #222;height: 111px;}
.logo{padding:11px 5px 11px 22px;color: white}
.logo i{color: white;font-size: 77pt}
.logoname{color: white;font-size: 22pt;padding: 22px 11px;}
.login{margin: 11px; color:white;}
.m1{margin: 1px}
.dashboard{background: #333333;position: fixed;height: 100%;width: 15%;box-shadow: 2px 2px 22px black;padding-top: 111px;}
.dashboard span{color: black;font-size: 16px;padding: 11px 22px;background: lightblue;display: block;box-shadow: 1px 1px 2px black}
.dashboard ul{list-style: none;padding: 0}
.dashboard ul li{color: white;padding: 6px 22px;display: block;font-size: 14pt;box-shadow: 1px 1px 2px black;;margin-top: 3px}
.dashboard ul li:hover{box-shadow: 1px 1px 2px black;cursor: pointer;background: #ADD8E6;color: black}
.dashboard ul li i{float: right;padding-top: 5px}
.dashboard:hover{box-shadow: 2px 2px 22px black}
.admin-pic{position: relative;top: -88px;left: 33px}
.admin-name{position: relative;top: -166px;left: 166px;font-size: 13pt;}
.admin-pic img{width: 111px ;height: 111px}
.name{}
.center{text-align: center;}
</style>
<title>Administrator</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin DashBoard</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        
</head>
<body>
    <?php
$id_report=ISSET($_GET['id_report']) ? $_GET['id_report'] : '';
require_once('koneksi.php');
$edit="select * from report where id_report='".$id_report."'";


$result=mysqli_query($koneksi,$edit) or die(mysqli_error());
$rows=mysqli_fetch_object($result);

    
    $id_report = $rows -> id_report;
    $nama_klien = $rows -> nama_klien;
    $nama_perusahaan = $rows -> nama_perusahaan;
    $no_telp = $rows -> no_telp;
    $email =$rows -> email;
    $tanggal_visit = $rows -> tanggal_visit;
    $tanggal_event =$rows -> tanggal_event;
    $jumlah_pax = $rows -> jumlah_pax;
    $kategori_event =$rows -> kategori_event;
    $sales = $rows -> sales;
    $progres =$rows -> progres;
    $referensi =$rows -> referensi;

?>
<form>
<div class="background-image"></div>
<div class="hub-top">
  <div class="login pull-left">
<!--         <?php
        $nama = $_SESSION['username'];
                echo "<img style='width: 85px;' src='assets/img/icon/$nama.png' class='img-circle'>";
        ?>  -->
  </div>
  <div class="login pull-left">
  <font size="5px"><p style="margin:  40px 10px;">Welcome <font color="red"><i><?php echo $_SESSION['username']; ?></i></font></p></font>
  </div>
  <div class="logo flex pull-right">
    <div>
      <a href="index.php"><img src="assets1/photo/head1.png" ></a>
    </div>
  </div><br/><br/>
  </div>
</form>
</div>
<div class="dashboard treb">
  <ul>
    <a href="index.php"><li><i class="fa fa-home fa-fw"></i>Home</li></a>
    <a href="printpage.php"><li><i class="glyphicon glyphicon-print"></i>Print</li></a>
    <a href="leadsa.php"><li><i class="fa fa-globe fa-fw"></i> Leads</li></a>
    <a href="addReporta.php"><li><i class="fa fa-plus fa-fw"></i>Insert Data</li></a>
    <a href="singup.php"><li><i class="fa fa-plus fa-fw"></i> Register</li></a>
    <a href="NC.php"><li><i class="fa fa-plus fa-fw"></i> Notification</li></a>
    <a href="logout.php"><li><i class="fa fa-sign-out fa-fw"></i> Logout</li></a
  </ul>
</div><br/>
<div style=";margin-left: 18%;padding-top: 122px" class="flex">
  <div style="width: 100%;  opacity: inherit;">

    <form action="Action_editReport.php" method="POST">
    <div>
    <div class="form-group" align="center">
    <table>
    <tr>
        <td>
            <label>Nama Klien</label>
            <input type="hidden" name="id_report" value="<?php echo $id_report;?>">
            <input type="text" name="nama_klien" class="form-control" placeholder="Nama Klien" style="width: 300px" value="<?php echo $nama_klien;?>">
        </td>
        <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
            <label>Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" style="width: 300px" value="<?php echo $nama_perusahaan;?>">
        </td>
    <tr>    
    </table>
    </div>
    <div class="form-group" align="center">
    <table>
    <tr>
        <td>
            <label>Telepon</label>
            <input type="text" name="no_telp" class="form-control" placeholder="Telepon" style="width: 300px" value="<?php echo $no_telp;?>">
        </td>
        <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" style="width: 300px" value="<?php echo $email;?>">
        </td>
    </tr>
    </table>
    </div>

    <div class="form-group" align="center">
    <table>
    <tr>
        <td>
            <label>Referensi</label><br>
            <input list="referensi" name="referensi" class="form-control" placeholder="Referensi" style="width: 300px" value="<?php echo $referensi;?>">
            <datalist id="referensi">
                <option value="Facebook">
                <option value="In Coming Call Office">
                <option value="Instagram">
                <option value="Website ">
                <option value="Google">
                <option value="Visit">
                <option value="Web Site">
            </datalist>
        </td>
        <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
            <label>Visit</label>
            <input type="date" name="tanggal_visit" class="form-control"  style="width: 300px" value="<?php echo $tanggal_visit;?>">
        </td>
    </tr>
    </table>
    </div>

    <div class="form-group" align="center">
    <table>
    <tr>
        <td>
            <label>Event</label>
            <input type="date" name="tanggal_event" class="form-control"  style="width: 300px" value="<?php echo $tanggal_event;?>">
        </td>
        <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
            <label>Pax</label>
            <input type="text" name="jumlah_pax" class="form-control" list="pax" placeholder="Pax" style="width: 300px" value="<?php echo $jumlah_pax;?>">
        </td>
        </table>
        </div>
    
    <div class="form-group" align="center">
    <table>
    <tr>
        <td>
    <label>Kategori</label><br>
    <input list="kategori" name="kategori_event" class="form-control" placeholder="Kategori" style="width: 300px" value="<?php echo $kategori_event;?>">
        <datalist id="kategori">
            <option value="Paket Pernikahan Platinum 1.200 - 2.500">
            <option value="Paket Pernikahan Gold 1.200 - 2.500">
            <option value="Room Only Granada">
            <option value="Paket Pernikahan Gold 600 - 1.000">
            <option value="Room Only Andalucia">
            <option value="Paket Meeting Halfday">
            <option value="Paket Meeting Fullday">
            <option value="Room Only Meeting">
            <option value="Paket Wisuda">
            <option value="Persewaan Office Tipe Bare">
            <option value="Persewaan Office Tipe Fitted">
            <option value="Persewaan Office Tipe Medium Office">
            <option value="Persewaan Office Tipe Premium Office">
            <option value="Paket Promo Meeting">
            <option value="Paket Promo SAMARA 165">    
        </datalist>
        </td>
        <td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
            <label>Sales</label>
            <input list="sales" name="sales" class="form-control" placeholder="Sales" style="width: 300px" value="<?php echo $sales;?>">
            <datalist id="sales">
                <option value="Oke">
                <option value="Desi">
                <option value="Very">
                <option value="Diland">
                <option value="Hanafi">
                <option value="Ifni">
                <option value="Reza"> 
            </datalist>
        </td>
    </tr>
    </div>
    </table>
    <label>Progres</label>
    <input list="progres" name="progres" class="form-control" placeholder="Progres" style="width: 300px" value="<?php echo $progres;?>">
        <datalist id="progres">
            <option value="Confirm">
            <option value="On Progres">
            <option value="Cancel">
        </datalist><br>
        <input type="submit" value="Submit" style="width: 100px" class="btn btn-success" style="height: 50px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset"  value="Reset" style="width: 100px" class="btn btn-danger" style="height: 50px">
        </label>
    </div>
    </from> 
  </div>             

</body>
</html>