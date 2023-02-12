<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ogo Osupa Concept</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flexor - v4.3.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <style>
label {
  text-align:left;
  float:left;
}
    </style>
@include('sweetalert::alert')

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@ogoosupaconcept.com">contact@ogoosupaconcept.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+234 808 267 8077</span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="#about" class="scrollto">Get Started</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">O.O.M.C</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Our Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Advertisement</a></li>
              <li><a href="#">Gingle</a></li>
              <li><a href="#">Co-operative event</a></li>
              <!-- <li><a href="#"></a></li> -->
            </ul>
          </li>
          <!-- <li><a class="nav-link scrollto" href="#contact">Curriculum</a></li> -->
          <li><a class="nav-link scrollto " href="#planfortommorrow">Plan For Tommorrow</a></li>
          <li><a class="nav-link scrollto" href="/atonigba">Atonigba</a></li>
          <li><a class="nav-link scrollto" href="/grocery">Grocery</a></li>
          <li><a href="blog.html">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <body>
    <center>
    <main id="main" style='margin:0 auto'>
      <div class='container'>
      <label style='font-size:15px;color:red'>Please note that you need to visit our head office at No 4,beside Frontline Hotel,Oluwo Road, Onikolobo to complete your application</label><br>
          <!-- <div class='col-md-8'> -->
        <form method='post' action="{{Route('saveplanfortommorrowform')}}" enctype='multipart/form-data'>@csrf
          <div class="form-row">

            <div class="form-group col-md-6">
              <label for="inputEmail4"> Full Name</label>
              <input type="text" name='name' class="form-control mb-3" id="inputEmail4" placeholder="Surname Middlename Firstname">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4"> Email Address</label>
              <input type="text" name='email' class="form-control mb-3" id="inputEmail4" placeholder="Surname Middlename Firstname">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4"> Image</label>
              <input type="file" name='image' accept='image/*' class="form-control mb-3" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Phone Number </label>
              <input type="date" name='phone' class="form-control mb-3" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputState">State of Origin</label>
              <select name='state' id="inputState" class="form-control mb-3">
                <option selected>Choose...</option>
                <option value="Abia">Abia</option>
                <option value="Adamawa">Adamawa</option>
                <option value="Akwa Ibom">Akwa Ibom</option>
                <option value="Anambra">Anambra</option>
                <option value="Bauchi">Bauchi</option>
                <option value="Bayelsa">Bayelsa</option>
                <option value="Benue">Benue</option>
                <option value="Borno">Borno</option>
                <option value="Cross Rive">Cross River</option>
                <option value="Delta">Delta</option>
                <option value="Ebonyi">Ebonyi</option>
                <option value="Edo">Edo</option>
                <option value="Ekiti">Ekiti</option>
                <option value="Enugu">Enugu</option>
                <option value="FCT">Federal Capital Territory</option>
                <option value="Gombe">Gombe</option>
                <option value="Imo">Imo</option>
                <option value="Jigawa">Jigawa</option>
                <option value="Kaduna">Kaduna</option>
                <option value="Kano">Kano</option>
                <option value="Katsina">Katsina</option>
                <option value="Kebbi">Kebbi</option>
                <option value="Kogi">Kogi</option>
                <option value="Kwara">Kwara</option>
                <option value="Lagos">Lagos</option>
                <option value="Nasarawa">Nasarawa</option>
                <option value="Niger">Niger</option>
                <option value="Ogun">Ogun</option>
                <option value="Ondo">Ondo</option>
                <option value="Osun">Osun</option>
                <option value="Oyo">Oyo</option>
                <option value="Plateau">Plateau</option>
                <option value="Rivers">Rivers</option>
                <option value="Sokoto">Sokoto</option>
                <option value="Taraba">Taraba</option>
                <option value="Yobe">Yobe</option>
                <option value="Zamfara">Zamfara</option>

              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputState">Category</label>
              <select name='category' id="inputState" class="form-control mb-3">
                <option selected>Choose...</option>
                <option value='Bike'>Bike</option>
                <option value='Taxis'>Taxis</option>
                <option value='Trunk and Lorries'>Trunk and Lorries</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Residential Address</label>
              <input type="text" name='address' class="form-control mb-3" id="inputPassword4" placeholder="Residential Address">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Present Occupation</label>
              <input type="text" name='occupation' class="form-control mb-3" id="inputPassword4" placeholder="Residential Address">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">Guarantor's Name</label>
            <input type="text" name='guarantor_name' class="form-control mb-3" id="inputAddress">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress2">Guarantor's Phone Number</label>
            <input type="number" name='guarantor_number' class="form-control mb-3" id="inputAddress2">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">Gurantor's Address</label>
            <input type="text" name='guarantor_address' class="form-control mb-3" id="inputAddress">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress2">Guarantor Occupation</label>
            <input type="text" name='guarantor_occupation' class="form-control mb-3" id="inputAddress2">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">Driver Lincence</label>
            <input type="file" name='driver_lincence' class="form-control mb-3" id="inputCity">
          </div>

          <div class="form-group col-md-6">
            <div class="form-check">
              <input required class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label mb-4" for="gridCheck">
                Please confirm that you accept all <a href='#'>terms and conditions</a> supporting plan for tommorrow
             
              </label><br>
            </div>
            <button type="submit" class="btn btn-primary">Apply</button>
          </div>
        </form>

    </main><!-- End #main -->
</center>
    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>O.O.M.C</h3>
              <p>
                No 4, Beside Frontline Hotel,<br> Oluwo Road, Onikolobo,<br> Abeokuta
                Ogun State <br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> mail@ogoosupaconcept.com<br>
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/planfortommorrow">Plan for Tommorrow</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="/glocery">Grocery Stores</a></li>
                <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Success Story</a></li> -->
              </ul>
            </div>

            <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

            <div class="col-lg-4 co l-md-6 footer-newsletter">
              <h4>Join Our Newsletter</h4>
              <p>Subscribe and start getting daily notifications from us</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
            </div>

          </div>
        </div>
      </div>

      <div class="container d-lg-flex py-4">

        <div class="me-lg-auto text-center text-lg-start">
          <div class="copyright">
            &copy; Powered by<strong><a href='thecaretech.org'> Caretech</a></strong>. All Rights Reserved, 2021
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
          </div>
        </div>
        <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script>
      mediabtn = document.getElementById('mediabtn');
      mediadot = document.getElementById('mediadot');
      mediamore = document.getElementById('mediamore');

      btnmore = document.getElementById('btnmore');
      moredot = document.getElementById('moredot');
      moretext = document.getElementById('moretext');

      function moreMedia() {
        if (mediadot.style.display === 'none') {
          mediadot.style.display = 'inline';
          mediamore.style.display = 'none';
          mediabtn.innerHTML = 'Read More';
        } else {
          mediadot.style.display = 'none';
          mediamore.style.display = 'inline';
          mediabtn.innerHTML = 'Read Less';
        }
      }

      function moreMore() {
        if (moredot.style.display === 'none') {
          moredot.style.display = 'inline';
          moretext.style.display = 'none';
          btnmore.innerHTML = 'Read More';
        } else {
          moredot.style.display = 'none';
          moretext.style.display = 'inline';
          btnmore.innerHTML = 'Read Less';
        }
      }
    </script>
    <!-- AA0A27 -->
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


  </body>

</html>