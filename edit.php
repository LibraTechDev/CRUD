
<?php
//tambahdata
require_once __DIR__ . "/function.php";
if (isset($_GET['id_kegiatan'])){
    $id_kegiatan = $_GET ['id_kegiatan'];
    $data = ambilSatuData ($id_kegiatan)-> fetch();
} else {
    header("location: index.php");
}
 

if (isset($_POST['editData'])){
	$kegiatan_prima = $_POST ['kegiatan_prima'];
	$batas_waktu 	= $_POST ['batas_waktu'];

	editData($data['id_kegiatan'],$kegiatan_prima, $batas_waktu);

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
							<a class="nav-link text-uppercase fs-6 active" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-uppercase fs-6" href="index.php">About</a>
						</li>
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-uppercase fs-6 " href="#services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Services
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="index.php">To-Do List</a></li>
                              <li><a class="dropdown-item" href="index.php">Healthy Advices</a></li>
                            </ul>
                          </li>
						<li class="nav-item">
							<a class="nav-link text-uppercase fs-6" href="index.php">Profile</a>
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
    
	<div id="services" class="text-uppercase fw-bold fs-3 text-center p-5 mt-4" >
						<p>Edit Kegiatan</p>
					</div>
	<div class=" container card col-md-8  " id="todo">
        <div class="card-header bg-info ">
          Edit
        </div>
        <div class="card-body">
			<form action="" method="post">
			<div class="mb-3">
				<label for="kegiatan_prima" class="form-label">List Kegiatan</label>
				<input type="text" name="kegiatan_prima" class="form-control"  id="kegiatan_prima" value="<?php echo $data['nama_kegiatan'] ?>" required>
			</div>	
			<div class="mb-3">
  				<label for="batas_waktu" class="form-label">Batas Waktu</label>
  				<input type="date" name="batas_waktu"  class="form-control" id="batas_waktu" value="<?php echo $data['batas_waktu '] ?>"required>
			</div>  
			<button type="submit" name="editData" class="btn btn-primary">Edit</button>
			</form>
		</div>
      </div>

	  
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>