<?php 
include'header.php'; ?>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #5593e9;
    color: white;
}
</style>

      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php">Home</a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Tambah Barang</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">KATEGORI</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtkategori" class="form-control is-valid" placeholder="Kategori Barang">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">NAMA BARANG</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtnama" class="form-control is-valid" placeholder="Nama Barang">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">HARGA</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtharga" class="form-control is-valid" placeholder="Harga Barang">
                      </div>
                  </div>
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">GAMBAR</label>
                      <div class="col-sm-10">
                        <input type="file" name="txtgambar"  placeholder="Gambar Barang">
                      </div>
                  </div>

                <input type="submit" name="btnsimpan" class="btn btn-primary" value="Tambah Barang">
                </div>
              </div>
          </div>
      </section> 
      </form>




                        <?php
                                if (isset($_POST["btnsimpan"])){
                                  //$txtkategori = mysql_real_escape_string($_POST['txtkategori']);
                                  $txtkategori =$_POST['txtkategori'];
                                  $txtnama =$_POST['txtnama'];
                                  $txtharga =$_POST['txtharga'];
                                  $nama_file   = $_FILES['txtgambar']['name'];
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                                $simpan = mysqli_query($konek,"INSERT INTO tbl_barang (kategori,nama,harga,gambar) VALUES ('$txtkategori','$txtnama','$txtharga','$nama_file')");
                                if(!empty($lokasi_file)){
                          move_uploaded_file($lokasi_file, "img/product/$nama_file");
                          echo "Data Berhasil di simpan";
                            ?>
                            <script type="text/javascript">
                            alert('Data Anda Berhasil di Simpan');
                            document.location.href="barang_add.php";
                            </script>
                          <?php
                          }
                        }
                      ?>



          
 <div class="col-md-12">

          <div class="box box-info">
            <div class="box-header with-border">
            </div>
            </div>
            </div>

            <div class="box-body no-padding">
          <div class="table-responsive">
              <table class="table table-striped">
                <tr>
                  <th width="5%">No</th>
                  <th>Kategori</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Gambar</th>
              
                  <th width="5%" colspan="2">Action</th>
                </tr>
                <?php
                    $no =1;
                      $qry = mysqli_query($konek,"SELECT * FROM tbl_barang");
                        while ($data=mysqli_fetch_array($qry)) {
                  ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['kategori']; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><?php echo $data['harga']; ?></td>
                  <td><?php echo $data['gambar']; ?></td>
              
                  <td><a href="barang_edit.php?id=<?php echo base64_encode($data['kode']); ?>" class="fa fa-edit"></td>
                 <td> <a href="barang_hapus.php.?id=<?php echo $data['kode']; ?>" class="fa fa-times"></td>
                </tr>
                <?php } ?>

              </table>
</div>
            </div>
          </div>
          </div>


<?php include'footer.php'; ?>