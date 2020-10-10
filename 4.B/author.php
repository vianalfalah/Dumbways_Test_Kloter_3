<!DOCTYPE html>
<html lang="en">
<head>
  <title>Author</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color : grey ";>
<?php
include 'koneksi.php';

  //Perintah Untuk Memasukkan Ke Data Base
  
  if(isset($_POST['submit_u'])){
        
    $simpan = mysqli_query($koneksi, "INSERT INTO author (name_at) VALUES
                          ('$_POST[name_at]')");

    if (mysqli_affected_rows($koneksi)>0){
        echo    "<script>
            alert('INPUT SUKSES');
            document.location= 'author.php';
        </script>";
    } else {
        echo    "<script>
            alert('INPUT GAGAL !');
            document.location= 'author.php';
        </script>";
    }}
  ?>

  <div class="container" text-align="center">
  <br>
  	<div class="card-header bg-danger text-center text-white">
    DATA AUTHOR </div><hr>
    <a href="#" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"> Tambah Data + </a>
    <a href="home.php" type="button" class="btn btn-danger btn-xs"> Kembali </a><hr>
    <div class="card text-center mt-3">
   	<div class="card md-3  ">
		<table class="table table-hover table-striped table-bordered table-success">
		<thead>
			<tr>
				<th>ID Author</th>
				<th>Nama Author</th>
        <th>OPSI</th>	
			</tr>
		</thead>
		<tbody>
			<?php 
			$tampil = mysqli_query($koneksi, "SELECT * from author");
       while ($data = mysqli_fetch_array($tampil)) :
      ?>
   	  <tr>
   		  <th><?=$data['id_at']?></th>
        <th><?=$data['name_at']?></th>
   		  <td>
         <a href="#" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit<?php echo $data['name_at']; ?>">Edit</a>
   			<a onclick="return confirm('Anda Yakin?');" href="index.php?hal=hapus_user&idu=<?=$data['id_u']?>" class="btn btn-danger">Delete</a>
        </td>
		  </tr>
		  <?php endwhile; ?>
		</tbody>
	  </table>
   
	  </div></div>
           
            <!-- Input Author -->
            <div class="modal fade" id="myModal"  data-backdrop="static" >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Isikan Data Sesuai Keterangan</h4>
                  </div>
            <div class="modal-body">
              <form role="form" action="" method="post">
                <input type="hidden" name="id_u" value="">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name_at"   class="form-control" placeholder="Input Nama Author" required="" value="<?=@$vname_at?>">      
                  </div>
                  <div class="modal-footer">  
                    <button type="submit" class="btn btn-success" name="submit_u">Submit</button>
                    <button type="reset" class="btn btn-danger" name="reset_u">Clear</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                       
              </form>
                  </div>
                </div>
               </div>
              </div>
            </div>
 

      
           
</body>
  
 
</html>