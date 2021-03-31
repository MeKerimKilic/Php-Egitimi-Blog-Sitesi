<?php
include_once 'config.php';
include_once 'Database/index.php';
include_once 'Core/index.php';
include_once 'Controller/index.php';
?>


<?php include_once 'header.php'; ?>

     <!-- HOME -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">

                         <?php 
                              $i=1;
                              $sql='SELECT * FROM slider';
                              $slider=mysqli_query($conn,$sql);
                              while ($row=mysqli_fetch_array($slider)) {

                         ?>

                              <div class="item" style="background-image: url(<?= $row['image_url'] ?>); <?= ($i==1)? 'background-position: center;':''; ?>">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1><?= $row['title'] ?></h1>
                                        <h3><?= $row['description'] ?></h3>
                                        <a href="<?= $row['button_url'] ?>" class="section-btn btn btn-default"><?= $row['button_text'] ?></a>
                                   </div>
                              </div>
                         </div>
                    </div>
                         <?php 
                              $i+=1;
                              }

                         ?>
               </div>
          </div>
     </section>

     <main>
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">
                                   <?php

                                        $page=GetPagesTable(1);
                                        
                                   ?>
                                   <h2><?= $page['title'] ?></h2>

                                   <br>

                                   <p class="lead"><?= $page['description'] ?></p>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Latest Blog posts <small>Lorem ipsum dolor sit amet.</small></h2>
                              </div>
                         </div>
                         <?php 
                              $sql='SELECT * FROM posts INNER JOIN users ON posts.user_id=users.id ORDER BY post_id DESC LIMIT 3';
                              $posts=mysqli_query($conn,$sql);
                              while ($row=mysqli_fetch_array($posts)) {

                         ?>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="<?= $row['image'] ?>" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i><?= $row['full_name'] ?></span>
                                             <?php $date=date_create($row['datetime']); ?>
                                             <span title="Date"><i class="fa fa-calendar"></i><?= date_format($date,"d/m/Y H:i:s") ?></span>
                                             <span title="Views"><i class="fa fa-eye"></i> <?= $row['preview'] ?></span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="blog-post-details.php"><?= $row['title'] ?></a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="blog-post-details.php?id=<?= $row['post_id'] ?>" class="section-btn btn btn-primary btn-block">Devamını Oku</a>
                                   </div>
                              </div>
                         </div>
<?php 
                              }

                         ?>
                     
                    </div>
               </div>
          </section>
     </main>

     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>İletişim</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="İsim Soyisim giriniz" name="name" required>
                    
                                   <input type="email" class="form-control" placeholder="Email Adresinizi Giriniz" name="email" required>

                                   <textarea class="form-control" rows="6" placeholder="Mesajınız" name="message" required></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Mesajı Gönder">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/contact-1-600x400.jpg" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>  


<?php include_once 'footer.php'; ?>