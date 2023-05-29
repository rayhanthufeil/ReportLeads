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
        <title>ADmin DashBoard</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        
</head>
<body>
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
        <form action="action_singup.php" method="POST">
    <div>
    <div class="form-group" align="center">
    <label>Username</label>
    <input type="hidden" name="id_report">
    <input type="text" name="username" class="form-control" placeholder="Username" style="width: 300px">
    </div>

    <div class="form-group" align="center">
    <label>Password</label>
    <input type="text" name="password" class="form-control" placeholder="Password" style="width: 300px">
    </div>

    <div class="form-group" align="center">
        <label>Level</label>
        <select name="level" class="form-control" class="size" style="width: 300px">
            <option value="">Choose a Level</option>
            <option value="Administrator">Administrator</option>
            <option value="Sales">Sales</option>
        </select>
    <br/>
                <input type="submit" value="Submit" style="width: 100px" class="btn btn-success" style="height: 50px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset"  value="Reset" style="width: 100px" class="btn btn-danger" style="height: 50px">
        </label>
    </div>
</nav>
</div>				

</body>
</html>