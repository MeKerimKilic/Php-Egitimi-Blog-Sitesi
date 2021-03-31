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

                                        $page=GetPagesTable(3);
                                        
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
                    <div class="col-md-offset-1 col-md-4 col-xs-12 pull-right">
                         <img src="images/about-1-720x720.jpg" class="img-responsive img-circle" alt="">
                    </div>

                    <div class="col-md-7 col-xs-12">
                         <div class="about-info">
                              <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, eos. Corporis, dolor?</h2>

                              <figure>
                                   <figcaption>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, deserunt beatae praesentium veniam. Aperiam assumenda quas qui officiis, minima laudantium?</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis saepe quos repellat eum tempore magnam molestiae. Minus atque, aliquid assumenda, vero non recusandae illum optio, sint dignissimos praesentium ducimus repudiandae eius, nulla. Pariatur magnam alias est voluptatibus distinctio voluptate culpa, iste quisquam! Iure itaque rerum sequi, tenetur voluptatibus nihil quaerat, quisquam non in autem ducimus tempore impedit. Odit, corporis, praesentium.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section>
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-xs-12">
                         <img src="images/about-2-720x720.jpg" class="img-responsive img-circle" alt="">
                    </div>

                    <div class="col-md-offset-1 col-md-7 col-xs-12">
                         <div class="about-info">
                              <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, minima!</h2>

                              <figure>
                                   <figcaption>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, deserunt beatae praesentium veniam. Aperiam assumenda quas qui officiis, minima laudantium?</p>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis saepe quos repellat eum tempore magnam molestiae. Minus atque, aliquid assumenda, vero non recusandae illum optio, sint dignissimos praesentium ducimus repudiandae eius, nulla. Pariatur magnam alias est voluptatibus distinctio voluptate culpa, iste quisquam! Iure itaque rerum sequi, tenetur voluptatibus nihil quaerat, quisquam non in autem ducimus tempore impedit. Odit, corporis, praesentium.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <div class="text-center">
                              <h2>Lorem ipsum dolor sit amet</h2>

                              <br>

                              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore molestias ipsa veritatis nihil iusto maiores natus dolor, a reiciendis corporis obcaecati ex. Totam assumenda impedit aut eum, illum distinctio saepe explicabo. Consequuntur molestiae similique id quos, quasi quas perferendis laboriosam, fugit natus odit totam! Id dolores saepe, sint debitis rerum dolorem tempora aliquid, pariatur enim nisi. Quia ab iusto assumenda.</p>
                         </div>
                    </div>
               </div>
          </div>
     </section>


<?php include_once 'footer.php' ?>