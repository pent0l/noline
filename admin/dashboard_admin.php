<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
    //melakukan pengalihan
    header("location:../login/login.php");
}
include "../layout/header.php";
include "../Konfig/koneksi.php";

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h4">Selamat Datang : <?php echo $_SESSION['nama_lengkap']; ?></h1>

    </div>

    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
    <div class="container">
  <div class="row">
    <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h1 class="card-title">Popularitas</h1>
            <h2 class="card-subtitle mb-2 text-muted">0</h2>
            <a href="#" class="card-link">performas > </a>
          </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h1 class="card-title">LIKE</h1>
            <h2 class="card-subtitle mb-2 text-muted">0</h2>
            <a href="#" class="card-link">performa ></a>
          </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h1 class="card-title">Comment</h1>
            <h2 class="card-subtitle mb-2 text-muted">0</h2>
            <a href="#" class="card-link">komentar > </a>
          </div>
        </div>
    </div>
  </div>
</div>
    

<div class="container">
<div class="row">
<div class="col-md-10 p-5 pt-2 ml-3" ></div>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link " href="#">Novelku /0</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Komikku /0 </a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title"> Belum Ada Karya Yang Di Terbitkan</h5>
    <a class="nav-link" href="genre.php">
  <span data-feather="users"><img src="../img/upload.jpeg"></span></i></a>
    <p class="card-text">ingin dapatkan pendapatan yang lebih baik</p>
    <a href="#" class="btn btn-primary"> Daftar Kontrak</a>
  </div>
</div>
</div>
</div>



                    
                    

</main>
<?php
include "../layout/footer.php";
?>