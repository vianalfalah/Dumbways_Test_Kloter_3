<!DOCTYPE html>
<html>
<head>
<title>4B Dumbways Kloter 3</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body  style= " background-color : grey ;">

<div class="container " text-align="center" >
<br><h1 align="center" class="text-white"> COURSE </h1><hr/ color="white">
<a href="author.php" class="btn btn-success btn-lg">Data Author </a>
<a href="course.php" class="btn btn-success btn-lg">Data Course</a>
<a href="content.php" class="btn btn-success btn-lg">Data Content </a><br><br><br>
<?php 
include 'koneksi.php';
   		$tampil = mysqli_query($koneksi, "SELECT * from course INNER JOIN author ON author.id_at = course.id_cr");
        while ($data = mysqli_fetch_array($tampil)) : ?>
          
          <div class="container">
              <div class="row" style=" background-color : white;">
                  <div class="col-md-3">
            
</div>
</div></div>

<div class="panel panel-default">

    <div class="panel-heading post-thumb">
        <img class="img img-responsive" src="img/<?=$data['thumbnail']?>" />
    </div>

    <div class="panel-body post-body">
        <a class="label label-default" ><?=$data['name_cr']?></a>
        <h3 class="post-title">
        <p ><?=substr($data['description'],0,200)?>....</p>
        </h3>

        <div class="post-author">
        <p><?=$data['name_at']?></p>
            <a href="detail.php" class="btn btn-info btn-sm">Detail</a>
        </div>
    </div>

</div>

        
        
         



    <?php endwhile; ?>
    
    </div>
</body>
</html>
