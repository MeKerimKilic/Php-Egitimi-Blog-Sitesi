<?php
include_once 'config.php';
include_once 'Database/index.php';
include_once 'Core/index.php';
include_once 'Controller/index.php';

{
if(empty($_GET['id']))
     header('Location: /');
}
$id=$_GET['id'];
$sql="SELECT * FROM posts INNER JOIN users ON posts.user_id=users.id WHERE posts.post_id=$id";
$posts=mysqli_query($conn,$sql);

if($posts->num_rows!=1){
     header('Location: /');
}
$posts=mysqli_fetch_array($posts);
$preview=intval($posts['preview'])+1; 
$sql="UPDATE posts SET preview=$preview WHERE post_id=$id";
mysqli_query($conn,$sql);
$date=date_create($posts['datetime']);


?>




<?php include_once 'header.php' ?>


 <section>
          <div class="container">
               <h2><?= $posts['title'] ?></h2>

               <p class="lead">
                    <i class="fa fa-user"></i> <?= $posts['full_name'] ?>
                    <i class="fa fa-calendar"></i> <?= date_format($date,"d/m/Y H:i:s") ?>
                    <i class="fa fa-eye"></i> <?= $preview ?>
               </p>

               <img src="<?= $posts['image'] ?>" class="img-responsive" alt="">

               <br>

              <?= $posts['content'] ?>
               
          </div>
     </section>

<?php include_once 'footer.php' ?>
