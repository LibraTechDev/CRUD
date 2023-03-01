<?php
//tambahdata
require_once __DIR__ . "/function.php";
if (isset($_POST['tambahData'])){
	$kegiatan_prima = $_POST ['kegiatan_prima'];
	$batas_waktu 	= $_POST ['batas_waktu'];

	tambahData($kegiatan_prima, $batas_waktu);
	header("location: index.php");
}
if (isset($_GET['id']))
{
	$id = $_GET ['id'];
	
    hapusData($id);

	header("location: index.php");
}



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Care</title>
    <link rel="icon" type="image/png" sizes="32x32" href="Assets/img/Daily care logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/pristel.css" >
    </head>
  <body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-info bg-info shadow-sm fixed-top ">
		<div class="container-fluid">
			<a class="navbar-brand fw-bold fs-3 " href="#">
                <img src="Assets/img/Daily care logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-center">
                <span class="text-white">Daily</span>Care
              </a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ms-auto mb-2 mb-lg-0">
					<ul class="navbar-nav fw-semibold">
						<li class="nav-item">
							<a class="nav-link text-uppercase fs-6 active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-uppercase fs-6" href="#about">About</a>
						</li>
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-uppercase fs-6 " href="#services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Services
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#services">To-Do List</a></li>
                              <li><a class="dropdown-item" href="#advices">Healthy Advices</a></li>
                            </ul>
                          </li>
						<li class="nav-item">
							<a class="nav-link text-uppercase fs-6" href="#profile">Profile</a>
						</li>
						
					</ul>
                    
				</div>
                <form class="d-flex" role="search">
                    <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
			</div>
		</div>
	</nav>
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			
			
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/img/JOGG2.jpeg" class="d-block w-100" alt="...">
				<div class="carousel-caption text-white">
					<h5>Healthy Care</h5>
					<p></p>
					<p><a href="#advices" class="btn btn-info mt-3">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="assets/img/TODO3.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption">
					<h5>Daily Activities</h5>
					<p></p>
					<p><a href="#todo" class="btn btn-info mt-3">Learn More</a></p>
				</div>
			</div>
			
			
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
<!-- About -->
	<div id="about" class="about p-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-uppercase fw-bold fs-4 text-center p-5">
						<p>About</p>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="about">
						<img src="assets/img/Daily care logo.png" alt="" class="img-fluid" >
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 mt-4">
					<div class="about-text justify-content-">
						<p>Telah hadir website yang dapat menjawab kebutuhan anda akan pencatatan kegiatan sehari-hari
							anda baik itu di bidang kesehatan ataupun pencatatan kegiatan sehari-hari anda.
						</p>
						<p>Kami, Daily Care menghadirkan dua fitur utama kita, yaitu yang pertama adalah To-Do List
							yang dapat sebagai pendokumentasian berbagai kegiatan anda, namun kami lebih berfokus dalam
							pencatatan progress workout anda.
						</p>
						<p>Anda bisa langsung memulai pencatatan dari progress workout anda menggunakan To-do List.
							Selain itu, kami juga menyediakan tips-tips untuk mengingkatkan progress workout anda 
							melalui menu healthy advice. 
						 </p>
						<p>Tips-tips yang kami sediakan tentu saja sudah teruji karena kami juga bekerjasama 
							dengan mahasiswa fakultas kesehatan dari Universitas Dian Nuswantoro. Tunggu apa lagi, kami tunggu
							workout anda!!! :>
						</p>
					</div>
				</div>
			</div>
			<div id="services" class=""></div>
		</div>
	</div>
	 <div id="todo" class="text-uppercase fw-bold fs-4 text-center p-5 mt-3" >
						<p>Services</p>
					</div>
	<div class=" container card col-md-8 mt-1 " >
        <div class="card-header bg-info ">
          Kegiatan Hari Ini
        </div>
        <div class="card-body">
			<form action="" method="post">
			<div class="mb-3">
				<label for="kegiatan_prima" class="form-label">List Kegiatan</label>
				<input type="text" name="kegiatan_prima" class="form-control"  id="kegiatan_prima" required>
			</div>	
			<div class="mb-3">
  				<label for="batas_waktu" class="form-label">Batas Waktu</label>
  				<input type="date" name="batas_waktu"  class="form-control" id="batas_waktu" required>
			</div>  
			<button type="submit" name="tambahData" class="btn btn-primary">Submit</button>
			</form>
		</div>
      </div>
	  <div class="container-sm card mt-5 col-md-8">
    <div class="card-body">
    <table class="table table-info table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kegiatan</th>
      <th scope="col">Batas Waktu</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    
  <?php 
  $nomer = 1;
foreach (ambilData() as $data) {
  ?>
    <tr>
      <th scope="row"><?php echo $nomer++ ?></th>
      <td><?php echo $data ['nama_kegiatan']?></td>
      <td><?php echo date("d F Y", strtotime($data ['batas_waktu'])); ?></td>
      <td>
      <a class="btn btn-primary" href="edit.php?id_kegiatan=<?php echo $data ['id_kegiatan'] ?>">Edit</a>
      <a href="?id=<?php echo $data ['id_kegiatan'] ?>" onclick="return confirm ('Apakah Anda Yakin Ingin Menghapus?')" class="btn btn-danger">Hapus</a>
      
	  
      </td>
      
    </tr>
    
    <?php } ?>
	
    
</tbody>
</table>
<div id="advices" class=""></div>
</div>
</div>
<div id="order" class="order p-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="text-uppercase fw-bold fs-4 text-center p-3">
					<p>Healthy Advices</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<a href="workout.html" style="text-decoration: none; color: black;"><div class="card mt-4 shadow">
					<div class="card-body d-flex py-4 px-4 align-items-center">
						<img src="assets/img/Workout1bg.png" alt="...">
						<h5 class="services-title ms-2">Workout</h5>
					</div>
				</div>
				</a>
			</div>
			<div class="col-md-6 col-lg-4">
				<a href="bodycare.html" style="text-decoration: none; color: black;"><div class="card mt-4 shadow">
					<div class="card-body d-flex py-4 px-4 align-items-center">
						<img src="assets/img/BodyCare.jpg" alt="...">
						<h5 class="services-title ms-2">BodyCare & SkinCare</h5>
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-6 col-lg-4">
			<a href="polamakan.html" style="text-decoration: none; color: black;"><div class="card mt-4 shadow">
				<div class="card-body d-flex py-4 px-4 align-items-center">
					<img src="assets/img/polamakanbg.png" alt="...">
					<h5 class="services-title ms-2">Pola Makan</h5>
				</div>
			</div>
		</a>
	</div>
	<div class="col-md-6 col-lg-4">
		<a href="tipsdiet.html" style="text-decoration: none; color: black;"><div class="card mt-4 shadow">
			<div class="card-body d-flex py-4 px-4 align-items-center">
				<img src="assets/img/Dietbg.png" alt="...">
				<h5 class="services-title ms-2">Tips Diet</h5>
			</div>
		</div>
	</a>
</div>
<div class="col-md-6 col-lg-4">
	<a href="sleep.html" style="text-decoration: none; color: black;"><div class="card mt-4 shadow">
		<div class="card-body d-flex py-4 px-4 align-items-center">
			<img src="assets/img/turu.jpg" alt="...">
			<h5 class="services-title ms-2">Sleep Management</h5>
		</div>
	</div>
</a>
</div>
<div class="col-md-6 col-lg-4">
	<a href="layanan.html" style="text-decoration: none; color: black;"><div class="card mt-4  shadow">
		<div class="card-body d-flex py-4 px-4 align-items-center">
			<img src="assets/img/Hatibg.png" alt="...">
			<h5 class="services-title ms-2">Layanan Kesehatan</h5>
		</div>
	</div>
</a>
</div>
</div>
</div>
</div>
<br><br><br>
<br><br><br>
<br><br>
<div id="profile" class=""></div>
<div  class="profile text-uppercase fw-bold fs-4 text-center p-5 mt-4" >
	<p>Profile</p>
</div>
<center>
<div class="container">
<div class="container1">
<div class="card1">
        <div class="flipcard">
            <div class="flip-front">
            <img src="Assets/Img/Foto Vier.jpeg" alt="foto VIER" width="15%"/>
            </div>
       
<div class="flip-back">
    <h2>PRIMAVIERI</h2>
    <hr>
    <p>TEKNIK INFORMATIKA UDINUS 2022</p>
    <p>A11.2022.14557</p>
    <p>18 Tahun</p>
    <p>Semarang</p>
</div>
        </div>
    </div>


<!-- dncc -->
<div class="container">
<div class="card2">
	<img src="assets/img/DNCC.jpeg"  width="70%"   alt="">
</div>
</div>




<!-- enddncc -->
<!-- fia -->

<div class="card1">
        <div class="flipcard">
            <div class="flip-front">
            <img src="assets/img/FIA1.jpeg==" alt="foto fia" style="margin-left:-80px;" width="15%`
			+"/>
            </div>
       
<div class="flip-back">
    <h2>ALIFFIA</h2>
    <hr>
    
    <p>REKAM MEDIS UDINUS 2022</p>
    <p>D22.2022.03548</p>
    <p>18 Tahun</p>
    <p>Semarang</p>
    
</div>
        </div>
    </div>



<!-- endfia -->
</div>
</div>

</center>
<footer class="footer bg-dark p-3">
		<div class="container">
			<div class="row text-light">
				<div class="col-6 text-lg-start text-sm-start">
					Copyright © 2022 DailyCare. All Rights Reserved
				</div>
				<div class="col-6 text-lg-end text-sm-end">
					Privacy Policy Terms & Condition
				</div>
			</div>
		</div>
	</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>