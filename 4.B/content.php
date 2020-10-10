<!DOCTYPE html>
<html lang="en">
<head>
  <title>Content</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color : grey ";>
<?php
include 'koneksi.php';

  //Perintah Untuk Memasukkan Ke Data Base
  
  if(isset($_POST['simpan'])){
        
    $simpan = mysqli_query($koneksi, "INSERT INTO content (name_ct,video_link,type,id_cr) VALUES
                          ('$_POST[name_ct]','$_POST[video_link]','$_POST[type]','$_POST[id_cr]')");

    if (mysqli_affected_rows($koneksi)>0){
        echo    "<script>
            alert('INPUT SUKSES');
            document.location= 'content.php';
        </script>";
    } else {
        echo    "<script>
            alert('INPUT GAGAL !');
            document.location= 'content.php';
        </script>";
    }}
  ?>

  <div class="container" text-align="center">
  <br>
  	<div class="card-header bg-danger text-center text-white">
    DATA CONTENT </div><hr>
    <a href="#" type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"> Tambah Data + </a>
    <a href="home.php" type="button" class="btn btn-danger btn-xs"> Kembali </a><hr>
    <div class="card text-center mt-3">
   	<div class="card md-3  ">
		<table class="table table-hover table-striped table-bordered table-success">
		<thead>
			<tr>
				<th>ID Content</th>
				<th>Nama Content</th>
                <th>Link</th>
                <th>Type</th>
                <th>ID Course</th>
                <th>OPSI</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$tampil = mysqli_query($koneksi, "SELECT * from content  ");
       while ($data = mysqli_fetch_array($tampil)) :
      ?>
   	  <tr>
   		<th><?=$data['id']?></th>
        <th><?=$data['name_ct']?></th>
        <th><?=$data['video_link']?></th>
        <th><?=$data['type']?></th>
        <th><?=$data['id_cr']?></th>
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
                    <label>Nama Content</label>
                    <input type="text" name="name_ct"   class="form-control" placeholder="Input Nama Course" required="" value="<?=@$vname_ct?>">      
                  </div>
                  <div class="form-group">
                    <label>Link</label>
                    <input type="text" name="video_link"   class="form-control" placeholder="Input Link Course" required="" value="<?=@$vvideo_link?>"> 
                  </div>
                  <div class="form-group">
                    <label>Type</label>
                    <input type="text" name="type"   class="form-control" placeholder="Masukan Type" required="" value="<?=@$vtype?>">      
                  </div>
                  <div class="form-group">
                    <label>ID Course</label>
                    <input type="text" name="id_cr"   class="form-control" placeholder="Ingat ID Course Anda" required="" value="<?=@$vid_cr?>">
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