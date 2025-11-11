<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>BOLTIMIZER</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/icons/boltimizer-logo_imresizer.png" rel="icon" type="image/x-icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100..900&family=Inter:wght@100..900&family=Nunito:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- PDF DOWNLOAD -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

  <!-- Carousel -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <img src="assets/img/boltimizer.png" alt="Boltimizer Logo" style="width: 300px; height: auto;">
      <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

      <nav id="navmenu" class="navmenu">
        <ul>
          <?php if ($currentPage == 'index.php'): ?>
            <li><a href="#hero" class="active"><b>Home</b></a></li>
            <!--<li><a href="#features"><b>Specialized Divisions</b></a></li>-->
            <li><a href="#about"><b>About</b></a></li>
            <li class="dropdown">
            <a href="#"><span><b>Innovations & Solutions</b></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              
              <li class="dropdown">
                <a href="jim.php"><b>JOINT INTEGRITY MANAGEMENT<i class="bi bi-chevron-down toggle-dropdown"></i></b></a>
                <ul>
                  <li><li><a href="hytorc.php"><b>SMART BOLTING SYSTEMS</b></a></li></li>
                  <li><li><a href="durapac.php"><b>LIFTING SYSTEMS</b></a></li></li>
                  <li><li><a href="https://boltsafe.com/"><b>LOAD MEASURING SYSTEM</b></a></li></li>
                  <li><li><a href="boltclean.php"><b>THREAD CLEANING SOLUTION</b></a></li></li>
                  <li><li><a href="https://www.protemusa.com/"><b>CUTTING AND BEVELING MACHINE</b></a></li></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="mmm.php"><b>MAINTENANCE MACHINERY <br> MANAGEMENT</b><i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><li><a href="https://www.egamaster.com/en"><b>INDUSTRIAL HAND TOOLS</b></a></li></li>
                  <li><li><a href="https://kentusa.com/"><b>MACHINE TOOLS (CNC,LATHE)</b></a></li></li>
                  <li><li><a href="https://www.hilmanrollers.com/"><b>HEAVY LOAD MOVING SOLUTIONS</b></a></li></li>
                  <li><li><a href="https://www.tavolgroup.com/"><b>HOIST AND CRANES</b></a></li></li>
                  <li><li><a href="https://www.jdngroup.com/"><b>PNEUMATIC HOIST</b></a></li></li>
                  <li><li><a href="http://www.jfcompressor.com/"><b>AIR COMPRESSOR</b></a></li></li>  
                </ul>
            </li>
              <li class="dropdown">
                <a href="ec.php"><b>ENGINEERING CONTROLS HAZARD</BR></b><i class="bi bi-chevron-down toggle-dropdown"></i></a> 
              <ul>
                  <li><li><a href="https://www.spilldoc.sg/"><b>SPILL CONTROL</b></a></li></li>
                  <li><li><a href="https://www.hiephoa.com.vn/en"><b>SPECIALIZED VEHICLE</b></a></li></li>
                  <li><li><a href="https://www.draeger.com/en-us_us/Home"><b>MEDICAL AND SAFETY SOLUTIONS</b></a></li></li>
                  <li><li><a href="https://www.tankersco.ph/about-us/"><b>OIL TANKERS</b></a></li></li>
                </ul>
                <li class="dropdown">
                  <a href="https://www.kratuz.net/"><b>SUSTAINABLE ENERGY SOLUTIONS</BR></b><i class="bi bi-chevron-down toggle-dropdown"></i></a> 
                    <ul>
                  <li><li><a href="hytorc.php"><b>KRATUZ ENERGY</b></a></li></li>
                 
                </ul>
                </li>
            </ul>
            </li>
            
          </li>
            <li><a href="#contact"><b>Contact</b></a></li>
          <?php else: ?>
            <li><a href="index.php#hero"><b>Home</b></a></li>
            <!--<li><a href="index.php#features"><b>Specialized Divisions</b></a></li>-->
            <li><a href="index.php#about"><b>About</b></a></li>
            <li class="dropdown">
            <a href="#"><span><b>Innovations & Solutions</b></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              
              <li class="dropdown">
                <a href="jim.php"><b>JOINT INTEGRITY MANAGEMENT<i class="bi bi-chevron-down toggle-dropdown"></i></b></a>
                <ul>
                  <li><li><a href="hytorc.php"><b>SMART BOLTING SYSTEMS</b></a></li></li>
                  <li><li><a href="durapac.php"><b>LIFTING SYSTEMS</b></a></li></li>
                  <li><li><a href="https://boltsafe.com/"><b>LOAD MEASURING SYSTEM</b></a></li></li>
                  <li><li><a href="boltclean.php"><b>THREAD CLEANING SOLUTION</b></a></li></li>
                  <li><li><a href="https://www.protemusa.com/"><b>CUTTING AND BEVELING MACHINE</b></a></li></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="mmm.php"><b>MAINTENANCE MACHINERY <br> MANAGEMENT</b><i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><li><a href="https://www.egamaster.com/en"><b>INDUSTRIAL HAND TOOLS</b></a></li></li>
                  <li><li><a href="https://kentusa.com/"><b>MACHINE TOOLS (CNC,LATHE)</b></a></li></li>
                  <li><li><a href="https://www.hilmanrollers.com/"><b>HEAVY LOAD MOVING SOLUTIONS</b></a></li></li>
                  <li><li><a href="https://www.tavolgroup.com/"><b>HOIST AND CRANES</b></a></li></li>
                  <li><li><a href="https://www.jdngroup.com/"><b>PNEUMATIC HOIST</b></a></li></li>
                  <li><li><a href="http://www.jfcompressor.com/"><b>AIR COMPRESSOR</b></a></li></li>  
                </ul>
            </li>
              <li class="dropdown">
                <a href="ec.php"><b>ENGINEERING CONTROLS HAZARD</BR></b><i class="bi bi-chevron-down toggle-dropdown"></i></a> 
              <ul>
                  <li><li><a href="https://www.spilldoc.sg/"><b>SPILL CONTROL</b></a></li></li>
                  <li><li><a href="https://www.hiephoa.com.vn/en"><b>SPECIALIZED VEHICLE</b></a></li></li>
                  <li><li><a href="https://www.draeger.com/en-us_us/Home"><b>MEDICAL AND SAFETY SOLUTIONS</b></a></li></li>
                  <li><li><a href="https://www.tankersco.ph/about-us/"><b>OIL TANKERS</b></a></li></li>
                </ul>
                <li class="dropdown">
                  <a href="https://www.kratuz.net/"><b>SUSTAINABLE ENERGY SOLUTIONS</BR></b><i class="bi bi-chevron-down toggle-dropdown"></i></a> 
                    <ul>
                  <li><li><a href="hytorc.php"><b>KRATUZ ENERGY</b></a></li></li>
                 
                </ul>
                </li>
            </ul>
            </li>
            
          </li>
            <li><a href="index.php#contact"><b>Contact</b></a></li>
          <?php endif; ?>

          

          <li>
            <label class="theme-switch">
              <input type="checkbox" id="toggleDarkMode" onchange="toggleDarkMode()" />
              <span class="slider">
                <i class="bi bi-brightness-high-fill sun-icon"></i>
                <i class="bi bi-moon-fill moon-icon"></i>
              </span>
            </label>
          </li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>
</body>

</html>