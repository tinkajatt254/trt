<?php

	$pid = ucfirst($_GET["cid"]);

?>

<div class="ptop">

	<h2> <?php echo $pid . " Instruments";?> </h2>

</div>

<main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title"> This is <?php echo $pid;?> instrument page </h2>
            <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="">
              <img src="assets/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
              <img src="assets/img/portfolio/portfolio-details-3.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Product information</h3>
            <ul>
              <li><strong>Category</strong>: <?php echo $pid;?></li>
              <li><strong>Name</strong>: <?php echo $pid;?> Instrument</li>
              <li><strong>cat #</strong>: 70-001</li>
              <li><strong>Share</strong>: <a href="#">www.trt.com</a></li>
            </ul>

            <p>
            	<h3>Description</h3>
              Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->