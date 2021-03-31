<?php
include_once '../config.php';
include_once '../Database/index.php';
include_once '../Core/index.php';
include_once 'Controller/menu.php';
?>

<?php include_once 'header.php'; ?>
 <!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Menüler</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Menüler</li>
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
	                <h3 class="card-title">Menü Ekle</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              <form method="post" action="#">
	                <div class="card-body">
	              		<input type="hidden" name="action" value="create">
	                  <div class="form-group">
	                    <label for="exampleInputEmail1">Menü İsmi</label>
	                    <input type="text" class="form-control" id="name" name="name" placeholder="Menü Başlığı Giriniz">
	                  </div> 
	                   <div class="form-group">
	                    <label for="exampleInputEmail1">Menü Url</label>
	                    <input type="text" class="form-control" id="url" name="url" placeholder="Menü URL Giriniz">
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
	                <h3 class="card-title">Menüler</h3>
	              </div>
	              <!-- /.card-header -->
	              <div class="card-body p-0">
	                <table class="table table-striped">
	                  <thead>
	                    <tr>
	                      <th style="width: 10px">#</th>
	                      <th>İsim</th>
	                      <th>Url</th>
	                      <th style="width: 40px">İşlem</th>
	                    </tr>
	                  </thead>
	                  <tbody>

                         <?php 
                              $sql='SELECT * FROM menu';
                              $menu=mysqli_query($conn,$sql);
                              while ($row=mysqli_fetch_array($menu)) {

                         ?>

                         <tr>
		                      <td><?= $row['id'] ?></td>
		                      <td><?= $row['name'] ?></td>
		                      <td><a href="<?= $row['url'] ?>"><?= $row['url'] ?></a></td>
		                      <td>
		                      	<form method="post" action="#">
		                      		<input type="hidden" name="action" value="delete">
		                      		<input type="hidden" name="menu_id" value="<?= $row['id'] ?>">
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