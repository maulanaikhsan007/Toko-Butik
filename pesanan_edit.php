<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_pesanan WHERE kode='$id'");
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
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Edit Pesanan</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Jumlah</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtjumlah" value="<?php echo $data['jumlah'] ?>" class="form-control is-valid" placeholder="Input">
                      </div>
                </div>


                 <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">User Name </label>
                      <div class="col-sm-10">
                        <input type="text" name="txttotal" value="<?php echo $data['total'] ?>" class="form-control is-valid" placeholder="Input">
                      </div>
                </div>


                 
             <p align="right">   <input type="submit" name="btnedit" class="btn btn-primary" value="Ubah Data"> </p>
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                                  $txtjumlah=$_POST['txtjumlah'];
                                  $txttotal=$_POST['txttotal'];
                                
                  $edit = mysqli_query($konek,"UPDATE  tbl_pesanan SET jumlah='$txtjumlah',total='$txttotal' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($edit)){
                    ?>
                    <script type="text/javascript">
                      alert('Data Berhasil di Edit');
                      document.location.href="pesanan_add.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan Gagal";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>