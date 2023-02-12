<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Planfortommorrow form</title>
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
      <center>
    <main id="main" style='margin:0 auto'>
      <div class='container'>
          <div class="form-row">

            <div class="form-group col-md-6">
                
              <label for="inputEmail4"> Full Name</label>
              <input readonly value='{{$name}}' class="form-control mb-3" id="inputEmail4" placeholder="Surname Middlename Firstname">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4"> Email Address</label>
              <input readonly value='{{$email}}' class="form-control mb-3" id="inputEmail4" placeholder="Surname Middlename Firstname">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4"> Image</label>
              <input readonly value='image' class="form-control mb-3" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Phone Number </label>
              <input readonly value='{{$phone}}' class="form-control mb-3" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State of Origin</label>
                <input readonly value='{{$state}}' class="form-control mb-3" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Category</label>
                <input readonly value='{{$category}}' class="form-control mb-3" id="inputEmail4" placeholder="Email">
              </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Residential Address</label>
              <input readonly value='{{$address}}' class="form-control mb-3" id="inputPassword4" placeholder="Residential Address">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Present Occupation</label>
              <input readonly value='{{$occupation}}' class="form-control mb-3" id="inputPassword4" placeholder="Residential Address">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">Guarantor's Name</label>
            <input readonly value='{{$guarantor_name}}' class="form-control mb-3" id="inputAddress">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress2">Guarantor's Phone Number</label>
            <input readonly value='{{$guarantor_number}}' class="form-control mb-3" id="inputAddress2">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">Gurantor's Address</label>
            <input readonly value='{{$guarantor_address}}' class="form-control mb-3" id="inputAddress">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress2">Guarantor Occupation</label>
            <input readonly value='{{$guarantor_occupation}}' class="form-control mb-3" id="inputAddress2">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">Driver Lincence</label>
            <input readonly value='driver_lincence'  class="form-control mb-3" id="inputCity">
          </div>

          <div class="form-group col-md-6">
            <div class="form-check">
              <input required class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label mb-4" for="gridCheck">
            ____________________  
            </label>
            </div>
          </div>
        </form>
    </main>
</center>



  </body>

</html>