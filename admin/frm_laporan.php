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
        <h1 class="h4">Formulir Laporan </h1>

    </div>

   
    <div class="col">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h1 class="card-title">Laporan</h1>
          </div>
        </div>
    </div>

<div class="container">
<div class="row">
<div class="col-md-10 p-5 pt-2 ml-3" ></div>
<div class="card text-center">
   
   <h4>Laporan Pembaca</h4>
    <div class="table-responsive">
        <table class="table table-striped table-bordered display nowrap" id="example" style="width:100%">
            <thead class="table-light">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah Pembaca</th>
                    <th scope="col"> Jumlah Komentar</th>
                    <th scope="col">Jumlah Like</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

</div>
</div>


</main>
<?php
include "../layout/footer.php";
?>