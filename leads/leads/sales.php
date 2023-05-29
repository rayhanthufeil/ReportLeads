<?php
include('ceksales.php');
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
<title>Sales</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sales DashBoard</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        
</head>
<body>
<script>
</script>
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
    <a href="addReports.php"><li><i class="fa fa-plus fa-fw"></i>Insert Data</li></a>
    <a href="logout.php"><li><i class="fa fa-sign-out fa-fw"></i> Logout</li></a>
  </ul>
</div><br/>
<div style=";margin-left: 18%;padding-top: 122px" class="flex">
  <div style="width: 100%;  opacity: inherit;">
    <table>
<?php
require_once('koneksi.php');

if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];

}
else{

  $query1="SELECT * FROM  notic";

}

$result=mysqli_query($koneksi,$query1) or die(mysqli_error());
$no=1; //penomoran 
while($rows=mysqli_fetch_object($result)){
      ?>

      <tr>
        <td style="text-align: center; width: 1050px"><marquee><h2><b><?php echo $rows -> message;?></b></h2></marquee></td>
      </tr>
      <?php $no++;}?>
    </table>

  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 1050px; ">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 420px;">
      <div class="item active">
        <img src="2016-Ford-Focus-RS-RX-V3-1536.jpg" alt="Los Angeles" style="width:100%; height: 420px;">
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="ny.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>        

</body>
</html>