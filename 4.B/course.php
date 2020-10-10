<!DOCTYPE html>
<html lang="en">
<head>
  <title>Course</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color : grey ";>
<?php
include 'koneksi.php';

  //Perintah Untuk Memasukkan Ke Data Base
  
  if(isset($_POST['simpan'])){
    
    $id_cr = $_POST['id_cr'];
    $name_cr = $_POST['name_cr'];
    $thumbnail = $_FILES['thumbnail']['name'];
   
    $duration = $_POST['duration'];
    $description = $_POST['description'];
    $source = $_FILES['thumbnail']['tmp_name'];
    $folder = './img/';
    
    
    move_uploaded_file($source, $folder.$thumbnail);
    $simpan = mysqli_query($koneksi, "INSERT INTO course VALUES ('$id_cr','$name_cr','$thumbnail','$duration','$description')");

    if($simpan){
        echo    "<script>
            alert('INPUT SUKSES');
            document.location= 'course.php';
        </script>";
    } else {
        echo    "<script>
            alert('INPUT GAGAL !');
            document.location= 'course.php';
        </script>";
    
    }
     }
  ?>

  <div class="container" text-align="center">
  <br>
  	<div class="card-header bg-danger text-center text-white">
    DATA COURSE </div><hr>
    <a href="#" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"> Tambah Data + </a>
    <a href="home.php" type="button" class="btn btn-danger btn-xs"> Kembali </a><hr>
    <div class="card text-center mt-3">
   	<div class="card md-3  ">
		<table class="table table-hover table-striped table-bordered table-success">
		<thead>
			<tr>
				<th>ID Course</th>
				<th>Nama Course</th>
                <th>Gambar</th>	
                <th>Durasi</th>
                <th>Deskripsi</th>
                <th>OPSI</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$tampil = mysqli_query($koneksi, "SELECT * from course");
       while ($data = mysqli_fetch_array($tampil)) :
      ?>
   	  <tr>
   		<th><?=$data['id_cr']?></th>
        <th><?=$data['name_cr']?></th>
        <th><img src="img/<?=$data['thumbnail']; ?>" width="70" height="90"></th>
        <th><?=$data['duration']?></th>
        <th><?=substr($data['description'],0,200)?>....</th>
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
              <form role="form" action="" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_cr" value="<?php echo $row['id_cr']; ?>">
                
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name_cr"   class="form-control" placeholder="Input Nama Course" required="" value="<?=@$vname_cr?>">      
                  </div>
                  <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="thumbnail" >      
                  </div>
                  <div class="form-group">
                    <label>Durasi</label>
                    <input type="text" name="duration"   class="form-control" placeholder="Masukan Lama Durasi" required="" value="<?=@$vduration?>">      
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label><br>
                    <textarea rows="5" cols="50" class="span12" name="description"   class="form-control" placeholder="" required="" value="<?=@$vdescription?>"></textarea>
                  </div>

                  <div class="modal-footer">  
                    <button type="submit" class="btn btn-success" name="simpan">Submit</button>
                    <button type="reset" class="btn btn-danger" name="reset">Clear</button>
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