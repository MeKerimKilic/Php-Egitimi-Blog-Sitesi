<?php
include_once '../config.php';
include_once '../Database/index.php';
include_once '../Core/index.php';
include_once 'Controller/pages.php';
?>

<?php include_once 'header.php'; ?>
 <!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sayfalar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Sayfalar</li>
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
	                <h3 class="card-title">Sayfa Düzenle</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              <form method="post" action="#">
	                <div class="card-body">
              		<input type="hidden" name="action" value="update">
	                  <div class="form-group">
	                    <label for="exampleInputEmail1">Sayfa</label>
	                   <select class="form-control" id="page" name="page">
	                   	<option value="">Sayfa Seçiniz</option>
	                   	  <?php 
                              $sql='SELECT * FROM menu';
                              $menu=mysqli_query($conn,$sql);
                              while ($row=mysqli_fetch_array($menu)) {

                         ?>
	                   			<option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
	                   	<?php

	                   		}

	                   	 ?>
	                   </select>

	                  
	                  </div> 
	                   <div class="form-group">
	                    <label for="exampleInputEmail1">Sayfa Başlığı</label>
	                    <input type="text" class="form-control" id="title" name="title" placeholder="Sayfa Başlığı Giriniz">
	                  </div> 
	                   <div class="form-group">
	                    <label for="exampleInputEmail1">Sayfa Açıklaması</label>
	                    <textarea class="form-control" id="description" name="description" rows="5"></textarea>
	                  </div> 
	                </div>
	                <!-- /.card-body -->
	                <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Güncelle</button>
	                </div>
	              </form>
	            </div>
	            <!-- /.card -->
	            <div class="card">
	              <div class="card-header">
	                <h3 class="card-title">Menüler</h3>
	              </div>
	              <!-- /.card-header -->
	              <div class="card-body p-0">
	                <table class="table table-striped">
	                  <thead>
	                    <tr>
	                      <th style="width: 10px">#</th>
	                      <th>Başlık</th>
	                      <th>Açıklama</th>
	                      <th>Sayfa</th>
	                      <th style="width: 40px">İşlem</th>
	                    </tr>
	                  </thead>
	                  <tbody>

                         <?php 
                              $sql='SELECT * FROM pages INNER JOIN menu ON pages.page=menu.id';
                              $menu=mysqli_query($conn,$sql);
                              while ($row=mysqli_fetch_array($menu)) {

                         ?>

                         <tr>
		                      <td><?= $row['page_id'] ?></td>
		                      <td><?= $row['title'] ?></td>
		                      <td><?= $row['description'] ?></a></td>
		                      <td><?= $row['name'] ?></a></td>
		                      <td>
		                      	<form method="post" action="#">
		                      		<input type="hidden" name="action" value="delete">
		                      		<input type="hidden" name="page_id" value="<?= $row['page_id'] ?>">
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