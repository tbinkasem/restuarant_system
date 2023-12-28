<?php session_start();?>
<?php 
if (!$_SESSION["UserID"]){  //check session
	  	Header("Location: index.html"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
}else{?>
<!doctype html>
<html lang="en">
<head>
	<?php
        include ('Include/header.php');
	  ?>
</head>
<body>

     <?php
      include ('Include/Menu.php');
	  ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                             <div class="header">
                                <h4 class="title">บริหารจัดการจองโต๊ะอาหาร</h4>
                            </div>
                            <div class="content" style="margin-left: 15px;">
                                  <div class="example">
                                <p><a href="MantraPlan.php?ResName=KeereeMantra<?php echo ('Include/ResetTable.php');?>">
                                    <img src="assets/img/logo/KeereeMantra.png" style='height: 90%; width: 90%; object-fit: contain'></p></a>  
                                <p><a href="TaraPlan.php?ResName=KeereeTara<?php echo ('Include/ResetTable.php');?>">
                                    <img src="assets/img/logo/Keereetara.png" style='height: 90%; width: 90%; object-fit: contain'></p></a>
                                <p><a href="LoftPlan.php?ResName=Loft<?php echo ('Include/ResetTable.php');?>">
                                    <img src="assets/img/logo/Loft.png" style='height: 90%; width: 90%; object-fit: contain'></p></a>
                                <a href="#">
                                    <img src="assets/img/logo/Taravilla.png" style='height: 90%; width: 90%; object-fit: contain'>
                                  </div>
                                    <div class="example">
                                <p><a href="#">
                                    <img src="assets/img/logo/TheResort.png" style='height: 90%; width: 90%; object-fit: contain'></p></a> 
                                <p><a href="#">
                                    <img src="assets/img/logo/TheVillage.png" style='height: 90%; width: 90%; object-fit: contain'></p></a>
                                <p><a href="#">
                                    <img src="assets/img/logo/Library.png" style='height: 90%; width: 90%; object-fit: contain'></p></a>
                                <p><a href="#">
                                    <img src="assets/img/logo/Taravilla.png" style='height: 90%; width: 90%; object-fit: contain'></p></a>
                                  </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php
      include ('Include/footer.php');
	  ?>
</html>
<?php }?>

<?php
      include ('Include/ResetTable.php');
?>