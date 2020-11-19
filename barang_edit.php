<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_barang WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php">Home</a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Edit  Posting Barang</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">KATEGORI</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtkategori" value="<?php echo $data['kategori'] ?>" class="form-control is-valid" placeholder="Kategori Barang">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">NAMA BARANG</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtnama" value="<?php echo $data['nama'] ?>" class="form-control is-valid" placeholder="Nama Barang">
                      </div>
                </div>
                 
                  
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">HARGA</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtharga" value="<?php echo $data['harga'] ?>" class="form-control is-valid" placeholder="Harga">
                      </div>
                  </div>
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">GAMBAR</label>
                      <div class="col-sm-10">
                        <input type="file" name="txtgambar" class="form-control is-valid" value="<?php echo $data['gambar'] ?>" placeholder="Gambar">
                      </div>
                  </div>

                <input type="submit" name="btnedit" class="btn btn-primary" value="UPDATE BARANG">
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                                  $txtkategori =$_POST['txtkategori'];
                                  $txtnama =$_POST['txtnama'];                    
                                  $txtharga =$_POST['txtharga'];
                                  $nama_file   = $_FILES['txtgambar']['name'];
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                  $edit = mysqli_query($konek,"UPDATE  tbl_barang SET kategori='$txtkategori',nama='$txtnama',harga='$txtharga',gambar='$nama_file' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($lokasi_file)){
                    move_uploaded_file($lokasi_file, "img/product/$nama_file");

                    ?>

                    <script type="text/javascript">
                      document.location.href="barang_add.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>