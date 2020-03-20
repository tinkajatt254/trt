<!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.co.uk</a></li>
          <li><i class="icofont-phone"></i> +1 5589 55488 55</li>
          <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Mon-Sat 9am - 5pm</li>
        </ul>

      </div>
      <div class="cta">
        <a data-toggle="modal" data-target="#myModal" class="scrollto">Get Price</a>
      </div>
    </div>
  </section>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Who You Are?</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
            <form class="form-group" method="post">
                <table>
                    <tr>
                        <td> <input class="form-control" type="text" name="cname" placeholder="your name" required> </td>
                    </tr>

                    <tr>
                        <td> <input class="form-control" type="email" name="cemail" placeholder="your email" required> </td>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-control" name="ctype">
                                <option value="0">select</option>
                                <option value="0">Whole Seller</option>
                                <option value="0">Distributer</option>
                                <option value="0">Suppler</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td> <input style="margin-top: 20px;" type="submit" name="client" class="btn btn-success" value="submit"> </td>
                    </tr>
                </table>
            </form>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>TonyRockwellTools</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="index.php?page=about">About</a></li>
          <li><a href="#services">Categories</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->