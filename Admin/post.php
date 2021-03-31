<?php
include_once '../config.php';
include_once '../Database/index.php';
include_once '../Core/index.php';
include_once 'Controller/post.php';
?>

<?php include_once 'header.php'; ?>
<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Post</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Post</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

	    <!-- Main content -->
	    <section class="content">
	      <div class="container-fluid">
	        <div class="row">
	         
	          <div class="col-md-12">
	           
  <!-- general form elements -->
	            <div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title">Post Ekle</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              <form method="post" action="#" enctype="multipart/form-data">
	                <div class="card-body">
	              		<input type="hidden" name="action" value="create">

	              		  <div class="form-group">
	                    <label for="exampleInputEmail1">Postlar</label>
	                   <select class="form-control" id="post_id" name="post_id">
	                   	<option value="">Yeni Post Ekle</option>
	                   	  <?php 
                              $sql='SELECT * FROM posts';
                              $menu=mysqli_query($conn,$sql);
                              while ($row=mysqli_fetch_array($menu)) {

                         ?>
	                   			<option value="<?= $row['post_id'] ?>"><?= $row['title'] ?></option>
	                   	<?php

	                   		}

	                   	 ?>
	                   </select>

	                  
	                  </div> 
	                  <div class="form-group">
	                    <label for="exampleInputEmail1">Başlık</label>
	                    <input type="text" class="form-control" id="title" name="title" placeholder="Post Başlığı Giriniz">
	                  </div> 
	                  <div class="form-group">
	                    <label for="exampleInputEmail1">Yazı</label>
	                    <textarea type="text" class="form-control" id="content" name="content" placeholder="Post Yazınızı Giriniz"></textarea>
	                  </div> 
                    <div class="form-group">
	                    <label for="exampleInputEmail1">Resim</label>
	                    <input type="file" class="form-control" id="image" accept="image/*" name="image" placeholder="Resim Seçiniz">
	                  </div> 
	                </div>
	                <!-- /.card-body -->
	                <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Ekle</button>
	                </div>
	              </form>
	            </div>
	            <!-- /.card -->
	            <div class="card">
	              <div class="card-header">
	                <h3 class="card-title">Postlar</h3>
	              </div>
	              <!-- /.card-header -->
	              <div class="card-body p-0">
	                <table class="table table-striped">
	                  <thead>
	                    <tr>
                      	<th style="width: 10px">#</th>
                      	<th>Başlık</th>
                      	<th>Yazı</th>
                  	 	<th>Resim</th>
                        <th>Görüntülenme</th>
                     	<th>Yazar</th>
                     	<th>Tarih</th>
                      	<th style="width: 40px">İşlem</th>
	                    </tr>
	                  </thead>
	                  <tbody>

                         <?php 
                              $sql='SELECT * FROM posts INNER JOIN users ON posts.user_id=users.id';
                              $posts=mysqli_query($conn,$sql);
                              while ($row=mysqli_fetch_array($posts)) {

                         ?>

                         <tr>
		                      <td><?= $row['post_id'] ?></td>
		                      <td><?= $row['title'] ?></td>
		                      <td><?= $row['content'] ?></td>
		                       <td><img src="<?= $row['image'] ?>" width="250px" ></td>

		                      <td><?= $row['preview'] ?> Kişi Görüntüledi</td>
		                      <td><?= $row['full_name'] ?></td>
		                      <?php $date=date_create($row['datetime']); ?>
		                      <td><?= date_format($date,"d/m/Y H:i:s") ?></td>
		                      <td>
		                      	<form method="post" action="#">
		                      		<input type="hidden" name="action" value="delete">
		                      		<input type="hidden" name="post_id" value="<?= $row['post_id'] ?>">
		                      		<button class="btn btn-block btn-danger" type="submit">Sil</button>
		                      	</form>
		                      </td>
	                    </tr>
                         <?php 
                              }

                         ?>
	                    
	                  </tbody>
	                </table>
	              </div>
	              <!-- /.card-body -->
	            </div>
	            <!-- /.card -->
	           
	          </div>
	          <!-- /.col -->
	        </div>
	        <!-- /.row -->
	      </div><!-- /.container-fluid -->
	    </section>
	    <!-- /.content -->
	</div>







<?php include_once 'footer.php'; ?>