<?php
include_once 'config.php';
include_once 'Database/index.php';
include_once 'Core/index.php';
include_once 'Controller/index.php';
?>




<?php include_once 'header.php' ?>

     <section>
          <div class="container">
               <div class="text-center">
                     <?php

                                        $page=GetPagesTable(2);
                                        
                                   ?>
                    <h1><?= $page['title'] ?></h1>

                    <br>

                    <p class="lead"><?= $page['description'] ?></p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
                  
                    <div class="col-lg-9 col-xs-12">
                         <div class="row">
                               <?php 
                                   $sql='SELECT * FROM posts INNER JOIN users ON posts.user_id=users.id ORDER BY post_id DESC';
                                   $posts=mysqli_query($conn,$sql);
                                   while ($row=mysqli_fetch_array($posts)) {

                              ?>

                              <div class="col-sm-6">
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
                                             <h3><a href="blog-post-details.html"><?= $row['title'] ?></a></h3>
                                        </div>

                                        <div class="courses-info">
                                              <a href="blog-post-details.php?id=<?= $row['post_id'] ?>" class="section-btn btn btn-primary btn-block">Devamını Oku</a>
                                     
                                        </div>
                                   </div>
                              </div>
                              <?php

                                   }
                              ?>
                            <!--   <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-2-720x480.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.html">Tempora molestiae, iste, consequatur unde sint praesentium!</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-3-720x480.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.html">A voluptas ratione, error provident distinctio, eaque id officia?</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-4-720x480.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-5-720x480.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.html">Tempora molestiae, iste, consequatur unde sint praesentium!</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="images/product-6-720x480.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.html">A voluptas ratione, error provident distinctio, eaque id officia?</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.html" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div> -->
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                    </div>
                    
                    <div class="modal-body">
                         <form action="#" id="contact-form">
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up location" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return location" required>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up date/time" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return date/time" required>
                                   </div>
                              </div>
                              <input type="text" class="form-control" placeholder="Enter full name" required>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter email address" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter phone" required>
                                   </div>
                              </div>
                         </form>
                    </div>

                    <div class="modal-footer">
                         <button type="button" class="section-btn btn btn-primary">Book Now</button>
                    </div>
               </div>
          </div>
     </div>



<?php include_once 'footer.php' ?>