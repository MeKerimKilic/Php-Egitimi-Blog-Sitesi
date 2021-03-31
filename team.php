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

                                        $page=GetPagesTable(4);
                                        
                                   ?>
                    <h1><?= $page['title'] ?></h1>

                    <br>

                    <p class="lead"><?= $page['description'] ?></p>
               </div>
          </div>
     </section>

     <section id="team" class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/author-image-1-646x680.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>John Doe</h3>
                                   <span>CEO</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/author-image-2-646x680.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Jane Doe</h3>
                                   <span>CTO</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-google"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/author-image-3-646x680.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Beky Fox</h3>
                                   <span>Marketing Expert</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   <li><a href="#" class="fa fa-linkedin"></a></li>
                              </ul>
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/author-image-4-646x680.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Daniel Smith</h3>
                                   <span>Customer Support</span>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-google"></a></li>
                                   <li><a href="#" class="fa fa-behance"></a></li>
                              </ul>
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