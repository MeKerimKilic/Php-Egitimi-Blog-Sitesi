<?php
include_once '../config.php';
include_once '../Database/index.php';
include_once '../Core/index.php';
include_once 'Controller/users.php';
?>



<?php include_once 'header.php'; ?>
 <!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kullanıcılar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/index.php">Anasayfa</a></li>
              <li class="breadcrumb-item active">Kullanıcılar</li>
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
	                <h3 class="card-title">Kullanıcı Düzenle</h3>
	              </div>
	              <!-- /.card-header -->
	              <!-- form start -->
	              <form method="post" action="#">
	                <div class="card-body">
	              		<input type="hidden" name="action" value="update">
	              		 <div class="form-group">
	                    <label for="exampleInputEmail1">Kullanıcı</label>
	                   <select class="form-control" id="user_id" name="user_id">
	                   	<option value="">Kullanıcı Seçiniz</option>
	                   	  <?php 
                              $sql='SELECT * FROM users';
                              $menu=mysqli_query($conn,$sql);
                              while ($row=mysqli_fetch_array($menu)) {

                         ?>
	                   			<option value="<?= $row['id'] ?>"><?= $row['full_name'] ?></option>
	                   	<?php

	                   		}

	                   	 ?>
	                   </select>

	                  
	                  </div> 
	                  <div class="form-group">
	                    <label for="exampleInputEmail1">Kullanıcı İsmi</label>
	                    <input type="text" class="form-control" id="full_name" name="full_name">
	                  </div> 
	                   <div class="form-group">
	                    <label for="exampleInputEmail1">Kullanıcı Şifresi</label>
	                    <input type="password" class="form-control" id="password" name="password">
	                  </div> 
	                   <div class="form-group">
	                    <label for="exampleInputEmail1">Kullanıcı Maili</label>
	                    <input type="text" class="form-control" id="email" name="email">
	                  </div> 
	                   <div class="form-group">
	                    <label for="exampleInputEmail1">Kullanıcı Maili</label>
	                     <select class="form-control" id="role" name="role">
	                    	<option value="">Role Seçin</option>
	                    	<option value="-1">Yönetici</option>
	                    	<option value="1">Moderatör</option>
	                    	<option value="2">Kullanıcı</option>
	                    </select>
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
	                      <th>İsim Soyisim</th>
	                      <th>Email</th>
	                      <th>Yetki</th>
	                      <th style="width: 40px">İşlem</th>
	                    </tr>
	                  </thead>
	                  <tbody>

                         <?php 
                              $sql='SELECT * FROM users';
                              $users=mysqli_query($conn,$sql);
                              while ($row=mysqli_fetch_array($users)) {
                         ?>

                         <tr>
		                      <td><?= $row['id'] ?></td>
		                      <td><?= $row['full_name'] ?></td>
		                      <td><?= $row['email'] ?></td>
		                      <?php
		                      $role="Kullanıcı";
		                      if($row['role']==0){
 								$role="Yönetici";
		                      }else if($row['role']==1){
		                      	$role="Moderatör";
		                      }
		                      ?>
		                      <td><?= $role ?></td>
		                      <td>
		                      	<form method="post" action="#">
		                      		<input type="hidden" name="action" value="delete">
		                      		<input type="hidden" name="user_id" value="<?= $row['id'] ?>">
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